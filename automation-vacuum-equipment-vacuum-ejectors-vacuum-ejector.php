<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-vacuum-equipment-vacuum-ejectors-vacuum-ejector', [
    'title' => 'Vacuum Ejector | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore SMC vacuum ejectors for compact, lightweight, and energy-efficient vacuum generation.',
    'canonicalUrl' => appUrl('/automation-vacuum-equipment-vacuum-ejectors-vacuum-ejector.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Vacuum Equipment/Vacuum Ejectors', 'path' => '/automation-vacuum-equipment-vacuum-ejectors-.php'],
        ['label' => 'Vacuum Ejector'],
    ],
]);
