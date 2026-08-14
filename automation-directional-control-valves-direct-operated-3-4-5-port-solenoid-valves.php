<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-directional-control-valves-direct-operated-3-4-5-port-solenoid-valves', [
    'title' => 'Direct Operated 3/4/5 Port Solenoid Valves | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore SMC direct operated 3/4/5 port solenoid valves for quick airflow control.',
    'canonicalUrl' => appUrl('/automation-directional-control-valves-direct-operated-3-4-5-port-solenoid-valves.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Directional Control Valves', 'path' => '/automation-directional-control-valves.php'],
        ['label' => 'Direct Operated 3/4/5 Port Solenoid Valves'],
    ],
]);
