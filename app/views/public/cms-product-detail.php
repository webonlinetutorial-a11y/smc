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
        $partNumberRows = $partNumberRows ?? [];

        $partSpecDefinitions = $partNumberSpecDefinitions ?? [];
        $availablePartSpecs = [];

        foreach ($partSpecDefinitions as $specKey => $specDefinition) {
            foreach ($partNumberRows as $part) {
                if (($part[$specKey] ?? '') !== '') {
                    $availablePartSpecs[$specKey] = $specDefinition;
                    break;
                }
            }
        }
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

        <?php if ($partNumberRows !== []): ?>
            <section class="product-detail-parts" id="part-numbers" aria-labelledby="product-detail-parts-title" data-part-number-section>
                <div class="container">
                    <div class="product-detail-parts__header">
                        <h2 id="product-detail-parts-title">Part Numbers</h2>
                        <div class="product-detail-parts__tools" aria-label="Part number search">
                            <label class="screen-reader-text" for="part-number-filter">Select Search by</label>
                            <select id="part-number-filter" data-part-number-filter>
                                <option value="all">Select Search by</option>
                                <option value="part">Part Number</option>
                                <?php foreach ($availablePartSpecs as $specDefinition): ?>
                                    <option value="<?= e($specDefinition['dataKey']); ?>"><?= e($specDefinition['label']); ?></option>
                                <?php endforeach; ?>
                            </select>
                            <label class="screen-reader-text" for="part-number-search">Search part numbers</label>
                            <div class="product-detail-parts__search">
                                <input id="part-number-search" type="search" placeholder="Search" data-part-number-search>
                                <?= lucideIcon('search'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="product-detail-parts__list">
                        <?php foreach ($partNumberRows as $part): ?>
                            <?php
                            $partNumber = $part['partNumber'];
                            $partDescription = $part['description'] !== '' ? $part['description'] : $product['name'];
                            $partEnquiry = 'Inquiry for ' . $partNumber . ' - ' . $product['name'];
                            $partSearchValues = [$partNumber, $partDescription];
                            $partDataAttributes = [
                                'data-field-part="' . e(strtolower($partNumber)) . '"',
                            ];

                            foreach ($availablePartSpecs as $specKey => $specDefinition) {
                                $specValue = (string) ($part[$specKey] ?? '');
                                if ($specValue !== '') {
                                    $partSearchValues[] = $specValue;
                                    $partDataAttributes[] = 'data-field-' . $specDefinition['dataKey'] . '="' . e(strtolower($specValue)) . '"';
                                }
                            }

                            $partDataAttributes[] = 'data-field-all="' . e(strtolower(implode(' ', $partSearchValues))) . '"';
                            $partSpecs = [];
                            foreach ($availablePartSpecs as $specKey => $specDefinition) {
                                $specValue = (string) ($part[$specKey] ?? '');
                                if ($specValue !== '') {
                                    $partSpecs[] = [
                                        'label' => $specDefinition['label'],
                                        'value' => $specValue,
                                    ];
                                }
                            }
                            ?>
                            <article
                                class="product-detail-part"
                                data-part-number-row
                                <?= implode(' ', $partDataAttributes); ?>
                            >
                                <div class="product-detail-part__summary">
                                    <h3><?= e($partNumber); ?></h3>
                                    <p><?= e($partDescription); ?></p>
                                </div>
                                <?php if ($partSpecs !== []): ?>
                                    <dl class="product-detail-part__specs">
                                    <?php foreach ($partSpecs as $partSpec): ?>
                                        <div>
                                            <dt><?= e($partSpec['label']); ?></dt>
                                            <dd><?= e($partSpec['value']); ?></dd>
                                        </div>
                                    <?php endforeach; ?>
                                    </dl>
                                <?php endif; ?>
                                <a
                                    class="product-detail-part__enquiry"
                                    href="<?= e(appUrl('/contact-us.php?message=' . rawurlencode($partEnquiry))); ?>"
                                    data-enquiry-trigger
                                    data-enquiry-product="<?= e($partNumber . ' - ' . $product['name']); ?>"
                                >
                                    Enquire Now !
                                </a>
                            </article>
                        <?php endforeach; ?>
                    </div>

                    <p class="product-detail-parts__empty" data-part-number-empty hidden>No matching part numbers found.</p>
                </div>
            </section>
        <?php endif; ?>
    <?php endif; ?>
</main>
