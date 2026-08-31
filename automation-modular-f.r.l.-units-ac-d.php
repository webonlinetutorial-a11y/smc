<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-modular-f.r.l.-units-ac-d', [
    'title' => 'Modular F.R.L. Units AC D | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore the SMC Modular F.R.L. Units AC D for use with F.R.L. units (AC-D series).',
    'canonicalUrl' => appUrl('/automation-modular-f.r.l.-units-ac-d.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Modular F.R.L. Units', 'path' => '/automation-modular-f.r.l.-units-.php'],
        ['label' => 'Modular F.R.L. Units AC D'],
    ],
]);
