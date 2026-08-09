<?php

$cmsSeo = (new SeoService())->metadataForPath(currentPath());
$seoTitle = $cmsSeo['meta_title'] ?? $title ?? configValue('app.name', 'Nepack Website');
$seoDescription = $cmsSeo['meta_description'] ?? $metaDescription ?? 'Nepack Website public page.';
$seoCanonical = $cmsSeo['canonical_url'] ?? $canonicalUrl ?? appUrl(ltrim(currentPath(), '/'));
$seoRobots = $cmsSeo['robots'] ?? $robots ?? 'index, follow';
$structuredData = [
    '@context' => 'https://schema.org',
    '@type' => 'Organization',
    'name' => configValue('app.name', 'Nepack Website'),
    'url' => appUrl('/'),
    'contactPoint' => [
        '@type' => 'ContactPoint',
        'contactType' => 'sales',
        'email' => 'info@nepack.com',
        'telephone' => '+91 22 4008 8000',
    ],
];
?>
<title><?= e($seoTitle); ?></title>
<meta name="description" content="<?= e($seoDescription); ?>">
<link rel="canonical" href="<?= e($seoCanonical); ?>">
<meta name="robots" content="<?= e($seoRobots); ?>">
<meta property="og:title" content="<?= e($seoTitle); ?>">
<meta property="og:description" content="<?= e($seoDescription); ?>">
<meta property="og:url" content="<?= e($seoCanonical); ?>">
<meta property="og:type" content="website">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= e($seoTitle); ?>">
<meta name="twitter:description" content="<?= e($seoDescription); ?>">
<script type="application/ld+json"><?= json_encode($structuredData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>
