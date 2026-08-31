<header class="site-header">
    <div class="top-strip">
        <div class="container top-strip__inner">
            <span>Industrial automation products and support</span>
            <a class="top-strip__contact" href="<?= e(appUrl('/contact-us.php')); ?>">Enquire</a>
        </div>
    </div>
    <div class="container site-header__inner">
        <a class="site-logo" href="<?= e(appUrl('/')); ?>" aria-label="<?= e(configValue('app.name', 'Nepack Website')); ?> home">
            <strong>B</strong>
            <span>Bharat Mill</span>
            <small>Industrial Automation</small>
        </a>
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'navbar.php'; ?>
    </div>
</header>
