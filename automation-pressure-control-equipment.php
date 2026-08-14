<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-pressure-control-equipment', [
    'title' => 'Pressure Control Equipment | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore SMC pressure control equipment including electro-pneumatic regulators, precision regulators, and booster regulators for pneumatic systems.',
    'canonicalUrl' => appUrl('/automation-pressure-control-equipment.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Pressure Control Equipment'],
    ],
]);
