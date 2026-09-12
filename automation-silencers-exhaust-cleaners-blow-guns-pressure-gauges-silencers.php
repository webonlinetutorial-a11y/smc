<?php

require_once __DIR__ . '/includes/bootstrap.php';

// This category is now CMS-backed (slug "silencers-exhaust-cleaners-blow-guns-pressure-gauges-silencers"), so this legacy static URL
// delegates to category.php instead of rendering its own hardcoded content, keeping old
// bookmarks/search results working without duplicating the category.php logic.
$_GET['category'] = 'silencers-exhaust-cleaners-blow-guns-pressure-gauges-silencers';
require __DIR__ . '/category.php';
