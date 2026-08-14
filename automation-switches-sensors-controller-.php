<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-switches-sensors-controller-', [
    'title' => 'Switches and Sensors | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore SMC switches and sensors including flow switches and digital pressure switches for pneumatic automation monitoring.',
    'canonicalUrl' => appUrl('/automation-switches-sensors-controller-.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Switches and Sensors'],
    ],
]);
