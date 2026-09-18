<?php

require_once __DIR__ . '/includes/bootstrap.php';

renderView('public/industries', [
    'title' => 'Industries | ' . configValue('app.name', 'Nepack Website'),
    'metaDescription' => 'Industrial automation and pneumatic solutions across automotive, food, pharmaceutical, chemical, and other industries.',
    'pageHeading' => 'Industries',
    'pageIntro' => 'We serve a wide range of industries with reliable pneumatic and automation products, backed by expert support and genuine parts.',
    'industries' => industryDefinitions(),
    'breadcrumbs' => [
        ['label' => 'Home', 'path' => '/'],
        ['label' => 'Industries'],
    ],
]);
