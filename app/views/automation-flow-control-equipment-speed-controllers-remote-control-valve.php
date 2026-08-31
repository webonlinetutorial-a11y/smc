<?php
$categorySidebar = automationSidebarCategories('flow-control-equipment');

$remoteControlValveProducts = [
    [
        'title' => 'PFES Series, Remote Control Valve (Electric Speed Controller)',
        'image' => 'Flow-Control-Equipment/Remote control valve/PFES-A-P07-2.webp',
        'descriptionItems' => [
            'The speed controller is equipped',
        ],
        'slug' => 'remote-control-valve',
        'isNew' => true,
        'detailUrl' => '/product-detail.php?product=remote-control-valve',
        'detailTitle' => 'PFES Series, Remote Control Valve (Electric Speed Controller)',
        'detailDescription' => 'The speed controller is equipped',
        'detailActions' => [
            ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
            ['label' => 'Enquiry', 'icon' => 'circle-help'],
        ],
    ],
];

$remoteControlValveProductDetails = [];
foreach ($remoteControlValveProducts as $product) {
    $remoteControlValveProductDetails[$product['slug']] = [
        'title' => $product['detailTitle'],
        'image' => assetUrl('images/' . $product['image']),
        'description' => $product['detailDescription'],
        'descriptionItems' => isset($product['detailDescriptionItems']) ? $product['detailDescriptionItems'] : [],
        'url' => isset($product['detailUrl']) ? appUrl($product['detailUrl']) : '',
        'actions' => $product['detailActions'],
    ];
}
?>

<main class="automation-page flow-control-equipment-page remote-control-valve-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro flow-control-equipment-intro remote-control-valve-intro" aria-labelledby="remote-control-valve-title">
            <div class="automation-intro__content">
                <h1 id="remote-control-valve-title">Remote Control Valve</h1>
                <p>The SMC PFES-A-P07-2 remote control valve enables remote, speed-controlled operation of pneumatic circuits for reliable, repeatable actuator control.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/Flow-Control-Equipment/Remote control valve/PFES-A-P07-2.webp')); ?>" alt="Remote control valve" loading="eager">
            </div>
        </section>

        <section class="automation-categories flow-control-products remote-control-valve-products" aria-label="Remote control valve products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'automation-flow-control-equipment-speed-controllers-remote-control-valve-category-panel'); ?>

                <div class="automation-product-selection remote-control-valve-selection" data-product-detail-shell>
                    <div class="automation-category-grid flow-control-product-grid remote-control-valve-product-grid">
<?php foreach ($remoteControlValveProducts as $product): ?>
    <a
        class="automation-category-card flow-control-product-card remote-control-valve-product-card"
        href="#remote-control-valve-detail"
        data-product-detail-trigger
        data-product-id="<?= e($product['slug']); ?>"
        aria-controls="remote-control-valve-detail"
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

                    <section class="automation-selected-product" id="remote-control-valve-detail" data-product-detail-panel hidden aria-live="polite"></section>
                    <script type="application/json" data-product-detail-data><?= json_encode($remoteControlValveProductDetails, JSON_UNESCAPED_SLASHES); ?></script>
                </div>
            </div>
        </section>
    </div>
</main>
