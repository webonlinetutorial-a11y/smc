<main>
    <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'page-banner.php'; ?>
    <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

    <section class="section">
        <div class="container content-shell product-category-shell">
            <?php if (($category ?? null) === null): ?>
                <div class="section-heading section-heading--tight">
                    <h2>Category Not Found</h2>
                </div>
                <p>The requested product category could not be found.</p>
                <a class="button button--primary" href="<?= e(appUrl('/products.php')); ?>">Browse Products</a>
            <?php elseif (($childCategories ?? []) !== []): ?>
                <div class="section-heading section-heading--tight">
                    <h2><?= e($category['name']); ?> Categories</h2>
                </div>
                <div class="product-category-list" aria-label="Sub categories">
                    <?php foreach ($childCategories as $childCategory): ?>
                        <a class="product-category-card" href="<?= e(appUrl('/category.php?category=' . $childCategory['slug'])); ?>">
                            <span class="product-category-card__image">
                                <?php if (($childCategory['image_path'] ?? '') !== ''): ?>
                                    <img src="<?= e(assetUrl($childCategory['image_path'])); ?>" alt="<?= e($childCategory['name']); ?>" loading="lazy">
                                <?php endif; ?>
                            </span>
                            <span class="product-category-card__body">
                                <strong><?= e($childCategory['name']); ?></strong>
                                <span><?= e(mb_strimwidth((string) ($childCategory['description'] ?? ''), 0, 120, '...')); ?></span>
                                <small>Explore <?= lucideIcon('arrow-right'); ?></small>
                            </span>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <div class="section-heading section-heading--tight">
                    <h2><?= e($category['name']); ?> Products</h2>
                </div>
                <?php if (($products ?? []) === []): ?>
                    <p>No published products are available in this category yet.</p>
                <?php else: ?>
                    <div class="cms-listing-grid">
                        <?php foreach ($products as $product): ?>
                            <article class="cms-listing-card">
                                <h3><?= e($product['name']); ?></h3>
                                <?php if (($product['short_description'] ?? '') !== ''): ?>
                                    <p><?= e(mb_strimwidth((string) $product['short_description'], 0, 180, '...')); ?></p>
                                <?php endif; ?>
                                <a class="button button--primary" href="<?= e(appUrl('/product.php?slug=' . $product['slug'])); ?>">View Detail</a>
                                <a class="button button--secondary" href="<?= e(appUrl('/contact-us.php?product=' . $product['slug'])); ?>" data-enquiry-trigger data-enquiry-product="<?= e($product['name']); ?>">Send Query</a>
                            </article>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </section>
</main>
