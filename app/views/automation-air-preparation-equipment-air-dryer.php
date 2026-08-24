<?php
$airPreparationFilterUrl = '/automation-air-preparation-equipment-air-preparation-filters.php';
$airDryerUrl = '/automation-air-preparation-equipment-air-dryer.php';
$autoDrainsUrl = '/automation-air-preparation-equipment-auto-drains.php';

$categorySidebar = automationSidebarCategories('air-preparation-equipment');

$airDryerProducts = [
    [
        'title' => 'Refrigerated Air Dryer IDFA60/70/80/90...',
        'image' => 'Air-Preparation-Equipment/Air-dryer/IDFA.webp',
        'description' => 'The IDFA*E Series refrigerated air dryers are ideal for aftercooled compressed air systems using compressors up to...',
        'slug' => 'refrigerated-air-dryer-idfa60-70-80-90',
        'detailTitle' => 'Refrigerated Air Dryer IDFA60/70/80/90 Series',
        'detailUrl' => '/product-detail.php?product=refrigerated-air-dryer-idfa60-70-80-90-series',
        'detailImage' => 'Air-Preparation-Equipment/Air-dryer/IDFA-img1.webp',
        'detailDescription' => 'The IDFA*E Series refrigerated air dryers are ideal for aftercooled compressed air systems using compressors up to...',
        'detailActions' => [
            ['label' => 'Part Numbers', 'icon' => 'list', 'wide' => true, 'url' => appUrl('/product-detail.php?product=refrigerated-air-dryer-idfa60-70-80-90-series#part-numbers'), 'sameTab' => true],
            ['label' => 'Enquiry', 'icon' => 'circle-help'],
        ],
    ],
];

$airDryerProductDetails = [];
foreach ($airDryerProducts as $product) {
    $airDryerProductDetails[$product['slug']] = [
        'title' => $product['detailTitle'],
        'image' => assetUrl('images/' . ($product['detailImage'] ?? $product['image'])),
        'description' => $product['detailDescription'],
        'actions' => $product['detailActions'],
        'url' => isset($product['detailUrl']) ? appUrl($product['detailUrl']) : '',
    ];
}
?>

<main class="automation-page air-preparation-page air-dryer-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro air-preparation-intro air-dryer-intro" aria-labelledby="air-dryer-title">
            <div class="automation-intro__content">
                <h1 id="air-dryer-title">Air Dryer</h1>
                <p>Ensure dry, moisture-free air in your pneumatic system with SMC air dryers. Ideal for sensitive applications requiring dew point control, energy efficiency, and reliability.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/Air-Preparation-Equipment/Air-dryer/IDFA.webp')); ?>" alt="Air Dryer" loading="eager">
            </div>
        </section>

        <section class="automation-categories air-preparation-products air-dryer-products" aria-label="Air dryer products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'automation-air-preparation-equipment-air-dryer-category-panel'); ?>

                <div class="automation-product-selection air-dryer-selection" data-product-detail-shell>
                    <div class="automation-category-grid air-preparation-product-grid air-dryer-product-grid">
                        <?php foreach ($airDryerProducts as $product): ?>
                            <a
                                class="automation-category-card air-preparation-product-card air-dryer-product-card"
                                href="#air-dryer-detail"
                                data-product-detail-trigger
                                data-product-id="<?= e($product['slug']); ?>"
                                aria-controls="air-dryer-detail"
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

                    <section class="automation-selected-product" id="air-dryer-detail" data-product-detail-panel hidden aria-live="polite"></section>
                    <script type="application/json" data-product-detail-data><?= json_encode($airDryerProductDetails, JSON_UNESCAPED_SLASHES); ?></script>
                </div>
            </div>
        </section>
    </div>
</main>
