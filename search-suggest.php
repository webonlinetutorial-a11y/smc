<?php

require_once __DIR__ . '/includes/bootstrap.php';

$query = sanitizeString($_GET['q'] ?? '');
$maxResults = 20;
$results = [];

if ($query !== '' && mb_strlen($query) >= 2) {
    $needle = mb_strtolower($query);
    $candidates = [];

    // Tier 0: Automation hub
    $hubTitle = 'Automation';
    if (mb_strpos(mb_strtolower($hubTitle), $needle) !== false) {
        $candidates[] = [
            'tier' => 0,
            'title' => $hubTitle,
            'category' => '',
            'image' => assetUrl('images/smc-product-line1.png'),
            'url' => appUrl('/automation.php'),
        ];
    }

    // Tier 1 & 2: categories and their items
    foreach (automationCategoryDefinitions() as $category) {
        $categoryTitle = $category['title'] ?? '';
        $categoryUrl = $category['url'] ?? '';

        if ($categoryTitle !== '' && mb_strpos(mb_strtolower($categoryTitle), $needle) !== false) {
            $candidates[] = [
                'tier' => 1,
                'title' => $categoryTitle,
                'category' => 'Automation',
                'image' => isset($category['image']) ? assetUrl('images/' . $category['image']) : '',
                'url' => appUrl($categoryUrl),
            ];
        }

        foreach ($category['items'] ?? [] as $item) {
            if (mb_strpos(mb_strtolower($item), $needle) === false) {
                continue;
            }

            $itemImage = automationItemIntroImages()[$categoryUrl][$item] ?? $category['image'] ?? null;

            $candidates[] = [
                'tier' => 2,
                'title' => $item,
                'category' => $categoryTitle,
                'image' => $itemImage !== null ? assetUrl('images/' . $itemImage) : '',
                'url' => appUrl(automationSidebarItemUrl($item, $categoryUrl)),
            ];
        }
    }

    // Tier 3: individual products (existing behaviour, unchanged)
    foreach (productDetailDefinitions() as $slug => $product) {
        $haystack = mb_strtolower(implode(' ', array_filter([
            $product['title'] ?? '',
            $product['categoryLabel'] ?? ($product['categoryTitle'] ?? ''),
            $product['parentLabel'] ?? '',
        ])));

        if (mb_strpos($haystack, $needle) === false) {
            continue;
        }

        $candidates[] = [
            'tier' => 3,
            'title' => $product['title'] ?? '',
            'category' => $product['categoryLabel'] ?? ($product['categoryTitle'] ?? ''),
            'image' => isset($product['image']) ? assetUrl('images/' . $product['image']) : '',
            'url' => productDetailUrl($slug),
        ];
    }

    usort($candidates, static fn (array $a, array $b): int => $a['tier'] <=> $b['tier']);

    foreach ($candidates as $candidate) {
        unset($candidate['tier']);
        $results[] = $candidate;

        if (count($results) >= $maxResults) {
            break;
        }
    }
}

sendJson([
    'query' => $query,
    'count' => count($results),
    'results' => $results,
]);
