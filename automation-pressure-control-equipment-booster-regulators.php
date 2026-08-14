<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-pressure-control-equipment-booster-regulators', [
    'title' => 'Booster Regulators | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore SMC booster regulators for air pressure amplification.',
    'canonicalUrl' => appUrl('/automation-pressure-control-equipment-booster-regulators.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Pressure Control Equipment', 'path' => '/automation-pressure-control-equipment.php'],
        ['label' => 'Booster Regulators'],
    ],
]);
