<?php
$categorySidebar = automationSidebarCategories('vacuum-equipment');

$vacuumPadProducts = [
    [
        'title' => 'ZP',
        'image' => 'Vaccum-Equipment-Ejectors/Vaccum-Equipment-Ejectors-compressed/Vacuum Pad/ZP.webp',
        'description' => 'The ZP Series offers compact, box-shaped vacuum ejectors with body-ported design for easy installation in tight spaces.',
        'slug' => 'zp',
        'items' => [
            [
                'title' => 'Basic Vacuum Pad ZP',
                'image' => 'Vaccum-Equipment-Ejectors/Vaccum-Equipment-Ejectors-compressed/Vacuum Pad/ZP.jpg',
                'description' => 'The Basic Vacuum Pad ZP provides reliable, general-purpose gripping with a simple design suited for a variety of flat and slightly...',
                'detailUrl' => '/product-detail.php?product=basic-vacuum-pad-zp',
                'actions' => [
                    ['label' => 'Part Numbers', 'icon' => 'list', 'wide' => true, 'url' => appUrl('/product-detail.php?product=basic-vacuum-pad-zp#part-numbers'), 'sameTab' => true],
                    ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
                    ['label' => 'Enquiry', 'icon' => 'circle-help'],
                ],
            ],
            [
                'title' => 'Oval Vacuum Pad ZP/ZP2',
                'image' => 'Vaccum-Equipment-Ejectors/Vaccum-Equipment-Ejectors-compressed/Vacuum Pad/ZP2.jpg',
                'description' => 'The Oval Vacuum Pad ZP/ZP2 features an elongated shape for improved contact area and stable gripping on uneven...',
                'detailUrl' => '/product-detail.php?product=oval-vacuum-pad-zp-zp2',
                'actions' => [
                    ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
                    ['label' => 'Enquiry', 'icon' => 'circle-help'],
                ],
            ],
        ],
    ],
];

$vacuumPadProductDetails = [];
foreach ($vacuumPadProducts as $product) {
    $items = [];
    foreach ($product['items'] as $item) {
        $items[] = [
            'title' => $item['title'],
            'image' => assetUrl('images/' . $item['image']),
            'description' => $item['description'],
            'url' => isset($item['detailUrl']) ? appUrl($item['detailUrl']) : '',
            'actions' => $item['actions'],
        ];
    }

    $vacuumPadProductDetails[$product['slug']] = [
        'items' => $items,
    ];
}
?>

<main class="automation-page vacuum-equipment-page vacuum-pad-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro vacuum-equipment-intro vacuum-pad-intro" aria-labelledby="vacuum-pad-title">
            <div class="automation-intro__content">
                <h1 id="vacuum-pad-title">Vacuum Pad</h1>
                <p>SMC Vacuum Pads ensure secure and damage-free workpiece handling. Offered in various shapes and materials (flat, bellows, oval, silicone, urethane), they adapt to different surfaces and are perfect for glass, metal, food packaging, and delicate components. Compatible with all SMC vacuum generators for optimized gripping solutions.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/Vaccum-Equipment-Ejectors/Vaccum-Equipment-Ejectors-compressed/Vacuum Pad/vacuum-pad-intro.webp')); ?>" alt="Vacuum Pad" loading="eager">
            </div>
        </section>

        <section class="automation-categories vacuum-pad-products" aria-label="Vacuum pad products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'automation-vacuum-equipment-vacuum-ejectors-vacuum-pad-category-panel'); ?>

                <div class="automation-product-selection vacuum-pad-selection" data-product-detail-shell>
                    <div class="automation-category-grid vacuum-pad-product-grid">
                        <?php foreach ($vacuumPadProducts as $product): ?>
                            <a
                                class="automation-category-card vacuum-product-card vacuum-pad-product-card"
                                href="#vacuum-pad-detail"
                                data-product-detail-trigger
                                data-product-id="<?= e($product['slug']); ?>"
                                aria-controls="vacuum-pad-detail"
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

                    <section class="automation-selected-product" id="vacuum-pad-detail" data-product-detail-panel hidden aria-live="polite"></section>
                    <script type="application/json" data-product-detail-data><?= json_encode($vacuumPadProductDetails, JSON_UNESCAPED_SLASHES); ?></script>
                </div>
            </div>
        </section>
    </div>
</main>
