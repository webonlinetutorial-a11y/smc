<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-air-preparation-equipment-air-dryer', [
    'title' => 'Air Dryer | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore SMC air dryers for moisture-free air in pneumatic systems.',
    'canonicalUrl' => appUrl('/automation-air-preparation-equipment-air-dryer.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Air Preparation Equipment', 'path' => '/automation-air-preparation-equipment.php'],
        ['label' => 'Air Dryer'],
    ],
]);
