<?php

require_once __DIR__ . '/includes/bootstrap.php';

$content = new PublicContentService();
$productSlug = sanitizeSlug($_GET['product'] ?? '');
$dynamicTitle = 'Products | ' . configValue('app.name', 'Nepack Website');
$dynamicDescription = 'Explore Nepack industrial automation product categories.';
$canonicalUrl = appUrl('/products.php');

if ($productSlug !== '') {
    foreach ($content->publishedProducts() as $product) {
        if ($product['slug'] === $productSlug) {
            $dynamicTitle = $product['name'] . ' | ' . configValue('app.name', 'Nepack Website');
            $dynamicDescription = $product['short_description'] ?: $dynamicDescription;
            $canonicalUrl = appUrl('/products.php?product=' . $product['slug']);
            break;
        }
    }
}

renderView('products', [
    'title' => $dynamicTitle,
    'metaDescription' => $dynamicDescription,
    'canonicalUrl' => $canonicalUrl,
    'contentHeading' => 'Product Foundation',
    'contentText' => 'This page shell is ready for categories, filters, product cards, and inquiry links.',
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Products'],
    ],
    'cmsProducts' => $content->publishedProducts(),
    'cmsCategories' => $content->activeCategories(),
]);
