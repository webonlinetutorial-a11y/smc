<?php

require_once __DIR__ . '/includes/bootstrap.php';

$siteName = (string) configValue('app.name', 'Nepack Website');

renderView('home', [
    'title' => $siteName,
    'metaDescription' => 'Nepack Website frontend foundation for industrial automation products and CMS-driven content.',
    'siteName' => $siteName,
]);
