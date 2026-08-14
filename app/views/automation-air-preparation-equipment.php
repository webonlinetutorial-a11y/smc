<?php
$airPreparationFilterUrl = '/automation-air-preparation-equipment-air-preparation-filters.php';
$airDryerUrl = '/automation-air-preparation-equipment-air-dryer.php';
$autoDrainsUrl = '/automation-air-preparation-equipment-auto-drains.php';

$categorySidebar = automationSidebarCategories('air-preparation-equipment');

$airPreparationProducts = [
    [
        'title' => 'Air Preparation Filters',
        'series' => 'AMG / Main Line Filter',
        'image' => 'Air-Preparation-Equipment/Air-Preparation-Filters.webp',
        'description' => 'SMC air preparation filters remove moisture, oil mist, and particles to protect pneumatic equipment and improve system reliability.',
        'slug' => 'air-preparation-filters',
        'url' => $airPreparationFilterUrl,
    ],
    [
        'title' => 'Air Dryer',
        'series' => 'IDFA Series',
        'image' => 'Air-Preparation-Equipment/IDFA.webp',
        'description' => 'SMC refrigerated air dryers reduce compressed air moisture for stable operation and longer service life across automation systems.',
        'slug' => 'refrigerated-air-dryer-idfa60-70-80-90-series',
        'url' => $airDryerUrl,
    ],
    [
        'title' => 'Auto Drains',
        'series' => 'AD402-A Series',
        'image' => 'Air-Preparation-Equipment/Auto-Drains.webp',
        'description' => 'SMC auto drains discharge condensate automatically from air lines, filters, and tanks to support clean compressed air supply.',
        'slug' => 'auto-drains',
        'url' => $autoDrainsUrl,
    ],
];
?>

<main class="automation-page air-preparation-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro air-preparation-intro" aria-labelledby="air-preparation-title">
            <div class="automation-intro__content">
                <h1 id="air-preparation-title">Air Preparation Equipment</h1>
                <p>SMC Air Preparation Equipment helps deliver clean, dry, and stable compressed air for reliable pneumatic automation. Filters, air dryers, and auto drains protect downstream components from moisture, oil mist, and contaminants.</p>
                <p>These products support consistent pressure quality, reduce maintenance issues, and improve the operating life of valves, actuators, and precision pneumatic systems.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/Air-Preparation-Equipment/Air-Preparation-Filters.webp')); ?>" alt="SMC air preparation equipment" loading="eager">
            </div>
        </section>

        <section class="automation-categories air-preparation-products" aria-label="Air preparation products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'automation-air-preparation-equipment-category-panel'); ?>

                <div class="automation-category-grid air-preparation-product-grid">
                    <?php foreach ($airPreparationProducts as $product): ?>
                        <a class="automation-category-card air-preparation-product-card" href="<?= e(appUrl($product['url'] ?? '/products.php?product=' . $product['slug'])); ?>">
                            <span class="automation-category-card__media">
                                <img src="<?= e(assetUrl('images/' . $product['image'])); ?>" alt="<?= e($product['title']); ?>" loading="lazy">
                            </span>
                            <span class="automation-category-card__body">
                                <strong><?= e($product['title']); ?></strong>
                                <em><?= e($product['series']); ?></em>
                                <span><?= e($product['description']); ?></span>
                                <small>Explore <?= lucideIcon('arrow-right'); ?></small>
                            </span>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </div>
</main>
