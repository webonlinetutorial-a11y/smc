<main class="product-detail-page">
    <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

    <?php if (($product ?? null) === null): ?>
        <section class="section">
            <div class="container content-shell product-detail-not-found">
                <h1>Product Not Found</h1>
                <p>The product you requested is not available.</p>
                <a class="button button--primary" href="<?= e(appUrl('/products.php')); ?>">Browse Products</a>
            </div>
        </section>
    <?php else: ?>
        <?php
        $galleryImages = $images ?? [];
        $primaryImage = $galleryImages[0] ?? null;
        $featureLines = array_values(array_filter(array_map('trim', explode("\n", (string) ($product['features'] ?? '')))));
        $partNumberLines = array_values(array_filter(array_map('trim', explode("\n", (string) ($product['part_numbers'] ?? '')))));
        ?>
        <section class="product-detail-hero" aria-labelledby="product-detail-title">
            <div class="container product-detail-hero__inner">
                <div class="product-detail-gallery" data-product-gallery>
                    <div class="product-detail-hero__media">
                        <?php if ($primaryImage !== null): ?>
                            <img
                                src="<?= e(assetUrl($primaryImage['image_path'])); ?>"
                                alt="<?= e($primaryImage['alt_text'] !== '' ? $primaryImage['alt_text'] : $product['name']); ?>"
                                loading="eager"
                                data-product-gallery-main
                            >
                        <?php endif; ?>
                    </div>

                    <?php if (count($galleryImages) > 1): ?>
                        <div class="product-detail-gallery__thumbs" aria-label="Product images">
                            <?php foreach ($galleryImages as $index => $image): ?>
                                <button
                                    class="product-detail-gallery__thumb <?= $index === 0 ? 'is-active' : ''; ?>"
                                    type="button"
                                    data-product-gallery-thumb
                                    data-product-gallery-src="<?= e(assetUrl($image['image_path'])); ?>"
                                    aria-label="View product image <?= e((string) ($index + 1)); ?>"
                                >
                                    <img src="<?= e(assetUrl($image['image_path'])); ?>" alt="" loading="lazy">
                                </button>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="product-detail-hero__content">
                    <div class="product-detail-title-row">
                        <h1 id="product-detail-title"><?= e($product['name']); ?></h1>
                    </div>

                    <?php if (($product['product_line'] ?? '') !== ''): ?>
                        <p class="product-detail-hero__summary"><?= e($product['product_line']); ?></p>
                    <?php endif; ?>

                    <?php if (($product['short_description'] ?? '') !== ''): ?>
                        <p class="product-detail-hero__summary"><?= e($product['short_description']); ?></p>
                    <?php endif; ?>

                    <?php if ($featureLines !== []): ?>
                        <ul class="product-detail-feature-list">
                            <?php foreach ($featureLines as $featureLine): ?>
                                <li><?= e($featureLine); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <div class="product-detail-actions" aria-label="Product actions">
                        <?php if (($product['catalog_url'] ?? '') !== ''): ?>
                            <a class="product-detail-action" href="<?= e($product['catalog_url']); ?>" target="_blank" rel="noopener">
                                <span>Catalog</span>
                                <?= lucideIcon('file-text'); ?>
                            </a>
                        <?php endif; ?>

                        <?php if (($product['video_url'] ?? '') !== ''): ?>
                            <a class="product-detail-action" href="<?= e($product['video_url']); ?>" data-product-video-url="<?= e($product['video_url']); ?>">
                                <span>Video</span>
                                <?= lucideIcon('circle-play'); ?>
                            </a>
                        <?php endif; ?>

                        <a
                            class="product-detail-action"
                            href="<?= e(appUrl('/contact-us.php?product=' . $product['slug'])); ?>"
                            data-enquiry-trigger
                            data-enquiry-product="<?= e($product['name']); ?>"
                        >
                            <span>Product Enquiry</span>
                            <?= lucideIcon('send'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <?php if ($partNumberLines !== []): ?>
            <section class="section" id="part-numbers">
                <div class="container content-shell">
                    <h2>Part Numbers</h2>
                    <ul>
                        <?php foreach ($partNumberLines as $partNumberLine): ?>
                            <li><?= e($partNumberLine); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </section>
        <?php endif; ?>
    <?php endif; ?>
</main>
