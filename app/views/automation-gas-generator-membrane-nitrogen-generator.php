<?php
$categorySidebar = automationSidebarCategories('gas-generator');

$membraneNitrogenGeneratorProducts = [
    [
        'title' => 'IN778-1/IN778-2 Series, Membrane Nitrogen Generator',
        'image' => 'Gas-Generator/Nitrogen-Gas- Generator/Nitrogen-generator-400.webp',
        'descriptionItems' => [
            'Nitrogen-enriched air',
        ],
        'isNew' => true,
        'slug' => 'membrane-nitrogen-generator',
        'detailUrl' => '/product-detail.php?product=membrane-nitrogen-generator',
        'detailDescriptionItems' => [
            'Nitrogen enriched air purification is easily possible with only a compressed air supply.',
        ],
        'detailActions' => [
            ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
            ['label' => 'Enquiry', 'icon' => 'circle-help'],
        ],
    ],
    [
        'title' => 'NMG Series, Membrane Nitrogen Generator',
        'image' => 'Gas-Generator/Nitrogen-Gas- Generator/NMG-400.webp',
        'descriptionItems' => [
            'Easily generate nitrogen-enriched air with only a',
        ],
        'isNew' => true,
        'slug' => 'nmg-series-membrane-nitrogen-generator',
        'detailUrl' => '/product-detail.php?product=nmg-series-membrane-nitrogen-generator',
        'detailDescriptionItems' => [
            'Easily generate nitrogen-enriched air using only a compressed air supply.',
        ],
        'detailActions' => [
            ['label' => 'Catalog', 'icon' => 'file-text', 'primary' => true],
            ['label' => 'Enquiry', 'icon' => 'circle-help'],
        ],
    ],
];

$membraneNitrogenGeneratorProductDetails = [];
foreach ($membraneNitrogenGeneratorProducts as $product) {
    $membraneNitrogenGeneratorProductDetails[$product['slug']] = [
        'title' => $product['detailTitle'] ?? $product['title'],
        'image' => assetUrl('images/' . ($product['detailImage'] ?? $product['image'])),
        'description' => $product['detailDescription'] ?? '',
        'descriptionItems' => isset($product['detailDescriptionItems']) ? $product['detailDescriptionItems'] : [],
        'url' => isset($product['detailUrl']) ? appUrl($product['detailUrl']) : '',
        'actions' => $product['detailActions'],
    ];
}
?>

<main class="automation-page gas-generator-page membrane-nitrogen-generator-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro gas-generator-intro membrane-nitrogen-generator-intro" aria-labelledby="membrane-nitrogen-generator-title">
            <div class="automation-intro__content">
                <h1 id="membrane-nitrogen-generator-title">Nitrogen Gas Generator</h1>
                <p>Easily generate nitrogen-enriched air using only a compressed air supply.
The NMG delivers a nitrogen concentration of 99.9% or higher in a compact, point-of-use design that’s simple to use and integrate.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/Membrane-Nitrogen-Generator.webp')); ?>" alt="Membrane Nitrogen Generator" loading="eager">
            </div>
        </section>

        <section class="automation-categories gas-generator-products membrane-nitrogen-generator-products" aria-label="Membrane nitrogen generator products">
            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($categorySidebar, 'automation-gas-generator-membrane-nitrogen-generator-category-panel'); ?>

                <div class="automation-product-selection membrane-nitrogen-generator-selection" data-product-detail-shell>
                    <div class="automation-category-grid gas-generator-product-grid membrane-nitrogen-generator-product-grid">
                        <?php foreach ($membraneNitrogenGeneratorProducts as $product): ?>
                            <a
                                class="automation-category-card gas-generator-product-card membrane-nitrogen-generator-product-card"
                                href="#membrane-nitrogen-generator-detail"
                                data-product-detail-trigger
                                data-product-id="<?= e($product['slug']); ?>"
                                aria-controls="membrane-nitrogen-generator-detail"
                                aria-expanded="false"
                            >
                                <?php if (!empty($product['isNew'])): ?>
                                    <span class="automation-category-card__ribbon">New</span>
                                <?php endif; ?>
                                <span class="automation-category-card__media">
                                    <img src="<?= e(assetUrl('images/' . $product['image'])); ?>" alt="<?= e($product['title']); ?>" loading="lazy">
                                </span>
                                <span class="automation-category-card__body">
                                    <strong><?= e($product['title']); ?></strong>
                                    <?php if (!empty($product['descriptionItems'])): ?>
                                        <span>
                                            <ul class="automation-category-card__points">
                                                <?php foreach ($product['descriptionItems'] as $point): ?>
                                                    <li><?= e($point); ?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </span>
                                    <?php elseif (!empty($product['description'])): ?>
                                        <span><?= e($product['description']); ?></span>
                                    <?php endif; ?>
                                    <small>Explore <?= lucideIcon('arrow-right'); ?></small>
                                </span>
                            </a>
                        <?php endforeach; ?>
                    </div>

                    <section class="automation-selected-product" id="membrane-nitrogen-generator-detail" data-product-detail-panel hidden aria-live="polite"></section>
                    <script type="application/json" data-product-detail-data><?= json_encode($membraneNitrogenGeneratorProductDetails, JSON_UNESCAPED_SLASHES); ?></script>
                </div>
            </div>
        </section>
    </div>
</main>
