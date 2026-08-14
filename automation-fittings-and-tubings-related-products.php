<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-fittings-and-tubings-related-products', [
    'title' => 'Related Products | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore SMC related pneumatic accessories for fittings and tubing setups.',
    'canonicalUrl' => appUrl('/automation-fittings-and-tubings-related-products.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Fittings and Tubings', 'path' => '/automation-fittings-tubings.php'],
        ['label' => 'Related Products'],
    ],
]);
