<main>
    <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'page-banner.php'; ?>
    <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

    <section class="section">
        <div class="container content-shell">
            <h2><?= e($contentHeading ?? $pageHeading ?? 'Page Foundation'); ?></h2>
            <p><?= e($contentText ?? 'This public page shell is ready for CMS-driven content in the next implementation phases.'); ?></p>
        </div>
    </section>
</main>
