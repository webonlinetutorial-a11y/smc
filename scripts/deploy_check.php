<?php

declare(strict_types=1);

$rootPath = dirname(__DIR__);
$results = [];

function addDeployResult(array &$results, string $name, bool $passed, string $detail): void
{
    $results[] = [
        'name' => $name,
        'passed' => $passed,
        'detail' => $detail,
    ];
}

function containsText(string $path, string $needle): bool
{
    return is_file($path) && str_contains((string) file_get_contents($path), $needle);
}

function requiredFilesExist(string $rootPath, array $files): array
{
    $missing = [];

    foreach ($files as $file) {
        if (!is_file($rootPath . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $file))) {
            $missing[] = $file;
        }
    }

    return $missing;
}

function requiredDirectoriesExist(string $rootPath, array $directories): array
{
    $missing = [];

    foreach ($directories as $directory) {
        if (!is_dir($rootPath . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $directory))) {
            $missing[] = $directory;
        }
    }

    return $missing;
}

function runCommand(string $command): array
{
    exec($command, $output, $exitCode);

    return [$exitCode, implode(PHP_EOL, $output)];
}

$requiredFiles = [
    '.env.example',
    '.env.production.example',
    '.gitignore',
    '.htaccess',
    'composer.json',
    'index.php',
    'products.php',
    'brands.php',
    'downloads.php',
    'gallery.php',
    'contact-us.php',
    'search.php',
    'sitemap.php',
    'robots.php',
    'uploads/.htaccess',
    'database/migrations/001_create_auth_tables.sql',
    'database/migrations/002_create_settings_table.sql',
    'database/migrations/003_create_media_files_table.sql',
    'database/migrations/004_create_categories_table.sql',
    'database/migrations/005_create_remaining_cms_tables.sql',
    'database/seeds/create_admin.php',
    'scripts/qa_check.php',
];

$missingFiles = requiredFilesExist($rootPath, $requiredFiles);
addDeployResult(
    $results,
    'Required release files',
    $missingFiles === [],
    $missingFiles === [] ? 'All required release files are present.' : 'Missing: ' . implode(', ', $missingFiles)
);

$uploadDirectories = [
    'uploads/brands',
    'uploads/gallery',
    'uploads/pdfs',
    'uploads/products',
    'uploads/sliders',
    'uploads/temp',
    'uploads/testimonials',
];
$missingDirectories = requiredDirectoriesExist($rootPath, $uploadDirectories);
addDeployResult(
    $results,
    'Upload directory layout',
    $missingDirectories === [],
    $missingDirectories === [] ? 'All required upload directories are present.' : 'Missing: ' . implode(', ', $missingDirectories)
);

$rootHtaccess = $rootPath . DIRECTORY_SEPARATOR . '.htaccess';
addDeployResult(
    $results,
    'Protected application paths',
    containsText($rootHtaccess, 'RewriteRule ^(app|config|database|documentation|includes|logs|routes|storage|vendor)(/|$) - [F,L]'),
    'Root .htaccess blocks direct web access to protected application directories.'
);
addDeployResult(
    $results,
    'Sensitive file protection',
    containsText($rootHtaccess, '.env') && containsText($rootHtaccess, 'composer') && containsText($rootHtaccess, 'Require all denied'),
    'Root .htaccess blocks common sensitive files.'
);
addDeployResult(
    $results,
    'Upload script protection',
    containsText($rootPath . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . '.htaccess', '<FilesMatch')
        && containsText($rootPath . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . '.htaccess', 'Require all denied'),
    'uploads/.htaccess blocks dangerous executable upload extensions.'
);

$gitignore = $rootPath . DIRECTORY_SEPARATOR . '.gitignore';
addDeployResult(
    $results,
    'Runtime files excluded from Git',
    containsText($gitignore, '.env') && containsText($gitignore, 'logs/*') && containsText($gitignore, 'storage/cache/*') && containsText($gitignore, 'database/backups/*'),
    '.gitignore excludes local environment, logs, cache, sessions, and database backups.'
);

$appConfig = $rootPath . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'app.php';
addDeployResult(
    $results,
    'Production-safe app defaults',
    containsText($appConfig, "envValue('APP_ENV', 'production')") && containsText($appConfig, "envBool('APP_DEBUG', false)"),
    'APP_ENV and APP_DEBUG defaults are production-safe when .env is missing.'
);

$productionEnv = (string) file_get_contents($rootPath . DIRECTORY_SEPARATOR . '.env.production.example');
addDeployResult(
    $results,
    'Production env template',
    str_contains($productionEnv, 'APP_ENV=production')
        && str_contains($productionEnv, 'APP_DEBUG=false')
        && str_contains($productionEnv, 'APP_URL=https://')
        && str_contains($productionEnv, 'DB_PASSWORD=change-this-password'),
    '.env.production.example includes production mode, HTTPS URL, and database placeholders.'
);

$phase8 = $rootPath . DIRECTORY_SEPARATOR . 'documentation' . DIRECTORY_SEPARATOR . 'implementation' . DIRECTORY_SEPARATOR . '08_Testing_Optimization.md';
$phase9 = $rootPath . DIRECTORY_SEPARATOR . 'documentation' . DIRECTORY_SEPARATOR . 'implementation' . DIRECTORY_SEPARATOR . '09_Production_Deployment.md';
addDeployResult(
    $results,
    'Previous phase completed',
    containsText($phase8, '| Document Status | Completed |') && containsText($phase8, 'scripts/qa_check.php') && containsText($phase8, 'PHP syntax lint passed'),
    'Testing Optimization documentation is completed with QA evidence.'
);
addDeployResult(
    $results,
    'Deployment documentation present',
    is_file($phase9),
    'Production Deployment documentation exists for release sign-off.'
);

[$qaExitCode, $qaOutput] = runCommand(escapeshellarg(PHP_BINARY) . ' ' . escapeshellarg($rootPath . DIRECTORY_SEPARATOR . 'scripts' . DIRECTORY_SEPARATOR . 'qa_check.php'));
addDeployResult(
    $results,
    'Phase 8 QA suite',
    $qaExitCode === 0,
    $qaExitCode === 0 ? 'QA suite passed.' : 'QA suite failed: ' . $qaOutput
);

$failed = array_values(array_filter($results, static fn (array $result): bool => !$result['passed']));

echo 'Nepack Deployment Readiness Check' . PHP_EOL;
echo str_repeat('=', 33) . PHP_EOL;

foreach ($results as $result) {
    echo ($result['passed'] ? '[PASS] ' : '[FAIL] ') . $result['name'] . PHP_EOL;
    echo '       ' . $result['detail'] . PHP_EOL;
}

echo PHP_EOL;
echo $failed === []
    ? 'Result: PASS - Release is ready for Hostinger deployment preparation.' . PHP_EOL
    : 'Result: FAIL - Resolve failed deployment readiness checks before release.' . PHP_EOL;

exit($failed === [] ? 0 : 1);
