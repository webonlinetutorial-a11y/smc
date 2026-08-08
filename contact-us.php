<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('public/page', [
    'title' => 'Contact Us | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Contact Nepack for industrial automation products and support.',
    'pageEyebrow' => 'Contact',
    'pageHeading' => 'Contact Us',
    'pageIntro' => 'Contact details and inquiry form processing will be added in later phases.',
    'contentHeading' => 'Contact Foundation',
    'contentText' => 'This page shell is ready for inquiry forms, contact details, and location information.',
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Contact Us'],
    ],
]);
