<?php

require_once dirname(__DIR__) . '/includes/admin-auth.php';

renderView('admin/placeholder', [
    'pageTitle' => 'Users',
    'moduleTitle' => 'Users',
    'moduleStatus' => 'User management foundation is ready.',
], 'admin');
