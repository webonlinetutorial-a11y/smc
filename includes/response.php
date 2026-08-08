<?php

function sendHtml(string $html, int $statusCode = 200): void
{
    http_response_code($statusCode);
    header('Content-Type: text/html; charset=UTF-8');

    echo $html;
}

function sendJson(array $payload, int $statusCode = 200): void
{
    http_response_code($statusCode);
    header('Content-Type: application/json; charset=UTF-8');

    echo json_encode($payload, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}

function abortRequest(int $statusCode = 404, string $message = 'Page not found.'): never
{
    http_response_code($statusCode);
    echo e($message);
    exit;
}
