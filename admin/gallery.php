<?php

require_once dirname(__DIR__) . '/includes/admin-auth.php';

renderView('admin/placeholder', [
    'pageTitle' => 'Gallery',
    'moduleTitle' => 'Gallery',
    'moduleStatus' => 'Gallery management foundation is ready.',
], 'admin');
