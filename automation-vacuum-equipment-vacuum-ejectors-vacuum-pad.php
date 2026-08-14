<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-vacuum-equipment-vacuum-ejectors-vacuum-pad', [
    'title' => 'Vacuum Pad | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore SMC vacuum pads for secure and damage-free workpiece handling.',
    'canonicalUrl' => appUrl('/automation-vacuum-equipment-vacuum-ejectors-vacuum-pad.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Vacuum Equipment/Vacuum Ejectors', 'path' => '/automation-vacuum-equipment-vacuum-ejectors-.php'],
        ['label' => 'Vacuum Pad'],
    ],
]);
