<?php
$airPreparationFilterUrl = '/automation-air-preparation-equipment-air-preparation-filters.php';
$airDryerUrl = '/automation-air-preparation-equipment-air-dryer.php';
$autoDrainsUrl = '/automation-air-preparation-equipment-auto-drains.php';

$categorySidebar = automationSidebarCategories('air-preparation-equipment');

$autoDrainProducts = [
    [
        'title' => 'Auto Drain Valve AD',
        'image' => 'Air-Preparation-Equipment/Auto-Drain/AD402-A.webp',
        'description' => 'The AD series automatic drain valves remove condensate from compressed air systems automatically. They feature...',
        'slug' => 'auto-drain-valve-ad',
        'detailItems' => [
            [
                'title' => 'Auto Drain Valve AD600',
                'image' => 'Air-Preparation-Equipment/Auto-Drain/AD600-img1.webp',
                'description' => 'The AD series automatically removes condensate from compressed air systems.',
                'url' => appUrl('/product-detail.php?product=auto-drain-valve-ad600'),
                'actions' => [
                    ['label' => 'Part Numbers', 'icon' => 'list', 'wide' => true, 'url' => appUrl('/product-detail.php?product=auto-drain-valve-ad600#part-numbers'), 'sameTab' => true],
                    ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
                    ['label' => 'Enquiry', 'icon' => 'circle-help'],
                ],
            ],
            [
                'title' => 'Auto Drain Valve AD402-A',
                'image' => 'Air-Preparation-Equipment/Auto-Drain/AD402-A-img1.webp',
                'description' => 'The AD402-A offering improved durability, performance and Improved foreign matter resistance',
                'url' => appUrl('/product-detail.php?product=auto-drain-valve-ad402-a'),
                'actions' => [
                    ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
                    ['label' => 'Video', 'icon' => 'circle-play', 'videoUrl' => 'https://www.youtube.com/watch?v=-HSngKnit5M'],
                    ['label' => 'Enquiry', 'icon' => 'circle-help'],
                ],
            ],
            [
                'title' => 'Auto Drain Valve AD402 Series',
                'image' => 'Air-Preparation-Equipment/Auto-Drain/AD402-img1.webp',
                'description' => 'The AD series automatically removes condensate from compressed air systems.',
                'url' => appUrl('/product-detail.php?product=auto-drain-valve-ad402-series'),
                'actions' => [
                    ['label' => 'Part Numbers', 'icon' => 'list', 'wide' => true, 'url' => appUrl('/product-detail.php?product=auto-drain-valve-ad402-series#part-numbers'), 'sameTab' => true],
                    ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
                    ['label' => 'Enquiry', 'icon' => 'circle-help'],
                ],
            ],
        ],
    ],
];

$autoDrainProductDetails = [];
foreach ($autoDrainProducts as $product) {
    $autoDrainProductDetails[$product['slug']] = [
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

<main class="automation-page air-preparation-page auto-drains-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro air-preparation-intro auto-drains-intro" aria-labelledby="auto-drains-title">
            <div class="automation-intro__content">
                <h1 id="auto-drains-title">Auto Drains</h1>
                <p>Keep your air lines clean with SMC automatic drains. These units remove accumulated water from filters and tanks automatically-improving air quality and preventing system damage.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/Air-Preparation-Equipment/Auto-Drain/AD402-A.webp')); ?>" alt="Auto Drains" loading="eager">
            </div>
        </section>

        <section class="automation-categories air-preparation-products auto-drains-products" aria-label="Auto drains products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'automation-air-preparation-equipment-auto-drains-category-panel'); ?>

                <div class="automation-product-selection auto-drains-selection" data-product-detail-shell>
                    <div class="automation-category-grid air-preparation-product-grid auto-drains-product-grid">
                        <?php foreach ($autoDrainProducts as $product): ?>
                            <a
                                class="automation-category-card air-preparation-product-card auto-drains-product-card"
                                href="#auto-drains-detail"
                                data-product-detail-trigger
                                data-product-id="<?= e($product['slug']); ?>"
                                aria-controls="auto-drains-detail"
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

                    <section class="automation-selected-product" id="auto-drains-detail" data-product-detail-panel hidden aria-live="polite"></section>
                    <script type="application/json" data-product-detail-data><?= json_encode($autoDrainProductDetails, JSON_UNESCAPED_SLASHES); ?></script>
                </div>
            </div>
        </section>
    </div>
</main>
