<?php
$standardAirCylinderUrl = '/automation-air-cylinders-standard-air-cylinders-square-cover.php';
$compactAirCylinderUrl = '/automation-air-cylinders-compact-air-cylinders.php';
$isoCylinderUrl = '/automation-air-cylinders-iso-cylinders.php';
$airGripperUrl = '/automation-air-cylinders-air-gripper.php';
$autoSwitchUrl = '/automation-air-cylinders-auto-switch.php';

$categorySidebar = automationSidebarCategories('air-cylinders');

$airGripperProducts = [
    [
        'title' => 'Parallel Type Air Gripper',
        'image' => 'Air-gripper/images/Linear-Guide-Parallel-Type-Air-Gripper-MHZ2.jpg',
        'description' => 'SMC\'s parallel-type air grippers are precision devices designed for gripping workpieces with synchronized jaw motion...',
        'slug' => 'parallel-type-air-gripper',
        'detailTitle' => 'Linear Guide Parallel Type Air Gripper MHZ2',
        'detailUrl' => '/product-detail.php?product=linear-guide-parallel-type-air-gripper-mhz2',
        'detailImage' => 'Air-cylinders/Air-gripper/Parallel-Type-Air Grippers-img1.jpg',
        'detailDescription' => 'The MHZ Series features a compact, high-rigidity design with an integrated linear guide secured by dual dowel pins to prevent...',
        'detailActions' => [
            ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true, 'url' => appUrl('/catalogs/linear-guide-parallel-type-air-gripper-mhz2.pdf')],
            ['label' => 'Enquiry', 'icon' => 'circle-help'],
        ],
    ],
];

$airGripperProductDetails = [];

foreach ($airGripperProducts as $product) {
    $airGripperProductDetails[$product['slug']] = [
        'title' => $product['detailTitle'],
        'image' => assetUrl('images/' . ($product['detailImage'] ?? $product['image'])),
        'url' => isset($product['detailUrl']) ? appUrl($product['detailUrl']) : '',
        'description' => $product['detailDescription'],
        'actions' => $product['detailActions'],
    ];
}
?>

<main class="automation-page air-cylinders-page air-gripper-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro air-cylinders-intro air-gripper-intro" aria-labelledby="air-gripper-title">
            <div class="automation-intro__content">
                <h1 id="air-gripper-title">Air Gripper</h1>
                <p>For automated pick-and-place systems, SMC air grippers offer precise gripping force and compact design. Choose from parallel, angular, and 3-finger grippers for reliable object handling.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/Air-gripper/Parallel Type Air Grippers-intro.jpg')); ?>" alt="Air Gripper" loading="eager">
            </div>
        </section>

        <section class="automation-categories air-cylinder-products air-gripper-products" aria-label="Air gripper products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'automation-air-cylinders-air-gripper-category-panel'); ?>

                <div class="automation-product-selection air-gripper-selection" data-product-detail-shell>
                <div class="automation-category-grid air-cylinder-product-grid air-gripper-product-grid">
                    <?php foreach ($airGripperProducts as $product): ?>
                        <a
                            class="automation-category-card air-cylinder-product-card air-gripper-product-card"
                            href="#air-gripper-detail"
                            data-product-detail-trigger
                            data-product-id="<?= e($product['slug']); ?>"
                            aria-controls="air-gripper-detail"
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

                <section class="automation-selected-product" id="air-gripper-detail" data-product-detail-panel hidden aria-live="polite"></section>
                <script type="application/json" data-product-detail-data><?= json_encode($airGripperProductDetails, JSON_UNESCAPED_SLASHES); ?></script>
                </div>
            </div>
        </section>
    </div>
</main>
