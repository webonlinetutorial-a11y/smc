<?php

$publicNavigation = [
    ['label' => 'Home', 'path' => '/'],
    ['label' => 'Products', 'path' => '/products.php'],
    ['label' => 'About Us', 'path' => '/about-us.php'],
    ['label' => 'Contact Us', 'path' => '/contact-us.php'],
];

$automationCategories = automationCategoryDefinitions();
$automationCategoryRoutes = automationCategoryRoutes();
?>
<button class="nav-toggle" type="button" data-site-menu-toggle aria-label="Toggle navigation" aria-expanded="false">
    <?= lucideIcon('menu'); ?>
</button>
<nav class="site-nav" data-site-nav aria-label="Primary navigation">
    <?php foreach ($publicNavigation as $item): ?>
        <?php if ($item['label'] === 'Products'): ?>
            <?php
            $isProductsActive = isActivePath($item['path']) || isActivePath('/automation.php');
            foreach ($automationCategoryRoutes as $route) {
                $isProductsActive = $isProductsActive || isActivePath($route);
            }
            ?>
            <div class="site-nav__item site-nav__item--products">
                <a
                    href="<?= e(appUrl($item['path'])); ?>"
                    class="<?= $isProductsActive ? 'is-active' : ''; ?>"
                    data-products-menu-toggle
                    aria-haspopup="true"
                    aria-expanded="false"
                    <?= $isProductsActive ? 'aria-current="page"' : ''; ?>
                >
                    <?= e($item['label']); ?>
                    <?= lucideIcon('chevron-down', 'site-nav__chevron'); ?>
                </a>
                <div class="mega-menu" aria-label="Products menu">
                    <div class="mega-menu__inner">
                        <div class="mega-menu__mobile-head">
                            <button class="mega-menu__back" type="button" data-products-menu-back aria-label="Go back">
                                <?= lucideIcon('arrow-left', 'mega-menu__back-icon'); ?>
                            </button>
                            <span data-products-menu-title>Product Line</span>
                        </div>
                        <div class="mega-menu__line">
                            <h2>SMC Product Line</h2>
                            <a class="mega-menu__primary" href="<?= e(appUrl('/automation.php')); ?>" data-products-line-trigger>
                                Automation
                                <?= lucideIcon('chevron-right', 'mega-menu__icon'); ?>
                            </a>
                        </div>
                        <div class="mega-menu__categories">
                            <?php foreach ($automationCategories as $index => $category): ?>
                                <?php $categoryUrl = $automationCategoryRoutes[$category['slug']] ?? '/products.php?category=' . $category['slug']; ?>
                                <div class="mega-menu__category">
                                    <a
                                        href="<?= e(appUrl($categoryUrl)); ?>"
                                        data-products-category-trigger
                                        data-mega-category-trigger
                                        data-category-label="<?= e($category['title']); ?>"
                                    >
                                        <span><?= e($category['title']); ?></span>
                                        <?= lucideIcon($index === 0 ? 'chevron-right' : 'chevron-down', 'mega-menu__icon'); ?>
                                    </a>
                                    <div class="mega-menu__submenu">
                                        <?php foreach ($category['items'] as $product): ?>
                                            <a href="<?= e(appUrl(automationSidebarItemUrl($product, $categoryUrl))); ?>"><?= e($product); ?></a>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="mega-menu__products" aria-hidden="true"></div>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <a
                href="<?= e(appUrl($item['path'])); ?>"
                class="<?= isActivePath($item['path']) ? 'is-active' : ''; ?>"
                <?= isActivePath($item['path']) ? 'aria-current="page"' : ''; ?>
            >
                <?= e($item['label']); ?>
            </a>
        <?php endif; ?>
    <?php endforeach; ?>
    <a class="site-nav__search" href="<?= e(appUrl('/search.php')); ?>" aria-label="Search"><?= lucideIcon('search'); ?><span>Search</span></a>
    <a class="site-nav__quote" href="<?= e(appUrl('/contact-us.php')); ?>" data-enquiry-trigger data-enquiry-product="General Quotation">Request Quotation <?= lucideIcon('send'); ?></a>
</nav>
