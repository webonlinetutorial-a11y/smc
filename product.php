<?php

require_once __DIR__ . '/includes/bootstrap.php';

$content = new PublicContentService();
$productSlug = sanitizeSlug($_GET['slug'] ?? '');
$product = $content->publishedProductBySlug($productSlug);

if ($product === null) {
    http_response_code(404);

    renderView('public/cms-product-detail', [
        'title' => 'Product Not Found | ' . configValue('app.name', 'Bharat Mill Website'),
        'metaDescription' => 'The requested product could not be found.',
        'canonicalUrl' => appUrl('/product.php'),
        'product' => null,
        'images' => [],
        'breadcrumbs' => [
            ['label' => 'Home', 'path' => '/'],
            ['label' => 'Products', 'path' => '/products.php'],
            ['label' => 'Product Not Found'],
        ],
    ]);
    return;
}

$category = null;

if (!empty($product['category_id'])) {
    foreach ($content->activeCategories() as $candidate) {
        if ((int) $candidate['id'] === (int) $product['category_id']) {
            $category = $candidate;
            break;
        }
    }
}

$breadcrumbs = [
    ['label' => 'Home', 'path' => '/'],
    ['label' => 'Automation', 'path' => '/automation.php'],
];

if ($category !== null) {
    foreach ($content->categoryBreadcrumbChain($category) as $chainCategory) {
        $breadcrumbs[] = ['label' => $chainCategory['name'], 'path' => '/category.php?category=' . $chainCategory['slug']];
    }
}

$breadcrumbs[] = ['label' => $product['name']];

$images = $content->activeProductImages((int) $product['id']);

if (trim((string) ($product['image_path'] ?? '')) !== '') {
    array_unshift($images, [
        'image_path' => $product['image_path'],
        'alt_text' => $product['name'],
    ]);
}

renderView('public/cms-product-detail', [
    'title' => $product['name'] . ' | ' . configValue('app.name', 'Bharat Mill Website'),
    'metaDescription' => $product['short_description'] ?: ('Explore ' . $product['name'] . ' from Bharat Mill.'),
    'canonicalUrl' => appUrl('/product.php?slug=' . $product['slug']),
    'product' => $product,
    'images' => $images,
    'partNumberRows' => $content->productPartNumberRows($product),
    'breadcrumbs' => $breadcrumbs,
]);
