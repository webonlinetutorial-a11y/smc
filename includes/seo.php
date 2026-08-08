<?php

$seoTitle = $title ?? configValue('app.name', 'Nepack Website');
$seoDescription = $metaDescription ?? 'Nepack Website public page.';
$seoCanonical = $canonicalUrl ?? appUrl(ltrim(currentPath(), '/'));
$seoRobots = $robots ?? 'index, follow';
?>
<title><?= e($seoTitle); ?></title>
<meta name="description" content="<?= e($seoDescription); ?>">
<link rel="canonical" href="<?= e($seoCanonical); ?>">
<meta name="robots" content="<?= e($seoRobots); ?>">
<meta property="og:title" content="<?= e($seoTitle); ?>">
<meta property="og:description" content="<?= e($seoDescription); ?>">
<meta property="og:url" content="<?= e($seoCanonical); ?>">
<meta property="og:type" content="website">
