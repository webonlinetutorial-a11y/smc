<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-switches-sensors-controller-digital-pressure-switch', [
    'title' => 'Digital Pressure Switch | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore SMC digital pressure switches for high-precision pressure monitoring and control.',
    'canonicalUrl' => appUrl('/automation-switches-sensors-controller-digital-pressure-switch.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Switches and Sensors', 'path' => '/automation-switches-sensors-controller-.php'],
        ['label' => 'Digital Pressure Switch'],
    ],
]);
