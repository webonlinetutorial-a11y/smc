<?php

function isRequired(mixed $value): bool
{
    return trim((string) $value) !== '';
}

function isValidEmail(mixed $value): bool
{
    return filter_var($value, FILTER_VALIDATE_EMAIL) !== false;
}

function hasMinLength(mixed $value, int $length): bool
{
    return mb_strlen(trim((string) $value)) >= $length;
}

function isWithinLength(mixed $value, int $maxLength): bool
{
    return mb_strlen(trim((string) $value)) <= $maxLength;
}
