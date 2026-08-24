<?php

require_once __DIR__ . '/includes/bootstrap.php';

$controller = new InquiryController();
$inquiryData = $controller->publicSubmit();
$productContext = null;
$productSlug = sanitizeSlug($_GET['product'] ?? '');

if ($productSlug !== '') {
    try {
        $statement = databaseConnection()->prepare('SELECT id, name FROM products WHERE slug = :slug AND status != "archived" LIMIT 1');
        $statement->execute(['slug' => $productSlug]);
        $productContext = $statement->fetch() ?: null;
    } catch (Throwable $exception) {
        error_log($exception);
    }
}

renderView('contact', array_merge($inquiryData, [
    'title' => 'Contact Us | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Contact Nepack for industrial automation products and support.',
    'pageEyebrow' => 'Contact',
    'pageHeading' => 'Contact Us',
    'pageIntro' => 'Contact Nepack for industrial automation products and support.',
    'form' => array_merge(
        [
            'message' => trim((string) ($_GET['message'] ?? '')),
        ],
        $inquiryData['form'] ?? []
    ),
    'productContext' => $productContext,
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Contact Us'],
    ],
]));
