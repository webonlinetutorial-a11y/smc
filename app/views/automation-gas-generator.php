<?php
$gasGeneratorUrl = '/automation-gas-generator-membrane-nitrogen-generator.php';

$categorySidebar = automationSidebarCategories('gas-generator');

$gasGeneratorProducts = [
    [
        'title' => 'Nitrogen Gas Generator',
        'image' => 'Membrane-Nitrogen-Generator.webp',
        'description' => 'Easily generate nitrogen-enriched air using only a compressed air supply. The NMG delivers a nitrogen concentration of 99.9% or...',
        'slug' => 'membrane-nitrogen-generator',
        'url' => $gasGeneratorUrl,
    ],
];
?>

<main class="automation-page gas-generator-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro gas-generator-intro" aria-labelledby="gas-generator-title">
            <div class="automation-intro__content">
                <h1 id="gas-generator-title">Gas Generator</h1>
                <p>Generate 99.9%+ high-purity nitrogen on-site with the SMC Membrane Nitrogen Generator (NMG) using only compressed air. Reduce dependency on delivered gas cylinders and lower long-term operating costs.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/Gas-Generator/Gas-generator-245.webp')); ?>" alt="SMC gas generator" loading="eager">
            </div>
        </section>

        <section class="automation-categories gas-generator-products" aria-label="Gas generator products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'automation-gas-generator-category-panel'); ?>

                <div class="automation-category-grid gas-generator-product-grid">
                    <?php foreach ($gasGeneratorProducts as $product): ?>
                        <a class="automation-category-card gas-generator-product-card" href="<?= e(appUrl($product['url'] ?? '/products.php?product=' . $product['slug'])); ?>">
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
