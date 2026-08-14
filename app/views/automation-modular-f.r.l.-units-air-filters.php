<?php
$categorySidebar = automationSidebarCategories('modular-frl-units');

$airFilterProducts = [
    [
        'title' => 'Air Filter AF-D',
        'image' => 'Modular-FRL-Unit/Air-Filters/AF-D.webp',
        'description' => '',
        'slug' => 'air-filter-af-d',
        'detailDescription' => 'The AF-D series offers a sleek, updated design while delivering the same reliable performance as previous SMC filters.',
        'detailActions' => [
            ['label' => 'Part Numbers', 'icon' => 'list', 'wide' => true],
            ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
            ['label' => 'Enquiry', 'icon' => 'circle-help'],
        ],
    ],
    [
        'title' => 'Air Filter AF-A',
        'image' => 'Modular-FRL-Unit/Air-Filters/AF-A.webp',
        'description' => '',
        'slug' => 'air-filter-af-a',
        'detailDescription' => 'Compatible mounting ... Bowl material options: ... Easy-to-replace filter el... Available thread types: ... Available Body Sizes: 2...',
        'detailActions' => [
            ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
            ['label' => 'Enquiry', 'icon' => 'circle-help'],
        ],
    ],
    [
        'title' => 'Air Filter AF-B',
        'image' => 'Modular-FRL-Unit/Air-Filters/AF-A (1).webp',
        'description' => '',
        'slug' => 'air-filter-af-b',
        'detailDescription' => 'New Style modular air ... Lighter weight than old... Thickness reduction of... Improved water separa... Rc, NPT, or G(PF) type t...',
        'detailActions' => [
            ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
            ['label' => 'Enquiry', 'icon' => 'circle-help'],
        ],
    ],
];

$airFilterProductDetails = [];
foreach ($airFilterProducts as $product) {
    $airFilterProductDetails[$product['slug']] = [
        'title' => $product['title'],
        'image' => assetUrl('images/' . $product['image']),
        'description' => $product['detailDescription'],
        'actions' => $product['detailActions'],
    ];
}
?>

<main class="automation-page modular-frl-units-page air-filters-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro modular-frl-units-intro air-filters-intro" aria-labelledby="air-filters-title">
            <div class="automation-intro__content">
                <h1 id="air-filters-title">Air Filters</h1>
                <p>Protect your system from contaminants with high-performance SMC air filters. They remove particles and moisture, improving equipment life and air quality.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/Modular-FRL-Unit/Air-Filters/AF-D.webp')); ?>" alt="Air Filters" loading="eager">
            </div>
        </section>

        <section class="automation-categories modular-frl-products air-filter-products" aria-label="Air filter products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'automation-modular-f.r.l.-units-air-filters-category-panel'); ?>

                <div class="automation-product-selection air-filter-selection" data-product-detail-shell>
                    <div class="automation-category-grid modular-frl-product-grid air-filter-product-grid">
                        <?php foreach ($airFilterProducts as $product): ?>
                            <a
                                class="automation-category-card modular-frl-product-card air-filter-product-card"
                                href="#air-filter-detail"
                                data-product-detail-trigger
                                data-product-id="<?= e($product['slug']); ?>"
                                aria-controls="air-filter-detail"
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

                    <section class="automation-selected-product" id="air-filter-detail" data-product-detail-panel hidden aria-live="polite"></section>
                    <script type="application/json" data-product-detail-data><?= json_encode($airFilterProductDetails, JSON_UNESCAPED_SLASHES); ?></script>
                </div>
            </div>
        </section>
    </div>
</main>
