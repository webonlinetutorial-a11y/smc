<?php
$standardAirCylinderUrl = '/automation-air-cylinders-standard-air-cylinders-square-cover.php';
$compactAirCylinderUrl = '/automation-air-cylinders-compact-air-cylinders.php';
$isoCylinderUrl = '/automation-air-cylinders-iso-cylinders.php';
$airGripperUrl = '/automation-air-cylinders-air-gripper.php';
$autoSwitchUrl = '/automation-air-cylinders-auto-switch.php';

$categorySidebar = automationSidebarCategories('air-cylinders');

$standardAirCylinderProducts = [
    [
        'title' => 'Air Cylinder MB/MDB',
        'image' => 'Standard Air Cylinders (Square Cover)/images/standard-air-cylndr-mb-mdb.webp',
        'description' => 'The MB/MDB series air cylinders from SMC are double-acting, single rod type cylinders that conform to ISO 6431. They feature...',
        'slug' => 'air-cylinder-mb-mdb',
        'detailTitle' => 'Air Cylinder, Double Acting MB-Z Series',
        'detailDescription' => 'The MB/MDB Series is a lightweight, double-acting, single-rod tie rod cylinder designed for medium-duty applications. It features a...',
        'detailActions' => [
            ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
            ['label' => 'Enquiry', 'icon' => 'circle-help'],
        ],
    ],
    [
        'title' => 'Air Cylinder MB1/MDB1',
        'image' => 'Standard Air Cylinders (Square Cover)/images/standard-air-cylinder-mb1-mdb1.webp',
        'description' => 'The MB1/MDB1 series are lightweight pneumatic cylinders based on JIS standards. These are compact, single rod...',
        'slug' => 'air-cylinder-mb1-mdb1',
        'detailTitle' => 'Air Cylinder, Double Acting MB1-Z Series',
        'detailImage' => 'Air-cylinders/standard-air-cylinder/Air-Cylinder-Double-Acting-MB1-Z-Series.webp',
        'detailDescription' => 'Reduced weight by changing the shape of the rod cover and head cover',
        'detailActions' => [
            ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
            ['label' => 'Enquiry', 'icon' => 'circle-help'],
        ],
    ],
    [
        'title' => 'ISO Cylinder CP96/CP96SD',
        'image' => 'Standard Air Cylinders (Square Cover)/images/ISO Cylinder CP96CP96SD.webp',
        'description' => 'The CP96/CP96SD series are ISO 15552-compliant cylinders offering enhanced cushioning and low-friction operation. These double-...',
        'slug' => 'iso-cylinder-cp96-cp96sd',
        'detailTitle' => 'ISO Cylinder CP96/CP96SD Series',
        'detailDescription' => 'The CP96 Series conforms to ISO standards. Standard Type Double Acting, Single/Double Rod',
        'detailActions' => [
            ['label' => 'Part Numbers', 'icon' => 'list', 'wide' => true],
            ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
            ['label' => 'Enquiry', 'icon' => 'circle-help'],
        ],
    ],
];

$standardAirCylinderProductDetails = [];

foreach ($standardAirCylinderProducts as $product) {
    $standardAirCylinderProductDetails[$product['slug']] = [
        'title' => $product['detailTitle'],
        'image' => assetUrl('images/' . ($product['detailImage'] ?? $product['image'])),
        'description' => $product['detailDescription'],
        'actions' => $product['detailActions'],
    ];
}
?>

<main class="automation-page air-cylinders-page standard-air-cylinders-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro air-cylinders-intro standard-air-cylinders-intro" aria-labelledby="standard-air-cylinders-title">
            <div class="automation-intro__content">
                <h1 id="standard-air-cylinders-title">Standard Air Cylinders (Square Cover)</h1>
                <p>SMC's standard air cylinders with square covers are designed for stability, high durability, and easy mounting. Ideal for general industrial automation, they provide consistent linear motion in compact footprints.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/Standard Air Cylinders (Square Cover)/standard-air-cyldr-intro.webp')); ?>" alt="Standard Air Cylinders (Square Cover)" loading="eager">
            </div>
        </section>

        <section class="automation-categories air-cylinder-products standard-air-cylinder-products" aria-label="Standard air cylinder products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'standard-air-cylinder-category-panel'); ?>

                <div class="automation-product-selection standard-air-cylinder-selection" data-product-detail-shell>
                <div class="automation-category-grid air-cylinder-product-grid standard-air-cylinder-product-grid">
                    <?php foreach ($standardAirCylinderProducts as $product): ?>
                        <a
                            class="automation-category-card air-cylinder-product-card standard-air-cylinder-product-card"
                            href="#standard-air-cylinder-detail"
                            data-product-detail-trigger
                            data-product-id="<?= e($product['slug']); ?>"
                            aria-controls="standard-air-cylinder-detail"
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

                <section class="automation-selected-product" id="standard-air-cylinder-detail" data-product-detail-panel hidden aria-live="polite"></section>
                <script type="application/json" data-product-detail-data><?= json_encode($standardAirCylinderProductDetails, JSON_UNESCAPED_SLASHES); ?></script>
                </div>
            </div>
        </section>
    </div>
</main>
