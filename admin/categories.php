<?php

require_once dirname(__DIR__) . '/includes/admin-auth.php';

renderView('admin/placeholder', [
    'pageTitle' => 'Categories',
    'moduleTitle' => 'Categories',
    'moduleStatus' => 'Category management foundation is ready.',
], 'admin');
