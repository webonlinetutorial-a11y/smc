<?php
$standardAirCylinderUrl = '/automation-air-cylinders-standard-air-cylinders-square-cover.php';
$compactAirCylinderUrl = '/automation-air-cylinders-compact-air-cylinders.php';
$isoCylinderUrl = '/automation-air-cylinders-iso-cylinders.php';
$airGripperUrl = '/automation-air-cylinders-air-gripper.php';
$autoSwitchUrl = '/automation-air-cylinders-auto-switch.php';

$categorySidebar = automationSidebarCategories('air-cylinders');

$airCylinderProducts = [
    [
        'title' => 'Standard Air Cylinders',
        'series' => 'MB1 / MDB1 Series',
        'image' => 'Air-cylinders/standard-air-cyldr-MB1-MDB1.webp',
        'description' => 'SMC standard air cylinders provide reliable linear motion for a wide range of industrial automation applications.',
        'slug' => 'standard-air-cylinders',
        'url' => $standardAirCylinderUrl,
    ],
    [
        'title' => 'Compact Air Cylinders',
        'series' => 'CQ2 / CDQ2 Series',
        'image' => 'Air-cylinders/Compact Cylinder CQ2-CDQ2.webp',
        'description' => 'Compact air cylinders are designed for space-constrained applications while maintaining dependable pneumatic performance.',
        'slug' => 'compact-air-cylinders',
        'url' => $compactAirCylinderUrl,
    ],
    [
        'title' => 'ISO Cylinders',
        'series' => 'CP96 / CP96SD Series',
        'image' => 'Air-cylinders/ISO-cylndr-CP96-CP96SD.webp',
        'description' => 'ISO-compliant air cylinders provide standardized mounting and consistent performance across automation systems.',
        'slug' => 'iso-cylinders',
        'url' => $isoCylinderUrl,
    ],
    [
        'title' => 'Air Grippers',
        'series' => 'Parallel Type',
        'image' => 'Air-cylinders/Parallel-Type-Air Grippers.webp',
        'description' => 'SMC air grippers provide precise pneumatic gripping for automated handling, assembly and transfer applications.',
        'slug' => 'air-grippers',
        'url' => $airGripperUrl,
    ],
    [
        'title' => 'Auto Switches',
        'series' => 'D-M9 Series',
        'image' => 'Air-cylinders/Solid-State-Auto-Switch-D-M9.webp',
        'description' => 'SMC auto switches detect piston position in air cylinders for reliable feedback and automation control.',
        'slug' => 'auto-switches',
        'url' => $autoSwitchUrl,
    ],
];
?>

<main class="automation-page air-cylinders-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro air-cylinders-intro" aria-labelledby="air-cylinders-title">
            <div class="automation-intro__content">
                <h1 id="air-cylinders-title">Air Cylinders</h1>
                <p>SMC Air Cylinders provide reliable and precise linear motion for industrial automation applications. Designed for high performance, durability and efficient operation, SMC cylinders are available in compact, standard, guided and rodless variants to meet diverse pneumatic automation requirements.</p>
                <p>These cylinders support assembly, material handling, packaging and manufacturing systems with consistent stroke length, repeatable force output and clean integration into automated machinery.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/Air-cylinders/air-cylinder.webp')); ?>" alt="SMC air cylinder product family" loading="eager">
            </div>
        </section>

        <section class="automation-categories air-cylinder-products" aria-label="Air cylinder products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'automation-air-cylinders-category-panel'); ?>

                <div class="automation-category-grid air-cylinder-product-grid">
                    <?php foreach ($airCylinderProducts as $product): ?>
                        <a class="automation-category-card air-cylinder-product-card" href="<?= e(appUrl($product['url'] ?? '/products.php?product=' . $product['slug'])); ?>">
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
