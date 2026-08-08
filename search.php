<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('public/page', [
    'title' => 'Search | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Search Nepack products, brands, downloads, and pages.',
    'pageEyebrow' => 'Search',
    'pageHeading' => 'Search',
    'pageIntro' => 'Search indexing and results will connect to CMS modules in later phases.',
    'contentHeading' => 'Search Foundation',
    'contentText' => 'This page shell is ready for search input, filters, and result rendering.',
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Search'],
    ],
]);
