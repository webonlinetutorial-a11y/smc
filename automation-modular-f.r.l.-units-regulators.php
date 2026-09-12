<?php

require_once __DIR__ . '/includes/bootstrap.php';

// This category is now CMS-backed (slug "modular-f-r-l--units-regulators"), so this legacy static URL
// delegates to category.php instead of rendering its own hardcoded content, keeping old
// bookmarks/search results working without duplicating the category.php logic.
$_GET['category'] = 'modular-f-r-l--units-regulators';
require __DIR__ . '/category.php';
