<?php

require_once __DIR__ . '/includes/bootstrap.php';

$productSlug = sanitizeSlug($_GET['product'] ?? '');
$productDetail = findProductDetail($productSlug);
$siteName = (string) configValue('app.name', 'Nepack Website');

if ($productDetail === null) {
    // Not (or no longer) in the static catalogue — if it's a real CMS product, send
    // old bookmarks/search results to its CMS-backed page instead of 404ing, the same
    // way legacy static category URLs redirect to category.php.
    $cmsProduct = (new PublicContentService())->publishedProductBySlug($productSlug);

    if ($cmsProduct !== null) {
        header('Location: ' . appUrl('/product.php?slug=' . rawurlencode($cmsProduct['slug'])), true, 301);
        exit;
    }

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

$productBreadcrumbs = [
    ['label' => 'Home', 'path' => '/'],
    ['label' => 'Automation', 'path' => '/automation.php'],
    ['label' => $productDetail['categoryLabel'] ?? 'Air Cylinders', 'path' => $productDetail['categoryPath'] ?? '/automation-air-cylinders.php'],
];

foreach ($productDetail['extraCrumbs'] ?? [] as $extraCrumb) {
    $productBreadcrumbs[] = $extraCrumb;
}

$productBreadcrumbs[] = ['label' => $productDetail['parentLabel'], 'path' => $productDetail['parentPath']];
$productBreadcrumbs[] = ['label' => $productDetail['breadcrumbLabel'] ?? $productDetail['title']];

renderView('public/product-detail', [
    'title' => $productDetail['title'] . ' | ' . $siteName,
    'metaDescription' => $productDetail['metaDescription'],
    'canonicalUrl' => productDetailUrl($productDetail['slug']),
    'productDetail' => $productDetail,
    'breadcrumbs' => $productBreadcrumbs,
]);
