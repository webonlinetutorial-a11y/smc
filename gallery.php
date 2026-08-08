<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('public/page', [
    'title' => 'Gallery | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'View Nepack product, project, and facility gallery content.',
    'pageEyebrow' => 'Media',
    'pageHeading' => 'Gallery',
    'pageIntro' => 'Gallery albums and images will connect to CMS modules in later phases.',
    'contentHeading' => 'Gallery Foundation',
    'contentText' => 'This page shell is ready for image albums, captions, and related product references.',
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Gallery'],
    ],
]);
