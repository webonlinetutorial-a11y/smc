<?php
$categorySidebar = automationSidebarCategories('modular-frl-units');

$residualPressureReleaseValveProducts = [
    [
        'title' => 'VP346E/VP546E/746E/VP946E Series, Residual Pressure Release Valve',
        'image' => 'Modular-FRL-Unit/Residual-Pressure -Release-Valve/Modular-P-C1-14.webp',
        'description' => '',
        'slug' => 'residual-pressure-release-valve',
        'isNew' => true,
        'detailUrl' => '/product-detail.php?product=residual-pressure-release-valve',
        'detailDescriptionItems' => [
            'Can be connected to F.R.L. units',
        ],
        'detailActions' => [
            ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
            ['label' => 'Enquiry', 'icon' => 'circle-help'],
        ],
    ],
];

$residualPressureReleaseValveProductDetails = [];
foreach ($residualPressureReleaseValveProducts as $product) {
    $residualPressureReleaseValveProductDetails[$product['slug']] = [
        'title' => $product['detailTitle'] ?? $product['title'],
        'image' => assetUrl('images/' . ($product['detailImage'] ?? $product['image'])),
        'description' => $product['detailDescription'] ?? '',
        'descriptionItems' => isset($product['detailDescriptionItems']) ? $product['detailDescriptionItems'] : [],
        'url' => isset($product['detailUrl']) ? appUrl($product['detailUrl']) : '',
        'actions' => $product['detailActions'],
    ];
}
?>

<main class="automation-page modular-frl-units-page residual-pressure-release-valve-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro modular-frl-units-intro residual-pressure-release-valve-intro" aria-labelledby="residual-pressure-release-valve-title">
            <div class="automation-intro__content">
                <h1 id="residual-pressure-release-valve-title">Modular F.R.L. Units AC D</h1>
                <p>AC-D are certified for air purity classes according to ISO8573-1:2010. Featuring a clean, uniform design with a double-layer, transparent polycarbonate bowl and ergonomic handle, these units offer improved environmental resistance. The transparent bowl guard ensures better visibility (360°) and easier element replacement, while the built-in square pressure gauge offers enhanced monitoring.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/Modular-FRL-Unit/Residual-Pressure -Release-Valve/Modular-P-C1-14.webp')); ?>" alt="Modular F.R.L. Units AC D" loading="eager">
            </div>
        </section>

        <section class="automation-categories modular-frl-products residual-pressure-release-valve-products" aria-label="Residual pressure release valve products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'automation-modular-f.r.l.-units-3-port-solenoid-valve-modular-type-residual-pressure-release-valve-category-panel'); ?>

                <div class="automation-product-selection residual-pressure-release-valve-selection" data-product-detail-shell>
                    <div class="automation-category-grid modular-frl-product-grid residual-pressure-release-valve-product-grid">
                        <?php foreach ($residualPressureReleaseValveProducts as $product): ?>
                            <a
                                class="automation-category-card modular-frl-product-card residual-pressure-release-valve-product-card"
                                href="#residual-pressure-release-valve-detail"
                                data-product-detail-trigger
                                data-product-id="<?= e($product['slug']); ?>"
                                aria-controls="residual-pressure-release-valve-detail"
                                aria-expanded="false"
                            >
                                <?php if (!empty($product['isNew'])): ?>
                                    <span class="automation-category-card__ribbon">New</span>
                                <?php endif; ?>
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

                    <section class="automation-selected-product" id="residual-pressure-release-valve-detail" data-product-detail-panel hidden aria-live="polite"></section>
                    <script type="application/json" data-product-detail-data><?= json_encode($residualPressureReleaseValveProductDetails, JSON_UNESCAPED_SLASHES); ?></script>
                </div>
            </div>
        </section>
    </div>
</main>
