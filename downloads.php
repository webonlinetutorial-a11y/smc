<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('public/page', [
    'title' => 'Downloads | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Access Nepack catalogs, brochures, datasheets, and documents.',
    'pageEyebrow' => 'Resources',
    'pageHeading' => 'Downloads',
    'pageIntro' => 'Download categories and document listings will connect to CMS modules in later phases.',
    'contentHeading' => 'Download Foundation',
    'contentText' => 'This page shell is ready for catalogs, datasheets, brochures, manuals, and certificates.',
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Downloads'],
    ],
]);
