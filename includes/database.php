<?php

function databaseConnection(): PDO
{
    static $connection = null;

    if ($connection instanceof PDO) {
        return $connection;
    }

    $host = (string) configValue('database.host', '127.0.0.1');
    $port = (int) configValue('database.port', 3306);
    $database = (string) configValue('database.database', '');
    $charset = (string) configValue('database.charset', 'utf8mb4');
    $username = (string) configValue('database.username', '');
    $password = (string) configValue('database.password', '');

    $dsn = sprintf('mysql:host=%s;port=%d;dbname=%s;charset=%s', $host, $port, $database, $charset);

    $connection = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);

    return $connection;
}
