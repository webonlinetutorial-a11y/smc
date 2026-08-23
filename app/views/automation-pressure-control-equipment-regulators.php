<?php
$categorySidebar = automationSidebarCategories('pressure-control-equipment');

$regulatorProducts = [
    [
        'title' => 'Precision Regulator IR',
        'image' => 'Pressure-Control-Equipment/Regulator/IR.webp',
        'description' => 'IR series precision regulators offer fine pressure control from 0.005 MPa, making them ideal for instrumentation...',
        'slug' => 'precision-regulator-ir',
        'detailItems' => [
            [
                'title' => 'Precision Regulator IR1000/2000/3000...',
                'image' => 'Pressure-Control-Equipment/Regulator/IR.webp',
                'description' => 'The IR Series precision regulator offers flexible installation, with bracket and pressure gauge mountable from two...',
                'url' => appUrl('/product-detail.php?product=precision-regulator-ir1000-2000-3000-series'),
                'actions' => [
                    ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
                    ['label' => 'Enquiry', 'icon' => 'circle-help'],
                ],
            ],
            [
                'title' => 'Regulator IR1200-A/2200-A/3200-A...',
                'image' => 'Pressure-Control-Equipment/Regulator/Regulator IR1200.jpg',
                'description' => 'Precision Regulator: IR Series',
                'url' => appUrl('/product-detail.php?product=regulator-ir1200-a-2200-a-3200-a-series'),
                'actions' => [
                    ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
                    ['label' => 'Enquiry', 'icon' => 'circle-help'],
                ],
            ],
            [
                'title' => 'Precision Regulator IR1000-A/2000-...',
                'image' => 'Pressure-Control-Equipment/Regulator/Precision Regulator IR1000.jpg',
                'url' => appUrl('/product-detail.php?product=precision-regulator-ir1000-a-2000-a-3000-a-series'),
                'description' => 'Air consumption: Redu... High flow rate: Up to ap... Lightweight: Reduced b... Sensitivity: 0.2% (Full s... Repeatability: ±0.5% (F...',
                'actions' => [
                    ['label' => 'Part Numbers', 'icon' => 'list', 'wide' => true, 'url' => appUrl('/product-detail.php?product=precision-regulator-ir1000-a-2000-a-3000-a-series#part-numbers'), 'sameTab' => true],
                    ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
                    ['label' => 'Enquiry', 'icon' => 'circle-help'],
                ],
            ],
        ],
    ],
];

$regulatorProductDetails = [];
foreach ($regulatorProducts as $product) {
    $regulatorProductDetails[$product['slug']] = [
        'items' => array_map(
            function ($item) {
                $item['image'] = assetUrl('images/' . $item['image']);
                return $item;
            },
            $product['detailItems']
        ),
    ];
}
?>

<main class="automation-page pressure-control-equipment-page regulators-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro pressure-control-equipment-intro regulators-intro" aria-labelledby="regulators-title">
            <div class="automation-intro__content">
                <h1 id="regulators-title">Regulators</h1>
                <p>Maintain consistent system pressure with SMC regulators. Ideal for stable operation of cylinders, tools, and valves with precise pressure control.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/Pressure-Control-Equipment/Regulator/IR.webp')); ?>" alt="Regulators" loading="eager">
            </div>
        </section>

        <section class="automation-categories pressure-control-products regulator-products" aria-label="Regulator products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'automation-pressure-control-equipment-regulators-category-panel'); ?>

                <div class="automation-product-selection regulator-selection" data-product-detail-shell>
                    <div class="automation-category-grid pressure-control-product-grid regulator-product-grid">
                        <?php foreach ($regulatorProducts as $product): ?>
                            <a
                                class="automation-category-card pressure-control-product-card regulator-product-card"
                                href="#regulator-detail"
                                data-product-detail-trigger
                                data-product-id="<?= e($product['slug']); ?>"
                                aria-controls="regulator-detail"
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

                    <section class="automation-selected-product" id="regulator-detail" data-product-detail-panel hidden aria-live="polite"></section>
                    <script type="application/json" data-product-detail-data><?= json_encode($regulatorProductDetails, JSON_UNESCAPED_SLASHES); ?></script>
                </div>
            </div>
        </section>
    </div>
</main>
