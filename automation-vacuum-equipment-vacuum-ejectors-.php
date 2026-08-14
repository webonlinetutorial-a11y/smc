<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-vacuum-equipment-vacuum-ejectors-', [
    'title' => 'Vacuum Equipment/Vacuum Ejectors | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore SMC vacuum equipment and vacuum ejectors including vacuum ejectors and vacuum pads for pneumatic handling systems.',
    'canonicalUrl' => appUrl('/automation-vacuum-equipment-vacuum-ejectors-.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Vacuum Equipment/Vacuum Ejectors'],
    ],
]);
