<?php

require_once __DIR__ . '/includes/bootstrap.php';

// This category is now CMS-backed (slug "vacuum-equipment-vacuum-ejectors-vacuum-ejector"), so this legacy static URL
// delegates to category.php instead of rendering its own hardcoded content, keeping old
// bookmarks/search results working without duplicating the category.php logic.
$_GET['category'] = 'vacuum-equipment-vacuum-ejectors-vacuum-ejector';
require __DIR__ . '/category.php';
