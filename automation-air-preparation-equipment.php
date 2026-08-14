<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-air-preparation-equipment', [
    'title' => 'Air Preparation Equipment | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore SMC Air Preparation Equipment including filters, air dryers, and auto drains for clean compressed air systems.',
    'canonicalUrl' => appUrl('/automation-air-preparation-equipment.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Air Preparation Equipment'],
    ],
]);
