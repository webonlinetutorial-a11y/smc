<?php
$categorySidebar = automationSidebarCategories('switches-sensors');

$flowSwitchProducts = [
    [
        'title' => 'Digital Flow Switch',
        'image' => 'Switches-Sensors/Flow-Switch/PFMB.webp',
        'description' => 'SMC Digital Flow Switches provide real-time flow monitoring with high accuracy and fast response, ideal for...',
        'slug' => 'digital-flow-switch',
        'items' => [
            [
                'title' => '2-Color Display Digital Flow Switch (Integrated Display Type)',
                'image' => 'Switches-Sensors/Flow-Switch/PFMB.webp',
                'description' => 'The PFMB series offers accurate airflow monitoring with a compact, integrated 2-color digital display. Ideal for space-saving...',
                'actions' => [
                    ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
                    ['label' => 'Enquiry', 'icon' => 'circle-help'],
                ],
            ],
            [
                'title' => 'Digital Flow Switch (Integrated Display Type)',
                'image' => 'Switches-Sensors/Flow-Switch/PF2A.webp',
                'description' => 'The PF2A series monitors compressed air flow with high accuracy and a built-in digital display. With its IO-Link compatibility and...',
                'actions' => [
                    ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
                    ['label' => 'Enquiry', 'icon' => 'circle-help'],
                ],
            ],
        ],
    ],
];

$flowSwitchProductDetails = [];
foreach ($flowSwitchProducts as $product) {
    $items = [];
    foreach ($product['items'] as $item) {
        $items[] = [
            'title' => $item['title'],
            'image' => assetUrl('images/' . $item['image']),
            'description' => $item['description'],
            'actions' => $item['actions'],
        ];
    }

    $flowSwitchProductDetails[$product['slug']] = [
        'items' => $items,
    ];
}
?>

<main class="automation-page switches-sensors-page flow-switch-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro switches-sensors-intro flow-switch-intro" aria-labelledby="flow-switch-title">
            <div class="automation-intro__content">
                <h1 id="flow-switch-title">Flow Switch</h1>
                <p>SMC Flow Switches are designed for accurate monitoring of compressed air and liquid flow in pneumatic systems. With models like the PF2A and PF3A series, these switches offer digital and analog outputs, real-time flow feedback, and IO-Link compatibility for seamless integration into smart factories.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/Switches-Sensors/Flow-Switch/PFMB.webp')); ?>" alt="Flow Switch" loading="eager">
            </div>
        </section>

        <section class="automation-categories flow-switch-products" aria-label="Flow switch products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'automation-switches-sensors-controller-flow-switch-category-panel'); ?>

                <div class="automation-product-selection flow-switch-selection" data-product-detail-shell>
                    <div class="automation-category-grid flow-switch-product-grid">
                        <?php foreach ($flowSwitchProducts as $product): ?>
                            <a
                                class="automation-category-card switches-sensor-product-card flow-switch-product-card"
                                href="#flow-switch-detail"
                                data-product-detail-trigger
                                data-product-id="<?= e($product['slug']); ?>"
                                aria-controls="flow-switch-detail"
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

                    <section class="automation-selected-product" id="flow-switch-detail" data-product-detail-panel hidden aria-live="polite"></section>
                    <script type="application/json" data-product-detail-data><?= json_encode($flowSwitchProductDetails, JSON_UNESCAPED_SLASHES); ?></script>
                </div>
            </div>
        </section>
    </div>
</main>
