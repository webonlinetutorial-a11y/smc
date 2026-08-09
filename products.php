<?php

require_once __DIR__ . '/includes/bootstrap.php';

$content = new PublicContentService();

renderView('products', [
    'title' => 'Products | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore Nepack industrial automation product categories.',
    'contentHeading' => 'Product Foundation',
    'contentText' => 'This page shell is ready for categories, filters, product cards, and inquiry links.',
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Products'],
    ],
    'cmsProducts' => $content->publishedProducts(),
]);
