<?php
$pilotOperatedValveUrl = '/automation-directional-control-valves-pilot-operated-4-5-port-solenoid-valves.php';

$categorySidebar = automationSidebarCategories('directional-control-valves');

$pilotOperatedValveProducts = [
    [
        'title' => '5-Port Solenoid Valve',
        'image' => 'Directional-control-valve/Pilot-operated-ports/SY3000-9000.webp',
        'description' => "SMC's 5-port solenoid valves control double-acting actuators with fast response and low power consumption. Available in...",
        'slug' => '5-port-solenoid-valve',
        'detailItems' => [
            [
                'title' => 'Solenoid Valve SY3000/5000/7000/9...',
                'image' => 'Directional-control-valve/Pilot-operated-ports/SY3000-9000-img1.webp',
                'description' => 'The combined mountin... Power consumption: 0.... A wide variety of manif... Manifold type no.: SS5... Supports Interface reg...',
                'url' => appUrl('/product-detail.php?product=solenoid-valve-sy3000-5000-7000-9000-series'),
                'actions' => [
                    ['label' => 'Part Numbers', 'icon' => 'list', 'wide' => true, 'url' => appUrl('/product-detail.php?product=solenoid-valve-sy3000-5000-7000-9000-series#part-numbers'), 'sameTab' => true],
                    ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
                    ['label' => 'Enquiry', 'icon' => 'circle-help'],
                ],
            ],
            [
                'title' => 'Solenoid Valve, Plugin Type SY3000/5000/7000 Series',
                'image' => 'Directional-control-valve/Pilot-operated-ports/SY3000-7000.webp',
                'description' => 'Body-ported or base-mounted styles, SY valves can operate individually or manifold-mounted. A new back pressure check valve...',
                'url' => appUrl('/product-detail.php?product=solenoid-valve-plugin-type-sy3000-5000-7000-series'),
                'actions' => [
                    ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
                    ['label' => 'Video', 'icon' => 'circle-play', 'videoUrl' => 'https://www.youtube.com/watch?v=23JRXvTBd44'],
                    ['label' => 'Enquiry', 'icon' => 'circle-help', 'url' => '/contact-us.php'],
                ],
            ],
        ],
    ],
];

$pilotOperatedValveProductDetails = [];
foreach ($pilotOperatedValveProducts as $product) {
    $pilotOperatedValveProductDetails[$product['slug']] = [
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

<main class="automation-page directional-control-valves-page pilot-operated-valves-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro directional-control-valves-intro pilot-operated-valves-intro" aria-labelledby="pilot-operated-valves-title">
            <div class="automation-intro__content">
                <h1 id="pilot-operated-valves-title">Pilot Operated 4/5 Port Solenoid Valves</h1>
                <p>For higher flow control and efficiency, SMC's pilot-operated solenoid valves offer fast switching and energy-saving performance. Perfect for actuators requiring strong, controlled air direction.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/Directional-control-valve/Pilot-operated-ports/SY3000-9000.webp')); ?>" alt="Pilot Operated 4/5 Port Solenoid Valves" loading="eager">
            </div>
        </section>

        <section class="automation-categories directional-control-valve-products pilot-operated-valve-products" aria-label="Pilot operated valve products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'automation-directional-control-valves-pilot-operated-4-5-port-solenoid-valves-category-panel'); ?>

                <div class="automation-product-selection pilot-operated-valve-selection" data-product-detail-shell>
                    <div class="automation-category-grid directional-control-valve-product-grid pilot-operated-valve-product-grid">
                        <?php foreach ($pilotOperatedValveProducts as $product): ?>
                            <a
                                class="automation-category-card directional-control-valve-product-card pilot-operated-valve-product-card"
                                href="#pilot-operated-valve-detail"
                                data-product-detail-trigger
                                data-product-id="<?= e($product['slug']); ?>"
                                aria-controls="pilot-operated-valve-detail"
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

                    <section class="automation-selected-product" id="pilot-operated-valve-detail" data-product-detail-panel hidden aria-live="polite"></section>
                    <script type="application/json" data-product-detail-data><?= json_encode($pilotOperatedValveProductDetails, JSON_UNESCAPED_SLASHES); ?></script>
                </div>
            </div>
        </section>
    </div>
</main>
