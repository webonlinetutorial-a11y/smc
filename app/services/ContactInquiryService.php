<?php

class ContactInquiryService extends BaseService
{
    private const STATUSES = ['new', 'in_progress', 'resolved', 'archived'];

    private ContactInquiry $inquiryModel;
    private SmtpMailerService $mailerService;

    public function __construct(?ContactInquiry $inquiryModel = null, ?SmtpMailerService $mailerService = null)
    {
        $this->inquiryModel = $inquiryModel ?? new ContactInquiry();
        $this->mailerService = $mailerService ?? new SmtpMailerService();
    }

    public function latest(): array
    {
        return $this->inquiryModel->latest();
    }

    public function submit(array $input): bool
    {
        $this->errors = [];
        $productName = sanitizeString($input['product_name'] ?? '');
        $countryCode = sanitizeString($input['country_code'] ?? '');
        $address = sanitizeString($input['address'] ?? '');
        $state = sanitizeString($input['state'] ?? '');
        $city = sanitizeString($input['city'] ?? '');
        $pincode = sanitizeString($input['pincode'] ?? '');
        $locationParts = array_filter([$address, $city, $state, $pincode], static fn (string $part): bool => $part !== '');
        $location = sanitizeString($input['location'] ?? implode(', ', $locationParts));
        $message = sanitizeString($input['message'] ?? '');

        if ($productName !== '') {
            $message = trim('Product: ' . $productName . "\n" . $message);
        }

        $data = [
            'inquiry_type' => sanitizeString($input['inquiry_type'] ?? 'general'),
            'visitor_name' => sanitizeString($input['visitor_name'] ?? ''),
            'email' => sanitizeEmail($input['email'] ?? ''),
            'phone' => trim($countryCode . ' ' . sanitizeString($input['phone'] ?? '')),
            'location' => $location,
            'message' => $message,
            'product_id' => sanitizeInt($input['product_id'] ?? 0) ?: null,
            'brand_id' => sanitizeInt($input['brand_id'] ?? 0) ?: null,
            'document_id' => sanitizeInt($input['document_id'] ?? 0) ?: null,
            'source_page' => sanitizeString($input['source_page'] ?? currentPath()),
            'product_name' => $productName,
            'country_code' => $countryCode,
        ];

        if (!isRequired($data['visitor_name'])) {
            $this->addError('Name is required.');
        }

        if (!isValidEmail($data['email'])) {
            $this->addError('A valid email is required.');
        }

        if (!hasMinLength($data['message'], 10)) {
            $this->addError('Message must be at least 10 characters.');
        }

        if ($this->hasErrors()) {
            return false;
        }

        try {
            $this->inquiryModel->create([
                'inquiry_type' => $data['inquiry_type'],
                'visitor_name' => $data['visitor_name'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'location' => $data['location'],
                'message' => $data['message'],
                'product_id' => $data['product_id'],
                'brand_id' => $data['brand_id'],
                'document_id' => $data['document_id'],
                'source_page' => $data['source_page'],
            ]);
            $this->mailerService->sendInquiryNotification($data);
        } catch (Throwable $exception) {
            error_log($exception);
            $this->addError('Inquiry could not be submitted. Please try again.');
            return false;
        }

        return true;
    }

    public function updateStatus(int $id, string $status, ?int $userId): bool
    {
        $this->errors = [];
        $status = sanitizeString($status);

        if (!in_array($status, self::STATUSES, true)) {
            $this->addError('Choose a valid inquiry status.');
            return false;
        }

        try {
            $this->inquiryModel->updateStatus($id, $status, $userId);
        } catch (Throwable $exception) {
            error_log($exception);
            $this->addError('Inquiry status could not be updated.');
            return false;
        }

        return true;
    }
}
