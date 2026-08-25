<?php
$categorySidebar = automationSidebarCategories('directional-control-valves');

$mechanicalValveProducts = [
    [
        'title' => '2/3 Port Mechanical Valve',
        'image' => 'Directional-control-valve/Mechanical-valve/VM100.webp',
        'description' => 'Mechanical valves provide manual or mechanical actuation for basic pneumatic tasks. These valves feature roller lever,...',
        'slug' => '2-3-port-mechanical-valve',
        'detailItems' => [
            [
                'title' => 'Mechanical Valve VM100/200/400/800...',
                'image' => 'Directional-control-valve/Mechanical-valve/VM100-img1.webp',
                'description' => 'A wide variety of valve... Small mounting space ... Compact design for mi... Poppet-style, normally ... Operating pressure: 0.5...',
                'url' => appUrl('/product-detail.php?product=mechanical-valve-vm100-200-400-800-series'),
                'actions' => [
                    ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
                    ['label' => 'Enquiry', 'icon' => 'circle-help', 'enquiry' => true],
                ],
            ],
            [
                'title' => 'Mechanical Valve with One-touch Fitting...',
                'image' => 'Directional-control-valve/Mechanical-valve/Mechanical-Valves-intro-img2.webp',
                'description' => 'Built-in One-touch fittin... Space saving Approx. 35% reduction ... Lightweight 80% reduction (48 g lig...',
                'url' => appUrl('/product-detail.php?product=mechanical-valve-with-one-touch-fitting-vm100f'),
                'actions' => [
                    ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
                    ['label' => 'Enquiry', 'icon' => 'circle-help', 'enquiry' => true],
                ],
            ],
        ],
    ],
];

$mechanicalValveProductDetails = [];
foreach ($mechanicalValveProducts as $product) {
    $mechanicalValveProductDetails[$product['slug']] = [
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

<main class="automation-page directional-control-valves-page mechanical-valves-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro directional-control-valves-intro mechanical-valves-intro" aria-labelledby="mechanical-valves-title">
            <div class="automation-intro__content">
                <h1 id="mechanical-valves-title">Mechanical Valves</h1>
                <p>Durable and dependable, SMC mechanical valves operate through manual or actuator-driven movement - perfect for basic control tasks without electric input.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/Directional-control-valve/Mechanical-valve/Mechanical-Valves-intro.webp')); ?>" alt="Mechanical Valves" loading="eager">
            </div>
        </section>

        <section class="automation-categories directional-control-valve-products mechanical-valve-products" aria-label="Mechanical valve products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'automation-directional-control-valves-mechanical-valves-category-panel'); ?>

                <div class="automation-product-selection mechanical-valve-selection" data-product-detail-shell>
                    <div class="automation-category-grid directional-control-valve-product-grid mechanical-valve-product-grid">
                        <?php foreach ($mechanicalValveProducts as $product): ?>
                            <a
                                class="automation-category-card directional-control-valve-product-card mechanical-valve-product-card"
                                href="#mechanical-valve-detail"
                                data-product-detail-trigger
                                data-product-id="<?= e($product['slug']); ?>"
                                aria-controls="mechanical-valve-detail"
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

                    <section class="automation-selected-product" id="mechanical-valve-detail" data-product-detail-panel hidden aria-live="polite"></section>
                    <script type="application/json" data-product-detail-data><?= json_encode($mechanicalValveProductDetails, JSON_UNESCAPED_SLASHES); ?></script>
                </div>
            </div>
        </section>
    </div>
</main>
