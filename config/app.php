<?php

return [
    'name' => envValue('APP_NAME', 'Nepack Website'),
    'env' => envValue('APP_ENV', 'local'),
    'debug' => envBool('APP_DEBUG', true),
    'url' => rtrim((string) envValue('APP_URL', 'http://localhost/nepack-website'), '/'),
    'timezone' => envValue('APP_TIMEZONE', 'Asia/Kolkata'),
];
