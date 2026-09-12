<?php

require_once __DIR__ . '/includes/bootstrap.php';

// This category is now CMS-backed (slug "flow-control-equipment-speed-controllers-speed-controllers-for-general-purposes"), so this legacy static URL
// delegates to category.php instead of rendering its own hardcoded content, keeping old
// bookmarks/search results working without duplicating the category.php logic.
$_GET['category'] = 'flow-control-equipment-speed-controllers-speed-controllers-for-general-purposes';
require __DIR__ . '/category.php';
