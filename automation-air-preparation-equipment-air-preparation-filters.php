<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('automation-air-preparation-equipment-air-preparation-filters', [
    'title' => 'Air Preparation Filters | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Explore SMC air preparation filters for removing dust, oil, and moisture from compressed air.',
    'canonicalUrl' => appUrl('/automation-air-preparation-equipment-air-preparation-filters.php'),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Automation', 'path' => '/automation.php'],
        ['label' => 'Air Preparation Equipment', 'path' => '/automation-air-preparation-equipment.php'],
        ['label' => 'Air Preparation Filters'],
    ],
]);
