<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-flow-control-equipment-speed-controllers-remote-control-valve', [
    'title' => 'Remote Control Valve | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore the SMC PFES-A-P07-2 remote control valve for flow control equipment applications.',
    'canonicalUrl' => appUrl('/automation-flow-control-equipment-speed-controllers-remote-control-valve.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Flow Control Equipment/Speed Controllers', 'path' => '/automation-flow-control-equipment-speed-controllers.php'],
        ['label' => 'Remote Control Valve'],
    ],
]);
