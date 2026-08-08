<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title><?= e(adminPageTitle($pageTitle ?? 'Admin Panel')); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= e(assetUrl('css/style.css')); ?>">
    <link rel="stylesheet" href="<?= e(assetUrl('css/admin.css')); ?>">
</head>
<body class="admin-shell">
    <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'admin-sidebar.php'; ?>
    <div class="admin-main">
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'admin-topbar.php'; ?>
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'admin-messages.php'; ?>
        <?= $content ?? ''; ?>
        <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'admin-footer.php'; ?>
    </div>
    <script src="<?= e(assetUrl('js/admin.js')); ?>" defer></script>
</body>
</html>
