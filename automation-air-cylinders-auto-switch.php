<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-air-cylinders-auto-switch', [
    'title' => 'Auto Switch | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore SMC auto switches for real-time cylinder position feedback and automation precision.',
    'canonicalUrl' => appUrl('/automation-air-cylinders-auto-switch.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Air Cylinders', 'path' => '/automation-air-cylinders.php'],
        ['label' => 'Auto Switch'],
    ],
]);
