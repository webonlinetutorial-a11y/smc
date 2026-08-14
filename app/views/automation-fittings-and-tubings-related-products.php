<?php
$categorySidebar = automationSidebarCategories('fittings-tubings');

$relatedProducts = [
    [
        'title' => 'Tube Cutter TK Series',
        'image' => 'Fittings-tube/Related-Product-compressed/tube-cutter.webp',
        'description' => 'The TK Series Tube Cutter delivers precise, perpendicular cuts, helping eliminate air leakage right at the source. Designed...',
        'slug' => 'tube-cutter-tk-series',
        'detailActions' => [
            ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
            ['label' => 'Enquiry', 'icon' => 'circle-help'],
        ],
    ],
];

$relatedProductDetails = [];
foreach ($relatedProducts as $product) {
    $relatedProductDetails[$product['slug']] = [
        'title' => $product['title'],
        'image' => assetUrl('images/' . $product['image']),
        'description' => $product['description'],
        'actions' => $product['detailActions'],
    ];
}
?>

<main class="automation-page fittings-tubings-page related-products-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro fittings-tubings-intro related-products-intro" aria-labelledby="related-products-title">
            <div class="automation-intro__content">
                <h1 id="related-products-title">Related Products</h1>
                <p>Explore a wide range of related pneumatic accessories from SMC - from brackets and mounting kits to tubing holders and manifold blocks - all designed to optimize your setup.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/Fittings-tube/Related-Product-compressed/TK-intro.webp')); ?>" alt="Related Products" loading="eager">
            </div>
        </section>

        <section class="automation-categories fittings-tubing-products related-product-grid-section" aria-label="Related products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'automation-fittings-and-tubings-related-products-category-panel'); ?>

                <div class="automation-product-selection related-product-selection" data-product-detail-shell>
                    <div class="automation-category-grid fittings-tubing-product-grid related-product-grid">
                        <?php foreach ($relatedProducts as $product): ?>
                            <a
                                class="automation-category-card fittings-tubing-product-card related-product-card"
                                href="#related-product-detail"
                                data-product-detail-trigger
                                data-product-id="<?= e($product['slug']); ?>"
                                aria-controls="related-product-detail"
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

                    <section class="automation-selected-product" id="related-product-detail" data-product-detail-panel hidden aria-live="polite"></section>
                    <script type="application/json" data-product-detail-data><?= json_encode($relatedProductDetails, JSON_UNESCAPED_SLASHES); ?></script>
                </div>
            </div>
        </section>
    </div>
</main>
