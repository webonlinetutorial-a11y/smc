<?php

class AdminDashboardService extends BaseService
{
    public function summaryItems(): array
    {
        return [
            ['label' => 'Products', 'value' => 'Ready'],
            ['label' => 'Brands', 'value' => 'Ready'],
            ['label' => 'Downloads', 'value' => 'Ready'],
            ['label' => 'Inquiries', 'value' => 'Ready'],
        ];
    }

    public function moduleItems(): array
    {
        return [
            ['label' => 'Media', 'path' => '/admin/media.php', 'status' => 'Active'],
            ['label' => 'Products', 'path' => '/admin/products.php', 'status' => 'Active'],
            ['label' => 'Product Images', 'path' => '/admin/product-images.php', 'status' => 'Active'],
            ['label' => 'Categories', 'path' => '/admin/categories.php', 'status' => 'Active'],
            ['label' => 'Brands', 'path' => '/admin/brands.php', 'status' => 'Active'],
            ['label' => 'Gallery', 'path' => '/admin/gallery.php', 'status' => 'Active'],
            ['label' => 'Gallery Images', 'path' => '/admin/gallery-images.php', 'status' => 'Active'],
            ['label' => 'Downloads', 'path' => '/admin/downloads.php', 'status' => 'Active'],
            ['label' => 'Inquiries', 'path' => '/admin/inquiries.php', 'status' => 'Active'],
            ['label' => 'SEO', 'path' => '/admin/seo.php', 'status' => 'Active'],
            ['label' => 'Sliders', 'path' => '/admin/sliders.php', 'status' => 'Active'],
            ['label' => 'Testimonials', 'path' => '/admin/testimonials.php', 'status' => 'Active'],
            ['label' => 'Users', 'path' => '/admin/users.php', 'status' => 'Foundation'],
            ['label' => 'Settings', 'path' => '/admin/settings.php', 'status' => 'Foundation'],
        ];
    }
}
