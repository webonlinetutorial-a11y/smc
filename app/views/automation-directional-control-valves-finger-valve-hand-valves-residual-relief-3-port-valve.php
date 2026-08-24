<?php
$categorySidebar = automationSidebarCategories('directional-control-valves');

$fingerValveProducts = [
    [
        'title' => '2/3 Port Finger Valve',
        'image' => 'Directional-control-valve/Finger-valve/VHK.webp',
        'description' => 'Finger valves are compact manual valves used for on/off control in benchtop or test equipment. Simple to operate with push-but...',
        'slug' => '2-3-port-finger-valve',
        'url' => appUrl('/product-detail.php?product=finger-valve-vhk-a-series'),
        'detailTitle' => 'Finger Valve VHK-A Series',
        'detailImage' => 'Directional-control-valve/Finger-valve/Finger-valve-intro-img1.webp',
        'detailDescription' => 'The VHK-A Series offers compact, user-friendly manual valves with a clear open/close indication via knob direction (counter-...',
        'detailActions' => [
            ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true, 'url' => 'https://www.smcworld.com/webcatalog/api/en-sg/guide/?id=VHK-A'],
            ['label' => 'Enquiry', 'icon' => 'circle-help', 'enquiry' => true],
        ],
    ],
    [
        'title' => 'OSHA Standard Compliant Pressure...',
        'image' => 'Directional-control-valve/Finger-valve/VHS-D.webp',
        'description' => 'OSHA-compliant 3-port pressure relief valves ensure safe depressurization during maintenance. These valve...',
        'slug' => 'osha-standard-compliant-pressure',
        'url' => appUrl('/product-detail.php?product=osha-standard-compliant-pressure-relief-3-port-valve-with-locking-holes-vhs-d-vhs-w-d'),
        'detailTitle' => 'OSHA Standard Compliant Pressure...',
        'detailImage' => 'Directional-control-valve/Finger-valve/VHS-img1.jpg',
        'detailDescription' => 'Panel mount specificat... Improved flow rate cha... Energy saving: Zero blo... OSHA (Occupational S... Safety measure: Can pr...',
        'detailActions' => [
            ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true, 'url' => 'https://www.smcworld.com/webcatalog/api/en-sg/guide/?id=VHS-D'],
            ['label' => 'Enquiry', 'icon' => 'circle-help', 'enquiry' => true],
        ],
    ],
    [
        'title' => 'Residual Relief 3-Port Valve',
        'image' => 'Directional-control-valve/Finger-valve/VHS400.webp',
        'description' => 'Residual pressure relief valves safely release trapped air from pneumatic systems to avoid unintentional actuator...',
        'slug' => 'residual-relief-3-port-valve',
        'url' => appUrl('/product-detail.php?product=residual-pressure-relief-3-port-hand-valve-vhs400-500-series'),
        'detailTitle' => 'Residual Pressure Relief 3 Port Hand...',
        'detailImage' => 'Directional-control-valve/Finger-valve/VHS400-img1.webp',
        'detailDescription' => 'Designed to meet OSHA safety standards, this 3-port pressure relief valve enhances system safety and energy efficiency. Wit...',
        'detailActions' => [
            ['label' => 'Enquiry', 'icon' => 'circle-help', 'enquiry' => true],
        ],
    ],
];

$fingerValveProductDetails = [];
foreach ($fingerValveProducts as $product) {
    $fingerValveProductDetails[$product['slug']] = [
        'title' => $product['detailTitle'],
        'image' => assetUrl('images/' . ($product['detailImage'] ?? $product['image'])),
        'description' => $product['detailDescription'],
        'actions' => $product['detailActions'],
        'url' => $product['url'] ?? '',
    ];
}
?>

<main class="automation-page directional-control-valves-page finger-valves-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro directional-control-valves-intro finger-valves-intro" aria-labelledby="finger-valves-title">
            <div class="automation-intro__content">
                <h1 id="finger-valves-title">Finger Valve/Hand Valves/Residual Relief 3 Port Valve</h1>
                <p>Control airflow manually with SMC finger valves and hand valves. Ideal for maintenance or operator-driven control, with optional residual pressure relief for safety.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/Directional-control-valve/Finger-valve/Finger-valve-intro.webp')); ?>" alt="Finger Valve/Hand Valves/Residual Relief 3 Port Valve" loading="eager">
            </div>
        </section>

        <section class="automation-categories directional-control-valve-products finger-valve-products" aria-label="Finger valve products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'automation-directional-control-valves-finger-valve-hand-valves-residual-relief-3-port-valve-category-panel'); ?>

                <div class="automation-product-selection finger-valve-selection" data-product-detail-shell>
                    <div class="automation-category-grid directional-control-valve-product-grid finger-valve-product-grid">
                        <?php foreach ($fingerValveProducts as $product): ?>
                            <a
                                class="automation-category-card directional-control-valve-product-card finger-valve-product-card"
                                href="#finger-valve-detail"
                                data-product-detail-trigger
                                data-product-id="<?= e($product['slug']); ?>"
                                aria-controls="finger-valve-detail"
                                aria-expanded="false"
                            >
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

                    <section class="automation-selected-product" id="finger-valve-detail" data-product-detail-panel hidden aria-live="polite"></section>
                    <script type="application/json" data-product-detail-data><?= json_encode($fingerValveProductDetails, JSON_UNESCAPED_SLASHES); ?></script>
                </div>
            </div>
        </section>
    </div>
</main>
