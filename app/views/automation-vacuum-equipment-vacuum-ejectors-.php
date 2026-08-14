<?php
$vacuumEjectorUrl = '/automation-vacuum-equipment-vacuum-ejectors-vacuum-ejector.php';
$vacuumPadUrl = '/automation-vacuum-equipment-vacuum-ejectors-vacuum-pad.php';

$categorySidebar = automationSidebarCategories('vacuum-equipment');

$vacuumProducts = [
    [
        'title' => 'Vacuum Ejector',
        'series' => 'ZH Series',
        'image' => 'Vaccum-Equipment-Ejectors/Vacuum-Ejector.webp',
        'description' => 'SMC vacuum ejectors generate vacuum from compressed air for compact, efficient pneumatic pick-and-place handling.',
        'slug' => 'vacuum-ejector',
        'url' => $vacuumEjectorUrl,
    ],
    [
        'title' => 'Vacuum Pad',
        'series' => 'ZP Series',
        'image' => 'Vaccum-Equipment-Ejectors/vacuum-pad.webp',
        'description' => 'SMC vacuum pads provide secure workpiece gripping for automated transfer, packaging, assembly, and material handling systems.',
        'slug' => 'vacuum-pad',
        'url' => $vacuumPadUrl,
    ],
];
?>

<main class="automation-page vacuum-equipment-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro vacuum-equipment-intro" aria-labelledby="vacuum-equipment-title">
            <div class="automation-intro__content">
                <h1 id="vacuum-equipment-title">Vacuum Equipment/Vacuum Ejectors</h1>
                <p>SMC Vacuum Equipment and Vacuum Ejectors support reliable pneumatic handling for automated transfer, packaging, and assembly applications. Vacuum ejectors and pads help generate, hold, and release workpieces efficiently in compact automation systems.</p>
                <p>These products provide dependable vacuum generation and gripping performance for a wide range of materials, shapes, and production environments.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/Vaccum-Equipment-Ejectors/Vacuum-Ejector.webp')); ?>" alt="SMC vacuum equipment and ejectors" loading="eager">
            </div>
        </section>

        <section class="automation-categories vacuum-products" aria-label="Vacuum equipment products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'automation-vacuum-equipment-vacuum-ejectors--category-panel'); ?>

                <div class="automation-category-grid vacuum-product-grid">
                    <?php foreach ($vacuumProducts as $product): ?>
                        <a class="automation-category-card vacuum-product-card" href="<?= e(appUrl($product['url'] ?? '/products.php?product=' . $product['slug'])); ?>">
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
