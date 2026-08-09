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
                            <h3><?= e($item[$titleField] ?? 'Untitled'); ?></h3>
                            <?php if (($item[$descriptionField] ?? '') !== ''): ?>
                                <p><?= e(mb_strimwidth((string) $item[$descriptionField], 0, 180, '...')); ?></p>
                            <?php endif; ?>
                            <?php if (($item[$linkField] ?? '') !== ''): ?>
                                <a class="button button--secondary" href="<?= e(appUrl($item[$linkField])); ?>">Open</a>
                            <?php endif; ?>
                        </article>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
</main>
