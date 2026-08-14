<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-flow-control-equipment-speed-controllers-speed-controllers-for-general-purposes', [
    'title' => 'Speed Controllers for General Purposes | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore SMC speed controllers for flow control and fine adjustment in pneumatic systems.',
    'canonicalUrl' => appUrl('/automation-flow-control-equipment-speed-controllers-speed-controllers-for-general-purposes.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Flow Control Equipment/Speed Controllers', 'path' => '/automation-flow-control-equipment-speed-controllers.php'],
        ['label' => 'Speed Controllers for General Purposes'],
    ],
]);
