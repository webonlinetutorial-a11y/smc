<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-silencers-exhaust-cleaners-blow-guns-pressure-gauges-blow-guns', [
    'title' => 'Blow Guns /Blowing Equipments | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore SMC blow guns and blowing equipments with a large effective area and optional top or bottom piping direction.',
    'canonicalUrl' => appUrl('/automation-silencers-exhaust-cleaners-blow-guns-pressure-gauges-blow-guns.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Silencers/Exhaust Cleaners/Pressure Gauges/Blow Guns', 'path' => '/automation-silencers-exhaust-cleaners-blow-guns-pressure-gauges.php'],
        ['label' => 'Blow Guns /Blowing Equipments'],
    ],
]);
