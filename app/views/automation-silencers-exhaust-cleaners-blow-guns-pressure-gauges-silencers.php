<?php
$categorySidebar = automationSidebarCategories('silencers-exhaust');

$silencerProducts = [
    [
        'title' => 'Silencers AN',
        'image' => 'Silencer-Exhaust-Cleaner/Silencers/AN.webp',
        'description' => 'AN series silencers reduce exhaust noise in pneumatic systems. Made from durable materials, they help meet workplace noise...',
        'slug' => 'silencers-an',
        'items' => [
            [
                'title' => 'Silencer;Compact Resin Type AN Series',
                'image' => 'Silencer-Exhaust-Cleaner/Silencers/AN.webp',
                'description' => 'The AN Series silencers are designed for efficient noise reduction and mist control in pneumatic systems.',
                'detailUrl' => '/product-detail.php?product=silencer-compact-resin-type-an-series',
                'actions' => [
                    ['label' => 'Part Numbers', 'icon' => 'list', 'wide' => true, 'url' => appUrl('/product-detail.php?product=silencer-compact-resin-type-an-series#part-numbers'), 'sameTab' => true],
                    ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
                    ['label' => 'Enquiry', 'icon' => 'circle-help'],
                ],
            ],
            [
                'title' => 'Silencer: Metal Body Type AN*00 Series',
                'image' => 'Silencer-Exhaust-Cleaner/Silencers/Metal body AN.webp',
                'description' => 'Metal body type. Noise reduction: 30 dB ...',
                'detailUrl' => '/product-detail.php?product=silencer-metal-body-type-an-00-series',
                'actions' => [
                    ['label' => 'Part Numbers', 'icon' => 'list', 'wide' => true, 'url' => appUrl('/product-detail.php?product=silencer-metal-body-type-an-00-series#part-numbers'), 'sameTab' => true],
                    ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
                    ['label' => 'Enquiry', 'icon' => 'circle-help'],
                ],
            ],
        ],
    ],
];

$silencerProductDetails = [];
foreach ($silencerProducts as $product) {
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

    $silencerProductDetails[$product['slug']] = [
        'items' => $items,
    ];
}
?>

<main class="automation-page silencers-exhaust-page silencers-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro silencers-exhaust-intro silencers-intro" aria-labelledby="silencers-title">
            <div class="automation-intro__content">
                <h1 id="silencers-title">Silencers</h1>
                <p>Reduce exhaust noise and improve workplace safety with SMC silencers. Easy to install on valves or actuators, available in various sizes and noise ratings.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/Silencer-Exhaust-Cleaner/Silencers/AN.webp')); ?>" alt="Silencers" loading="eager">
            </div>
        </section>

        <section class="automation-categories silencer-products" aria-label="Silencer products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'automation-silencers-exhaust-cleaners-blow-guns-pressure-gauges-silencers-category-panel'); ?>

                <div class="automation-product-selection silencer-selection" data-product-detail-shell>
                    <div class="automation-category-grid silencer-product-grid">
                        <?php foreach ($silencerProducts as $product): ?>
                            <a
                                class="automation-category-card silencer-product-card"
                                href="#silencers-detail"
                                data-product-detail-trigger
                                data-product-id="<?= e($product['slug']); ?>"
                                aria-controls="silencers-detail"
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

                    <section class="automation-selected-product" id="silencers-detail" data-product-detail-panel hidden aria-live="polite"></section>
                    <script type="application/json" data-product-detail-data><?= json_encode($silencerProductDetails, JSON_UNESCAPED_SLASHES); ?></script>
                </div>
            </div>
        </section>
    </div>
</main>
