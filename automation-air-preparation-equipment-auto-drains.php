<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-air-preparation-equipment-auto-drains', [
    'title' => 'Auto Drains | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore SMC auto drains for automatic condensate discharge in pneumatic systems.',
    'canonicalUrl' => appUrl('/automation-air-preparation-equipment-auto-drains.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Air Preparation Equipment', 'path' => '/automation-air-preparation-equipment.php'],
        ['label' => 'Auto Drains'],
    ],
]);
