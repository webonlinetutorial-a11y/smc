<?php

class PublicContentService extends BaseService
{
    private CmsModule $cmsModule;

    public function __construct(?CmsModule $cmsModule = null)
    {
        $this->cmsModule = $cmsModule ?? new CmsModule();
    }

    public function activeBrands(): array
    {
        return array_values(array_filter($this->cmsModule->all('brands', 'display_order ASC, name ASC'), static fn (array $row): bool => $row['status'] === 'active'));
    }

    public function publishedProducts(): array
    {
        return array_values(array_filter($this->cmsModule->all('products', 'display_order ASC, name ASC'), static fn (array $row): bool => $row['status'] === 'published'));
    }

    public function activeCategories(): array
    {
        return array_values(array_filter((new Category())->all(), static fn (array $row): bool => $row['status'] === 'active'));
    }

    public function activeDownloads(): array
    {
        return array_values(array_filter($this->cmsModule->all('product_pdfs', 'created_at DESC, id DESC'), static fn (array $row): bool => $row['status'] === 'active'));
    }

    public function activeGalleryAlbums(): array
    {
        return array_values(array_filter($this->cmsModule->all('gallery_albums', 'display_order ASC, name ASC'), static fn (array $row): bool => $row['status'] === 'active'));
    }

    public function activeSliders(): array
    {
        return array_values(array_filter($this->cmsModule->all('sliders', 'display_order ASC, id DESC'), static fn (array $row): bool => $row['status'] === 'active'));
    }

    public function activeTestimonials(): array
    {
        return array_values(array_filter($this->cmsModule->all('testimonials', 'display_order ASC, id DESC'), static fn (array $row): bool => $row['status'] === 'active'));
    }

    public function search(string $query): array
    {
        $query = mb_strtolower(trim($query));

        if ($query === '') {
            return [];
        }

        $results = [];

        foreach ($this->publishedProducts() as $product) {
            if (str_contains(mb_strtolower($product['name'] . ' ' . $product['short_description']), $query)) {
                $results[] = ['type' => 'Product', 'title' => $product['name'], 'url' => appUrl('/products.php?product=' . $product['slug'])];
            }
        }

        foreach ($this->activeBrands() as $brand) {
            if (str_contains(mb_strtolower($brand['name'] . ' ' . $brand['overview']), $query)) {
                $results[] = ['type' => 'Brand', 'title' => $brand['name'], 'url' => appUrl('/brands.php?brand=' . $brand['slug'])];
            }
        }

        foreach ($this->activeDownloads() as $download) {
            if (str_contains(mb_strtolower($download['title'] . ' ' . $download['description']), $query)) {
                $results[] = ['type' => 'Download', 'title' => $download['title'], 'url' => appUrl($download['file_path'])];
            }
        }

        return $results;
    }
}
