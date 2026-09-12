<?php

require_once __DIR__ . '/includes/bootstrap.php';

// This category is now CMS-backed (slug "electric-actuators"), so this legacy static URL
// delegates to category.php instead of rendering its own hardcoded content, keeping old
// bookmarks/search results working without duplicating the category.php logic. Matches the
// same pattern already used by its child pages (see
// automation-electric-actuators-mounting-kit-for-multi-axis-system-lea-series.php).
$_GET['category'] = 'electric-actuators';
require __DIR__ . '/category.php';
