<?php

function currentPath(): string
{
    $uri = (string) ($_SERVER['REQUEST_URI'] ?? $_SERVER['SCRIPT_NAME'] ?? '/');
    $path = parse_url($uri, PHP_URL_PATH);

    if ($path === false || $path === null || $path === '') {
        return '/';
    }

    $basePath = parse_url((string) configValue('app.url', ''), PHP_URL_PATH) ?: '';

    if ($basePath !== '' && str_starts_with($path, $basePath)) {
        $path = substr($path, strlen($basePath)) ?: '/';
    }

    return $path;
}

function redirectTo(string $path, int $statusCode = 302): never
{
    if (preg_match('/^https?:\/\//i', $path) === 1) {
        $baseUrl = (string) configValue('app.url', '');

        if (!str_starts_with($path, $baseUrl)) {
            $path = '/';
        }
    }

    header('Location: ' . appUrl($path), true, $statusCode);
    exit;
}

function isActivePath(string $path): bool
{
    return rtrim(currentPath(), '/') === rtrim($path, '/');
}

function formatFileSize(int $bytes): string
{
    if ($bytes >= 1048576) {
        return number_format($bytes / 1048576, 1) . ' MB';
    }

    if ($bytes >= 1024) {
        return number_format($bytes / 1024, 1) . ' KB';
    }

    return $bytes . ' B';
}
