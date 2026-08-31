<?php $categorySidebar = automationSidebarCategories($activeCategorySlug ?? null); ?>

<main class="automation-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <?php if (($category ?? null) === null): ?>
            <section class="automation-intro" aria-labelledby="category-title">
                <div class="automation-intro__content">
                    <h1 id="category-title">Category Not Found</h1>
                    <p>The requested product category could not be found.</p>
                    <a class="button button--primary" href="<?= e(appUrl('/products.php')); ?>">Browse Products</a>
                </div>
            </section>
        <?php else: ?>
            <section class="automation-intro" aria-labelledby="category-title">
                <div class="automation-intro__content">
                    <h1 id="category-title"><?= e($category['name']); ?></h1>
                    <?php if (($category['description'] ?? '') !== ''): ?>
                        <p><?= e($category['description']); ?></p>
                    <?php endif; ?>
                </div>
                <?php if (($category['image_path'] ?? '') !== ''): ?>
                    <div class="automation-intro__image">
                        <img src="<?= e(assetUrl($category['image_path'])); ?>" alt="<?= e($category['name']); ?>" loading="eager">
                    </div>
                <?php endif; ?>
            </section>

            <section class="automation-categories" aria-label="<?= e($category['name']); ?> items">
                <div class="automation-categories__layout">
                    <?php renderAutomationCategorySidebar($categorySidebar, 'category-panel'); ?>

                    <div class="automation-category-grid">
                        <?php if (($childCategories ?? []) !== []): ?>
                            <?php foreach ($childCategories as $childCategory): ?>
                                <a class="automation-category-card" href="<?= e(appUrl('/category.php?category=' . $childCategory['slug'])); ?>">
                                    <span class="automation-category-card__media">
                                        <?php if (($childCategory['image_path'] ?? '') !== ''): ?>
                                            <img src="<?= e(assetUrl($childCategory['image_path'])); ?>" alt="<?= e($childCategory['name']); ?>" loading="lazy">
                                        <?php endif; ?>
                                    </span>
                                    <span class="automation-category-card__body">
                                        <strong><?= e($childCategory['name']); ?></strong>
                                        <span><?= e(mb_strimwidth((string) ($childCategory['description'] ?? ''), 0, 180, '...')); ?></span>
                                        <small>Explore <?= lucideIcon('arrow-right'); ?></small>
                                    </span>
                                </a>
                            <?php endforeach; ?>
                        <?php elseif (($products ?? []) !== []): ?>
                            <?php foreach ($products as $product): ?>
                                <a class="automation-category-card" href="<?= e(appUrl('/product.php?slug=' . $product['slug'])); ?>">
                                    <span class="automation-category-card__media">
                                        <?php if (($product['imagePath'] ?? '') !== ''): ?>
                                            <img src="<?= e(assetUrl($product['imagePath'])); ?>" alt="<?= e($product['name']); ?>" loading="lazy">
                                        <?php endif; ?>
                                    </span>
                                    <span class="automation-category-card__body">
                                        <strong><?= e($product['name']); ?></strong>
                                        <span><?= e(mb_strimwidth((string) ($product['short_description'] ?? ''), 0, 180, '...')); ?></span>
                                        <small>Explore <?= lucideIcon('arrow-right'); ?></small>
                                    </span>
                                </a>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <p class="automation-category-grid__empty">No published products are available in this category yet.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>
    </div>
</main>
