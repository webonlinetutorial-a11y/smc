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

    public function activeProductGroups(): array
    {
        return array_values(array_filter($this->cmsModule->all('product_groups', 'display_order ASC, name ASC'), static fn (array $row): bool => $row['status'] === 'active'));
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

    public function productPrimaryImagePath(array $product): string
    {
        if (trim((string) ($product['image_path'] ?? '')) !== '') {
            return (string) $product['image_path'];
        }

        $images = $this->activeProductImages((int) $product['id']);

        return $images[0]['image_path'] ?? '';
    }

    public function productPartNumberRows(array $product): array
    {
        $raw = trim((string) ($product['part_numbers'] ?? ''));

        if ($raw === '') {
            return [];
        }

        $rows = [];

        foreach (preg_split('/\r\n|\r|\n/', $raw) as $line) {
            $line = trim($line);

            if ($line === '') {
                continue;
            }

            $segments = array_map('trim', explode('|', $line));
            $partNumber = array_shift($segments) ?? '';

            if ($partNumber === '') {
                continue;
            }

            $description = $segments[0] ?? '';
            $row = [
                'partNumber' => $partNumber,
                'description' => $description !== '' ? $description : (string) ($product['short_description'] ?? ''),
            ];

            if (($segments[1] ?? '') !== '') {
                $row['spec1'] = $segments[1];
            }

            if (($segments[2] ?? '') !== '') {
                $row['spec2'] = $segments[2];
            }

            $rows[] = $row;
        }

        return $rows;
    }

    public function productPartNumberSpecDefinitions(array $product): array
    {
        $definitions = [];

        $spec1Label = trim((string) ($product['part_number_spec1_label'] ?? ''));
        if ($spec1Label !== '') {
            $definitions['spec1'] = ['label' => $spec1Label, 'dataKey' => 'spec1'];
        }

        $spec2Label = trim((string) ($product['part_number_spec2_label'] ?? ''));
        if ($spec2Label !== '') {
            $definitions['spec2'] = ['label' => $spec2Label, 'dataKey' => 'spec2'];
        }

        return $definitions;
    }

    public function productDetailPayload(array $product): array
    {
        $primaryImage = $this->productPrimaryImagePath($product);

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

    /**
     * Builds the top-level product cards for a category page, combining standalone
     * products with grouped ones. Products sharing the same Product Group render as
     * ONE top-level card (using the group's own name/image/description); opening it
     * reveals every product in that group as its own bottom detail card, each with
     * its own image and its own final product page. Ungrouped products keep the
     * normal one-card-per-product behavior.
     *
     * @param array<int, array<string, mixed>> $categoryProducts Published products already filtered to one category.
     * @return array{cards: array<int, array<string, mixed>>, details: array<string, array<string, mixed>>}
     */
    public function categoryProductCards(array $categoryProducts): array
    {
        $ungroupedProducts = [];
        $productsByGroupId = [];

        foreach ($categoryProducts as $product) {
            $groupId = (int) ($product['group_id'] ?? 0);

            if ($groupId > 0) {
                $productsByGroupId[$groupId][] = $product;
            } else {
                $ungroupedProducts[] = $product;
            }
        }

        $cardEntries = [];
        $details = [];

        foreach ($ungroupedProducts as $product) {
            $cardEntries[] = [
                'sortOrder' => (int) ($product['display_order'] ?? 0),
                'card' => [
                    'slug' => $product['slug'],
                    'name' => $product['name'],
                    'short_description' => (string) ($product['short_description'] ?? ''),
                    'imagePath' => $this->productPrimaryImagePath($product),
                ],
            ];
            $details[$product['slug']] = $this->productDetailPayload($product);
        }

        if ($productsByGroupId !== []) {
            $activeGroups = $this->activeProductGroups();

            foreach ($productsByGroupId as $groupId => $groupProducts) {
                $group = null;

                foreach ($activeGroups as $candidateGroup) {
                    if ((int) $candidateGroup['id'] === $groupId) {
                        $group = $candidateGroup;
                        break;
                    }
                }

                // Group missing or inactive: fall back to showing its products standalone
                // rather than silently hiding them.
                if ($group === null) {
                    foreach ($groupProducts as $product) {
                        $cardEntries[] = [
                            'sortOrder' => (int) ($product['display_order'] ?? 0),
                            'card' => [
                                'slug' => $product['slug'],
                                'name' => $product['name'],
                                'short_description' => (string) ($product['short_description'] ?? ''),
                                'imagePath' => $this->productPrimaryImagePath($product),
                            ],
                        ];
                        $details[$product['slug']] = $this->productDetailPayload($product);
                    }

                    continue;
                }

                $groupCardSlug = 'group-' . $group['slug'];
                $cardEntries[] = [
                    'sortOrder' => (int) ($group['display_order'] ?? 0),
                    'card' => [
                        'slug' => $groupCardSlug,
                        'name' => $group['name'],
                        'short_description' => (string) ($group['description'] ?? ''),
                        'imagePath' => (string) ($group['image_path'] ?? ''),
                    ],
                ];

                $details[$groupCardSlug] = [
                    'items' => array_map(
                        fn (array $product): array => $this->productDetailPayload($product),
                        $groupProducts
                    ),
                ];
            }
        }

        usort($cardEntries, static fn (array $a, array $b): int => $a['sortOrder'] <=> $b['sortOrder']);

        return [
            'cards' => array_map(static fn (array $entry): array => $entry['card'], $cardEntries),
            'details' => $details,
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
