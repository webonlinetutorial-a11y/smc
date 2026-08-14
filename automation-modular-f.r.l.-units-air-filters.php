<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-modular-f.r.l.-units-air-filters', [
    'title' => 'Air Filters | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore SMC air filters for removing particles and moisture from compressed air systems.',
    'canonicalUrl' => appUrl('/automation-modular-f.r.l.-units-air-filters.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Modular F.R.L. Units', 'path' => '/automation-modular-f.r.l.-units-.php'],
        ['label' => 'Air Filters'],
    ],
]);
