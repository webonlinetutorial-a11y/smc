<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-pressure-control-equipment-electro-automatic-regulators', [
    'title' => 'Electro-Pneumatic Regulators | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore SMC electro-pneumatic regulators for high-precision pressure control.',
    'canonicalUrl' => appUrl('/automation-pressure-control-equipment-electro-automatic-regulators.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Pressure Control Equipment', 'path' => '/automation-pressure-control-equipment.php'],
        ['label' => 'Electro-Pneumatic Regulators'],
    ],
]);
