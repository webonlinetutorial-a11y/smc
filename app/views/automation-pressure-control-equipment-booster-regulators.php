<?php
$categorySidebar = automationSidebarCategories('pressure-control-equipment');

$boosterRegulatorProducts = [
    [
        'title' => 'Booster Regulator VBA Series',
        'image' => 'Pressure-Control-Equipment/Booster-Regulator/VBA.webp',
        'description' => 'The VBA Series booster regulator enhances factory air pressure by up to 200%, without the need for an external power source. By...',
        'slug' => 'booster-regulator-vba-series',
        'detailDescription' => 'The VBA Series booster regulator enhances factory air pressure by up to 200% without the need for an external power source. By...',
        'detailActions' => [
            ['label' => 'Part Numbers', 'icon' => 'list', 'wide' => true],
            ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
            ['label' => 'Enquiry', 'icon' => 'circle-help'],
        ],
    ],
    [
        'title' => 'Booster Regulator VBA10A/11A Series',
        'image' => 'Pressure-Control-Equipment/Booster-Regulator/VBA10A.webp',
        'description' => '',
        'slug' => 'booster-regulator-vba10a-11a-series',
        'detailDescription' => 'Increase factory air pre... Air-only operation requi... Air consumption: Max. ... Max. flow rate: 10% inc... Charging time: Max. 30...',
        'detailActions' => [
            ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
            ['label' => 'Video', 'icon' => 'circle-play'],
            ['label' => 'Enquiry', 'icon' => 'circle-help'],
        ],
    ],
];

$boosterRegulatorProductDetails = [];
foreach ($boosterRegulatorProducts as $product) {
    $boosterRegulatorProductDetails[$product['slug']] = [
        'title' => $product['title'],
        'image' => assetUrl('images/' . $product['image']),
        'description' => $product['detailDescription'],
        'actions' => $product['detailActions'],
    ];
}
?>

<main class="automation-page pressure-control-equipment-page booster-regulators-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro pressure-control-equipment-intro booster-regulators-intro" aria-labelledby="booster-regulators-title">
            <div class="automation-intro__content">
                <h1 id="booster-regulators-title">Booster Regulators</h1>
                <p>Increase air pressure without using additional compressors. SMC booster regulators deliver efficient pressure amplification for high-demand tools and processes.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/Pressure-Control-Equipment/Booster-Regulator/VBA.webp')); ?>" alt="Booster Regulators" loading="eager">
            </div>
        </section>

        <section class="automation-categories pressure-control-products booster-regulator-products" aria-label="Booster regulator products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'automation-pressure-control-equipment-booster-regulators-category-panel'); ?>

                <div class="automation-product-selection booster-regulator-selection" data-product-detail-shell>
                    <div class="automation-category-grid pressure-control-product-grid booster-regulator-product-grid">
                        <?php foreach ($boosterRegulatorProducts as $product): ?>
                            <a
                                class="automation-category-card pressure-control-product-card booster-regulator-product-card"
                                href="#booster-regulator-detail"
                                data-product-detail-trigger
                                data-product-id="<?= e($product['slug']); ?>"
                                aria-controls="booster-regulator-detail"
                                aria-expanded="false"
                            >
                                <span class="automation-category-card__media">
                                    <img src="<?= e(assetUrl('images/' . $product['image'])); ?>" alt="<?= e($product['title']); ?>" loading="lazy">
                                </span>
                                <span class="automation-category-card__body">
                                    <strong><?= e($product['title']); ?></strong>
                                    <?php if ($product['description'] !== ''): ?>
                                        <span><?= e($product['description']); ?></span>
                                    <?php endif; ?>
                                    <small>Explore <?= lucideIcon('arrow-right'); ?></small>
                                </span>
                            </a>
                        <?php endforeach; ?>
                    </div>

                    <section class="automation-selected-product" id="booster-regulator-detail" data-product-detail-panel hidden aria-live="polite"></section>
                    <script type="application/json" data-product-detail-data><?= json_encode($boosterRegulatorProductDetails, JSON_UNESCAPED_SLASHES); ?></script>
                </div>
            </div>
        </section>
    </div>
</main>
