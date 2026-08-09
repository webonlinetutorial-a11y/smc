<?php

require_once dirname(__DIR__) . '/includes/admin-auth.php';

$controller = new InquiryController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->adminUpdateStatus();
}

renderView('admin/inquiries', $controller->adminIndex(), 'admin');
