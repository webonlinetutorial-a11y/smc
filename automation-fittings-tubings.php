<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-fittings-tubings', [
    'title' => 'Fittings and Tubings | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore SMC fittings and tubing including general purpose fittings, couplers, tubing, and related pneumatic accessories.',
    'canonicalUrl' => appUrl('/automation-fittings-tubings.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Fittings and Tubings'],
    ],
]);
