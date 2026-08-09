<?php

require_once __DIR__ . '/includes/bootstrap.php';

header('Content-Type: text/plain; charset=UTF-8');

echo "User-agent: *\n";
echo "Disallow: /admin/\n";
echo "Disallow: /app/\n";
echo "Disallow: /config/\n";
echo "Disallow: /database/\n";
echo "Disallow: /includes/\n";
echo "Disallow: /storage/\n";
echo "Disallow: /vendor/\n";
echo "Disallow: /search.php\n";
echo "Allow: /\n";
echo 'Sitemap: ' . appUrl('/sitemap.xml') . "\n";
