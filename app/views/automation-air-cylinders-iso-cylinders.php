<?php
$standardAirCylinderUrl = '/automation-air-cylinders-standard-air-cylinders-square-cover.php';
$compactAirCylinderUrl = '/automation-air-cylinders-compact-air-cylinders.php';
$isoCylinderUrl = '/automation-air-cylinders-iso-cylinders.php';
$airGripperUrl = '/automation-air-cylinders-air-gripper.php';
$autoSwitchUrl = '/automation-air-cylinders-auto-switch.php';

$categorySidebar = automationSidebarCategories('air-cylinders');

$isoCylinderProducts = [
    [
        'title' => 'ISO Standards (6432) Air Cylinder',
        'image' => 'ISO-Cylinder/images/ISO Standards (6432) Air Cylinder.jpg',
        'description' => 'ISO 6432 cylinders are round cylinders typically used in compact automation setups. They have stainless steel barrel...',
        'slug' => 'iso-standards-6432-air-cylinder',
        'detailItems' => [
            [
                'title' => 'ISO Cylinder C85 Series',
                'image' => 'ISO-Cylinder/images/ISO Standards (6432) Air Cylinder.jpg',
                'detailUrl' => '/product-detail.php?product=iso-cylinder-c85-series',
                'detailImage' => 'Air-cylinders/ISO-Cylinder/C85-img1.webp',
                'description' => 'The C85 Series, compliant with ISO 6432, is designed for durability in dusty environments. Its unique rod packing effectively...',
                'actions' => [
                    ['label' => 'Part Numbers', 'icon' => 'list', 'wide' => true, 'url' => appUrl('/product-detail.php?product=iso-cylinder-c85-series#part-numbers'), 'sameTab' => true],
                    ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true, 'url' => appUrl('/catalogs/iso-cylinder-c85-series.pdf')],
                    ['label' => 'Enquiry', 'icon' => 'circle-help'],
                ],
            ],
            [
                'title' => 'Air Cylinder C75 Series',
                'image' => 'Air-cylinders/ISO-Cylinder/C75.webp',
                'detailUrl' => '/product-detail.php?product=air-cylinder-c75-series',
                'detailImage' => 'Air-cylinders/ISO-Cylinder/C75-img1.webp',
                'description' => 'The C75 series air cylinders feature a compact, space-efficient design with exceptional dimensional precision, ensuring ease o...',
                'actions' => [
                    ['label' => 'Part Numbers', 'icon' => 'list', 'wide' => true, 'url' => appUrl('/product-detail.php?product=air-cylinder-c75-series#part-numbers'), 'sameTab' => true],
                    ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true, 'url' => appUrl('/catalogs/air-cylinder-c75-series.pdf')],
                    ['label' => 'Enquiry', 'icon' => 'circle-help'],
                ],
            ],
        ],
    ],
    [
        'title' => 'ISO Standards (21287) Air Cylinder',
        'image' => 'ISO-Cylinder/images/ISO Standards (21287) Air Cylinder.jpg',
        'description' => 'ISO 21287 compact cylinders offer the same motion capacity as ISO 15552 but in a shorter length. They are ideal for...',
        'slug' => 'iso-standards-21287-air-cylinder',
        'detailItems' => [
            [
                'title' => 'Compact Cylinder C55/CD55',
                'image' => 'Air-cylinders/ISO-Cylinder/Compact Cylinder CQ2-CDQ2.webp',
                'detailUrl' => '/product-detail.php?product=compact-cylinder-c55-cd55',
                'detailImage' => 'Air-cylinders/ISO-Cylinder/Compact Cylinder CQ2-CDQ2.webp',
                'description' => 'C55 Series air-operated, double-acting cylinders are built for a broad range of automation needs. With features like rubber...',
                'actions' => [
                    ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true, 'url' => appUrl('/catalogs/compact-cylinder-c55-cd55.pdf')],
                    ['label' => 'Enquiry', 'icon' => 'circle-help'],
                ],
            ],
        ],
    ],
    [
        'title' => 'ISO Cylinder CP96/CP96SD',
        'image' => 'ISO-Cylinder/images/ISO Cylinder CP96-CP96SD.jpg',
        'description' => 'The CP96/CP96SD series are ISO 15552-compliant cylinders offering enhanced cushioning and low-friction operation. These double-...',
        'slug' => 'iso-cylinder-cp96-cp96sd',
        'detailItems' => [
            [
                'title' => 'ISO Cylinder CP96/CP96SD Series',
                'image' => 'Air-cylinders/ISO-Cylinder/cp96-img2.webp',
                'detailUrl' => '/product-detail.php?product=iso-cylinder-cp96-cp96sd-series',
                'detailImage' => 'Air-cylinders/ISO-Cylinder/cp96-img2.webp',
                'description' => 'The CP96 Series conforms to ISO standards. Standard Type Double Acting, Single/Double Rod',
                'actions' => [
                    ['label' => 'Part Numbers', 'icon' => 'list', 'wide' => true, 'url' => appUrl('/product-detail.php?product=iso-cylinder-cp96-cp96sd-series#part-numbers'), 'sameTab' => true],
                    ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true, 'url' => appUrl('/catalogs/iso-cylinder-cp96-cp96sd-series.pdf')],
                    ['label' => 'Enquiry', 'icon' => 'circle-help'],
                ],
            ],
        ],
    ],
];

$isoCylinderProductDetails = [];

foreach ($isoCylinderProducts as $product) {
    $isoCylinderProductDetails[$product['slug']] = [
        'items' => array_map(
            static function (array $item): array {
                return [
                    'title' => $item['detailTitle'] ?? $item['title'],
                    'image' => assetUrl('images/' . ($item['detailImage'] ?? $item['image'])),
                    'description' => $item['description'],
                    'actions' => $item['actions'],
                    'url' => isset($item['detailUrl']) ? appUrl($item['detailUrl']) : '',
                ];
            },
            $product['detailItems']
        ),
    ];
}
?>

<main class="automation-page air-cylinders-page iso-cylinders-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro air-cylinders-intro iso-cylinders-intro" aria-labelledby="iso-cylinders-title">
            <div class="automation-intro__content">
                <h1 id="iso-cylinders-title">ISO Cylinders</h1>
                <p>SMC's ISO standard cylinders meet global dimensional standards, making them ideal for international applications requiring interchangeability and consistent performance.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/ISO-Cylinder/CP96-CP96SD-intro.jpg')); ?>" alt="ISO Cylinders" loading="eager">
            </div>
        </section>

        <section class="automation-categories air-cylinder-products iso-cylinder-products" aria-label="ISO cylinder products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'automation-air-cylinders-iso-cylinders-category-panel'); ?>

                <div class="automation-product-selection iso-cylinder-selection" data-product-detail-shell>
                <div class="automation-category-grid air-cylinder-product-grid iso-cylinder-product-grid">
                    <?php foreach ($isoCylinderProducts as $product): ?>
                        <a
                            class="automation-category-card air-cylinder-product-card iso-cylinder-product-card"
                            href="#iso-cylinder-detail"
                            data-product-detail-trigger
                            data-product-id="<?= e($product['slug']); ?>"
                            aria-controls="iso-cylinder-detail"
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

                <section class="automation-selected-product" id="iso-cylinder-detail" data-product-detail-panel hidden aria-live="polite"></section>
                <script type="application/json" data-product-detail-data><?= json_encode($isoCylinderProductDetails, JSON_UNESCAPED_SLASHES); ?></script>
                </div>
            </div>
        </section>
    </div>
</main>
