<?php
$fittingsGeneralPurposeUrl = '/automation-fittings-and-tubings-fittings-for-general-purposes.php';
$fittingsCouplersUrl = '/automation-fittings-and-tubings-fittings-for-general-purposes-s-couplers-multi-connectors.php';
$tubingUrl = '/automation-fittings-and-tubings-tubing.php';
$relatedProductsUrl = '/automation-fittings-and-tubings-related-products.php';

$categorySidebar = automationSidebarCategories('fittings-tubings');

$fittingsTubingProducts = [
    [
        'title' => 'Fittings For General Purposes',
        'series' => 'KQ2 Series',
        'image' => 'Fittings-tube/Fitting-KQ2.webp',
        'description' => 'SMC general purpose fittings provide quick, secure pneumatic connections for reliable air piping and machine installation.',
        'slug' => 'fittings-for-general-purposes',
        'url' => $fittingsGeneralPurposeUrl,
    ],
    [
        'title' => 'S Couplers and Multi-Connectors',
        'series' => 'KK / KKH Series',
        'image' => 'Fittings-tube/KK-KKH.webp',
        'description' => 'SMC couplers and multi-connectors simplify air line connection, disconnection, and grouped pneumatic circuit routing.',
        'slug' => 's-couplers-multi-connectors',
        'url' => $fittingsCouplersUrl,
    ],
    [
        'title' => 'Tubing',
        'series' => 'TU Series',
        'image' => 'Fittings-tube/tubing.webp',
        'description' => 'SMC pneumatic tubing supports flexible, durable air delivery for automation equipment and compressed air systems.',
        'slug' => 'tubing',
        'url' => $tubingUrl,
    ],
    [
        'title' => 'Related Products',
        'series' => 'TK Series',
        'image' => 'Fittings-tube/TK.webp',
        'description' => 'Related pneumatic accessories, including tube cutters, help support clean installation and maintenance of air piping systems.',
        'slug' => 'related-products',
        'url' => $relatedProductsUrl,
    ],
];
?>

<main class="automation-page fittings-tubings-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro fittings-tubings-intro" aria-labelledby="fittings-tubings-title">
            <div class="automation-intro__content">
                <h1 id="fittings-tubings-title">Fittings and Tubings</h1>
                <p>SMC fittings and tubing provide dependable air line connections for pneumatic automation systems. Push-in fittings, couplers, multi-connectors, and tubing products help route compressed air cleanly and efficiently across machines and control panels.</p>
                <p>These components support fast installation, secure sealing, flexible piping layouts, and reliable maintenance for industrial compressed air networks.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/Fittings-tube/Fitting-KQ2.webp')); ?>" alt="SMC fittings and tubing" loading="eager">
            </div>
        </section>

        <section class="automation-categories fittings-tubing-products" aria-label="Fittings and tubing products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'automation-fittings-tubings-category-panel'); ?>

                <div class="automation-category-grid fittings-tubing-product-grid">
                    <?php foreach ($fittingsTubingProducts as $product): ?>
                        <a class="automation-category-card fittings-tubing-product-card" href="<?= e(appUrl($product['url'] ?? '/products.php?product=' . $product['slug'])); ?>">
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
