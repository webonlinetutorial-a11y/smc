<?php
$categorySidebar = automationSidebarCategories('pressure-control-equipment');

$electroPneumaticProducts = [
    [
        'title' => 'Electro-Pneumatic Regulator ITV Series',
        'image' => 'Pressure-Control-Equipment/Electro-Pneumatic/ITV.webp',
        'description' => '',
        'slug' => 'electro-pneumatic-regulator-itv-series',
        'detailDescription' => 'Designed for precise, stepless air or vacuum pressure control in response to electrical input signals. The compact,...',
        'detailActions' => [
            ['label' => 'Part Numbers', 'icon' => 'list', 'wide' => true],
            ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
            ['label' => 'Enquiry', 'icon' => 'circle-help'],
        ],
    ],
];

$electroPneumaticProductDetails = [];
foreach ($electroPneumaticProducts as $product) {
    $electroPneumaticProductDetails[$product['slug']] = [
        'title' => $product['title'],
        'image' => assetUrl('images/' . $product['image']),
        'description' => $product['detailDescription'],
        'actions' => $product['detailActions'],
    ];
}
?>

<main class="automation-page pressure-control-equipment-page electro-pneumatic-regulators-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro pressure-control-equipment-intro electro-pneumatic-regulators-intro" aria-labelledby="electro-pneumatic-regulators-title">
            <div class="automation-intro__content">
                <h1 id="electro-pneumatic-regulators-title">Electro-Pneumatic Regulators</h1>
                <p>For high-precision pressure control, electro-pneumatic regulators convert electrical signals into air pressure. Ideal for automation, robotics, and remote operation.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/Pressure-Control-Equipment/Electro-Pneumatic/ITV.webp')); ?>" alt="Electro-Pneumatic Regulators" loading="eager">
            </div>
        </section>

        <section class="automation-categories pressure-control-products electro-pneumatic-regulator-products" aria-label="Electro-pneumatic regulator products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'automation-pressure-control-equipment-electro-automatic-regulators-category-panel'); ?>

                <div class="automation-product-selection electro-pneumatic-regulator-selection" data-product-detail-shell>
                    <div class="automation-category-grid pressure-control-product-grid electro-pneumatic-regulator-product-grid">
                        <?php foreach ($electroPneumaticProducts as $product): ?>
                            <a
                                class="automation-category-card pressure-control-product-card electro-pneumatic-regulator-product-card"
                                href="#electro-pneumatic-regulator-detail"
                                data-product-detail-trigger
                                data-product-id="<?= e($product['slug']); ?>"
                                aria-controls="electro-pneumatic-regulator-detail"
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

                    <section class="automation-selected-product" id="electro-pneumatic-regulator-detail" data-product-detail-panel hidden aria-live="polite"></section>
                    <script type="application/json" data-product-detail-data><?= json_encode($electroPneumaticProductDetails, JSON_UNESCAPED_SLASHES); ?></script>
                </div>
            </div>
        </section>
    </div>
</main>
