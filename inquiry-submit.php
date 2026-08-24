<?php

require_once __DIR__ . '/includes/bootstrap.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    sendJson(['success' => false, 'message' => 'Invalid request method.'], 405);
    exit;
}

if (!verifyCsrfToken((string) ($_POST['csrf_token'] ?? ''))) {
    sendJson(['success' => false, 'message' => 'Your session expired. Please refresh and try again.'], 419);
    exit;
}

$service = new ContactInquiryService();

if (!$service->submit($_POST)) {
    sendJson([
        'success' => false,
        'message' => implode(' ', $service->errors()),
    ], 422);
    exit;
}

sendJson([
    'success' => true,
    'message' => 'Thank you. Your enquiry has been submitted.',
]);
exit;
