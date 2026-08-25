<main>
    <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'page-banner.php'; ?>
    <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

    <?php if (!empty($contentImage)): ?>
        <section class="section">
            <div class="container about-who-we-are">
                <div class="about-who-we-are__image">
                    <img src="<?= e(assetUrl($contentImage)); ?>" alt="<?= e($contentImageAlt ?? ''); ?>" loading="lazy">
                </div>
                <div>
                    <?php if (!empty($contentEyebrow)): ?>
                        <p class="about-who-we-are__eyebrow"><?= e($contentEyebrow); ?></p>
                    <?php endif; ?>
                    <h2><?= e($contentHeading ?? $pageHeading ?? 'Page Foundation'); ?></h2>
                    <p class="about-who-we-are__text"><?= e($contentText ?? ''); ?></p>
                    <?php if (!empty($contentCtaLabel)): ?>
                        <a class="button button--primary" href="<?= e(appUrl($contentCtaUrl ?? '/')); ?>"><?= e($contentCtaLabel); ?> &rarr;</a>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    <?php else: ?>
        <section class="section">
            <div class="container content-shell">
                <h2><?= e($contentHeading ?? $pageHeading ?? 'Page Foundation'); ?></h2>
                <p><?= e($contentText ?? 'This public page shell is ready for CMS-driven content in the next implementation phases.'); ?></p>
            </div>
        </section>
    <?php endif; ?>

    <?php if (!empty($strengths)): ?>
        <section class="section">
            <div class="container">
                <div class="about-strengths">
                    <?php if (!empty($strengthsEyebrow)): ?>
                        <p class="section-eyebrow"><?= e($strengthsEyebrow); ?></p>
                    <?php endif; ?>
                    <h2><?= e($strengthsHeading ?? 'Why Choose Us'); ?></h2>
                    <div class="about-strengths-grid">
                        <?php foreach ($strengths as $strength): ?>
                            <article class="about-strength-card">
                                <span class="about-strength-card__icon"><?= lucideIcon($strength[0]); ?></span>
                                <h3><?= e($strength[1]); ?></h3>
                                <p><?= e($strength[2]); ?></p>
                            </article>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if (!empty($ctaHeading)): ?>
        <section class="section">
            <div class="container">
                <div class="about-cta">
                    <div class="about-cta__text">
                        <?php if (!empty($ctaEyebrow)): ?>
                            <p class="section-eyebrow"><?= e($ctaEyebrow); ?></p>
                        <?php endif; ?>
                        <h2><?= e($ctaHeading); ?></h2>
                        <?php if (!empty($ctaText)): ?>
                            <p class="about-cta__subtext"><?= e($ctaText); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="about-cta__actions">
                        <?php if (!empty($ctaPrimaryLabel)): ?>
                            <a class="button button--primary" href="<?= e(appUrl($ctaPrimaryUrl ?? '/')); ?>"><?= e($ctaPrimaryLabel); ?> &rarr;</a>
                        <?php endif; ?>
                        <?php if (!empty($ctaSecondaryLabel)): ?>
                            <a class="button button--secondary" href="<?= e(appUrl($ctaSecondaryUrl ?? '/')); ?>" data-enquiry-trigger data-enquiry-product="General Quotation"><?= e($ctaSecondaryLabel); ?> <?= lucideIcon('send'); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
</main>
