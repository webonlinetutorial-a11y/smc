<?php

return [
    'session_name' => envValue('SESSION_NAME', 'nepack_session'),
    'session_lifetime' => 7200,
    'session_secure' => isHttpsRequest(),
    'session_http_only' => true,
    'session_same_site' => 'Lax',
];
