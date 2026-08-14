<?php
$categorySidebar = automationSidebarCategories('switches-sensors');

$digitalPressureSwitchProducts = [
    [
        'title' => 'High-Precision Digital Pressure Switch',
        'image' => 'Switches-Sensors/Digital-Pressure-Switch/ISE20.webp',
        'description' => 'SMC High-Precision Digital Pressure Switches, deliver exceptional pressure control with high-resolution outputs and repeatability...',
        'slug' => 'high-precision-digital-pressure-switch',
        'items' => [
            [
                'title' => '3-Screen Display High-Precision Digital Pressure Switch',
                'image' => 'Switches-Sensors/Digital-Pressure-Switch/ISE20.webp',
                'description' => 'The ISE20 series features a multi-color, 3-screen display for easy pressure monitoring at a glance. It offers fast response, high...',
                'actions' => [
                    ['label' => 'Part Numbers', 'icon' => 'list', 'wide' => true],
                    ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
                    ['label' => 'Video', 'icon' => 'circle-play'],
                    ['label' => 'Enquiry', 'icon' => 'circle-help'],
                ],
            ],
        ],
    ],
];

$digitalPressureSwitchProductDetails = [];
foreach ($digitalPressureSwitchProducts as $product) {
    $items = [];
    foreach ($product['items'] as $item) {
        $items[] = [
            'title' => $item['title'],
            'image' => assetUrl('images/' . $item['image']),
            'description' => $item['description'],
            'actions' => $item['actions'],
        ];
    }

    $digitalPressureSwitchProductDetails[$product['slug']] = [
        'items' => $items,
    ];
}
?>

<main class="automation-page switches-sensors-page digital-pressure-switch-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro switches-sensors-intro digital-pressure-switch-intro" aria-labelledby="digital-pressure-switch-title">
            <div class="automation-intro__content">
                <h1 id="digital-pressure-switch-title">Digital Pressure Switch</h1>
                <p>SMC Digital Pressure Switches provide high-precision pressure monitoring and control with fast response times and easy-to-read digital displays. Series like ISE and ZSE offer both positive and vacuum pressure detection, along with configurable outputs, hysteresis settings, and IO-Link communication.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/Switches-Sensors/Digital-Pressure-Switch/ISE20.webp')); ?>" alt="Digital Pressure Switch" loading="eager">
            </div>
        </section>

        <section class="automation-categories digital-pressure-switch-products" aria-label="Digital pressure switch products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'automation-switches-sensors-controller-digital-pressure-switch-category-panel'); ?>

                <div class="automation-product-selection digital-pressure-switch-selection" data-product-detail-shell>
                    <div class="automation-category-grid digital-pressure-switch-product-grid">
                        <?php foreach ($digitalPressureSwitchProducts as $product): ?>
                            <a
                                class="automation-category-card switches-sensor-product-card digital-pressure-switch-product-card"
                                href="#digital-pressure-switch-detail"
                                data-product-detail-trigger
                                data-product-id="<?= e($product['slug']); ?>"
                                aria-controls="digital-pressure-switch-detail"
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

                    <section class="automation-selected-product" id="digital-pressure-switch-detail" data-product-detail-panel hidden aria-live="polite"></section>
                    <script type="application/json" data-product-detail-data><?= json_encode($digitalPressureSwitchProductDetails, JSON_UNESCAPED_SLASHES); ?></script>
                </div>
            </div>
        </section>
    </div>
</main>
