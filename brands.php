<?php

require_once __DIR__ . '/includes/bootstrap.php';

$content = new PublicContentService();
$brandSlug = sanitizeSlug($_GET['brand'] ?? '');
$dynamicTitle = 'Brands | ' . configValue('app.name', 'Indian Mill Stores Website');
$dynamicDescription = 'Browse brands represented by Indian Mill Stores.';
$canonicalUrl = appUrl('/brands.php');

if ($brandSlug !== '') {
    foreach ($content->activeBrands() as $brand) {
        if ($brand['slug'] === $brandSlug) {
            $dynamicTitle = $brand['name'] . ' | ' . configValue('app.name', 'Indian Mill Stores Website');
            $dynamicDescription = $brand['overview'] ?: $dynamicDescription;
            $canonicalUrl = appUrl('/brands.php?brand=' . $brand['slug']);
            break;
        }
    }
}

renderView('public/listing', [
    'title' => $dynamicTitle,
    'metaDescription' => $dynamicDescription,
    'canonicalUrl' => $canonicalUrl,
    'pageEyebrow' => 'Partners',
    'pageHeading' => 'Brands',
    'pageIntro' => 'Browse active brands represented by Indian Mill Stores.',
    'contentHeading' => 'Active Brands',
    'items' => $content->activeBrands(),
    'titleField' => 'name',
    'descriptionField' => 'overview',
    'linkField' => '',
    'logoField' => 'logo_path',
    'emptyText' => 'No active brand records are available yet.',
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Brands'],
    ],
]);
