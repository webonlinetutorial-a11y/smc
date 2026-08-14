<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-flow-control-equipment-speed-controllers', [
    'title' => 'Flow Control Equipment and Speed Controllers | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore SMC flow control equipment and speed controllers for precise pneumatic actuator speed and airflow regulation.',
    'canonicalUrl' => appUrl('/automation-flow-control-equipment-speed-controllers.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Flow Control Equipment/Speed Controllers'],
    ],
]);
