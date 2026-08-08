<?php

function escapeHtml(mixed $value): string
{
    return e($value);
}

function escapeAttribute(mixed $value): string
{
    return e($value);
}

function escapeUrl(mixed $value): string
{
    return filter_var((string) $value, FILTER_SANITIZE_URL);
}
