<?php

require_once __DIR__ . '/includes/bootstrap.php';

$content = new PublicContentService();
$categorySlug = sanitizeSlug($_GET['category'] ?? '');
$category = $content->categoryBySlug($categorySlug);

if ($category === null) {
    http_response_code(404);

    renderView('public/category', [
        'title' => 'Category Not Found | ' . configValue('app.name', 'Bharat Mill Website'),
        'metaDescription' => 'The requested product category could not be found.',
        'canonicalUrl' => appUrl('/category.php'),
        'category' => null,
        'childCategories' => [],
        'products' => [],
        'activeCategorySlug' => null,
        'breadcrumbs' => [
            ['label' => 'Home', 'path' => '/'],
            ['label' => 'Products', 'path' => '/products.php'],
            ['label' => 'Category Not Found'],
        ],
    ]);
    return;
}

$childCategories = $content->childCategoriesOf((int) $category['id']);

$categoryProducts = [];
$categoryProductDetails = [];
if ($childCategories === []) {
    $categoryProducts = array_values(array_filter(
        $content->publishedProducts(),
        static fn (array $product): bool => (int) ($product['category_id'] ?? 0) === (int) $category['id']
    ));

    $categoryProducts = array_map(
        function (array $product) use ($content): array {
            $product['imagePath'] = $content->productPrimaryImagePath($product);

            return $product;
        },
        $categoryProducts
    );

    foreach ($categoryProducts as $product) {
        $categoryProductDetails[$product['slug']] = $content->productDetailPayload($product);
    }
}

$breadcrumbChain = $content->categoryBreadcrumbChain($category);
$lastIndex = array_key_last($breadcrumbChain);

$breadcrumbs = [
    ['label' => 'Home', 'path' => '/'],
    ['label' => 'Automation', 'path' => '/automation.php'],
];

foreach ($breadcrumbChain as $index => $chainCategory) {
    $breadcrumbs[] = $index === $lastIndex
        ? ['label' => $chainCategory['name']]
        : ['label' => $chainCategory['name'], 'path' => '/category.php?category=' . $chainCategory['slug']];
}

renderView('public/category', [
    'title' => $category['name'] . ' | ' . configValue('app.name', 'Bharat Mill Website'),
    'metaDescription' => $category['description'] ?: ('Explore ' . $category['name'] . ' products from Bharat Mill.'),
    'canonicalUrl' => appUrl('/category.php?category=' . $category['slug']),
    'category' => $category,
    'childCategories' => $childCategories,
    'products' => $categoryProducts,
    'productDetails' => $categoryProductDetails,
    'activeCategorySlug' => $breadcrumbChain[0]['slug'] ?? $category['slug'],
    'breadcrumbs' => $breadcrumbs,
]);
