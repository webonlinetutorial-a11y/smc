<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-modular-f.r.l.-units-modular-f.r.l.-units-air-combination', [
    'title' => 'Modular F.R.L. Units/Air Combination | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore SMC modular F.R.L. combinations for efficient air treatment.',
    'canonicalUrl' => appUrl('/automation-modular-f.r.l.-units-modular-f.r.l.-units-air-combination.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Modular F.R.L. Units', 'path' => '/automation-modular-f.r.l.-units-.php'],
        ['label' => 'Modular F.R.L. Units/Air Combination'],
    ],
]);
