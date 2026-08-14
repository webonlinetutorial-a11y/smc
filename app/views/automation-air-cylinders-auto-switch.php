<?php
$standardAirCylinderUrl = '/automation-air-cylinders-standard-air-cylinders-square-cover.php';
$compactAirCylinderUrl = '/automation-air-cylinders-compact-air-cylinders.php';
$isoCylinderUrl = '/automation-air-cylinders-iso-cylinders.php';
$airGripperUrl = '/automation-air-cylinders-air-gripper.php';
$autoSwitchUrl = '/automation-air-cylinders-auto-switch.php';

$categorySidebar = automationSidebarCategories('air-cylinders');

$autoSwitchProducts = [
    [
        'title' => 'Auto Switch D',
        'image' => 'Auto-switch/images/Auto Switch D.jpg',
        'description' => 'Auto Switch D is a solid-state sensor designed for mounting on SMC actuators. It provides non-contact sensing of piston...',
        'slug' => 'auto-switch-d',
        'detailItems' => [
            [
                'title' => 'Reed Auto Switch D-A',
                'image' => 'Air-cylinders/Auto-switch/D-A73.webp',
                'description' => 'Reed switches offer dependable detection, available in standard and 2-colour indication for enhanced visibility.',
                'actions' => [
                    ['label' => 'Part Numbers', 'icon' => 'list', 'wide' => true],
                    ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
                    ['label' => 'Enquiry', 'icon' => 'circle-help'],
                ],
            ],
            [
                'title' => 'Solid State Auto Switch D-M9',
                'image' => 'Air-cylinders/Auto-switch/D-M9.jpg',
                'description' => 'The D-M9*-5 is a compact solid-state auto switch designed for precise end-of-stroke detection in pneumatic actuators.',
                'actions' => [
                    ['label' => 'Part Numbers', 'icon' => 'list', 'wide' => true],
                    ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
                    ['label' => 'Enquiry', 'icon' => 'circle-help'],
                ],
            ],
            [
                'title' => 'Reed Auto Switch D-Z',
                'image' => 'Air-cylinders/Auto-switch/D-Z.jpg',
                'description' => 'Reed switch offer dependable detection, available in standard and 2-colour indication for enhanced visibility.',
                'actions' => [
                    ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
                    ['label' => 'Enquiry', 'icon' => 'circle-help'],
                ],
            ],
        ],
    ],
];

$autoSwitchProductDetails = [];

foreach ($autoSwitchProducts as $product) {
    $autoSwitchProductDetails[$product['slug']] = [
        'items' => array_map(
            static function (array $item): array {
                return [
                    'title' => $item['title'],
                    'image' => assetUrl('images/' . $item['image']),
                    'description' => $item['description'],
                    'actions' => $item['actions'],
                ];
            },
            $product['detailItems']
        ),
    ];
}
?>

<main class="automation-page air-cylinders-page auto-switch-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro air-cylinders-intro auto-switch-intro" aria-labelledby="auto-switch-title">
            <div class="automation-intro__content">
                <h1 id="auto-switch-title">Auto switch</h1>
                <p>SMC auto switches detect piston positions in cylinders for real-time feedback. Compact, easy to install, and reliable, they enhance automation precision without physical contact.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/Auto-switch/Solid-State-Auto-Switch-D-M9-intro.jpg')); ?>" alt="Auto switch" loading="eager">
            </div>
        </section>

        <section class="automation-categories air-cylinder-products auto-switch-products" aria-label="Auto switch products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'automation-air-cylinders-auto-switch-category-panel'); ?>

                <div class="automation-product-selection auto-switch-selection" data-product-detail-shell>
                <div class="automation-category-grid air-cylinder-product-grid auto-switch-product-grid">
                    <?php foreach ($autoSwitchProducts as $product): ?>
                        <a
                            class="automation-category-card air-cylinder-product-card auto-switch-product-card"
                            href="#auto-switch-detail"
                            data-product-detail-trigger
                            data-product-id="<?= e($product['slug']); ?>"
                            aria-controls="auto-switch-detail"
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

                <section class="automation-selected-product" id="auto-switch-detail" data-product-detail-panel hidden aria-live="polite"></section>
                <script type="application/json" data-product-detail-data><?= json_encode($autoSwitchProductDetails, JSON_UNESCAPED_SLASHES); ?></script>
                </div>
            </div>
        </section>
    </div>
</main>
