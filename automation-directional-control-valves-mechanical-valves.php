<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-directional-control-valves-mechanical-valves', [
    'title' => 'Mechanical Valves | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore SMC mechanical valves for manual and actuator-driven pneumatic movement control.',
    'canonicalUrl' => appUrl('/automation-directional-control-valves-mechanical-valves.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Directional Control Valves', 'path' => '/automation-directional-control-valves.php'],
        ['label' => 'Mechanical Valves'],
    ],
]);
