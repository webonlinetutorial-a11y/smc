<?php
$categorySidebar = automationSidebarCategories('electric-actuators');

$leaSeriesProducts = [
    [
        'title' => 'LEA Series, Mounting Kit for Multi-Axis System',
        'image' => 'Electric-Actuators/Mounting Kit for Multi-Axis System/Mounting-Kit-400-removebg-preview.webp',
        'descriptionItems' => [
            'Creation of an XYZ unit',
            'Easy system construction using',
        ],
        'isNew' => true,
        'slug' => 'mounting-kit-for-multi-axis-system-lea-series',
        'items' => [
            [
                'title' => 'LEA Series, Mounting Kit for Multi-Axis System',
                'image' => assetUrl('images/Electric-Actuators/Mounting Kit for Multi-Axis System/Mounting-Kit-400-removebg-preview - img1.webp'),
                'descriptionItems' => [
                    'Creation of an XYZ unit',
                    'Easy system construction using',
                    'Compatible actuators: X-Y-axis...',
                ],
                'url' => appUrl('/product-detail.php?product=mounting-kit-for-multi-axis-system-lea-series'),
                'actions' => [
                    ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
                    ['label' => 'Enquiry', 'icon' => 'circle-help'],
                ],
            ],
        ],
    ],
];

$leaSeriesProductDetails = [];
foreach ($leaSeriesProducts as $product) {
    $leaSeriesProductDetails[$product['slug']] = $product;
}
?>

<main class="automation-page electric-actuators-page electric-actuators-lea-series-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro electric-actuators-intro electric-actuators-lea-series-intro" aria-labelledby="electric-actuators-lea-series-title">
            <div class="automation-intro__content">
                <h1 id="electric-actuators-lea-series-title">Mounting Kit for Multi-Axis System</h1>
                <p>Mounting Kit for Multi-Axis System</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/Electric-Actuators/Mounting Kit for Multi-Axis System/Mounting-Kit-400-removebg-preview - img1.webp')); ?>" alt="Mounting Kit for Multi-Axis System : LEA Series" loading="eager">
            </div>
        </section>

        <section class="automation-categories electric-actuator-lea-series-products" aria-label="LEA series mounting kit products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'automation-electric-actuators-mounting-kit-for-multi-axis-system-lea-series-category-panel'); ?>

                <div class="automation-product-selection electric-actuator-lea-series-selection" data-product-detail-shell>
                    <div class="automation-category-grid electric-actuator-lea-series-product-grid">
                        <?php foreach ($leaSeriesProducts as $product): ?>
                            <a
                                class="automation-category-card electric-actuator-lea-series-product-card"
                                href="#electric-actuator-lea-series-detail"
                                data-product-detail-trigger
                                data-product-id="<?= e($product['slug']); ?>"
                                aria-controls="electric-actuator-lea-series-detail"
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

                    <section class="automation-selected-product" id="electric-actuator-lea-series-detail" data-product-detail-panel hidden aria-live="polite"></section>
                    <script type="application/json" data-product-detail-data><?= json_encode($leaSeriesProductDetails, JSON_UNESCAPED_SLASHES); ?></script>
                </div>
            </div>
        </section>
    </div>
</main>
