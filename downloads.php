<?php

require_once __DIR__ . '/includes/bootstrap.php';

$content = new PublicContentService();

renderView('public/listing', [
    'title' => 'Downloads | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Access Nepack catalogs, brochures, datasheets, and documents.',
    'pageEyebrow' => 'Resources',
    'pageHeading' => 'Downloads',
    'pageIntro' => 'Access active catalogs, brochures, datasheets, and documents.',
    'contentHeading' => 'Active Downloads',
    'items' => $content->activeDownloads(),
    'titleField' => 'title',
    'descriptionField' => 'description',
    'linkField' => 'file_path',
    'emptyText' => 'No active download records are available yet.',
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Downloads'],
    ],
]);
