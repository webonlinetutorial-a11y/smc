<?php
$electroPneumaticRegulatorsUrl = '/automation-pressure-control-equipment-electro-automatic-regulators.php';
$regulatorsUrl = '/automation-pressure-control-equipment-regulators.php';
$boosterRegulatorsUrl = '/automation-pressure-control-equipment-booster-regulators.php';

$categorySidebar = automationSidebarCategories('pressure-control-equipment');

$pressureControlProducts = [
    [
        'title' => 'Electro-Pneumatic Regulators',
        'series' => 'ITV Series',
        'image' => 'Pressure-Control-Equipment/ITV.webp',
        'description' => 'SMC electro-pneumatic regulators provide precise electronic pressure control for automated pneumatic systems.',
        'slug' => 'electro-pneumatic-regulators',
        'url' => $electroPneumaticRegulatorsUrl,
    ],
    [
        'title' => 'Regulators',
        'series' => 'IR Series',
        'image' => 'Pressure-Control-Equipment/IR.webp',
        'description' => 'SMC regulators maintain stable outlet pressure for consistent pneumatic equipment performance and process control.',
        'slug' => 'regulators',
        'url' => $regulatorsUrl,
    ],
    [
        'title' => 'Booster Regulators',
        'series' => 'VBA Series',
        'image' => 'Pressure-Control-Equipment/VBA.webp',
        'description' => 'SMC booster regulators increase air pressure locally without requiring changes to the main compressed air supply.',
        'slug' => 'booster-regulators',
        'url' => $boosterRegulatorsUrl,
    ],
];
?>

<main class="automation-page pressure-control-equipment-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro pressure-control-equipment-intro" aria-labelledby="pressure-control-equipment-title">
            <div class="automation-intro__content">
                <h1 id="pressure-control-equipment-title">Pressure Control Equipment</h1>
                <p>SMC Pressure Control Equipment helps regulate, stabilize, and boost compressed air pressure for reliable pneumatic automation. Electro-pneumatic regulators, precision regulators, and booster regulators support accurate pressure management across machines and production systems.</p>
                <p>These products help improve repeatability, protect pneumatic components, and maintain consistent system performance where controlled air pressure is essential.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/Pressure-Control-Equipment/ITV.webp')); ?>" alt="SMC pressure control equipment" loading="eager">
            </div>
        </section>

        <section class="automation-categories pressure-control-products" aria-label="Pressure control equipment products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'automation-pressure-control-equipment-category-panel'); ?>

                <div class="automation-category-grid pressure-control-product-grid">
                    <?php foreach ($pressureControlProducts as $product): ?>
                        <a class="automation-category-card pressure-control-product-card" href="<?= e(appUrl($product['url'] ?? '/products.php?product=' . $product['slug'])); ?>">
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
