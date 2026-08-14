<?php
$silencersUrl = '/automation-silencers-exhaust-cleaners-blow-guns-pressure-gauges-silencers.php';

$categorySidebar = automationSidebarCategories('silencers-exhaust');

$silencerProducts = [
    [
        'title' => 'Silencers',
        'series' => 'AN Series',
        'image' => 'Silencer-Exhaust-Cleaner/AN.webp',
        'description' => 'SMC silencers reduce exhaust noise from pneumatic valves and air lines while supporting clean, efficient compressed air operation.',
        'slug' => 'silencers',
        'url' => $silencersUrl,
    ],
];
?>

<main class="automation-page silencers-exhaust-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro silencers-exhaust-intro" aria-labelledby="silencers-exhaust-title">
            <div class="automation-intro__content">
                <h1 id="silencers-exhaust-title">Silencers/Exhaust Cleaners/Pressure Gauges</h1>
                <p>SMC Silencers, Exhaust Cleaners, Blow Guns, and Pressure Gauges support safer and cleaner pneumatic operation. Silencers help reduce exhaust noise from pneumatic systems while maintaining dependable airflow performance.</p>
                <p>These accessories support machine maintenance, air exhaust management, and operating visibility across industrial automation and compressed air networks.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/Silencer-Exhaust-Cleaner/AN.webp')); ?>" alt="SMC pneumatic silencer" loading="eager">
            </div>
        </section>

        <section class="automation-categories silencer-products" aria-label="Silencer and exhaust cleaner products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'automation-silencers-exhaust-cleaners-blow-guns-pressure-gauges-category-panel'); ?>

                <div class="automation-category-grid silencer-product-grid">
                    <?php foreach ($silencerProducts as $product): ?>
                        <a class="automation-category-card silencer-product-card" href="<?= e(appUrl($product['url'] ?? '/products.php?product=' . $product['slug'])); ?>">
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
