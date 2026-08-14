<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-silencers-exhaust-cleaners-blow-guns-pressure-gauges', [
    'title' => 'Silencers/Exhaust Cleaners/Pressure Gauges | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore SMC silencers, exhaust cleaners, blow guns, and pressure gauges for pneumatic system noise reduction and monitoring.',
    'canonicalUrl' => appUrl('/automation-silencers-exhaust-cleaners-blow-guns-pressure-gauges.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Silencers/Exhaust Cleaners/Pressure Gauges'],
    ],
]);
