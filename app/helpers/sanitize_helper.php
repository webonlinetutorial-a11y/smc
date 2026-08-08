<?php

function sanitizeString(mixed $value): string
{
    return trim(strip_tags((string) $value));
}

function sanitizeEmail(mixed $value): string
{
    return filter_var(trim((string) $value), FILTER_SANITIZE_EMAIL);
}

function sanitizeInt(mixed $value): int
{
    return (int) filter_var($value, FILTER_SANITIZE_NUMBER_INT);
}

function sanitizeSlug(mixed $value): string
{
    $slug = strtolower(trim((string) $value));
    $slug = preg_replace('/[^a-z0-9-]+/', '-', $slug) ?? '';

    return trim($slug, '-');
}
