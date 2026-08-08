<?php

$publicNavigation = [
    ['label' => 'Home', 'path' => '/'],
    ['label' => 'Products', 'path' => '/products.php'],
    ['label' => 'About Us', 'path' => '/about-us.php'],
    ['label' => 'Contact Us', 'path' => '/contact-us.php'],
];
?>
<button class="nav-toggle" type="button" data-site-menu-toggle aria-label="Toggle navigation" aria-expanded="false">
    <span></span>
    <span></span>
    <span></span>
</button>
<nav class="site-nav" data-site-nav aria-label="Primary navigation">
    <?php foreach ($publicNavigation as $item): ?>
        <a
            href="<?= e(appUrl($item['path'])); ?>"
            class="<?= isActivePath($item['path']) ? 'is-active' : ''; ?>"
            <?= isActivePath($item['path']) ? 'aria-current="page"' : ''; ?>
        >
            <?= e($item['label']); ?>
        </a>
    <?php endforeach; ?>
    <a class="site-nav__search" href="<?= e(appUrl('/search.php')); ?>" aria-label="Search"><?= lucideIcon('search'); ?><span>Search</span></a>
    <a class="site-nav__quote" href="<?= e(appUrl('/contact-us.php')); ?>">Request Quotation <?= lucideIcon('send'); ?></a>
</nav>
