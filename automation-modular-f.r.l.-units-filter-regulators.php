<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-modular-f.r.l.-units-filter-regulators', [
    'title' => 'Filter Regulators | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore SMC filter regulators for clean, regulated air.',
    'canonicalUrl' => appUrl('/automation-modular-f.r.l.-units-filter-regulators.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Modular F.R.L. Units', 'path' => '/automation-modular-f.r.l.-units-.php'],
        ['label' => 'Filter Regulators'],
    ],
]);
