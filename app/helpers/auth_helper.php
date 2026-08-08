<?php

function isAuthenticated(): bool
{
    return isset($_SESSION['auth']['user_id']) && (int) $_SESSION['auth']['user_id'] > 0;
}

function currentUser(): ?array
{
    return isAuthenticated() ? $_SESSION['auth'] : null;
}

function requireAuth(): void
{
    if (isAuthenticated()) {
        return;
    }

    redirectTo('/admin/login.php');
}

function setFlash(string $key, string $message): void
{
    $_SESSION['flash'][$key] = $message;
}

function consumeFlash(string $key): ?string
{
    $message = $_SESSION['flash'][$key] ?? null;
    unset($_SESSION['flash'][$key]);

    return $message;
}

function isPostRequest(): bool
{
    return strtoupper((string) ($_SERVER['REQUEST_METHOD'] ?? 'GET')) === 'POST';
}
