<?php
$electricActuatorUrl = '/automation-electric-actuators-mounting-kit-for-multi-axis-system-lea-series.php';
$electricActuatorEqfshUrl = '/automation-electric-actuators-e-actuator-easy-to-operate-integrated-controller.php';

$categorySidebar = automationSidebarCategories('electric-actuators');

$electricActuatorProducts = [
    [
        'title' => 'Mounting Kit for Multi-Axis System',
        'image' => 'Electric-Actuators/Mounting Kit for Multi-Axis System/Mounting-Kit-400-removebg-preview - img1.webp',
        'description' => 'Mounting Kit for Multi-Axis System',
        'slug' => 'mounting-kit-for-multi-axis-system-lea-series',
        'url' => $electricActuatorUrl,
    ],
    [
        'title' => 'e-Actuator Easy to Operate Integrated Controller',
        'image' => 'Electric-Actuators/e-Actuator Easy to Operate Integrated Controller/EQFSHEQYH-C-C1-4.webp',
        'description' => 'The SMC e-Actuator with Integrated Controller offers simplified operation, making it easy to set up and control for various automation applications.',
        'slug' => 'e-actuator-easy-to-operate-integrated-controller',
        'url' => $electricActuatorEqfshUrl,
    ],
];
?>

<main class="automation-page electric-actuators-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro electric-actuators-intro" aria-labelledby="electric-actuators-title">
            <div class="automation-intro__content">
                <h1 id="electric-actuators-title">Electric Actuators</h1>
                <p>SMC Electric Actuator Manufacturer in India – Advanced Automation Solutions. As a leading electric actuator manufacturer in India, SMC provides cutting‑edge motion control solutions designed to meet the growing demands of Indian manufacturing and automation industries. SMC is widely recognized as a reliable electric actuator cylinder manufacturer, offering compact and energy‑efficient designs.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/Electric-Actuators.jpg')); ?>" alt="SMC electric actuators" loading="eager">
            </div>
        </section>

        <section class="automation-categories electric-actuator-products" aria-label="Electric actuator products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'automation-electric-actuators-category-panel'); ?>

                <div class="automation-category-grid electric-actuator-product-grid">
                    <?php foreach ($electricActuatorProducts as $product): ?>
                        <a class="automation-category-card electric-actuator-product-card" href="<?= e(appUrl($product['url'] ?? '/products.php?product=' . $product['slug'])); ?>">
                            <?php if (!empty($product['isNew'])): ?>
                                <span class="automation-category-card__ribbon">New</span>
                            <?php endif; ?>
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
            </div>
        </section>
    </div>
</main>
