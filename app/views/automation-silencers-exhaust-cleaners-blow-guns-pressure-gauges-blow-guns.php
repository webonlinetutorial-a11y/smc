<?php
$airBlowingEquipmentUrl = '/automation-silencers-exhaust-cleaners-blow-guns-pressure-gauges-blow-guns-air-blowing-equipment.php';

$categorySidebar = automationSidebarCategories('silencers-exhaust');

$blowGunProducts = [
    [
        'title' => 'Air Blowing Equipment',
        'image' => 'Silencer-Exhaust-Cleaner/Blow-Guns/Pulse-Blow-245.webp',
        'description' => 'Air Blowing Equipment',
        'slug' => 'air-blowing-equipment',
        'url' => $airBlowingEquipmentUrl,
    ],
];
?>

<main class="automation-page silencers-exhaust-page blow-guns-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro silencers-exhaust-intro blow-guns-intro" aria-labelledby="blow-guns-title">
            <div class="automation-intro__content">
                <h1 id="blow-guns-title">Blow Guns /Blowing Equipments</h1>
                <p>Blow guns have a large effective area without a nozzle. Piping direction is optional from the top or bottom.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/Silencer-Exhaust-Cleaner/Blow-Guns/blow-gun.webp')); ?>" alt="Blow Guns /Blowing Equipments" loading="eager">
            </div>
        </section>

        <section class="automation-categories silencer-products blow-gun-products" aria-label="Blow gun products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'automation-silencers-exhaust-cleaners-blow-guns-pressure-gauges-blow-guns-category-panel'); ?>

                <div class="automation-category-grid silencer-product-grid blow-gun-product-grid">
                    <?php foreach ($blowGunProducts as $product): ?>
                        <a class="automation-category-card silencer-product-card blow-gun-product-card" href="<?= e(appUrl($product['url'] ?? '/products.php?product=' . $product['slug'])); ?>">
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
            </div>
        </section>
    </div>
</main>
