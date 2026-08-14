<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-air-cylinders-compact-air-cylinders', [
    'title' => 'Compact Air Cylinders | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore SMC Compact Air Cylinders for tight installations and reliable motion in minimal space.',
    'canonicalUrl' => appUrl('/automation-air-cylinders-compact-air-cylinders.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Air Cylinders', 'path' => '/automation-air-cylinders.php'],
        ['label' => 'Compact Air Cylinders'],
    ],
]);
