<?php

require_once __DIR__ . '/includes/bootstrap.php';

header('Content-Type: application/xml; charset=UTF-8');

$urls = [
    ['loc' => appUrl('/'), 'priority' => '1.0'],
    ['loc' => appUrl('/about-us.php'), 'priority' => '0.7'],
    ['loc' => appUrl('/products.php'), 'priority' => '0.9'],
    ['loc' => appUrl('/brands.php'), 'priority' => '0.7'],
    ['loc' => appUrl('/downloads.php'), 'priority' => '0.6'],
    ['loc' => appUrl('/gallery.php'), 'priority' => '0.6'],
    ['loc' => appUrl('/contact-us.php'), 'priority' => '0.8'],
];

foreach (automationSitemapPaths() as $automationPath) {
    $urls[] = ['loc' => appUrl($automationPath), 'priority' => '0.8'];
}

foreach (productDetailSitemapPaths() as $productDetailPath) {
    $urls[] = ['loc' => appUrl($productDetailPath), 'priority' => '0.8'];
}

try {
    $content = new PublicContentService();

    foreach ($content->publishedProducts() as $product) {
        $urls[] = ['loc' => appUrl('/products.php?product=' . $product['slug']), 'priority' => '0.8'];
    }

    foreach ($content->activeBrands() as $brand) {
        $urls[] = ['loc' => appUrl('/brands.php?brand=' . $brand['slug']), 'priority' => '0.6'];
    }
} catch (Throwable $exception) {
    error_log($exception);
}

echo '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($urls as $url): ?>
    <url>
        <loc><?= e($url['loc']); ?></loc>
        <lastmod><?= e(date('Y-m-d')); ?></lastmod>
        <changefreq>weekly</changefreq>
        <priority><?= e($url['priority']); ?></priority>
    </url>
<?php endforeach; ?>
</urlset>
