<?php
$categorySidebar = automationSidebarCategories('process-valves');

$processValveProducts = [
    [
        'title' => 'Direct Operated 2 Port Solenoid Valve VX2...',
        'image' => 'Process-Valve/Port-Solenoid-Valve/23 Port Solenoid ValvesAir Operated Valves.webp',
        'description' => 'Direct Operated 2-Port Solenoid Valve - VX21/22/23 Series',
        'slug' => 'direct-operated-2-port-solenoid-valve-vx2',
        'items' => [
            [
                'title' => 'Direct Operated 2 Port Solenoid Valve VX2...',
                'image' => assetUrl('images/Process-Valve/Port-Solenoid-Valve/23 Port Solenoid ValvesAir Operated Valves.webp'),
                'description' => 'The VX21/22/23 Series features a compact, high-flow solenoid valve designed for versatile fluid control. With IP65-rated...',
                'url' => appUrl('/product-detail.php?product=direct-operated-2-port-solenoid-valve-vx2-series'),
                'actions' => [
                    ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
                    ['label' => 'Enquiry', 'icon' => 'circle-help'],
                ],
            ],
        ],
    ],
];

$processValveProductDetails = [];
foreach ($processValveProducts as $product) {
    $processValveProductDetails[$product['slug']] = $product;
}
?>

<main class="automation-page process-valves-page process-valves-solenoid-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro process-valves-intro process-valves-solenoid-intro" aria-labelledby="process-valves-solenoid-title">
            <div class="automation-intro__content">
                <h1 id="process-valves-solenoid-title">2/3 Port Solenoid Valves/Air Operated Valves</h1>
                <p>Control fluid and air flow with 2-port and 3-port valves. Choose solenoid or air-operated designs for on/off control in automation and process systems.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/Process-Valve/Port-Solenoid-Valve/23 Port Solenoid ValvesAir Operated Valves.webp')); ?>" alt="2/3 Port Solenoid Valves/Air Operated Valves" loading="eager">
            </div>
        </section>

        <section class="automation-categories process-valve-products" aria-label="Process valve products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'automation-process-valves-2-3-port-solenoid-valves-air-operated-valves-category-panel'); ?>

                <div class="automation-product-selection process-valve-selection" data-product-detail-shell>
                    <div class="automation-category-grid process-valve-product-grid">
                        <?php foreach ($processValveProducts as $product): ?>
                            <a
                                class="automation-category-card process-valve-product-card"
                                href="#process-valve-detail"
                                data-product-detail-trigger
                                data-product-id="<?= e($product['slug']); ?>"
                                aria-controls="process-valve-detail"
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

                    <section class="automation-selected-product" id="process-valve-detail" data-product-detail-panel hidden aria-live="polite"></section>
                    <script type="application/json" data-product-detail-data><?= json_encode($processValveProductDetails, JSON_UNESCAPED_SLASHES); ?></script>
                </div>
            </div>
        </section>
    </div>
</main>
