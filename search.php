<?php

require_once __DIR__ . '/includes/bootstrap.php';

$query = sanitizeString($_GET['q'] ?? '');
$content = new PublicContentService();

renderView('public/search-results', [
    'title' => 'Search | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Search Nepack products, brands, downloads, and pages.',
    'pageEyebrow' => 'Search',
    'pageHeading' => 'Search',
    'pageIntro' => 'Search active products, brands, and downloads.',
    'query' => $query,
    'results' => $content->search($query),
    'robots' => 'noindex, follow',
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Search'],
    ],
]);
