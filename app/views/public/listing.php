<main>
    <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'page-banner.php'; ?>
    <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

    <section class="section">
        <div class="container content-shell">
            <h2><?= e($contentHeading ?? $pageHeading ?? 'Content'); ?></h2>
            <?php if (($items ?? []) === []): ?>
                <p><?= e($emptyText ?? 'No active records are available yet.'); ?></p>
            <?php else: ?>
                <div class="cms-listing-grid">
                    <?php foreach ($items as $item): ?>
                        <article class="cms-listing-card">
                            <?php if (!empty($logoField) && !empty($item[$logoField])): ?>
                                <div class="cms-listing-card__logo">
                                    <img src="<?= e(assetUrl($item[$logoField])); ?>" alt="<?= e($item[$titleField] ?? ''); ?> logo" loading="lazy">
                                </div>
                            <?php endif; ?>
                            <h3><?= e($item[$titleField] ?? 'Untitled'); ?></h3>
                            <?php if (($item[$descriptionField] ?? '') !== ''): ?>
                                <p><?= e(mb_strimwidth((string) $item[$descriptionField], 0, 180, '...')); ?></p>
                            <?php endif; ?>
                            <?php if (($item[$linkField] ?? '') !== ''): ?>
                                <?php
                                $linkValue = (string) $item[$linkField];
                                $isPdfLink = str_ends_with(strtolower(parse_url($linkValue, PHP_URL_PATH) ?? ''), '.pdf');
                                $resolvedLink = isExternalUrl($linkValue) ? $linkValue : appUrl($linkValue);

                                // View in-browser instead of force-downloading (GitHub Releases
                                // always send the file as an attachment regardless of our link's
                                // target/rel attributes; other hosts like jsDelivr don't have
                                // this problem and are left to open natively).
                                if ($isPdfLink && forcesPdfDownload($resolvedLink)) {
                                    $resolvedLink = pdfPreviewUrl($resolvedLink);
                                }
                                ?>
                                <a class="button button--secondary" href="<?= e($resolvedLink); ?>" <?= $isPdfLink ? 'target="_blank" rel="noopener"' : ''; ?>>Open</a>
                            <?php endif; ?>
                        </article>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
</main>
