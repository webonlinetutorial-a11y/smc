<?php

require_once dirname(__DIR__) . '/includes/admin-auth.php';

$controller = new MediaController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->upload();
}

$data = $controller->index();

if (isset($_SESSION['media_form'])) {
    $data['form'] = array_merge($data['form'], $_SESSION['media_form']);
    unset($_SESSION['media_form']);
}

if (isset($_SESSION['media_errors'])) {
    $data['errors'] = $_SESSION['media_errors'];
    unset($_SESSION['media_errors']);
}

renderView('admin/media', $data, 'admin');
