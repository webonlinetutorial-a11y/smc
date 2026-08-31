<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-gas-generator-membrane-nitrogen-generator', [
    'title' => 'Nitrogen Gas Generator | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore the SMC Membrane Nitrogen Generator (NMG) for on-site, high-purity nitrogen generation using only compressed air.',
    'canonicalUrl' => appUrl('/automation-gas-generator-membrane-nitrogen-generator.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Gas Generator', 'path' => '/automation-gas-generator.php'],
        ['label' => 'Nitrogen Gas Generator'],
    ],
]);
