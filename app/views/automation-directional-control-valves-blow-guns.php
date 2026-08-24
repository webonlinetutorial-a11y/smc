<?php
$categorySidebar = automationSidebarCategories('directional-control-valves');

$blowGunProducts = [
    [
        'title' => 'Blow Gun VMG Series',
        'image' => 'Directional-control-valve/Blow-guns/vmg-img1.webp',
        'description' => '',
        'slug' => 'blow-gun-vmg-series',
        'url' => appUrl('/product-detail.php?product=blow-gun-vmg-series'),
        'detailDescription' => "SMC's VMG Series blow gun is engineered for energy efficiency and powerful performance. With significantly lower pressur...",
        'detailActions' => [
            ['label' => 'Part Numbers', 'icon' => 'list', 'wide' => true, 'url' => appUrl('/product-detail.php?product=blow-gun-vmg-series#part-numbers'), 'sameTab' => true],
            ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true, 'url' => 'https://smc.incraftiv.com/smcCatalog/service/downloads/smc_media/Directional-Control-Valves/VMG.pdf'],
            ['label' => 'Enquiry', 'icon' => 'circle-help', 'enquiry' => true],
        ],
    ],
];

$blowGunProductDetails = [];
foreach ($blowGunProducts as $product) {
    $blowGunProductDetails[$product['slug']] = [
        'title' => $product['title'],
        'image' => assetUrl('images/' . $product['image']),
        'description' => $product['detailDescription'],
        'actions' => $product['detailActions'],
        'url' => $product['url'] ?? null,
    ];
}
?>

<main class="automation-page directional-control-valves-page blow-guns-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro directional-control-valves-intro blow-guns-intro" aria-labelledby="blow-guns-title">
            <div class="automation-intro__content">
                <h1 id="blow-guns-title">Blow Guns</h1>
                <p>SMC's air blow guns provide high-performance cleaning for industrial machines and parts. Ergonomic, efficient, and available in various nozzle types for every cleaning task.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/Directional-control-valve/Blow-guns/vmg-img1.webp')); ?>" alt="Blow Guns" loading="eager">
            </div>
        </section>

        <section class="automation-categories directional-control-valve-products blow-gun-products" aria-label="Blow gun products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'automation-directional-control-valves-blow-guns-category-panel'); ?>

                <div class="automation-product-selection blow-gun-selection" data-product-detail-shell>
                    <div class="automation-category-grid directional-control-valve-product-grid blow-gun-product-grid">
                        <?php foreach ($blowGunProducts as $product): ?>
                            <a
                                class="automation-category-card directional-control-valve-product-card blow-gun-product-card"
                                href="#blow-gun-detail"
                                data-product-detail-trigger
                                data-product-id="<?= e($product['slug']); ?>"
                                aria-controls="blow-gun-detail"
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

                    <section class="automation-selected-product" id="blow-gun-detail" data-product-detail-panel hidden aria-live="polite"></section>
                    <script type="application/json" data-product-detail-data><?= json_encode($blowGunProductDetails, JSON_UNESCAPED_SLASHES); ?></script>
                </div>
            </div>
        </section>
    </div>
</main>
