<?php

require_once __DIR__ . '/includes/bootstrap.php';

// Air Gripper is now a CMS-backed category (slug "air-gripper"), so this legacy static
// URL delegates to category.php instead of rendering its own hardcoded content, keeping
// old bookmarks/search results working without duplicating the category.php logic.
$_GET['category'] = 'air-gripper';
require __DIR__ . '/category.php';
