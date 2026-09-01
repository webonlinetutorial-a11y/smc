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
                    <?php
                    $categoryDescriptionLines = array_values(array_filter(array_map('trim', explode("\n", (string) ($category['description'] ?? '')))));
                    ?>
                    <?php if (count($categoryDescriptionLines) > 1): ?>
                        <ul class="automation-intro__bullets">
                            <?php foreach ($categoryDescriptionLines as $descriptionLine): ?>
                                <li><?= e($descriptionLine); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php elseif ($categoryDescriptionLines !== []): ?>
                        <p><?= e($categoryDescriptionLines[0]); ?></p>
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

                    <?php if (($childCategories ?? []) !== []): ?>
                        <div class="automation-category-grid">
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
                        </div>
                    <?php elseif (($products ?? []) !== []): ?>
                        <div class="automation-product-selection" data-product-detail-shell>
                            <div class="automation-category-grid">
                                <?php foreach ($products as $product): ?>
                                    <a
                                        class="automation-category-card"
                                        href="#category-product-detail"
                                        data-product-detail-trigger
                                        data-product-id="<?= e($product['slug']); ?>"
                                        aria-controls="category-product-detail"
                                        aria-expanded="false"
                                    >
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
                            </div>

                            <section class="automation-selected-product" id="category-product-detail" data-product-detail-panel hidden aria-live="polite"></section>
                            <script type="application/json" data-product-detail-data><?= json_encode($productDetails ?? [], JSON_UNESCAPED_SLASHES); ?></script>
                        </div>
                    <?php else: ?>
                        <p class="automation-category-grid__empty">No published products are available in this category yet.</p>
                    <?php endif; ?>
                </div>
            </section>
        <?php endif; ?>
    </div>
</main>
