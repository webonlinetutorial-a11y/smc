<?php

function registerErrorHandling(): void
{
    $debug = (bool) configValue('app.debug', false);

    ini_set('display_errors', $debug ? '1' : '0');
    ini_set('log_errors', '1');
    ini_set('error_log', LOGS_PATH . DIRECTORY_SEPARATOR . 'php-error.log');
    error_reporting(E_ALL);

    set_exception_handler(static function (Throwable $exception) use ($debug): void {
        error_log($exception);
        http_response_code(500);

        if ($debug) {
            echo '<pre>' . e($exception) . '</pre>';
            return;
        }

        echo 'Something went wrong. Please try again later.';
    });
}
