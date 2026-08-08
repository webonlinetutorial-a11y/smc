<?php

require_once dirname(__DIR__) . '/includes/admin-auth.php';

$controller = new AdminController();
$data = $controller->dashboard();

renderView('admin/dashboard', $data, 'admin');
