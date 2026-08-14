<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-air-cylinders-air-gripper', [
    'title' => 'Air Gripper | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore SMC air grippers for automated pick-and-place systems with precise gripping force and compact design.',
    'canonicalUrl' => appUrl('/automation-air-cylinders-air-gripper.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Air Cylinders', 'path' => '/automation-air-cylinders.php'],
        ['label' => 'Air Gripper'],
    ],
]);
