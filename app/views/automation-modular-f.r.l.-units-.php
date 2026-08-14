<?php
$modularFrlAirCombinationUrl = '/automation-modular-f.r.l.-units-modular-f.r.l.-units-air-combination.php';
$filterRegulatorsUrl = '/automation-modular-f.r.l.-units-filter-regulators.php';
$airFiltersUrl = '/automation-modular-f.r.l.-units-air-filters.php';
$modularRegulatorsUrl = '/automation-modular-f.r.l.-units-regulators.php';

$categorySidebar = automationSidebarCategories('modular-frl-units');

$modularFrlProducts = [
    [
        'title' => 'Modular F.R.L. Units/Air Combination',
        'series' => 'AC-D Series',
        'image' => 'Modular-FRL-Unit/AC-D.webp',
        'description' => 'SMC modular F.R.L. air combination units integrate filtration, pressure regulation, and lubrication for compact air preparation.',
        'slug' => 'modular-frl-units-air-combination',
        'url' => $modularFrlAirCombinationUrl,
    ],
    [
        'title' => 'Filter Regulators',
        'series' => 'AW-D Series',
        'image' => 'Modular-FRL-Unit/AW-D.webp',
        'description' => 'SMC filter regulators combine particle removal and pressure regulation to support clean, stable compressed air delivery.',
        'slug' => 'filter-regulators',
        'url' => $filterRegulatorsUrl,
    ],
    [
        'title' => 'Air Filters',
        'series' => 'AF-D Series',
        'image' => 'Modular-FRL-Unit/AF-D.webp',
        'description' => 'SMC air filters remove contaminants from compressed air lines to help protect pneumatic valves, actuators, and instruments.',
        'slug' => 'air-filters',
        'url' => $airFiltersUrl,
    ],
    [
        'title' => 'Regulators',
        'series' => 'AR-D Series',
        'image' => 'Modular-FRL-Unit/AR-D.webp',
        'description' => 'SMC modular regulators maintain consistent outlet pressure for reliable pneumatic equipment operation.',
        'slug' => 'modular-regulators',
        'url' => $modularRegulatorsUrl,
    ],
];
?>

<main class="automation-page modular-frl-units-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro modular-frl-units-intro" aria-labelledby="modular-frl-units-title">
            <div class="automation-intro__content">
                <h1 id="modular-frl-units-title">Modular F.R.L. Units</h1>
                <p>SMC Modular F.R.L. Units combine air filtration, pressure regulation, and lubrication functions into compact air preparation assemblies. These products help deliver clean, stable compressed air to pneumatic machinery and automation systems.</p>
                <p>Modular designs make installation, maintenance, and expansion easier while supporting dependable air quality and pressure control across industrial compressed air networks.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/Modular-FRL-Unit/AC-D.webp')); ?>" alt="SMC modular F.R.L. units" loading="eager">
            </div>
        </section>

        <section class="automation-categories modular-frl-products" aria-label="Modular F.R.L. unit products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'automation-modular-f.r.l.-units--category-panel'); ?>

                <div class="automation-category-grid modular-frl-product-grid">
                    <?php foreach ($modularFrlProducts as $product): ?>
                        <a class="automation-category-card modular-frl-product-card" href="<?= e(appUrl($product['url'] ?? '/products.php?product=' . $product['slug'])); ?>">
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
