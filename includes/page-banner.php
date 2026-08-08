<?php if (!empty($pageHeading)): ?>
    <section class="page-banner">
        <div class="container page-banner__inner">
            <p><?= e($pageEyebrow ?? configValue('app.name', 'Nepack Website')); ?></p>
            <h1><?= e($pageHeading); ?></h1>
            <?php if (!empty($pageIntro)): ?>
                <div class="page-banner__intro"><?= e($pageIntro); ?></div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>
