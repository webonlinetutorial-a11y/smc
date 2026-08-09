<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?= e(assetUrl('css/style.css')); ?>">
    <link rel="stylesheet" href="<?= e(assetUrl('css/main.css')); ?>">
    <link rel="stylesheet" href="<?= e(assetUrl('css/responsive.css')); ?>">
    <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'seo.php'; ?>
</head>
<body>
    <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'header.php'; ?>
    <?= $content ?? ''; ?>
    <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'footer.php'; ?>
    <button class="back-to-top" type="button" data-back-to-top aria-label="Back to top">Top</button>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
    <script src="<?= e(assetUrl('js/app.js')); ?>" defer></script>
    <script src="<?= e(assetUrl('js/main.js')); ?>" defer></script>
</body>
</html>
