<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-silencers-exhaust-cleaners-blow-guns-pressure-gauges-blow-guns-air-blowing-equipment', [
    'title' => 'Air Blowing Equipment | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore SMC Air Blowing Equipment, including the PU Series Pulse Blow Unit, for efficient dust and particle removal.',
    'canonicalUrl' => appUrl('/automation-silencers-exhaust-cleaners-blow-guns-pressure-gauges-blow-guns-air-blowing-equipment.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Silencers/Exhaust Cleaners/Pressure Gauges/Blow Guns', 'path' => '/automation-silencers-exhaust-cleaners-blow-guns-pressure-gauges.php'],
        ['label' => 'Blow Guns /Blowing Equipments', 'path' => '/automation-silencers-exhaust-cleaners-blow-guns-pressure-gauges-blow-guns.php'],
        ['label' => 'Air Blowing Equipment'],
    ],
]);
