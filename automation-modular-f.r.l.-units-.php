<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-modular-f.r.l.-units-', [
    'title' => 'Modular F.R.L. Units | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore SMC Modular F.R.L. Units including air combinations, filter regulators, air filters, and regulators for pneumatic air preparation.',
    'canonicalUrl' => appUrl('/automation-modular-f.r.l.-units-.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Modular F.R.L. Units'],
    ],
]);
