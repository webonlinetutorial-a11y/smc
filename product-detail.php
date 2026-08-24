<?php

require_once __DIR__ . '/includes/bootstrap.php';

$productSlug = sanitizeSlug($_GET['product'] ?? '');
$productDetail = findProductDetail($productSlug);
$siteName = (string) configValue('app.name', 'Nepack Website');

if ($productDetail === null) {
    http_response_code(404);

    renderView('public/product-detail', [
        'title' => 'Product Not Found | ' . $siteName,
        'metaDescription' => 'The requested product detail could not be found.',
        'canonicalUrl' => appUrl('/product-detail.php'),
        'productDetail' => null,
        'breadcrumbs' => [
            ['label' => 'Home', 'path' => '/'],
            ['label' => 'Products', 'path' => '/products.php'],
            ['label' => 'Product Not Found'],
        ],
    ]);
    return;
}

renderView('public/product-detail', [
    'title' => $productDetail['title'] . ' | ' . $siteName,
    'metaDescription' => $productDetail['metaDescription'],
    'canonicalUrl' => productDetailUrl($productDetail['slug']),
    'productDetail' => $productDetail,
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => $productDetail['categoryLabel'] ?? 'Air Cylinders', 'path' => $productDetail['categoryPath'] ?? '/automation-air-cylinders.php'],
        ['label' => $productDetail['parentLabel'], 'path' => $productDetail['parentPath']],
        ['label' => $productDetail['title']],
    ],
]);
