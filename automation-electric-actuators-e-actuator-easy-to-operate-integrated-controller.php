<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-electric-actuators-e-actuator-easy-to-operate-integrated-controller', [
    'title' => 'e-Actuator Easy to Operate Integrated Controller | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore the SMC e-Actuator with Integrated Controller, offering simplified operation for easy setup and control across automation applications.',
    'canonicalUrl' => appUrl('/automation-electric-actuators-e-actuator-easy-to-operate-integrated-controller.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Electric Actuators', 'path' => '/automation-electric-actuators.php'],
        ['label' => 'e-Actuator Easy to Operate Integrated Controller'],
    ],
]);
