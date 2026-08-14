<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-switches-sensors-controller-flow-switch', [
    'title' => 'Flow Switch | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore SMC flow switches for accurate monitoring of compressed air and liquid flow.',
    'canonicalUrl' => appUrl('/automation-switches-sensors-controller-flow-switch.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Switches and Sensors', 'path' => '/automation-switches-sensors-controller-.php'],
        ['label' => 'Flow Switch'],
    ],
]);
