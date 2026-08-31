<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-gas-generator', [
    'title' => 'Gas Generator | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Generate 99.9%+ high-purity nitrogen on-site with the SMC Membrane Nitrogen Generator (NMG) using only compressed air.',
    'canonicalUrl' => appUrl('/automation-gas-generator.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Gas Generator'],
    ],
]);
