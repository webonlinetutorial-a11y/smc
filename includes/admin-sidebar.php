<aside class="admin-sidebar" data-admin-sidebar>
    <a class="admin-brand" href="<?= e(appUrl('/admin/dashboard.php')); ?>">
        <span><?= e(configValue('app.name', 'Nepack Website')); ?></span>
        <small>CMS</small>
    </a>
    <nav class="admin-nav" aria-label="Admin navigation">
        <?php foreach (adminNavigationItems() as $item): ?>
            <a
                href="<?= e(appUrl($item['path'])); ?>"
                class="<?= isActiveAdminPath($item['path']) ? 'is-active' : ''; ?>"
                <?= isActiveAdminPath($item['path']) ? 'aria-current="page"' : ''; ?>
            >
                <?= e($item['label']); ?>
            </a>
        <?php endforeach; ?>
    </nav>
</aside>
