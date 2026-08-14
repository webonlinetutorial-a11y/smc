<?php
$standardAirCylinderUrl = '/automation-air-cylinders-standard-air-cylinders-square-cover.php';
$compactAirCylinderUrl = '/automation-air-cylinders-compact-air-cylinders.php';
$isoCylinderUrl = '/automation-air-cylinders-iso-cylinders.php';
$airGripperUrl = '/automation-air-cylinders-air-gripper.php';
$autoSwitchUrl = '/automation-air-cylinders-auto-switch.php';

$categorySidebar = automationSidebarCategories('air-cylinders');

$compactAirCylinderProducts = [
    [
        'title' => 'Compact Cylinder C55/CD55',
        'image' => 'Compact-air-cylinders/images/Compact Cylinder C55CD55.webp',
        'description' => 'ISO 21287-compliant compact air cylinders, the C55/CD55 series offer a space-efficient design for high-cycle applications...',
        'slug' => 'compact-cylinder-c55-cd55',
        'detailTitle' => 'Air Cylinder, Double Acting C55-Z Series',
        'detailImage' => 'Air-cylinders/Compact-air-cylinder/c55-img2.webp',
        'detailDescription' => 'C55 Series air-operated, double-acting cylinders are built for a broad range of automation needs. With features like rubber...',
        'detailActions' => [
            ['label' => 'Part Numbers', 'icon' => 'list', 'wide' => true],
            ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
            ['label' => 'Enquiry', 'icon' => 'circle-help'],
        ],
    ],
    [
        'title' => 'Compact Cylinder CQ2/CDQ2',
        'image' => 'Compact-air-cylinders/images/Compact Cylinder CQ2CDQ2.webp',
        'description' => 'The CQ2/CDQ2 series are space-saving compact cylinders featuring double-acting motion and built-in magnet options. Available...',
        'slug' => 'compact-cylinder-cq2-cdq2',
        'detailTitle' => 'Air Cylinder, Double Acting CQ2-Z Series',
        'detailImage' => 'Air-cylinders/Compact-air-cylinder/Air-Cylinder-Double-Acting-CQ2-Z.webp',
        'detailDescription' => 'The CQ2 Series offers a space-saving design with a compact body and is available in 18 bore sizes ranging from ø4 to ø200...',
        'detailActions' => [
            ['label' => 'Part Numbers', 'icon' => 'list', 'wide' => true],
            ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
            ['label' => 'Enquiry', 'icon' => 'circle-help'],
        ],
    ],
];

$compactAirCylinderProductDetails = [];

foreach ($compactAirCylinderProducts as $product) {
    $compactAirCylinderProductDetails[$product['slug']] = [
        'title' => $product['detailTitle'],
        'image' => assetUrl('images/' . ($product['detailImage'] ?? $product['image'])),
        'description' => $product['detailDescription'],
        'actions' => $product['detailActions'],
    ];
}
?>

<main class="automation-page air-cylinders-page compact-air-cylinders-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro air-cylinders-intro compact-air-cylinders-intro" aria-labelledby="compact-air-cylinders-title">
            <div class="automation-intro__content">
                <h1 id="compact-air-cylinders-title">Compact Air Cylinders</h1>
                <p>When space is tight, SMC compact cylinders deliver powerful performance in a small form. Designed for tight installations, these lightweight actuators offer reliable motion in minimal space.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/Compact-air-cylinders/Compact-Cylinder-CQ2-CDQ2-intro.jpg')); ?>" alt="Compact Air Cylinders" loading="eager">
            </div>
        </section>

        <section class="automation-categories air-cylinder-products compact-air-cylinder-products" aria-label="Compact air cylinder products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'automation-air-cylinders-compact-air-cylinders-category-panel'); ?>

                <div class="automation-product-selection compact-air-cylinder-selection" data-product-detail-shell>
                <div class="automation-category-grid air-cylinder-product-grid compact-air-cylinder-product-grid">
                    <?php foreach ($compactAirCylinderProducts as $product): ?>
                        <a
                            class="automation-category-card air-cylinder-product-card compact-air-cylinder-product-card"
                            href="#compact-air-cylinder-detail"
                            data-product-detail-trigger
                            data-product-id="<?= e($product['slug']); ?>"
                            aria-controls="compact-air-cylinder-detail"
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

                <section class="automation-selected-product" id="compact-air-cylinder-detail" data-product-detail-panel hidden aria-live="polite"></section>
                <script type="application/json" data-product-detail-data><?= json_encode($compactAirCylinderProductDetails, JSON_UNESCAPED_SLASHES); ?></script>
                </div>
            </div>
        </section>
    </div>
</main>
