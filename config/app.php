<?php

return [
    'name' => envValue('APP_NAME', 'Indian Mill Stores Website'),
    'env' => envValue('APP_ENV', 'production'),
    'debug' => envBool('APP_DEBUG', false),
    'url' => rtrim((string) envValue('APP_URL', 'http://localhost/indian-mill'), '/'),
    'timezone' => envValue('APP_TIMEZONE', 'Asia/Kolkata'),
];
