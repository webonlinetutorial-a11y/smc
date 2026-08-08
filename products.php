<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('public/page', [
    'title' => 'Products | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore Nepack industrial automation product categories.',
    'pageEyebrow' => 'Catalog',
    'pageHeading' => 'Products',
    'pageIntro' => 'Product listing and category discovery will connect to CMS modules in later phases.',
    'contentHeading' => 'Product Foundation',
    'contentText' => 'This page shell is ready for categories, filters, product cards, and inquiry links.',
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Products'],
    ],
]);
