<?php if (!empty($breadcrumbs) && is_array($breadcrumbs)): ?>
    <nav class="breadcrumb" aria-label="Breadcrumb">
        <div class="container">
            <ol>
                <?php foreach ($breadcrumbs as $breadcrumb): ?>
                    <li>
                        <?php if (!empty($breadcrumb['path'])): ?>
                            <a href="<?= e(appUrl($breadcrumb['path'])); ?>"><?= e($breadcrumb['label']); ?></a>
                        <?php else: ?>
                            <span><?= e($breadcrumb['label']); ?></span>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ol>
        </div>
    </nav>
<?php endif; ?>
