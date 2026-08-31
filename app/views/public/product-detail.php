<main class="product-detail-page">
    <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

    <?php if (($productDetail ?? null) === null): ?>
        <section class="section">
            <div class="container content-shell product-detail-not-found">
                <h1>Product Not Found</h1>
                <p>The product detail you requested is not available.</p>
                <a class="button button--primary" href="<?= e(appUrl('/products.php')); ?>">Browse Products</a>
            </div>
        </section>
    <?php else: ?>
        <?php
        $enquiryMessage = 'Inquiry for ' . $productDetail['title'];
        $partSpecDefinitions = [
            'bore' => ['label' => 'Bore (mm)', 'dataKey' => 'bore'],
            'boreSize' => ['label' => 'Bore Size', 'dataKey' => 'bore-size'],
            'stroke' => ['label' => 'Stroke (mm)', 'dataKey' => 'stroke'],
            'cfm' => ['label' => 'CFM*', 'dataKey' => 'cfm'],
            'bodySize' => ['label' => 'Body Size', 'dataKey' => 'body-size'],
            'portSize' => ['label' => 'Port Size', 'dataKey' => 'port-size'],
            'pressureRange' => ['label' => 'Pressure Range', 'dataKey' => 'pressure-range'],
            'setPressure' => ['label' => 'Set Pressure', 'dataKey' => 'set-pressure'],
            'supplyPortSize' => ['label' => 'Supply, Port Size (mm)', 'dataKey' => 'supply-port-size'],
            'vacuumPortSize' => ['label' => 'Vacuum, Port Size (mm)', 'dataKey' => 'vacuum-port-size'],
            'padDiameter' => ['label' => 'Pad Diameter (mm)', 'dataKey' => 'pad-diameter'],
            'material' => ['label' => 'Material', 'dataKey' => 'material'],
            'thread' => ['label' => 'Thread', 'dataKey' => 'thread'],
            'threadType' => ['label' => 'Thread Type', 'dataKey' => 'thread-type'],
            'tubeOd' => ['label' => 'Tube OD (mm)', 'dataKey' => 'tube-od'],
            'tubeOdSecondary' => ['label' => 'Tube OD (mm)', 'dataKey' => 'tube-od-secondary'],
            'voltage' => ['label' => 'Voltage', 'dataKey' => 'voltage'],
            'ratedVoltage' => ['label' => 'Rated Voltage', 'dataKey' => 'rated-voltage'],
            'noOfStations' => ['label' => 'No. of Stations', 'dataKey' => 'no-of-stations'],
            'leadWire' => ['label' => 'Lead Wire', 'dataKey' => 'lead-wire'],
            'applyVoltage' => ['label' => 'Apply Voltage', 'dataKey' => 'apply-voltage'],
            'nozzleDiameter' => ['label' => 'Nozzle Diameter', 'dataKey' => 'nozzle-diameter'],
            'extensionNozzleLength' => ['label' => 'Extension Nozzle Length', 'dataKey' => 'extension-nozzle-length'],
            'connectionThread' => ['label' => 'Connection Thread', 'dataKey' => 'connection-thread'],
        ];
        $availablePartSpecs = [];

        foreach ($partSpecDefinitions as $specKey => $specDefinition) {
            foreach (($productDetail['partNumbers'] ?? []) as $part) {
                if (($part[$specKey] ?? '') !== '') {
                    $availablePartSpecs[$specKey] = $specDefinition;
                    break;
                }
            }
        }

        $hiddenPartSpecs = array_flip(array_map('strval', (array) ($productDetail['hiddenPartSpecs'] ?? [])));
        $availablePartSpecs = array_diff_key($availablePartSpecs, $hiddenPartSpecs);
        ?>
        <section class="product-detail-hero" aria-labelledby="product-detail-title">
            <div class="container product-detail-hero__inner">
                <div class="product-detail-gallery" data-product-gallery>
                    <div class="product-detail-hero__media">
                        <img
                            src="<?= e($productDetail['imageUrl']); ?>"
                            alt="<?= e($productDetail['title']); ?>"
                            loading="eager"
                            data-product-gallery-main
                        >
                    </div>

                    <?php if (count($productDetail['galleryUrls'] ?? []) > 1): ?>
                        <div class="product-detail-gallery__thumbs" aria-label="Product images">
                            <?php foreach ($productDetail['galleryUrls'] as $index => $galleryUrl): ?>
                                <button
                                    class="product-detail-gallery__thumb <?= $index === 0 ? 'is-active' : ''; ?>"
                                    type="button"
                                    data-product-gallery-thumb
                                    data-product-gallery-src="<?= e($galleryUrl); ?>"
                                    aria-label="View product image <?= e($index + 1); ?>"
                                >
                                    <img src="<?= e($galleryUrl); ?>" alt="" loading="lazy">
                                </button>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="product-detail-hero__content">
                    <div class="product-detail-title-row">
                        <h1 id="product-detail-title"><?= e($productDetail['title']); ?></h1>
                        <?php if (!empty($productDetail['isNew'])): ?>
                            <span class="product-detail-badge-new">New</span>
                        <?php endif; ?>
                    </div>
                    <?php if (($productDetail['summary'] ?? '') !== ''): ?>
                        <p class="product-detail-hero__summary"><?= e($productDetail['summary']); ?></p>
                    <?php endif; ?>

                    <?php if (($productDetail['features'] ?? []) !== []): ?>
                        <ul class="product-detail-feature-list">
                            <?php foreach ($productDetail['features'] as $feature): ?>
                                <?php
                                $featureText = is_array($feature) ? ($feature['text'] ?? '') : $feature;
                                $featureIsNew = is_array($feature) && !empty($feature['isNew']);
                                ?>
                                <li>
                                    <?= e($featureText); ?>
                                    <?php if ($featureIsNew): ?>
                                        <span class="product-detail-feature-list__badge">[New]</span>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <div class="product-detail-actions" aria-label="Product actions">
                        <?php foreach ($productDetail['actions'] as $action): ?>
                            <?php
                            $isVideoAction = isset($action['videoUrl']);
                            $actionUrl = $action['url'] ?? ($action['videoUrl'] ?? '#');

                            if ($action['label'] === 'Product Enquiry') {
                                $actionUrl .= '?message=' . rawurlencode($enquiryMessage);
                            }

                            $isAbsoluteUrl = (bool) preg_match('/^https?:\/\//i', $actionUrl);
                            $opensInNewTab = str_ends_with(strtolower(parse_url($actionUrl, PHP_URL_PATH) ?? ''), '.pdf');
                            ?>
                            <a
                                class="product-detail-action"
                                href="<?= e(($isVideoAction || $isAbsoluteUrl) ? $actionUrl : appUrl($actionUrl)); ?>"
                                <?= $opensInNewTab ? 'target="_blank" rel="noopener"' : ''; ?>
                                <?= $isVideoAction ? 'data-product-video-url="' . e($action['videoUrl']) . '"' : ''; ?>
                                <?= $action['label'] === 'Product Enquiry' ? 'data-enquiry-trigger data-enquiry-product="' . e($productDetail['title']) . '"' : ''; ?>
                            >
                                <span><?= e($action['label']); ?></span>
                                <?= lucideIcon($action['icon']); ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>

        <?php if (($productDetail['partNumbers'] ?? []) !== []): ?>
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
                        <?php foreach ($productDetail['partNumbers'] as $part): ?>
                            <?php
                            $partNumber = $part['partNumber'];
                            $partDescription = $part['description'] ?? $productDetail['summary'];
                            $partEnquiry = 'Inquiry for ' . $partNumber . ' - ' . $productDetail['title'];
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
                                    data-enquiry-product="<?= e($partNumber . ' - ' . $productDetail['title']); ?>"
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
