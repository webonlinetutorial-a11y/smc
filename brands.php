<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('public/page', [
    'title' => 'Brands | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Browse brands represented by Nepack.',
    'pageEyebrow' => 'Partners',
    'pageHeading' => 'Brands',
    'pageIntro' => 'Brand listing and brand detail rendering will connect to CMS modules in later phases.',
    'contentHeading' => 'Brand Foundation',
    'contentText' => 'This page shell is ready for brand logos, descriptions, products, and downloads.',
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Brands'],
    ],
]);
