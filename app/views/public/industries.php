<main class="automation-page">
    <div class="container">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

        <section class="automation-intro" aria-labelledby="industries-title">
            <div class="automation-intro__content">
                <h1 id="industries-title"><?= e($pageHeading ?? 'Industries'); ?></h1>
                <p><?= e($pageIntro ?? ''); ?></p>
            </div>
        </section>

        <section class="automation-categories" aria-label="Industries we serve">
            <div class="automation-category-grid">
                <?php foreach ($industries as $industry): ?>
                    <a class="automation-category-card" href="<?= e(appUrl('/products.php?industry=' . $industry['slug'])); ?>">
                        <span class="automation-category-card__media">
                            <img src="<?= e(automationImageUrl($industry['image'])); ?>" alt="<?= e($industry['label']); ?>" loading="lazy">
                        </span>
                        <span class="automation-category-card__body">
                            <strong><?= e($industry['label']); ?></strong>
                            <span><?= e($industry['description']); ?></span>
                            <small>Explore <?= lucideIcon('arrow-right'); ?></small>
                        </span>
                    </a>
                <?php endforeach; ?>
            </div>
        </section>
    </div>
</main>
