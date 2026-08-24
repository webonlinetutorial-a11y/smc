<?php
$categorySidebar = automationSidebarCategories('vacuum-equipment');

$vacuumEjectorProducts = [
    [
        'title' => 'Body Ported Type/Box Type',
        'image' => 'Vaccum-Equipment-Ejectors/Vaccum-Equipment-Ejectors-compressed/Vaccum-Ejector/ZH.webp',
        'description' => 'Compact and space-saving, Body Ported (Box Type) Vacuum Ejectors feature a body-integrated port design for easy piping and flexibl...',
        'slug' => 'body-ported-type-box-type',
        'detailUrl' => '/product-detail.php?product=zh-series-vacuum-ejector-body-ported-box-type',
        'detailTitle' => 'ZH Series Vacuum Ejector Body Ported...',
        'detailDescription' => 'The ZH Series offers compact, body-ported (box type) vacuum ejectors with an integrated silencer for quieter operation. Designe...',
        'detailActions' => [
            ['label' => 'Part Numbers', 'icon' => 'list', 'wide' => true, 'url' => appUrl('/product-detail.php?product=zh-series-vacuum-ejector-body-ported-box-type#part-numbers'), 'sameTab' => true],
            ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
            ['label' => 'Video', 'icon' => 'circle-play', 'videoUrl' => 'https://www.youtube.com/watch?v=VXJE6OHi6MA'],
            ['label' => 'Enquiry', 'icon' => 'circle-help'],
        ],
    ],
];

$vacuumEjectorProductDetails = [];
foreach ($vacuumEjectorProducts as $product) {
    $vacuumEjectorProductDetails[$product['slug']] = [
        'title' => $product['detailTitle'] ?? $product['title'],
        'image' => assetUrl('images/' . $product['image']),
        'description' => $product['detailDescription'],
        'url' => isset($product['detailUrl']) ? appUrl($product['detailUrl']) : '',
        'actions' => $product['detailActions'],
    ];
}
?>

<main class="automation-page vacuum-equipment-page vacuum-ejector-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro vacuum-equipment-intro vacuum-ejector-intro" aria-labelledby="vacuum-ejector-title">
            <div class="automation-intro__content">
                <h1 id="vacuum-ejector-title">Vacuum Ejector</h1>
                <p>SMC's Vacuum Ejectors offer compact, lightweight, and energy-efficient vacuum generation for industrial automation. Available in inline, compact, and manifold types (e.g., ZH, ZX, ZL series), they provide fast response and optional integrated vacuum sensors or switches.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/Vaccum-Equipment-Ejectors/Vaccum-Equipment-Ejectors-compressed/Vaccum-Ejector/Vacuum-Ejector-intro.webp')); ?>" alt="Vacuum Ejector" loading="eager">
            </div>
        </section>

        <section class="automation-categories vacuum-ejector-products" aria-label="Vacuum ejector products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'automation-vacuum-equipment-vacuum-ejectors-vacuum-ejector-category-panel'); ?>

                <div class="automation-product-selection vacuum-ejector-selection" data-product-detail-shell>
                    <div class="automation-category-grid vacuum-ejector-product-grid">
                        <?php foreach ($vacuumEjectorProducts as $product): ?>
                            <a
                                class="automation-category-card vacuum-product-card vacuum-ejector-product-card"
                                href="#vacuum-ejector-detail"
                                data-product-detail-trigger
                                data-product-id="<?= e($product['slug']); ?>"
                                aria-controls="vacuum-ejector-detail"
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

                    <section class="automation-selected-product" id="vacuum-ejector-detail" data-product-detail-panel hidden aria-live="polite"></section>
                    <script type="application/json" data-product-detail-data><?= json_encode($vacuumEjectorProductDetails, JSON_UNESCAPED_SLASHES); ?></script>
                </div>
            </div>
        </section>
    </div>
</main>
