<?php

require_once __DIR__ . '/constants.php';
require_once INCLUDES_PATH . DIRECTORY_SEPARATOR . 'functions.php';

loadEnvFile(ROOT_PATH . DIRECTORY_SEPARATOR . '.env');

$GLOBALS['config'] = [
    'app' => require CONFIG_PATH . DIRECTORY_SEPARATOR . 'app.php',
    'database' => require CONFIG_PATH . DIRECTORY_SEPARATOR . 'database.php',
    'mail' => require CONFIG_PATH . DIRECTORY_SEPARATOR . 'mail.php',
    'security' => require CONFIG_PATH . DIRECTORY_SEPARATOR . 'security.php',
];

date_default_timezone_set((string) configValue('app.timezone', 'Asia/Kolkata'));

require_once INCLUDES_PATH . DIRECTORY_SEPARATOR . 'error-handler.php';
require_once INCLUDES_PATH . DIRECTORY_SEPARATOR . 'session.php';
require_once INCLUDES_PATH . DIRECTORY_SEPARATOR . 'database.php';
require_once INCLUDES_PATH . DIRECTORY_SEPARATOR . 'view.php';
require_once INCLUDES_PATH . DIRECTORY_SEPARATOR . 'response.php';

spl_autoload_register(static function (string $className): void {
    $paths = [
        APP_PATH . DIRECTORY_SEPARATOR . 'controllers' . DIRECTORY_SEPARATOR . $className . '.php',
        APP_PATH . DIRECTORY_SEPARATOR . 'models' . DIRECTORY_SEPARATOR . $className . '.php',
        APP_PATH . DIRECTORY_SEPARATOR . 'services' . DIRECTORY_SEPARATOR . $className . '.php',
    ];

    foreach ($paths as $path) {
        if (is_file($path)) {
            require_once $path;
            return;
        }
    }
});

foreach (glob(APP_PATH . DIRECTORY_SEPARATOR . 'helpers' . DIRECTORY_SEPARATOR . '*_helper.php') ?: [] as $helperFile) {
    require_once $helperFile;
}

registerErrorHandling();
startAppSession();
