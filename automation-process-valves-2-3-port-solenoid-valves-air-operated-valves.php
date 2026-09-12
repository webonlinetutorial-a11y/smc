<?php

require_once __DIR__ . '/includes/bootstrap.php';

// This category is now CMS-backed (slug "process-valves-2-3-port-solenoid-valves-air-operated-valves"), so this legacy static URL
// delegates to category.php instead of rendering its own hardcoded content, keeping old
// bookmarks/search results working without duplicating the category.php logic.
$_GET['category'] = 'process-valves-2-3-port-solenoid-valves-air-operated-valves';
require __DIR__ . '/category.php';
