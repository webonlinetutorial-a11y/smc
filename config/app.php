<?php

return [
    'name' => envValue('APP_NAME', 'Bharat Mill Website'),
    'env' => envValue('APP_ENV', 'production'),
    'debug' => envBool('APP_DEBUG', false),
    'url' => rtrim((string) envValue('APP_URL', 'http://localhost/nepack-website'), '/'),
    'timezone' => envValue('APP_TIMEZONE', 'Asia/Kolkata'),
];
