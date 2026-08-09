<?php

require_once __DIR__ . '/includes/bootstrap.php';

$content = new PublicContentService();

renderView('public/listing', [
    'title' => 'Brands | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Browse brands represented by Nepack.',
    'pageEyebrow' => 'Partners',
    'pageHeading' => 'Brands',
    'pageIntro' => 'Browse active brands represented by Nepack.',
    'contentHeading' => 'Active Brands',
    'items' => $content->activeBrands(),
    'titleField' => 'name',
    'descriptionField' => 'overview',
    'linkField' => '',
    'emptyText' => 'No active brand records are available yet.',
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Brands'],
    ],
]);
