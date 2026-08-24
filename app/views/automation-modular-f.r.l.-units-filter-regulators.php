<?php
$categorySidebar = automationSidebarCategories('modular-frl-units');

$filterRegulatorProducts = [
    [
        'title' => 'Filter Regulator AW-D',
        'image' => 'Modular-FRL-Unit/Filter-Regulator/AW-D.webp',
        'description' => '',
        'slug' => 'filter-regulator-aw-d',
        'detailUrl' => '/product-detail.php?product=filter-regulator-aw-d',
        'detailTitle' => 'Filter Regulator AW-D Series',
        'detailDescription' => 'The AW-D Series combines a filter and regulator in one compact unit, offering a sleek, modern design without compromising...',
        'detailActions' => [
            ['label' => 'Part Numbers', 'icon' => 'list', 'wide' => true, 'url' => appUrl('/product-detail.php?product=filter-regulator-aw-d#part-numbers'), 'sameTab' => true],
            ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
            ['label' => 'Enquiry', 'icon' => 'circle-help'],
        ],
    ],
    [
        'title' => 'Filter Regulator AW-A',
        'image' => 'Modular-FRL-Unit/Filter-Regulator/AW-A.webp',
        'description' => '',
        'slug' => 'filter-regulator-aw-a',
        'detailUrl' => '/product-detail.php?product=filter-regulator-aw-a',
        'detailImage' => 'Modular-FRL-Unit/Filter-Regulator/AW-A-img1.webp',
        'detailDescription' => 'Modular type filter regu... Integrated filter and reg... Requires less piping Optional embedded pr... Available with built-in b...',
        'detailDescriptionItems' => [
            'Modular type filter regu...',
            'Integrated filter and reg...',
            'Requires less piping',
            'Optional embedded pr...',
            'Available with built-in b...',
        ],
        'detailActions' => [
            ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
            ['label' => 'Enquiry', 'icon' => 'circle-help'],
        ],
    ],
    [
        'title' => 'Filter Regulator AW-B',
        'image' => 'Modular-FRL-Unit/Filter-Regulator/AW-B.webp',
        'description' => '',
        'slug' => 'filter-regulator-aw-b',
        'detailUrl' => '/product-detail.php?product=filter-regulator-aw-b',
        'detailImage' => 'Modular-FRL-Unit/Filter-Regulator/AW-B-img1.webp',
        'detailDescription' => 'Modular type filter regu... Transparent bowl guard... Available with a built-in... Rc, G(PF), or NPT threa...',
        'detailDescriptionItems' => [
            'Modular type filter regu...',
            'Transparent bowl guard...',
            'Available with a built-in...',
            'Rc, G(PF), or NPT threa...',
        ],
        'detailActions' => [
            ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
            ['label' => 'Enquiry', 'icon' => 'circle-help'],
        ],
    ],
];

$filterRegulatorProductDetails = [];
foreach ($filterRegulatorProducts as $product) {
    $filterRegulatorProductDetails[$product['slug']] = [
        'title' => $product['detailTitle'] ?? $product['title'],
        'image' => assetUrl('images/' . ($product['detailImage'] ?? $product['image'])),
        'description' => $product['detailDescription'],
        'descriptionItems' => isset($product['detailDescriptionItems']) ? $product['detailDescriptionItems'] : [],
        'url' => isset($product['detailUrl']) ? appUrl($product['detailUrl']) : '',
        'actions' => $product['detailActions'],
    ];
}
?>

<main class="automation-page modular-frl-units-page filter-regulators-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro modular-frl-units-intro filter-regulators-intro" aria-labelledby="filter-regulators-title">
            <div class="automation-intro__content">
                <h1 id="filter-regulators-title">Filter Regulators</h1>
                <p>SMC's filter regulator combos save space while delivering clean, regulated air. Ideal for simplifying system design and reducing installation time.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/Modular-FRL-Unit/Filter-Regulator/AW-D.webp')); ?>" alt="Filter Regulators" loading="eager">
            </div>
        </section>

        <section class="automation-categories modular-frl-products filter-regulator-products" aria-label="Filter regulator products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'automation-modular-f.r.l.-units-filter-regulators-category-panel'); ?>

                <div class="automation-product-selection filter-regulator-selection" data-product-detail-shell>
                    <div class="automation-category-grid modular-frl-product-grid filter-regulator-product-grid">
                        <?php foreach ($filterRegulatorProducts as $product): ?>
                            <a
                                class="automation-category-card modular-frl-product-card filter-regulator-product-card"
                                href="#filter-regulator-detail"
                                data-product-detail-trigger
                                data-product-id="<?= e($product['slug']); ?>"
                                aria-controls="filter-regulator-detail"
                                aria-expanded="false"
                            >
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

                    <section class="automation-selected-product" id="filter-regulator-detail" data-product-detail-panel hidden aria-live="polite"></section>
                    <script type="application/json" data-product-detail-data><?= json_encode($filterRegulatorProductDetails, JSON_UNESCAPED_SLASHES); ?></script>
                </div>
            </div>
        </section>
    </div>
</main>
