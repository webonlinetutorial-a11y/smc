<?php
$speedControllersUrl = '/automation-flow-control-equipment-speed-controllers-speed-controllers-for-general-purposes.php';

$categorySidebar = automationSidebarCategories('flow-control-equipment');

$flowControlProducts = [
    [
        'title' => 'Speed Controllers For General Purposes',
        'series' => 'AS Series',
        'image' => 'Flow-Control-Equipment/Speed-Controllers-for-General-Purposes.webp',
        'description' => 'SMC speed controllers regulate airflow to pneumatic actuators for smooth, repeatable cylinder speed adjustment in automated systems.',
        'slug' => 'speed-controllers-for-general-purposes',
        'url' => $speedControllersUrl,
    ],
];
?>

<main class="automation-page flow-control-equipment-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro flow-control-equipment-intro" aria-labelledby="flow-control-equipment-title">
            <div class="automation-intro__content">
                <h1 id="flow-control-equipment-title">Flow Control Equipment/Speed Controllers</h1>
                <p>SMC Flow Control Equipment and Speed Controllers help fine-tune compressed air flow for precise pneumatic actuator movement. They support stable speed adjustment, smoother cylinder motion, and dependable operation across automated machines.</p>
                <p>These components are used in assembly, handling, packaging, and production systems where controlled airflow is essential for repeatable motion and efficient pneumatic performance.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/Flow-Control-Equipment/Speed-Controllers-for-General-Purposes.webp')); ?>" alt="SMC flow control speed controller" loading="eager">
            </div>
        </section>

        <section class="automation-categories flow-control-products" aria-label="Flow control equipment products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'automation-flow-control-equipment-speed-controllers-category-panel'); ?>

                <div class="automation-category-grid flow-control-product-grid">
                    <?php foreach ($flowControlProducts as $product): ?>
                        <a class="automation-category-card flow-control-product-card" href="<?= e(appUrl($product['url'] ?? '/products.php?product=' . $product['slug'])); ?>">
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
