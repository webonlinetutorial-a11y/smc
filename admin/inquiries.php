<?php

require_once dirname(__DIR__) . '/includes/admin-auth.php';

renderView('admin/placeholder', [
    'pageTitle' => 'Inquiries',
    'moduleTitle' => 'Inquiries',
    'moduleStatus' => 'Inquiry management foundation is ready.',
], 'admin');
