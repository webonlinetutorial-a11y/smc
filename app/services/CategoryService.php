<?php

class CategoryService extends BaseService
{
    private const STATUSES = ['active', 'inactive', 'archived'];

    private Category $categoryModel;

    public function __construct(?Category $categoryModel = null)
    {
        $this->categoryModel = $categoryModel ?? new Category();
    }

    public function all(): array
    {
        return $this->categoryModel->all();
    }

    public function parentOptions(?int $excludeId = null): array
    {
        return $this->categoryModel->activeForParentOptions($excludeId);
    }

    public function find(int $id): ?array
    {
        return $this->categoryModel->find($id);
    }

    public function create(array $input, ?int $userId): bool
    {
        $this->errors = [];
        $data = $this->prepare($input, null, $userId);

        if ($this->hasErrors()) {
            return false;
        }

        try {
            $this->categoryModel->create($data);
        } catch (Throwable $exception) {
            error_log($exception);
            $this->addError('Category could not be created. Please try again.');
            return false;
        }

        return true;
    }

    public function update(int $id, array $input, ?int $userId): bool
    {
        $this->errors = [];

        if ($this->categoryModel->find($id) === null) {
            $this->addError('Category was not found.');
            return false;
        }

        $data = $this->prepare($input, $id, $userId);

        if ($this->hasErrors()) {
            return false;
        }

        unset($data['created_by']);

        try {
            $this->categoryModel->update($id, $data);
        } catch (Throwable $exception) {
            error_log($exception);
            $this->addError('Category could not be updated. Please try again.');
            return false;
        }

        return true;
    }

    public function archive(int $id, ?int $userId): bool
    {
        $this->errors = [];

        if ($this->categoryModel->find($id) === null) {
            $this->addError('Category was not found.');
            return false;
        }

        try {
            $this->categoryModel->archive($id, $userId);
        } catch (Throwable $exception) {
            error_log($exception);
            $this->addError('Category could not be archived. Please try again.');
            return false;
        }

        return true;
    }

    private function prepare(array $input, ?int $categoryId, ?int $userId): array
    {
        $name = sanitizeString($input['name'] ?? '');
        $slug = sanitizeSlug($input['slug'] ?? '');

        if ($slug === '' && $name !== '') {
            $slug = sanitizeSlug($name);
        }

        $parentId = sanitizeInt($input['parent_id'] ?? 0);
        $parentId = $parentId > 0 ? $parentId : null;
        $status = sanitizeString($input['status'] ?? 'active');
        $displayOrder = max(0, sanitizeInt($input['display_order'] ?? 0));

        $data = [
            'parent_id' => $parentId,
            'name' => $name,
            'slug' => $slug,
            'description' => sanitizeString($input['description'] ?? ''),
            'image_path' => sanitizeString($input['image_path'] ?? ''),
            'status' => $status,
            'display_order' => $displayOrder,
            'created_by' => $userId,
            'updated_by' => $userId,
        ];

        $this->validate($data, $categoryId);

        return $data;
    }

    private function validate(array $data, ?int $categoryId): void
    {
        if (!isRequired($data['name'])) {
            $this->addError('Category name is required.');
        }

        if (!isWithinLength($data['name'], 150)) {
            $this->addError('Category name must be 150 characters or fewer.');
        }

        if (!isRequired($data['slug']) || !isWithinLength($data['slug'], 170)) {
            $this->addError('Category slug is required and must be 170 characters or fewer.');
        }

        if (!in_array($data['status'], self::STATUSES, true)) {
            $this->addError('Choose a valid category status.');
        }

        if ($data['parent_id'] !== null) {
            if ($categoryId !== null && $data['parent_id'] === $categoryId) {
                $this->addError('Category cannot use itself as parent.');
            } elseif ($this->categoryModel->find((int) $data['parent_id']) === null) {
                $this->addError('Choose a valid parent category.');
            } elseif ($categoryId !== null && $this->wouldCreateCircularParent($categoryId, (int) $data['parent_id'])) {
                $this->addError('Category parent would create a circular hierarchy.');
            }
        }

        if ($data['slug'] !== '' && $this->categoryModel->slugExists($data['slug'], $categoryId)) {
            $this->addError('Category slug already exists.');
        }
    }

    private function wouldCreateCircularParent(int $categoryId, int $parentId): bool
    {
        $visited = [];
        $currentParentId = $parentId;

        while ($currentParentId > 0) {
            if ($currentParentId === $categoryId || isset($visited[$currentParentId])) {
                return true;
            }

            $visited[$currentParentId] = true;
            $nextParentId = $this->categoryModel->parentIdFor($currentParentId);

            if ($nextParentId === null) {
                return false;
            }

            $currentParentId = $nextParentId;
        }

        return false;
    }
}
