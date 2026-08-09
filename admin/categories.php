<?php

require_once dirname(__DIR__) . '/includes/admin-auth.php';

$controller = new CategoryController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->handlePost();
}

$data = $controller->index();

if (isset($_SESSION['category_form'])) {
    $data['form'] = array_merge($data['form'], $_SESSION['category_form']);
    unset($_SESSION['category_form']);
}

if (isset($_SESSION['category_errors'])) {
    $data['errors'] = $_SESSION['category_errors'];
    unset($_SESSION['category_errors']);
}

renderView('admin/categories', $data, 'admin');
