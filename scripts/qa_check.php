<?php

declare(strict_types=1);

$rootPath = dirname(__DIR__);
$results = [];

function collectFiles(string $rootPath, string $extension): array
{
    $files = [];
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($rootPath, FilesystemIterator::SKIP_DOTS));

    foreach ($iterator as $file) {
        if (!$file instanceof SplFileInfo || !$file->isFile()) {
            continue;
        }

        $path = $file->getPathname();

        if (str_contains($path, DIRECTORY_SEPARATOR . '.git' . DIRECTORY_SEPARATOR)) {
            continue;
        }

        if (strtolower($file->getExtension()) === strtolower($extension)) {
            $files[] = $path;
        }
    }

    sort($files);

    return $files;
}

function relativePath(string $rootPath, string $path): string
{
    return ltrim(str_replace($rootPath, '', $path), DIRECTORY_SEPARATOR);
}

function addResult(array &$results, string $name, bool $passed, string $detail): void
{
    $results[] = [
        'name' => $name,
        'passed' => $passed,
        'detail' => $detail,
    ];
}

function fileContains(string $path, string $needle): bool
{
    return is_file($path) && str_contains((string) file_get_contents($path), $needle);
}

function runPhpLint(string $rootPath): array
{
    $failures = [];

    foreach (collectFiles($rootPath, 'php') as $file) {
        $command = escapeshellarg(PHP_BINARY) . ' -l ' . escapeshellarg($file);
        exec($command, $output, $exitCode);

        if ($exitCode !== 0) {
            $failures[] = relativePath($rootPath, $file);
        }
    }

    return $failures;
}

function referencedAssetPaths(string $rootPath): array
{
    $assets = [];
    $patterns = [
        '/assetUrl\([\'"]([^\'"]+)[\'"]\)/',
        '/appUrl\([\'"]\/?assets\/([^\'"]+)[\'"]\)/',
    ];

    foreach (collectFiles($rootPath, 'php') as $file) {
        $contents = (string) file_get_contents($file);

        foreach ($patterns as $pattern) {
            if (preg_match_all($pattern, $contents, $matches)) {
                foreach ($matches[1] as $asset) {
                    $assets[] = str_replace(['/', '\\'], DIRECTORY_SEPARATOR, $asset);
                }
            }
        }
    }

    return array_values(array_unique($assets));
}

function cssBraceBalance(string $rootPath): array
{
    $issues = [];

    foreach (collectFiles($rootPath . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . 'css', 'css') as $file) {
        $contents = (string) file_get_contents($file);
        $open = substr_count($contents, '{');
        $close = substr_count($contents, '}');

        if ($open !== $close) {
            $issues[] = relativePath($rootPath, $file) . " ({$open}/{$close})";
        }
    }

    return $issues;
}

$lintFailures = runPhpLint($rootPath);
addResult(
    $results,
    'PHP syntax lint',
    $lintFailures === [],
    $lintFailures === [] ? 'All PHP files pass php -l.' : 'Failures: ' . implode(', ', $lintFailures)
);

$missingAssets = [];
foreach (referencedAssetPaths($rootPath) as $asset) {
    if (!is_file($rootPath . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . $asset)) {
        $missingAssets[] = 'assets/' . str_replace(DIRECTORY_SEPARATOR, '/', $asset);
    }
}
addResult(
    $results,
    'Referenced assets',
    $missingAssets === [],
    $missingAssets === [] ? 'All static assetUrl references exist.' : 'Missing: ' . implode(', ', $missingAssets)
);

$cssIssues = cssBraceBalance($rootPath);
addResult(
    $results,
    'CSS brace balance',
    $cssIssues === [],
    $cssIssues === [] ? 'All CSS files have balanced braces.' : 'Issues: ' . implode(', ', $cssIssues)
);

$rootHtaccess = $rootPath . DIRECTORY_SEPARATOR . '.htaccess';
$uploadsHtaccess = $rootPath . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . '.htaccess';
addResult(
    $results,
    'Routing and cache rules',
    fileContains($rootHtaccess, 'sitemap.php') && fileContains($rootHtaccess, 'robots.php') && fileContains($rootHtaccess, 'ExpiresActive On'),
    'Root .htaccess includes sitemap, robots, and static cache rules.'
);
addResult(
    $results,
    'Upload execution protection',
    fileContains($uploadsHtaccess, 'php_flag engine off')
        || fileContains($uploadsHtaccess, 'Deny from all')
        || (fileContains($uploadsHtaccess, '<FilesMatch') && fileContains($uploadsHtaccess, 'Require all denied')),
    'uploads/.htaccess blocks script execution or unsafe access.'
);

$seoPath = $rootPath . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'seo.php';
addResult(
    $results,
    'SEO metadata rendering',
    fileContains($seoPath, 'rel="canonical"')
        && fileContains($seoPath, 'og:title')
        && fileContains($seoPath, 'twitter:card')
        && fileContains($seoPath, 'application/ld+json'),
    'SEO include renders canonical, Open Graph, Twitter Card, and JSON-LD metadata.'
);
addResult(
    $results,
    'Search indexing policy',
    fileContains($rootPath . DIRECTORY_SEPARATOR . 'search.php', 'noindex, follow'),
    'Search results page is marked noindex, follow.'
);
addResult(
    $results,
    'CSRF helpers',
    fileContains($rootPath . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'helpers' . DIRECTORY_SEPARATOR . 'csrf_helper.php', 'hash_equals')
        && fileContains($rootPath . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'home.php', 'csrfField()')
        && fileContains($rootPath . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'contact.php', 'csrfField()'),
    'Public inquiry/contact forms use CSRF helper output.'
);
addResult(
    $results,
    'Responsive breakpoints',
    fileContains($rootPath . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . 'css' . DIRECTORY_SEPARATOR . 'responsive.css', '@media (max-width: 900px)')
        && fileContains($rootPath . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . 'css' . DIRECTORY_SEPARATOR . 'responsive.css', '@media (max-width: 560px)'),
    'Responsive stylesheet includes tablet and mobile breakpoints.'
);
addResult(
    $results,
    'Sitemap and robots endpoints',
    is_file($rootPath . DIRECTORY_SEPARATOR . 'sitemap.php') && is_file($rootPath . DIRECTORY_SEPARATOR . 'robots.php'),
    'sitemap.php and robots.php endpoints exist.'
);

$failed = array_values(array_filter($results, static fn (array $result): bool => !$result['passed']));

echo 'Nepack QA Check' . PHP_EOL;
echo str_repeat('=', 15) . PHP_EOL;

foreach ($results as $result) {
    echo ($result['passed'] ? '[PASS] ' : '[FAIL] ') . $result['name'] . PHP_EOL;
    echo '       ' . $result['detail'] . PHP_EOL;
}

echo PHP_EOL;
echo $failed === []
    ? 'Result: PASS - Phase 8 static QA checks passed.' . PHP_EOL
    : 'Result: FAIL - Resolve failed checks before UAT/deployment.' . PHP_EOL;

exit($failed === [] ? 0 : 1);
