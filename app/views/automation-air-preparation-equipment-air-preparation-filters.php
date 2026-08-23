<?php
$airPreparationFilterUrl = '/automation-air-preparation-equipment-air-preparation-filters.php';
$airDryerUrl = '/automation-air-preparation-equipment-air-dryer.php';
$autoDrainsUrl = '/automation-air-preparation-equipment-auto-drains.php';

$categorySidebar = automationSidebarCategories('air-preparation-equipment');

$airPreparationFilterProducts = [
    [
        'title' => 'Water Separator AMG',
        'image' => 'Air-Preparation-Equipment/Air-preparation-filter/AMG.webp',
        'description' => 'Designed for installation near air preparation lines, the AMG Series effectively removes water droplets from compressed air. With zero...',
        'slug' => 'water-separator-amg',
        'detailTitle' => 'Water Separator AMG',
        'detailUrl' => '/product-detail.php?product=water-separator-amg',
        'detailImage' => 'Air-Preparation-Equipment/Air-preparation-filter/AMG-img1.webp',
        'detailDescription' => 'Designed for installation on air pressure lines, the AMG Series effectively removes water droplets from compressed air. With seve...',
        'detailActions' => [
            ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true, 'url' => appUrl('/catalogs/water-separator-amg.pdf')],
            ['label' => 'Enquiry', 'icon' => 'circle-help'],
        ],
    ],
    [
        'title' => 'Main Line Filter AFF',
        'image' => 'Air-Preparation-Equipment/Air-preparation-filter/main-line-filter.webp',
        'description' => 'The AFF Series main line filter effectively removes both water droplets and solid particles from compressed air...',
        'slug' => 'main-line-filter-aff',
        'detailTitle' => 'Main Line Filter AFF Series',
        'detailUrl' => '/product-detail.php?product=main-line-filter-aff',
        'detailImage' => 'Air-Preparation-Equipment/Air-preparation-filter/main-line-filter-img1.webp',
        'detailDescription' => 'The AFF Series main line filter effectively removes both water droplets and solid particles from compressed air.',
        'detailActions' => [
            ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true, 'url' => appUrl('/catalogs/main-line-filter-aff.pdf')],
            ['label' => 'Enquiry', 'icon' => 'circle-help'],
        ],
    ],
    [
        'title' => 'Modular Connection Type Line Filter AFF',
        'image' => 'Air-Preparation-Equipment/Air-preparation-filter/modular-connection-type-line-filter.webp',
        'description' => 'The AFF Series main line filter effectively removes both water droplets and solid particles from compressed air. Its...',
        'slug' => 'modular-connection-type-line-filter-aff',
        'detailTitle' => 'Modular Connection Type Line filter AFF',
        'detailUrl' => '/product-detail.php?product=modular-connection-type-line-filter-aff',
        'detailImage' => 'Air-Preparation-Equipment/Air-preparation-filter/modular-connection-type-line-filter-img1.webp',
        'detailDescription' => 'The AFF Series main line filter effectively removes both water droplets and solid particles from compressed air. By...',
        'detailActions' => [
            ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true, 'url' => appUrl('/catalogs/modular-connection-type-line-filter-aff.pdf')],
            ['label' => 'Enquiry', 'icon' => 'circle-help'],
        ],
    ],
];

$airPreparationFilterProductDetails = [];

foreach ($airPreparationFilterProducts as $product) {
    $airPreparationFilterProductDetails[$product['slug']] = [
        'title' => $product['detailTitle'],
        'image' => assetUrl('images/' . ($product['detailImage'] ?? $product['image'])),
        'description' => $product['detailDescription'],
        'actions' => $product['detailActions'],
        'url' => isset($product['detailUrl']) ? appUrl($product['detailUrl']) : '',
    ];
}
?>

<main class="automation-page air-preparation-page air-preparation-filters-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro air-preparation-intro air-preparation-filters-intro" aria-labelledby="air-preparation-filters-title">
            <div class="automation-intro__content">
                <h1 id="air-preparation-filters-title">Air Preparation Filters</h1>
                <p>SMC's air filters remove dust, oil, and moisture from compressed air. Improve system efficiency and protect sensitive components with high-performance filtration.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/Air-Preparation-Equipment/Air-preparation-filter/AMG.webp')); ?>" alt="Air Preparation Filters" loading="eager">
            </div>
        </section>

        <section class="automation-categories air-preparation-products air-preparation-filter-products" aria-label="Air preparation filter products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'automation-air-preparation-equipment-air-preparation-filters-category-panel'); ?>

                <div class="automation-product-selection air-preparation-filter-selection" data-product-detail-shell>
                <div class="automation-category-grid air-preparation-product-grid air-preparation-filter-product-grid">
                    <?php foreach ($airPreparationFilterProducts as $product): ?>
                        <a
                            class="automation-category-card air-preparation-product-card air-preparation-filter-product-card"
                            href="#air-preparation-filter-detail"
                            data-product-detail-trigger
                            data-product-id="<?= e($product['slug']); ?>"
                            aria-controls="air-preparation-filter-detail"
                            aria-expanded="false"
                        >
                            <span class="automation-category-card__media">
                                <img src="<?= e(assetUrl('images/' . $product['image'])); ?>" alt="<?= e($product['title']); ?>" loading="lazy">
                            </span>
                            <span class="automation-category-card__body">
                                <strong><?= e($product['title']); ?></strong>
                                <span><?= e($product['description']); ?></span>
                                <small>Explore <?= lucideIcon('arrow-right'); ?></small>
                            </span>
                        </a>
                    <?php endforeach; ?>
                </div>

                <section class="automation-selected-product" id="air-preparation-filter-detail" data-product-detail-panel hidden aria-live="polite"></section>
                <script type="application/json" data-product-detail-data><?= json_encode($airPreparationFilterProductDetails, JSON_UNESCAPED_SLASHES); ?></script>
                </div>
            </div>
        </section>
    </div>
</main>
