<?php

function startAppSession(): void
{
    if (session_status() === PHP_SESSION_ACTIVE) {
        return;
    }

    $sessionName = (string) configValue('security.session_name', 'nepack_session');
    $sessionLifetime = (int) configValue('security.session_lifetime', 7200);
    $sessionPath = STORAGE_PATH . DIRECTORY_SEPARATOR . 'sessions';

    if (is_dir($sessionPath) && is_writable($sessionPath)) {
        session_save_path($sessionPath);
    }

    session_name($sessionName);
    session_set_cookie_params([
        'lifetime' => $sessionLifetime,
        'path' => '/',
        'domain' => '',
        'secure' => (bool) configValue('security.session_secure', false),
        'httponly' => (bool) configValue('security.session_http_only', true),
        'samesite' => (string) configValue('security.session_same_site', 'Lax'),
    ]);

    session_start();
}
