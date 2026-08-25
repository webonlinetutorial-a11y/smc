<?php if (!empty($pageHeading)): ?>
    <section class="page-banner<?= !empty($pageBannerImage) ? ' page-banner--split' : ''; ?>">
        <div class="container page-banner__inner">
            <div class="page-banner__content">
                <p><?= e($pageEyebrow ?? configValue('app.name', 'Nepack Website')); ?></p>
                <h1><?= e($pageHeading); ?></h1>
                <?php if (!empty($pageIntro)): ?>
                    <div class="page-banner__intro"><?= e($pageIntro); ?></div>
                <?php endif; ?>
            </div>
            <?php if (!empty($pageBannerImage)): ?>
                <div class="page-banner__media">
                    <span class="page-banner__shape" aria-hidden="true"></span>
                    <img src="<?= e(assetUrl($pageBannerImage)); ?>" alt="<?= e($pageBannerImageAlt ?? ''); ?>" loading="eager">
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>
