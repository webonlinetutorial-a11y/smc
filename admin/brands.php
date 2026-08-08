<?php

require_once dirname(__DIR__) . '/includes/admin-auth.php';

renderView('admin/placeholder', [
    'pageTitle' => 'Brands',
    'moduleTitle' => 'Brands',
    'moduleStatus' => 'Brand management foundation is ready.',
], 'admin');
