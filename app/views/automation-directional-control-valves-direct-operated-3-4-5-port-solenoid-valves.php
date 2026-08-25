<?php
$categorySidebar = automationSidebarCategories('directional-control-valves');

$directOperatedValveProducts = [
    [
        'title' => '3-Port Solenoid Valve',
        'image' => 'Directional-control-valve/Direct-operated-port/VT307-img1.webp',
        'description' => '3-port valves are commonly used for single-acting cylinders or vacuum break functions. These solenoid valves offer quick...',
        'slug' => '3-port-solenoid-valve',
        'url' => appUrl('/product-detail.php?product=poppet-type-solenoid-valve-vt307-series'),
        'detailTitle' => 'Poppet Type Solenoid Valve VT307 Series',
        'detailDescription' => 'The VT307 Series is a space-saving, direct-operated 3-port solenoid valve that delivers high flow with low power usage. Its...',
        'detailActions' => [
            ['label' => 'Part Numbers', 'icon' => 'list', 'wide' => true, 'url' => appUrl('/product-detail.php?product=poppet-type-solenoid-valve-vt307-series#part-numbers'), 'sameTab' => true],
            ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
            ['label' => 'Enquiry', 'icon' => 'circle-help', 'enquiry' => true],
        ],
    ],
];

$directOperatedValveProductDetails = [];
foreach ($directOperatedValveProducts as $product) {
    $directOperatedValveProductDetails[$product['slug']] = [
        'title' => $product['detailTitle'],
        'image' => assetUrl('images/' . $product['image']),
        'description' => $product['detailDescription'],
        'actions' => $product['detailActions'],
        'url' => $product['url'] ?? '',
    ];
}
?>

<main class="automation-page directional-control-valves-page direct-operated-valves-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro directional-control-valves-intro direct-operated-valves-intro" aria-labelledby="direct-operated-valves-title">
            <div class="automation-intro__content">
                <h1 id="direct-operated-valves-title">Direct Operated 3/4/5 Port Solenoid Valves</h1>
                <p>SMC direct-operated solenoid valves provide quick and precise control of airflow in compact designs. Ideal for low-flow applications or when fast response is critical.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/Directional-control-valve/Direct-operated-port/VT307-img1.webp')); ?>" alt="Direct Operated 3/4/5 Port Solenoid Valves" loading="eager">
            </div>
        </section>

        <section class="automation-categories directional-control-valve-products direct-operated-valve-products" aria-label="Direct operated valve products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'automation-directional-control-valves-direct-operated-3-4-5-port-solenoid-valves-category-panel'); ?>

                <div class="automation-product-selection direct-operated-valve-selection" data-product-detail-shell>
                    <div class="automation-category-grid directional-control-valve-product-grid direct-operated-valve-product-grid">
                        <?php foreach ($directOperatedValveProducts as $product): ?>
                            <a
                                class="automation-category-card directional-control-valve-product-card direct-operated-valve-product-card"
                                href="#direct-operated-valve-detail"
                                data-product-detail-trigger
                                data-product-id="<?= e($product['slug']); ?>"
                                aria-controls="direct-operated-valve-detail"
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

                    <section class="automation-selected-product" id="direct-operated-valve-detail" data-product-detail-panel hidden aria-live="polite"></section>
                    <script type="application/json" data-product-detail-data><?= json_encode($directOperatedValveProductDetails, JSON_UNESCAPED_SLASHES); ?></script>
                </div>
            </div>
        </section>
    </div>
</main>
