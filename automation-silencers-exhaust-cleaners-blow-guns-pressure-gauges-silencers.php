<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-silencers-exhaust-cleaners-blow-guns-pressure-gauges-silencers', [
    'title' => 'Silencers | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore SMC silencers for reducing exhaust noise and improving workplace safety.',
    'canonicalUrl' => appUrl('/automation-silencers-exhaust-cleaners-blow-guns-pressure-gauges-silencers.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Silencers/Exhaust Cleaners/Pressure Gauges', 'path' => '/automation-silencers-exhaust-cleaners-blow-guns-pressure-gauges.php'],
        ['label' => 'Silencers'],
    ],
]);
