<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-process-valves', [
    'title' => 'Process Valves | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore SMC process valves including 2/3 port solenoid valves and air operated valves for industrial process control.',
    'canonicalUrl' => appUrl('/automation-process-valves.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Process Valves'],
    ],
]);
