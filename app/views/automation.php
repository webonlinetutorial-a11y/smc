<?php
$automationCategories = automationCategoryDefinitions();

$cmsContent = new PublicContentService();
foreach ($cmsContent->topLevelCategories() as $cmsCategory) {
    $childItems = array_map(
        static fn (array $childCategory): array => [
            'label' => $childCategory['name'],
            'url' => '/category.php?category=' . $childCategory['slug'],
        ],
        $cmsContent->childCategoriesOf((int) $cmsCategory['id'])
    );

    $automationCategories[] = [
        'title' => $cmsCategory['name'],
        'slug' => $cmsCategory['slug'],
        'url' => '/category.php?category=' . $cmsCategory['slug'],
        'image' => preg_replace('#^images/#', '', ltrim(str_replace('\\', '/', (string) ($cmsCategory['image_path'] ?? '')), '/')),
        'description' => (string) ($cmsCategory['description'] ?? ''),
        'items' => $childItems,
    ];
}
?>

<main class="automation-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro" aria-labelledby="automation-title">
            <div class="automation-intro__content">
                <h1 id="automation-title">Automation</h1>
                <h2>Automation &amp; Pneumatic Systems</h2>
                <p>A pneumatic system is a mechanical system that utilizes compressed air or gas to perform work, widely used in industrial automation, manufacturing, and process control industries. Pneumatic systems are known for their speed, reliability, and cost-effectiveness in automated production environments.</p>
                <p>SMC pneumatic components including air cylinders, solenoid valves, FRL units, air grippers, flow control valves, vacuum ejectors, and precision regulators are engineered for high-performance industrial automation.</p>
                <p>SMC pneumatic systems involve key components such as air compressors, storage tanks, directional control valves, and actuators working together to generate and control the flow of compressed air to achieve precise mechanical motion in automated systems.</p>
                <p>Whether you need SMC pneumatic solutions for light assembly, heavy manufacturing, or process automation - we provide trusted SMC products.</p>
            </div>
            <div class="automation-intro__image">
                <img src="<?= e(assetUrl('images/smc-product-line1.png')); ?>" alt="SMC pneumatic air cylinder" loading="eager">
            </div>
        </section>

        <section class="automation-categories" aria-labelledby="automation-categories-title">
            <div class="section-heading section-heading--tight automation-categories__heading">
                <h2 id="automation-categories-title">Automation Product Categories</h2>
            </div>

            <div class="automation-categories__layout">
                <?php renderAutomationCategorySidebar($automationCategories, 'automation-category-panel'); ?>

                <div class="automation-category-grid">
                    <?php foreach ($automationCategories as $category): ?>
                        <a class="automation-category-card" href="<?= e(appUrl($category['url'] ?? '/products.php?category=' . $category['slug'])); ?>">
                            <span class="automation-category-card__media">
                                <?php if (($category['image'] ?? '') !== ''): ?>
                                    <img src="<?= e(assetUrl('images/' . $category['image'])); ?>" alt="<?= e($category['title']); ?>" loading="lazy">
                                <?php endif; ?>
                            </span>
                            <span class="automation-category-card__body">
                                <strong><?= e($category['title']); ?></strong>
                                <span><?= e($category['description']); ?></span>
                                <small>Explore <?= lucideIcon('arrow-right'); ?></small>
                            </span>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </div>
</main>
