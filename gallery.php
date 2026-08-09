<?php

require_once __DIR__ . '/includes/bootstrap.php';

$content = new PublicContentService();

renderView('public/listing', [
    'title' => 'Gallery | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'View Nepack product, project, and facility gallery content.',
    'pageEyebrow' => 'Media',
    'pageHeading' => 'Gallery',
    'pageIntro' => 'View active product, project, and facility gallery albums.',
    'contentHeading' => 'Gallery Albums',
    'items' => $content->activeGalleryAlbums(),
    'titleField' => 'name',
    'descriptionField' => 'description',
    'linkField' => '',
    'emptyText' => 'No active gallery albums are available yet.',
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Gallery'],
    ],
]);
