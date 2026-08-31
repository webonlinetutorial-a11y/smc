<?php
$categorySidebar = automationSidebarCategories('electric-actuators');

$eActuatorEqfshProducts = [
    [
        'title' => 'EQFS□H Series, Slider Type/Rod Type/Guide Rod Type',
        'image' => 'Electric-Actuators/e-Actuator Easy to Operate Integrated Controller/EQFS-H.webp',
        'descriptionItems' => [
            'Easy to set up, just like air',
        ],
        'isNew' => true,
        'slug' => 'e-actuator-easy-to-operate-integrated-controller',
        'items' => [
            [
                'title' => 'EQFS□H Series, Slider Type/Rod Type/Guide Rod Type',
                'image' => assetUrl('images/Electric-Actuators/e-Actuator Easy to Operate Integrated Controller/EQFS-H.webp'),
                'descriptionItems' => [
                    'Simplified operation with an integrated controller',
                    'Easy to set up and control',
                    'Suited for a wide range of automation applications',
                ],
                'url' => appUrl('/product-detail.php?product=slider-type-rod-type-guide-rod-type-eqfsh-series'),
                'actions' => [
                    ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
                    ['label' => 'Video', 'icon' => 'circle-play', 'videoUrl' => 'https://www.youtube.com/watch?v=wEm855Xlnp8'],
                    ['label' => 'Enquiry', 'icon' => 'circle-help'],
                ],
            ],
        ],
    ],
];

$eActuatorEqfshProductDetails = [];
foreach ($eActuatorEqfshProducts as $product) {
    $eActuatorEqfshProductDetails[$product['slug']] = $product;
}
?>

<main class="automation-page electric-actuators-page electric-actuators-eqfsh-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro electric-actuators-intro electric-actuators-eqfsh-intro" aria-labelledby="electric-actuators-eqfsh-title">
            <div class="automation-intro__content">
                <h1 id="electric-actuators-eqfsh-title">e-Actuator Easy to Operate Integrated Controller</h1>
                <p>The SMC e-Actuator with Integrated Controller offers simplified operation, making it easy to set up and control for various automation applications.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/Electric-Actuators/e-Actuator Easy to Operate Integrated Controller/EQFSHEQYH-C-C1-4.webp')); ?>" alt="e-Actuator Easy to Operate Integrated Controller" loading="eager">
            </div>
        </section>

        <section class="automation-categories electric-actuator-eqfsh-products" aria-label="e-Actuator integrated controller products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'automation-electric-actuators-e-actuator-easy-to-operate-integrated-controller-category-panel'); ?>

                <div class="automation-product-selection electric-actuator-eqfsh-selection" data-product-detail-shell>
                    <div class="automation-category-grid electric-actuator-eqfsh-product-grid">
                        <?php foreach ($eActuatorEqfshProducts as $product): ?>
                            <a
                                class="automation-category-card electric-actuator-eqfsh-product-card"
                                href="#electric-actuator-eqfsh-detail"
                                data-product-detail-trigger
                                data-product-id="<?= e($product['slug']); ?>"
                                aria-controls="electric-actuator-eqfsh-detail"
                                aria-expanded="false"
                            >
                                <?php if (!empty($product['isNew'])): ?>
                                    <span class="automation-category-card__ribbon">New</span>
                                <?php endif; ?>
                                <span class="automation-category-card__media">
                                    <img src="<?= e(assetUrl('images/' . $product['image'])); ?>" alt="<?= e($product['title']); ?>" loading="lazy">
                                </span>
                                <span class="automation-category-card__body">
                                    <strong><?= e($product['title']); ?></strong>
                                    <?php if (!empty($product['descriptionItems'])): ?>
                                        <span>
                                            <ul class="automation-category-card__points">
                                                <?php foreach ($product['descriptionItems'] as $point): ?>
                                                    <li><?= e($point); ?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </span>
                                    <?php endif; ?>
                                    <small>Explore <?= lucideIcon('arrow-right'); ?></small>
                                </span>
                            </a>
                        <?php endforeach; ?>
                    </div>

                    <section class="automation-selected-product" id="electric-actuator-eqfsh-detail" data-product-detail-panel hidden aria-live="polite"></section>
                    <script type="application/json" data-product-detail-data><?= json_encode($eActuatorEqfshProductDetails, JSON_UNESCAPED_SLASHES); ?></script>
                </div>
            </div>
        </section>
    </div>
</main>
