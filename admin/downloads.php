<?php

require_once dirname(__DIR__) . '/includes/admin-auth.php';

renderView('admin/placeholder', [
    'pageTitle' => 'Downloads',
    'moduleTitle' => 'Downloads',
    'moduleStatus' => 'Download management foundation is ready.',
], 'admin');
