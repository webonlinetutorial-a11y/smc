<?php

require_once __DIR__ . '/includes/bootstrap.php';

$content = new PublicContentService();
$categorySlug = sanitizeSlug($_GET['category'] ?? '');
$category = null;

foreach ($content->activeCategories() as $candidate) {
    if ($candidate['slug'] === $categorySlug) {
        $category = $candidate;
        break;
    }
}

if ($category === null) {
    http_response_code(404);

    renderView('public/listing', [
        'title' => 'Category Not Found | ' . configValue('app.name', 'Bharat Mill Website'),
        'metaDescription' => 'The requested product category could not be found.',
        'canonicalUrl' => appUrl('/category.php'),
        'pageEyebrow' => 'Product Category',
        'pageHeading' => 'Category Not Found',
        'pageIntro' => '',
        'contentHeading' => 'Category Not Found',
        'items' => [],
        'titleField' => 'name',
        'descriptionField' => 'short_description',
        'linkField' => '',
        'logoField' => '',
        'emptyText' => 'The requested product category could not be found.',
        'breadcrumbs' => [
            ['label' => 'Home', 'path' => '/'],
            ['label' => 'Products', 'path' => '/products.php'],
            ['label' => 'Category Not Found'],
        ],
    ]);
    return;
}

$categoryProducts = array_values(array_filter(
    $content->publishedProducts(),
    static fn (array $product): bool => (int) ($product['category_id'] ?? 0) === (int) $category['id']
));

$categoryProducts = array_map(
    static fn (array $product): array => $product + [
        'detailUrl' => 'products.php?product=' . $product['slug'],
    ],
    $categoryProducts
);

renderView('public/listing', [
    'title' => $category['name'] . ' | ' . configValue('app.name', 'Bharat Mill Website'),
    'metaDescription' => $category['description'] ?: ('Explore ' . $category['name'] . ' products from Bharat Mill.'),
    'canonicalUrl' => appUrl('/category.php?category=' . $category['slug']),
    'pageEyebrow' => 'Product Category',
    'pageHeading' => $category['name'],
    'pageIntro' => $category['description'] ?? '',
    'contentHeading' => $category['name'] . ' Products',
    'items' => $categoryProducts,
    'titleField' => 'name',
    'descriptionField' => 'short_description',
    'linkField' => 'detailUrl',
    'logoField' => '',
    'emptyText' => 'No published products are available in this category yet.',
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Products', 'path' => '/products.php'],
        ['label' => $category['name']],
    ],
]);
