<?php

require_once __DIR__ . '/includes/bootstrap.php';

// Standard Air Cylinders (Square Cover) is now a CMS-backed category
// (slug "standard-air-cylinders-square-cover"), so this legacy static URL delegates to
// category.php instead of rendering its own hardcoded content, keeping old
// bookmarks/search results working without duplicating the category.php logic.
$_GET['category'] = 'standard-air-cylinders-square-cover';
require __DIR__ . '/category.php';
