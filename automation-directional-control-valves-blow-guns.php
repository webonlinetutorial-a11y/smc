<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-directional-control-valves-blow-guns', [
    'title' => 'Blow Guns | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore SMC blow guns for high-performance cleaning in industrial machines and parts.',
    'canonicalUrl' => appUrl('/automation-directional-control-valves-blow-guns.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Directional Control Valves', 'path' => '/automation-directional-control-valves.php'],
        ['label' => 'Blow Guns'],
    ],
]);
