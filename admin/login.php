<?php

require_once dirname(__DIR__) . '/includes/bootstrap.php';

$controller = new AuthController();

if (isPostRequest()) {
    $controller->login();
}

$controller->showLogin();
