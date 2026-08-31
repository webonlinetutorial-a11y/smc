<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-electric-actuators', [
    'title' => 'Electric Actuators | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore SMC Electric Actuators for precise, repeatable linear positioning in industrial automation systems.',
    'canonicalUrl' => appUrl('/automation-electric-actuators.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Electric Actuators'],
    ],
]);
