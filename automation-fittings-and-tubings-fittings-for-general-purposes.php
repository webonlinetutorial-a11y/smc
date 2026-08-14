<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-fittings-and-tubings-fittings-for-general-purposes', [
    'title' => 'Fittings for General Purposes | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore SMC pneumatic fittings for general purpose tube connections.',
    'canonicalUrl' => appUrl('/automation-fittings-and-tubings-fittings-for-general-purposes.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Fittings and Tubings', 'path' => '/automation-fittings-tubings.php'],
        ['label' => 'Fittings for General Purposes'],
    ],
]);
