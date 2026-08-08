<?php

return [
    'host' => envValue('DB_HOST', '127.0.0.1'),
    'port' => (int) envValue('DB_PORT', 3306),
    'database' => envValue('DB_DATABASE', 'nepack_website'),
    'username' => envValue('DB_USERNAME', 'root'),
    'password' => envValue('DB_PASSWORD', ''),
    'charset' => envValue('DB_CHARSET', 'utf8mb4'),
];
