<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-fittings-and-tubings-tubing', [
    'title' => 'Tubing | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore SMC pneumatic tubing for reliable air flow.',
    'canonicalUrl' => appUrl('/automation-fittings-and-tubings-tubing.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Fittings and Tubings', 'path' => '/automation-fittings-tubings.php'],
        ['label' => 'Tubing'],
    ],
]);
