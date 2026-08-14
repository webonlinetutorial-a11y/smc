<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-modular-f.r.l.-units-regulators', [
    'title' => 'Regulators | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore SMC regulators for stable pneumatic system pressure control.',
    'canonicalUrl' => appUrl('/automation-modular-f.r.l.-units-regulators.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Modular F.R.L. Units', 'path' => '/automation-modular-f.r.l.-units-.php'],
        ['label' => 'Regulators'],
    ],
]);
