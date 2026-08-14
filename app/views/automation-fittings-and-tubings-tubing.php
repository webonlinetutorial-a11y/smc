<?php
$categorySidebar = automationSidebarCategories('fittings-tubings');

$tubingProducts = [
    [
        'title' => 'Polyurethane Tubing TU Series',
        'image' => 'Fittings-tube/Tubing-compressed/TU.webp',
        'description' => "SMC's TU Series sets a high standard for metric-size polyurethane tubing. TUH offers hard tubing in standard and high-pressur...",
        'slug' => 'polyurethane-tubing-tu-series',
        'detailActions' => [
            ['label' => 'Part Numbers', 'icon' => 'list', 'wide' => true],
            ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
            ['label' => 'Enquiry', 'icon' => 'circle-help'],
        ],
    ],
];

$tubingProductDetails = [];
foreach ($tubingProducts as $product) {
    $tubingProductDetails[$product['slug']] = [
        'title' => $product['title'],
        'image' => assetUrl('images/' . $product['image']),
        'description' => $product['description'],
        'actions' => $product['detailActions'],
    ];
}
?>

<main class="automation-page fittings-tubings-page tubing-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro fittings-tubings-intro tubing-intro" aria-labelledby="tubing-title">
            <div class="automation-intro__content">
                <h1 id="tubing-title">Tubing</h1>
                <p>Flexible, strong, and chemical-resistant, SMC's pneumatic tubing is designed for reliable air flow. Available in various materials like polyurethane, nylon, and Teflon.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/Fittings-tube/Tubing-compressed/tubing-intro.webp')); ?>" alt="Tubing" loading="eager">
            </div>
        </section>

        <section class="automation-categories fittings-tubing-products tubing-products" aria-label="Tubing products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'automation-fittings-and-tubings-tubing-category-panel'); ?>

                <div class="automation-product-selection tubing-selection" data-product-detail-shell>
                    <div class="automation-category-grid fittings-tubing-product-grid tubing-product-grid">
                        <?php foreach ($tubingProducts as $product): ?>
                            <a
                                class="automation-category-card fittings-tubing-product-card tubing-product-card"
                                href="#tubing-detail"
                                data-product-detail-trigger
                                data-product-id="<?= e($product['slug']); ?>"
                                aria-controls="tubing-detail"
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

                    <section class="automation-selected-product" id="tubing-detail" data-product-detail-panel hidden aria-live="polite"></section>
                    <script type="application/json" data-product-detail-data><?= json_encode($tubingProductDetails, JSON_UNESCAPED_SLASHES); ?></script>
                </div>
            </div>
        </section>
    </div>
</main>
