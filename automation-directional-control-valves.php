<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-directional-control-valves', [
    'title' => 'Directional Control Valves | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore SMC Directional Control Valves including solenoid valves, mechanical valves, finger valves, and blow guns for pneumatic automation.',
    'canonicalUrl' => appUrl('/automation-directional-control-valves.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Directional Control Valves'],
    ],
]);
