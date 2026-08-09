<?php

class ContactInquiryService extends BaseService
{
    private const STATUSES = ['new', 'in_progress', 'resolved', 'archived'];

    private ContactInquiry $inquiryModel;

    public function __construct(?ContactInquiry $inquiryModel = null)
    {
        $this->inquiryModel = $inquiryModel ?? new ContactInquiry();
    }

    public function latest(): array
    {
        return $this->inquiryModel->latest();
    }

    public function submit(array $input): bool
    {
        $this->errors = [];
        $data = [
            'inquiry_type' => sanitizeString($input['inquiry_type'] ?? 'general'),
            'visitor_name' => sanitizeString($input['visitor_name'] ?? ''),
            'email' => sanitizeEmail($input['email'] ?? ''),
            'phone' => sanitizeString($input['phone'] ?? ''),
            'location' => sanitizeString($input['location'] ?? ''),
            'message' => sanitizeString($input['message'] ?? ''),
            'product_id' => sanitizeInt($input['product_id'] ?? 0) ?: null,
            'brand_id' => sanitizeInt($input['brand_id'] ?? 0) ?: null,
            'document_id' => sanitizeInt($input['document_id'] ?? 0) ?: null,
            'source_page' => sanitizeString($input['source_page'] ?? currentPath()),
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
            $this->inquiryModel->create($data);
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
