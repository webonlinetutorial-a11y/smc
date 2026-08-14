<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation', [
    'title' => 'Automation | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore Nepack industrial automation and SMC pneumatic product categories.',
    'canonicalUrl' => appUrl('/automation.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation'],
    ],
]);
