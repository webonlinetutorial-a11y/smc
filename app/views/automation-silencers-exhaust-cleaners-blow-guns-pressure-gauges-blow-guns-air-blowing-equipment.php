<?php
$categorySidebar = automationSidebarCategories('silencers-exhaust');

$airBlowingEquipmentProducts = [
    [
        'title' => 'PU Series, Pulse Blow Unit',
        'image' => 'Silencer-Exhaust-Cleaner/Blow-Guns/Pulse-Blow-400.webp',
        'descriptionItems' => [
            'Intermittent pulse blow improves removal efficiency by 35% compared with continuous blow.',
        ],
        'slug' => 'air-blowing-equipment',
        'isNew' => true,
        'detailUrl' => '/product-detail.php?product=air-blowing-equipment',
        'detailImage' => 'Silencer-Exhaust-Cleaner/Blow-Guns/Pulse-Blow-400.webp',
        'detailDescriptionItems' => [
            'Intermittent pulse blow improves removal efficiency by 35% compared with continuous blow.',
        ],
        'detailActions' => [
            ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
            ['label' => 'Enquiry', 'icon' => 'circle-help'],
        ],
    ],
];

$airBlowingEquipmentProductDetails = [];
foreach ($airBlowingEquipmentProducts as $product) {
    $airBlowingEquipmentProductDetails[$product['slug']] = [
        'title' => $product['detailTitle'] ?? $product['title'],
        'series' => $product['detailSeries'] ?? '',
        'isNew' => $product['detailIsNew'] ?? false,
        'image' => assetUrl('images/' . ($product['detailImage'] ?? $product['image'])),
        'description' => $product['detailDescription'] ?? '',
        'descriptionItems' => isset($product['detailDescriptionItems']) ? $product['detailDescriptionItems'] : [],
        'url' => isset($product['detailUrl']) ? appUrl($product['detailUrl']) : '',
        'actions' => $product['detailActions'],
    ];
}
?>

<main class="automation-page silencers-exhaust-page blow-guns-page air-blowing-equipment-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro silencers-exhaust-intro blow-guns-intro air-blowing-equipment-intro" aria-labelledby="air-blowing-equipment-title">
            <div class="automation-intro__content">
                <h1 id="air-blowing-equipment-title">Air Blowing Equipment</h1>
                <p>Blow guns have a large effective area without a nozzle. Piping direction is optional from the top or bottom.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/Silencer-Exhaust-Cleaner/Blow-Guns/Pulse-Blow-245.webp')); ?>" alt="Air Blowing Equipment" loading="eager">
            </div>
        </section>

        <section class="automation-categories silencer-products blow-gun-products air-blowing-equipment-products" aria-label="Air blowing equipment products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'automation-silencers-exhaust-cleaners-blow-guns-pressure-gauges-blow-guns-air-blowing-equipment-category-panel'); ?>

                <div class="automation-product-selection air-blowing-equipment-selection" data-product-detail-shell>
                    <div class="automation-category-grid silencer-product-grid blow-gun-product-grid air-blowing-equipment-product-grid">
                        <?php foreach ($airBlowingEquipmentProducts as $product): ?>
                            <a
                                class="automation-category-card silencer-product-card blow-gun-product-card air-blowing-equipment-product-card"
                                href="#air-blowing-equipment-detail"
                                data-product-detail-trigger
                                data-product-id="<?= e($product['slug']); ?>"
                                aria-controls="air-blowing-equipment-detail"
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
                                    <?php if (!empty($product['descriptionItems'])): ?>
                                        <span>
                                            <ul class="automation-category-card__points">
                                                <?php foreach ($product['descriptionItems'] as $point): ?>
                                                    <li><?= e($point); ?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </span>
                                    <?php elseif (!empty($product['description'])): ?>
                                        <span><?= e($product['description']); ?></span>
                                    <?php endif; ?>
                                    <small>Explore <?= lucideIcon('arrow-right'); ?></small>
                                </span>
                            </a>
                        <?php endforeach; ?>
                    </div>

                    <section class="automation-selected-product" id="air-blowing-equipment-detail" data-product-detail-panel hidden aria-live="polite"></section>
                    <script type="application/json" data-product-detail-data><?= json_encode($airBlowingEquipmentProductDetails, JSON_UNESCAPED_SLASHES); ?></script>
                </div>
            </div>
        </section>
    </div>
</main>
