<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-process-valves-2-3-port-solenoid-valves-air-operated-valves', [
    'title' => '2/3 Port Solenoid Valves/Air Operated Valves | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore SMC 2/3 port solenoid valves and air operated valves for on/off fluid and airflow control.',
    'canonicalUrl' => appUrl('/automation-process-valves-2-3-port-solenoid-valves-air-operated-valves.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Process Valves', 'path' => '/automation-process-valves.php'],
        ['label' => '2/3 Port Solenoid Valves/Air Operated Valves'],
    ],
]);
