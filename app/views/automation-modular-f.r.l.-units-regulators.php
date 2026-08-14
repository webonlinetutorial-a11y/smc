<?php
$categorySidebar = automationSidebarCategories('modular-frl-units');

$regulatorProducts = [
    [
        'title' => 'Regulator AR-B',
        'image' => 'Modular-FRL-Unit/Regulators/AR-B.webp',
        'description' => '',
        'slug' => 'regulator-ar-b',
        'detailImage' => 'Modular-FRL-Unit/Regulators/AR20K-AR60K-B.jpg',
        'detailDescription' => 'Modular type regulator Available with a built-in... Optional embedded pr... The diaphragm is mad...',
        'detailActions' => [
            ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
            ['label' => 'Enquiry', 'icon' => 'circle-help'],
        ],
    ],
    [
        'title' => 'Regulator AR-A',
        'image' => 'Modular-FRL-Unit/Regulators/AR-A.webp',
        'description' => '',
        'slug' => 'regulator-ar-a',
        'detailDescription' => 'Modular type regulator Available with built-in b... Optional embedded pr... Rc, NPT or G(PF) threa... The diaphragm is mad...',
        'detailActions' => [
            ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
            ['label' => 'Enquiry', 'icon' => 'circle-help'],
        ],
    ],
    [
        'title' => 'Regulator AR-D',
        'image' => 'Modular-FRL-Unit/Regulators/AR-D.webp',
        'description' => '',
        'slug' => 'regulator-ar-d',
        'detailDescription' => 'Ergonomically improve... Optional integrated pre... Compatible mounting ... Bracket and set nut av... Thread types: Rc, NPT, ...',
        'detailActions' => [
            ['label' => 'Part Numbers', 'icon' => 'list', 'wide' => true],
            ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
            ['label' => 'Enquiry', 'icon' => 'circle-help'],
        ],
    ],
];

$regulatorProductDetails = [];
foreach ($regulatorProducts as $product) {
    $regulatorProductDetails[$product['slug']] = [
        'title' => $product['title'],
        'image' => assetUrl('images/' . ($product['detailImage'] ?? $product['image'])),
        'description' => $product['detailDescription'],
        'actions' => $product['detailActions'],
    ];
}
?>

<main class="automation-page modular-frl-units-page modular-regulators-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro modular-frl-units-intro modular-regulators-intro" aria-labelledby="modular-regulators-title">
            <div class="automation-intro__content">
                <h1 id="modular-regulators-title">Regulators</h1>
                <p>Maintain consistent system pressure with SMC regulators. Ideal for stable operation of cylinders, tools, and valves with precise pressure control.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/Modular-FRL-Unit/Regulators/AR-D.webp')); ?>" alt="Regulators" loading="eager">
            </div>
        </section>

        <section class="automation-categories modular-frl-products modular-regulator-products" aria-label="Regulator products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'automation-modular-f.r.l.-units-regulators-category-panel'); ?>

                <div class="automation-product-selection modular-regulator-selection" data-product-detail-shell>
                    <div class="automation-category-grid modular-frl-product-grid modular-regulator-product-grid">
                        <?php foreach ($regulatorProducts as $product): ?>
                            <a
                                class="automation-category-card modular-frl-product-card modular-regulator-product-card"
                                href="#modular-regulator-detail"
                                data-product-detail-trigger
                                data-product-id="<?= e($product['slug']); ?>"
                                aria-controls="modular-regulator-detail"
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

                    <section class="automation-selected-product" id="modular-regulator-detail" data-product-detail-panel hidden aria-live="polite"></section>
                    <script type="application/json" data-product-detail-data><?= json_encode($regulatorProductDetails, JSON_UNESCAPED_SLASHES); ?></script>
                </div>
            </div>
        </section>
    </div>
</main>
