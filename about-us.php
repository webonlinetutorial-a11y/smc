<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('public/page', [
    'title' => 'About Us | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Learn about Nepack and its industrial automation capabilities.',
    'pageEyebrow' => 'Company',
    'pageHeading' => 'About Us',
    'pageIntro' => 'Company profile and capability content will be managed through the CMS in later phases.',
    'contentHeading' => 'Company Foundation',
    'contentText' => 'This page shell is ready for company profile, capabilities, and industries served content.',
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'About Us'],
    ],
]);
