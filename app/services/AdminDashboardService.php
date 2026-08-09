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
            ['label' => 'Products', 'path' => '/admin/products.php', 'status' => 'Foundation'],
            ['label' => 'Categories', 'path' => '/admin/categories.php', 'status' => 'Active'],
            ['label' => 'Brands', 'path' => '/admin/brands.php', 'status' => 'Foundation'],
            ['label' => 'Gallery', 'path' => '/admin/gallery.php', 'status' => 'Foundation'],
            ['label' => 'Downloads', 'path' => '/admin/downloads.php', 'status' => 'Foundation'],
            ['label' => 'Inquiries', 'path' => '/admin/inquiries.php', 'status' => 'Foundation'],
            ['label' => 'SEO', 'path' => '/admin/seo.php', 'status' => 'Foundation'],
            ['label' => 'Users', 'path' => '/admin/users.php', 'status' => 'Foundation'],
            ['label' => 'Settings', 'path' => '/admin/settings.php', 'status' => 'Foundation'],
        ];
    }
}
