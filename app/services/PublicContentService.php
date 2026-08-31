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

    public function topLevelCategories(): array
    {
        return array_values(array_filter(
            $this->activeCategories(),
            static fn (array $category): bool => empty($category['parent_id'])
        ));
    }

    public function categoryBySlug(string $slug): ?array
    {
        foreach ($this->activeCategories() as $category) {
            if ($category['slug'] === $slug) {
                return $category;
            }
        }

        return null;
    }

    public function childCategoriesOf(int $parentId): array
    {
        return array_values(array_filter(
            $this->activeCategories(),
            static fn (array $category): bool => (int) ($category['parent_id'] ?? 0) === $parentId
        ));
    }

    public function categoryBreadcrumbChain(array $category): array
    {
        $categoriesById = [];
        foreach ($this->activeCategories() as $candidate) {
            $categoriesById[(int) $candidate['id']] = $candidate;
        }

        $chain = [$category];
        $current = $category;
        $guard = 0;

        while (!empty($current['parent_id']) && $guard < 10) {
            $parentId = (int) $current['parent_id'];

            if (!isset($categoriesById[$parentId])) {
                break;
            }

            $current = $categoriesById[$parentId];
            array_unshift($chain, $current);
            $guard++;
        }

        return $chain;
    }

    public function publishedProductBySlug(string $slug): ?array
    {
        foreach ($this->publishedProducts() as $product) {
            if ($product['slug'] === $slug) {
                return $product;
            }
        }

        return null;
    }

    public function productDetailPayload(array $product): array
    {
        $images = $this->activeProductImages((int) $product['id']);
        $primaryImage = $images[0]['image_path'] ?? '';

        $actions = [];

        if (trim((string) ($product['part_numbers'] ?? '')) !== '') {
            $actions[] = [
                'label' => 'Part Numbers',
                'icon' => 'list',
                'wide' => true,
                'url' => appUrl('/product.php?slug=' . $product['slug'] . '#part-numbers'),
                'sameTab' => true,
            ];
        }

        if (trim((string) ($product['catalog_url'] ?? '')) !== '') {
            $actions[] = [
                'label' => 'Catalog',
                'icon' => 'file-text',
                'primary' => true,
                'url' => $product['catalog_url'],
            ];
        }

        if (trim((string) ($product['video_url'] ?? '')) !== '') {
            $actions[] = [
                'label' => 'Video',
                'icon' => 'circle-play',
                'videoUrl' => $product['video_url'],
            ];
        }

        $actions[] = ['label' => 'Enquiry', 'icon' => 'circle-help'];

        return [
            'title' => $product['name'],
            'image' => $primaryImage !== '' ? assetUrl($primaryImage) : '',
            'description' => (string) ($product['short_description'] ?? ''),
            'url' => appUrl('/product.php?slug=' . $product['slug']),
            'actions' => $actions,
        ];
    }

    public function activeProductImages(int $productId): array
    {
        $images = array_values(array_filter(
            $this->cmsModule->all('product_images', 'display_order ASC, id ASC'),
            static fn (array $row): bool => $row['status'] === 'active' && (int) $row['product_id'] === $productId
        ));

        usort($images, static fn (array $a, array $b): int => ((int) $b['is_primary']) <=> ((int) $a['is_primary']));

        return $images;
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
