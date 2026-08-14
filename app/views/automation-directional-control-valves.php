<?php
$pilotOperatedValveUrl = '/automation-directional-control-valves-pilot-operated-4-5-port-solenoid-valves.php';
$directOperatedValveUrl = '/automation-directional-control-valves-direct-operated-3-4-5-port-solenoid-valves.php';
$mechanicalValveUrl = '/automation-directional-control-valves-mechanical-valves.php';
$fingerValveUrl = '/automation-directional-control-valves-finger-valve-hand-valves-residual-relief-3-port-valve.php';
$blowGunsUrl = '/automation-directional-control-valves-blow-guns.php';

$categorySidebar = automationSidebarCategories('directional-control-valves');

$directionalControlValveProducts = [
    [
        'title' => 'Pilot Operated 4/5 Port Solenoid Valves',
        'series' => 'SY3000 / SY9000 Series',
        'image' => 'Directional-control-valve/Solenoid-Valves.webp',
        'description' => 'SMC pilot operated solenoid valves provide reliable directional control for pneumatic actuators in automated machinery.',
        'slug' => 'pilot-operated-4-5-port-solenoid-valves',
        'url' => $pilotOperatedValveUrl,
    ],
    [
        'title' => 'Direct Operated 3/4/5 Port Solenoid Valves',
        'series' => 'VT307 Series',
        'image' => 'Directional-control-valve/Direct-operated-valve.webp',
        'description' => 'Direct operated solenoid valves deliver fast, compact air switching for pneumatic circuits and control panels.',
        'slug' => 'direct-operated-3-4-5-port-solenoid-valves',
        'url' => $directOperatedValveUrl,
    ],
    [
        'title' => 'Mechanical Valves',
        'series' => 'VM Series',
        'image' => 'Directional-control-valve/Mechanical-Valves.webp',
        'description' => 'SMC mechanical valves support manual, cam, and actuator-driven pneumatic signal control in industrial systems.',
        'slug' => 'mechanical-valves',
        'url' => $mechanicalValveUrl,
    ],
    [
        'title' => 'Finger Valves and Hand Valves',
        'series' => 'VHK / VHS Series',
        'image' => 'Directional-control-valve/Finger-valve.webp',
        'description' => 'Finger valves, hand valves, and residual pressure relief valves make pneumatic line operation and isolation simple and dependable.',
        'slug' => 'finger-valves-hand-valves-residual-relief-valves',
        'url' => $fingerValveUrl,
    ],
    [
        'title' => 'Blow Guns',
        'series' => 'VMG Series',
        'image' => 'Directional-control-valve/blow-gun.webp',
        'description' => 'SMC blow guns provide efficient air blowing for cleaning, drying, cooling, and general pneumatic utility applications.',
        'slug' => 'blow-guns',
        'url' => $blowGunsUrl,
    ],
];
?>

<main class="automation-page directional-control-valves-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro directional-control-valves-intro" aria-labelledby="directional-control-valves-title">
            <div class="automation-intro__content">
                <h1 id="directional-control-valves-title">Directional Control Valves</h1>
                <p>SMC Directional Control Valves manage the start, stop, and direction of compressed air in pneumatic automation systems. Solenoid, mechanical, finger, and hand valve options support dependable control across machine operation, assembly, packaging, and process equipment.</p>
                <p>These valves help coordinate actuator movement, isolate air lines, release residual pressure, and provide precise switching performance for reliable industrial automation.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/Directional-control-valve/Solenoid-Valves.webp')); ?>" alt="SMC directional control valves" loading="eager">
            </div>
        </section>

        <section class="automation-categories directional-control-valve-products" aria-label="Directional control valve products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'automation-directional-control-valves-category-panel'); ?>

                <div class="automation-category-grid directional-control-valve-product-grid">
                    <?php foreach ($directionalControlValveProducts as $product): ?>
                        <a class="automation-category-card directional-control-valve-product-card" href="<?= e(appUrl($product['url'] ?? '/products.php?product=' . $product['slug'])); ?>">
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
