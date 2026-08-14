<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-air-cylinders-iso-cylinders', [
    'title' => 'ISO Cylinders | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore SMC ISO standard cylinders for international applications requiring interchangeability and consistent performance.',
    'canonicalUrl' => appUrl('/automation-air-cylinders-iso-cylinders.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Air Cylinders', 'path' => '/automation-air-cylinders.php'],
        ['label' => 'ISO Cylinders'],
    ],
]);
