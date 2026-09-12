<?php

require_once __DIR__ . '/includes/bootstrap.php';

// ISO Cylinders is now a CMS-backed category (slug "iso-cylinders"), so this legacy
// static URL delegates to category.php instead of rendering its own hardcoded content,
// keeping old bookmarks/search results working without duplicating the category.php
// logic.
$_GET['category'] = 'iso-cylinders';
require __DIR__ . '/category.php';
