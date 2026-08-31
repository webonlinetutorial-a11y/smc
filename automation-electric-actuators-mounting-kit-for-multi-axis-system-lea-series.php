<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-electric-actuators-mounting-kit-for-multi-axis-system-lea-series', [
    'title' => 'Mounting Kit for Multi-Axis System : LEA Series | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore the SMC LEA Series mounting kit for building multi-axis electric actuator systems.',
    'canonicalUrl' => appUrl('/automation-electric-actuators-mounting-kit-for-multi-axis-system-lea-series.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Electric Actuators', 'path' => '/automation-electric-actuators.php'],
        ['label' => 'Mounting Kit for Multi-Axis System'],
    ],
]);
