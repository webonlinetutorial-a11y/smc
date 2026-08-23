<?php
$categorySidebar = automationSidebarCategories('fittings-tubings');

$couplerProducts = [
    [
        'title' => 'S Couplers KK/KKH Series',
        'image' => 'Fittings-tube/Fittings-General-Purpose-Coupler-compressed/S-Couplers-img1.webp',
        'description' => 'The KK/KKH series S Couplers feature a unique, spring-free connection design that eliminates the need for steel balls or valv...',
        'slug' => 's-couplers-kk-kkh-series',
        'url' => appUrl('/product-detail.php?product=s-couplers-kk-kkh-series'),
        'detailActions' => [
            ['label' => 'Part Numbers', 'icon' => 'list', 'wide' => true, 'url' => appUrl('/product-detail.php?product=s-couplers-kk-kkh-series#part-numbers'), 'sameTab' => true],
            ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true, 'url' => 'https://smc.incraftiv.com/smcCatalog/service/downloads/smc_media/Fittings-and-Tubings/KK-KKH_en.pdf'],
            ['label' => 'Enquiry', 'icon' => 'circle-help', 'enquiry' => true],
        ],
    ],
];

$couplerProductDetails = [];
foreach ($couplerProducts as $product) {
    $couplerProductDetails[$product['slug']] = [
        'title' => $product['title'],
        'image' => assetUrl('images/' . $product['image']),
        'description' => $product['description'],
        'actions' => $product['detailActions'],
        'url' => $product['url'] ?? null,
    ];
}
?>

<main class="automation-page fittings-tubings-page fittings-couplers-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro fittings-tubings-intro fittings-couplers-intro" aria-labelledby="fittings-couplers-title">
            <div class="automation-intro__content">
                <h1 id="fittings-couplers-title">Fittings for General Purposes(S Couplers/Multi-connectors)</h1>
                <p>Simplify your setup with S couplers and multi-connectors - quick-connect solutions that allow fast changes and modular configurations in pneumatic systems.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/Fittings-tube/Fittings-General-Purpose-Coupler-compressed/KK-KKH-intro.webp')); ?>" alt="Fittings for General Purposes(S Couplers/Multi-connectors)" loading="eager">
            </div>
        </section>

        <section class="automation-categories fittings-tubing-products fittings-coupler-products" aria-label="Fittings coupler products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'automation-fittings-and-tubings-fittings-for-general-purposes-s-couplers-multi-connectors-category-panel'); ?>

                <div class="automation-product-selection fittings-coupler-selection" data-product-detail-shell>
                    <div class="automation-category-grid fittings-tubing-product-grid fittings-coupler-product-grid">
                        <?php foreach ($couplerProducts as $product): ?>
                            <a
                                class="automation-category-card fittings-tubing-product-card fittings-coupler-product-card"
                                href="#fittings-coupler-detail"
                                data-product-url="<?= e($product['url'] ?? ''); ?>"
                                data-product-detail-trigger
                                data-product-id="<?= e($product['slug']); ?>"
                                aria-controls="fittings-coupler-detail"
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

                    <section class="automation-selected-product" id="fittings-coupler-detail" data-product-detail-panel hidden aria-live="polite"></section>
                    <script type="application/json" data-product-detail-data><?= json_encode($couplerProductDetails, JSON_UNESCAPED_SLASHES); ?></script>
                </div>
            </div>
        </section>
    </div>
</main>
