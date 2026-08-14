<?php

function loadEnvFile(string $path): void
{
    if (!is_file($path) || !is_readable($path)) {
        return;
    }

    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lines as $line) {
        $line = trim($line);

        if ($line === '' || str_starts_with($line, '#') || !str_contains($line, '=')) {
            continue;
        }

        [$key, $value] = explode('=', $line, 2);
        $key = trim($key);
        $value = trim($value);

        if ($key === '') {
            continue;
        }

        $value = trim($value, "\"'");
        $_ENV[$key] = $value;
        putenv($key . '=' . $value);
    }
}

function envValue(string $key, mixed $default = null): mixed
{
    $value = $_ENV[$key] ?? getenv($key);

    if ($value === false || $value === null || $value === '') {
        return $default;
    }

    return $value;
}

function envBool(string $key, bool $default = false): bool
{
    $value = envValue($key, null);

    if ($value === null) {
        return $default;
    }

    return filter_var($value, FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE) ?? $default;
}

function configValue(string $key, mixed $default = null): mixed
{
    $segments = explode('.', $key);
    $value = $GLOBALS['config'] ?? [];

    foreach ($segments as $segment) {
        if (!is_array($value) || !array_key_exists($segment, $value)) {
            return $default;
        }

        $value = $value[$segment];
    }

    return $value;
}

function assetUrl(string $path): string
{
    $normalizedPath = str_replace('\\', '/', ltrim($path, '/'));
    $encodedPath = implode('/', array_map(static function (string $segment): string {
        return rawurlencode(rawurldecode($segment));
    }, explode('/', $normalizedPath)));
    $url = appUrl('assets/' . $encodedPath);
    $filePath = ASSETS_PATH . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, rawurldecode($normalizedPath));

    if (is_file($filePath)) {
        $url .= '?v=' . filemtime($filePath);
    }

    return $url;
}

function appUrl(string $path = ''): string
{
    $baseUrl = rtrim((string) configValue('app.url', ''), '/');
    $path = ltrim($path, '/');

    if ($path === '') {
        return $baseUrl;
    }

    [$pathOnly, $queryString] = array_pad(explode('?', $path, 2), 2, '');
    $path = publicPathAliases()[$pathOnly] ?? $pathOnly;

    return $baseUrl . '/' . $path . ($queryString !== '' ? '?' . $queryString : '');
}

function resolvePublicPathAlias(string $path): string
{
    $path = ltrim($path, '/');
    $aliases = publicPathAliases();
    $resolved = array_search($path, $aliases, true);

    return $resolved === false ? $path : $resolved;
}

function e(mixed $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function isHttpsRequest(): bool
{
    $https = $_SERVER['HTTPS'] ?? '';
    $forwardedProto = $_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '';

    return $https === 'on' || $https === '1' || strtolower($forwardedProto) === 'https';
}
