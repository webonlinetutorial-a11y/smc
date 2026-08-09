<?php

class InquiryController extends BaseController
{
    private ContactInquiryService $inquiryService;

    public function __construct(?ContactInquiryService $inquiryService = null)
    {
        $this->inquiryService = $inquiryService ?? new ContactInquiryService();
    }

    public function adminIndex(): array
    {
        return [
            'pageTitle' => 'Inquiries',
            'inquiries' => $this->inquiryService->latest(),
            'errors' => [],
        ];
    }

    public function adminUpdateStatus(): never
    {
        if (!verifyCsrfToken((string) ($_POST['csrf_token'] ?? ''))) {
            setFlash('error', 'Your session expired. Please try again.');
            $this->redirect('/admin/inquiries.php');
        }

        if ($this->inquiryService->updateStatus(sanitizeInt($_POST['inquiry_id'] ?? 0), (string) ($_POST['status'] ?? ''), currentAdminUserId())) {
            setFlash('success', 'Inquiry status updated.');
        } else {
            setFlash('error', implode(' ', $this->inquiryService->errors()));
        }

        $this->redirect('/admin/inquiries.php');
    }

    public function publicSubmit(): array
    {
        $errors = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!verifyCsrfToken((string) ($_POST['csrf_token'] ?? ''))) {
                $errors[] = 'Your session expired. Please try again.';
            } elseif ($this->inquiryService->submit($_POST)) {
                setFlash('success', 'Thank you. Your inquiry has been submitted.');
                redirectTo('/contact-us.php');
            } else {
                $errors = $this->inquiryService->errors();
            }
        }

        return ['errors' => $errors, 'form' => $_POST];
    }
}
