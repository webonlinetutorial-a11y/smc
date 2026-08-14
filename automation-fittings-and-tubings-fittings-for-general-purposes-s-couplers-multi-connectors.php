<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-fittings-and-tubings-fittings-for-general-purposes-s-couplers-multi-connectors', [
    'title' => 'Fittings for General Purposes(S Couplers/Multi-connectors) | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore SMC S couplers and multi-connectors for pneumatic system configurations.',
    'canonicalUrl' => appUrl('/automation-fittings-and-tubings-fittings-for-general-purposes-s-couplers-multi-connectors.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Fittings and Tubings', 'path' => '/automation-fittings-tubings.php'],
        ['label' => 'Fittings for General Purposes(S Couplers/Multi-connectors)'],
    ],
]);
