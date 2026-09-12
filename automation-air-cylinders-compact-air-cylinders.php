<?php

require_once __DIR__ . '/includes/bootstrap.php';

// Compact Air Cylinders is now a CMS-backed category (slug "compact-air-cylinders"), so
// this legacy static URL delegates to category.php instead of rendering its own
// hardcoded content, keeping old bookmarks/search results working without duplicating
// the category.php logic.
$_GET['category'] = 'compact-air-cylinders';
require __DIR__ . '/category.php';
