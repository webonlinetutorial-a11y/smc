<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-air-cylinders-standard-air-cylinders-square-cover', [
    'title' => 'Standard Air Cylinders (Square Cover) | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore SMC Standard Air Cylinders with square covers for stable, durable, and easy mounting in industrial automation.',
    'canonicalUrl' => appUrl('/automation-air-cylinders-standard-air-cylinders-square-cover.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Air Cylinders', 'path' => '/automation-air-cylinders.php'],
        ['label' => 'Standard Air Cylinders (Square Cover)'],
    ],
]);
