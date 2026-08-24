<?php

return [
    'enabled' => envBool('MAIL_ENABLED', false),
    'host' => envValue('MAIL_HOST', ''),
    'port' => (int) envValue('MAIL_PORT', 587),
    'encryption' => strtolower((string) envValue('MAIL_ENCRYPTION', 'tls')),
    'username' => envValue('MAIL_USERNAME', ''),
    'password' => envValue('MAIL_PASSWORD', ''),
    'from_address' => envValue('MAIL_FROM_ADDRESS', envValue('MAIL_USERNAME', '')),
    'from_name' => envValue('MAIL_FROM_NAME', envValue('APP_NAME', 'Nepack Website')),
    'to_address' => envValue('MAIL_TO_ADDRESS', envValue('MAIL_FROM_ADDRESS', envValue('MAIL_USERNAME', ''))),
];
