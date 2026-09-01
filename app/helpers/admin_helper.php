<?php

function adminNavigationItems(): array
{
    return [
        ['label' => 'Dashboard', 'path' => '/admin/dashboard.php'],
        ['label' => 'Media', 'path' => '/admin/media.php'],
        ['label' => 'Products', 'path' => '/admin/products.php'],
        ['label' => 'Product Groups', 'path' => '/admin/product-groups.php'],
        ['label' => 'Product Images', 'path' => '/admin/product-images.php'],
        ['label' => 'Categories', 'path' => '/admin/categories.php'],
        ['label' => 'Brands', 'path' => '/admin/brands.php'],
        ['label' => 'Gallery', 'path' => '/admin/gallery.php'],
        ['label' => 'Gallery Images', 'path' => '/admin/gallery-images.php'],
        ['label' => 'Downloads', 'path' => '/admin/downloads.php'],
        ['label' => 'Inquiries', 'path' => '/admin/inquiries.php'],
        ['label' => 'SEO', 'path' => '/admin/seo.php'],
        ['label' => 'Sliders', 'path' => '/admin/sliders.php'],
        ['label' => 'Testimonials', 'path' => '/admin/testimonials.php'],
        ['label' => 'Users', 'path' => '/admin/users.php'],
        ['label' => 'Settings', 'path' => '/admin/settings.php'],
    ];
}

function adminPageTitle(string $title): string
{
    return $title . ' | ' . configValue('app.name', 'Nepack Website');
}

function adminCurrentPath(): string
{
    return currentPath();
}

function isActiveAdminPath(string $path): bool
{
    return rtrim(adminCurrentPath(), '/') === rtrim($path, '/');
}
