<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-directional-control-valves-finger-valve-hand-valves-residual-relief-3-port-valve', [
    'title' => 'Finger Valve/Hand Valves/Residual Relief 3 Port Valve | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore SMC finger valves, hand valves, and residual relief 3 port valves.',
    'canonicalUrl' => appUrl('/automation-directional-control-valves-finger-valve-hand-valves-residual-relief-3-port-valve.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Directional Control Valves', 'path' => '/automation-directional-control-valves.php'],
        ['label' => 'Finger Valve/Hand Valves/Residual Relief 3 Port Valve'],
    ],
]);
