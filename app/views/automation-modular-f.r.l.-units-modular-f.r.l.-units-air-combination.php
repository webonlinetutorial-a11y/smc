<?php
$categorySidebar = automationSidebarCategories('modular-frl-units');

$airCombinationProducts = [
    [
        'title' => 'Modular F.R.L. Units AC-B',
        'image' => 'Modular-FRL-Unit/Modular-FRL-Unit-Combination/AC-B.jpg',
        'description' => 'SMC modular FRL combinations integrate filters, regulators, and lubricators into one unit.',
        'slug' => 'modular-frl-units-ac-b',
        'detailDescription' => 'Modular, compact and ... ISO8573-1:2010 certifi... Durable, ergonomic de... The transparent bowl g... Built-in square pressur...',
        'detailActions' => [
            ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
            ['label' => 'Enquiry', 'icon' => 'circle-help'],
        ],
    ],
    [
        'title' => 'Modular F.R.L. Units AC-D Series',
        'image' => 'Modular-FRL-Unit/Modular-FRL-Unit-Combination/AC-D.webp',
        'description' => 'SMC modular FRL combinations',
        'slug' => 'modular-frl-units-ac-d-series',
        'detailDescription' => 'Modular, compact and ... ISO8573-1:2010 certifi... Durable, ergonomic de... The transparent bowl g... Built-in square pressur...',
        'detailActions' => [
            ['label' => 'Part Numbers', 'icon' => 'list', 'wide' => true],
            ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
            ['label' => 'Video', 'icon' => 'circle-play'],
            ['label' => 'Enquiry', 'icon' => 'circle-help'],
        ],
    ],
    [
        'title' => 'Modular F.R.L. Units AC-A',
        'image' => 'Modular-FRL-Unit/Modular-FRL-Unit-Combination/AC-A (1).webp',
        'description' => 'Air Combination Air Filter + Regulator + Lubricator',
        'slug' => 'modular-frl-units-ac-a',
        'detailDescription' => 'Air Combination Air Filter + Regulator + Lubricator',
        'detailActions' => [
            ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
            ['label' => 'Enquiry', 'icon' => 'circle-help'],
        ],
    ],
];

$airCombinationProductDetails = [];
foreach ($airCombinationProducts as $product) {
    $airCombinationProductDetails[$product['slug']] = [
        'title' => $product['title'],
        'image' => assetUrl('images/' . $product['image']),
        'description' => $product['detailDescription'],
        'actions' => $product['detailActions'],
    ];
}
?>

<main class="automation-page modular-frl-units-page modular-frl-air-combination-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro modular-frl-units-intro modular-frl-air-combination-intro" aria-labelledby="modular-frl-air-combination-title">
            <div class="automation-intro__content">
                <h1 id="modular-frl-air-combination-title">Modular F.R.L. Units/Air Combination</h1>
                <p>SMC modular FRL combinations integrate filters, regulators, and lubricators into one unit for efficient air treatment. Compact, customizable, and maintenance-friendly.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/Modular-FRL-Unit/Modular-FRL-Unit-Combination/AC-D.webp')); ?>" alt="Modular F.R.L. Units/Air Combination" loading="eager">
            </div>
        </section>

        <section class="automation-categories modular-frl-products modular-frl-air-combination-products" aria-label="Modular F.R.L. air combination products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'automation-modular-f.r.l.-units-modular-f.r.l.-units-air-combination-category-panel'); ?>

                <div class="automation-product-selection modular-frl-air-combination-selection" data-product-detail-shell>
                    <div class="automation-category-grid modular-frl-product-grid modular-frl-air-combination-product-grid">
                        <?php foreach ($airCombinationProducts as $product): ?>
                            <a
                                class="automation-category-card modular-frl-product-card modular-frl-air-combination-product-card"
                                href="#modular-frl-air-combination-detail"
                                data-product-detail-trigger
                                data-product-id="<?= e($product['slug']); ?>"
                                aria-controls="modular-frl-air-combination-detail"
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

                    <section class="automation-selected-product" id="modular-frl-air-combination-detail" data-product-detail-panel hidden aria-live="polite"></section>
                    <script type="application/json" data-product-detail-data><?= json_encode($airCombinationProductDetails, JSON_UNESCAPED_SLASHES); ?></script>
                </div>
            </div>
        </section>
    </div>
</main>
