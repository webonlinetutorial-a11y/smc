<?php
$flowSwitchUrl = '/automation-switches-sensors-controller-flow-switch.php';
$digitalPressureSwitchUrl = '/automation-switches-sensors-controller-digital-pressure-switch.php';

$categorySidebar = automationSidebarCategories('switches-sensors');

$switchSensorProducts = [
    [
        'title' => 'Flow Switch',
        'series' => 'PFMB Series',
        'image' => 'Switches-Sensors/PFMB.webp',
        'description' => 'SMC flow switches monitor airflow and provide reliable feedback for pneumatic automation control and system diagnostics.',
        'slug' => 'flow-switch',
        'url' => $flowSwitchUrl,
    ],
    [
        'title' => 'Digital Pressure Switch',
        'series' => 'ISE20 Series',
        'image' => 'Switches-Sensors/ISE20.webp',
        'description' => 'SMC digital pressure switches deliver clear pressure monitoring and control signals for stable pneumatic system operation.',
        'slug' => 'digital-pressure-switch',
        'url' => $digitalPressureSwitchUrl,
    ],
];
?>

<main class="automation-page switches-sensors-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro switches-sensors-intro" aria-labelledby="switches-sensors-title">
            <div class="automation-intro__content">
                <h1 id="switches-sensors-title">Switches and Sensors</h1>
                <p>SMC Switches and Sensors provide accurate monitoring for pneumatic automation systems. Flow switches and digital pressure switches help detect operating conditions, provide feedback to controllers, and support stable equipment performance.</p>
                <p>These products are used for airflow confirmation, pressure monitoring, diagnostics, and machine control across industrial automation applications.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/Switches-Sensors/PFMB.webp')); ?>" alt="SMC switches and sensors" loading="eager">
            </div>
        </section>

        <section class="automation-categories switches-sensor-products" aria-label="Switches and sensor products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'automation-switches-sensors-controller--category-panel'); ?>

                <div class="automation-category-grid switches-sensor-product-grid">
                    <?php foreach ($switchSensorProducts as $product): ?>
                        <a class="automation-category-card switches-sensor-product-card" href="<?= e(appUrl($product['url'] ?? '/products.php?product=' . $product['slug'])); ?>">
                            <span class="automation-category-card__media">
                                <img src="<?= e(assetUrl('images/' . $product['image'])); ?>" alt="<?= e($product['title']); ?>" loading="lazy">
                            </span>
                            <span class="automation-category-card__body">
                                <strong><?= e($product['title']); ?></strong>
                                <em><?= e($product['series']); ?></em>
                                <span><?= e($product['description']); ?></span>
                                <small>Explore <?= lucideIcon('arrow-right'); ?></small>
                            </span>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </div>
</main>
