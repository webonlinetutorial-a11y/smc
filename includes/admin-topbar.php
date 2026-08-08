<?php

$adminUser = currentUser();
?>
<header class="admin-topbar">
    <button class="admin-menu-button" type="button" data-admin-menu-toggle aria-label="Toggle admin navigation" aria-expanded="false">
        <span></span>
        <span></span>
        <span></span>
    </button>
    <div class="admin-topbar-title">
        <span><?= e($pageTitle ?? 'Admin Panel'); ?></span>
    </div>
    <div class="admin-account">
        <span><?= e($adminUser['name'] ?? 'Admin'); ?></span>
        <a href="<?= e(appUrl('/admin/logout.php')); ?>">Logout</a>
    </div>
</header>
