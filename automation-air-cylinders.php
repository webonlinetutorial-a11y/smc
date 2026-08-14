<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-air-cylinders', [
    'title' => 'Air Cylinders | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore SMC Air Cylinders for reliable pneumatic linear motion in industrial automation applications.',
    'canonicalUrl' => appUrl('/automation-air-cylinders.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Air Cylinders'],
    ],
]);
