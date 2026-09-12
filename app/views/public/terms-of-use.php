<main>
    <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'page-banner.php'; ?>
    <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

    <section class="section">
        <div class="container">
            <div class="content-shell legal-page">
                <?php foreach ($sections as $section): ?>
                    <div class="legal-page__section">
                        <?php if (!empty($section['heading'])): ?>
                            <h2 class="legal-page__section-heading"><?= e($section['heading']); ?></h2>
                        <?php endif; ?>
                        <ol class="legal-page__list">
                            <?php foreach ($section['items'] as $item): ?>
                                <li>
                                    <?php if (!empty($item['label'])): ?>
                                        <strong><?= e($item['label']); ?></strong>
                                    <?php endif; ?>
                                    <?= e($item['text']); ?>
                                </li>
                            <?php endforeach; ?>
                        </ol>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>
