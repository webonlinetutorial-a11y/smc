<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-pressure-control-equipment-regulators', [
    'title' => 'Regulators | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore SMC regulators for precise pressure control in pneumatic systems.',
    'canonicalUrl' => appUrl('/automation-pressure-control-equipment-regulators.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Pressure Control Equipment', 'path' => '/automation-pressure-control-equipment.php'],
        ['label' => 'Regulators'],
    ],
]);
