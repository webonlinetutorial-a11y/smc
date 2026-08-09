<?php

require_once dirname(__DIR__) . '/includes/admin-auth.php';

$controller = new SettingsController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->update();
}

$data = $controller->edit();

if (isset($_SESSION['settings_form'])) {
    $data['settings'] = array_merge($data['settings'], $_SESSION['settings_form']);
    unset($_SESSION['settings_form']);
}

if (isset($_SESSION['settings_errors'])) {
    $data['errors'] = $_SESSION['settings_errors'];
    unset($_SESSION['settings_errors']);
}

renderView('admin/settings', $data, 'admin');
