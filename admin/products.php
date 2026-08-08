<?php

require_once dirname(__DIR__) . '/includes/admin-auth.php';

renderView('admin/placeholder', [
    'pageTitle' => 'Products',
    'moduleTitle' => 'Products',
    'moduleStatus' => 'Product management foundation is ready.',
], 'admin');
