<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-directional-control-valves-pilot-operated-4-5-port-solenoid-valves', [
    'title' => 'Pilot Operated 4/5 Port Solenoid Valves | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore SMC pilot operated 4/5 port solenoid valves for fast switching directional air control.',
    'canonicalUrl' => appUrl('/automation-directional-control-valves-pilot-operated-4-5-port-solenoid-valves.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Directional Control Valves', 'path' => '/automation-directional-control-valves.php'],
        ['label' => 'Pilot Operated 4/5 Port Solenoid Valves'],
    ],
]);
