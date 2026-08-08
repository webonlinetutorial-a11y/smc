<?php

require_once dirname(__DIR__) . '/includes/admin-auth.php';

renderView('admin/placeholder', [
    'pageTitle' => 'SEO',
    'moduleTitle' => 'SEO',
    'moduleStatus' => 'SEO management foundation is ready.',
], 'admin');
