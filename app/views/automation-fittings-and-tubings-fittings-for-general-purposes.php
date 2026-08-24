<?php
$categorySidebar = automationSidebarCategories('fittings-tubings');

$fittingProducts = [
    [
        'title' => 'One-touch Fittings KQ2 Series',
        'image' => 'Fittings-tube/Fittings-Generals-compressed/Fitting-KQ2-img1.webp',
        'description' => '',
        'slug' => 'one-touch-fittings-kq2-series',
        'url' => appUrl('/product-detail.php?product=one-touch-fittings-kq2-series'),
        'detailDescription' => 'Expanded product vari... Lightweight and comp... Consistent height for s... Available in two surfac...',
        'detailActions' => [
            ['label' => 'Part Numbers', 'icon' => 'list', 'wide' => true, 'url' => appUrl('/product-detail.php?product=one-touch-fittings-kq2-series#part-numbers'), 'sameTab' => true],
            ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true, 'url' => 'https://smc.incraftiv.com/smcCatalog/service/downloads/smc_media/Fittings-and-Tubings/KQ2.pdf'],
            ['label' => 'Enquiry', 'icon' => 'circle-help', 'enquiry' => true],
        ],
    ],
];

$fittingProductDetails = [];
foreach ($fittingProducts as $product) {
    $fittingProductDetails[$product['slug']] = [
        'title' => $product['title'],
        'image' => assetUrl('images/' . $product['image']),
        'description' => $product['detailDescription'],
        'actions' => $product['detailActions'],
        'url' => $product['url'] ?? null,
    ];
}
?>

<main class="automation-page fittings-tubings-page fittings-general-purpose-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro fittings-tubings-intro fittings-general-purpose-intro" aria-labelledby="fittings-general-purpose-title">
            <div class="automation-intro__content">
                <h1 id="fittings-general-purpose-title">Fittings for General Purposes</h1>
                <p>Connect with confidence using SMC's general-purpose pneumatic fittings. Leak-proof and durable, these fittings suit various tubing sizes and working environments.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/Fittings-tube/Fittings-Generals-compressed/Fitting-KQ2-img1.webp')); ?>" alt="Fittings for General Purposes" loading="eager">
            </div>
        </section>

        <section class="automation-categories fittings-tubing-products fittings-general-purpose-products" aria-label="Fittings for general purpose products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'automation-fittings-and-tubings-fittings-for-general-purposes-category-panel'); ?>

                <div class="automation-product-selection fittings-general-purpose-selection" data-product-detail-shell>
                    <div class="automation-category-grid fittings-tubing-product-grid fittings-general-purpose-product-grid">
                        <?php foreach ($fittingProducts as $product): ?>
                            <a
                                class="automation-category-card fittings-tubing-product-card fittings-general-purpose-product-card"
                                href="#fittings-general-purpose-detail"
                                data-product-detail-trigger
                                data-product-id="<?= e($product['slug']); ?>"
                                aria-controls="fittings-general-purpose-detail"
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

                    <section class="automation-selected-product" id="fittings-general-purpose-detail" data-product-detail-panel hidden aria-live="polite"></section>
                    <script type="application/json" data-product-detail-data><?= json_encode($fittingProductDetails, JSON_UNESCAPED_SLASHES); ?></script>
                </div>
            </div>
        </section>
    </div>
</main>
