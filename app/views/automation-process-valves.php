<?php
$processValveSolenoidUrl = '/automation-process-valves-2-3-port-solenoid-valves-air-operated-valves.php';

$categorySidebar = automationSidebarCategories('process-valves');

$processValveProducts = [
    [
        'title' => '2/3 Port Solenoid Valves/Air Operated Valves',
        'series' => 'Process Valve Series',
        'image' => 'Process-Valve/Port-Solenoid-Valve/23 Port Solenoid ValvesAir Operated Valves.webp',
        'description' => 'SMC process valves provide reliable fluid and air control for industrial process automation applications.',
        'slug' => '2-3-port-solenoid-valves-air-operated-valves',
        'url' => $processValveSolenoidUrl,
    ],
];
?>

<main class="automation-page process-valves-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro process-valves-intro" aria-labelledby="process-valves-title">
            <div class="automation-intro__content">
                <h1 id="process-valves-title">Process Valves</h1>
                <p>SMC Process Valves are designed for reliable control of air, water, steam, and compatible fluids in industrial automation systems. Solenoid and air operated valve options support dependable switching and flow control across process equipment.</p>
                <p>These valves help improve process reliability, machine safety, and controlled operation in manufacturing, utilities, and fluid handling applications.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/Process-Valve/Process-Valves.jpg')); ?>" alt="SMC process valves" loading="eager">
            </div>
        </section>

        <section class="automation-categories process-valve-products" aria-label="Process valve products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'automation-process-valves-category-panel'); ?>

                <div class="automation-category-grid process-valve-product-grid">
                    <?php foreach ($processValveProducts as $product): ?>
                        <a class="automation-category-card process-valve-product-card" href="<?= e(appUrl($product['url'] ?? '/products.php?product=' . $product['slug'])); ?>">
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
