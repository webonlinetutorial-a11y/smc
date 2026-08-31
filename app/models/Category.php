<?php

class Category extends BaseModel
{
    public function all(): array
    {
        return $this->fetchAll(
            'SELECT
                categories.*,
                parent.name AS parent_name
            FROM categories
            LEFT JOIN categories parent ON parent.id = categories.parent_id
            ORDER BY categories.status = "archived", categories.display_order ASC, categories.name ASC'
        );
    }

    public function activeForParentOptions(?int $excludeId = null): array
    {
        $parameters = [];
        $sql = 'SELECT id, name FROM categories WHERE status != "archived"';

        if ($excludeId !== null) {
            $sql .= ' AND id != :exclude_id';
            $parameters['exclude_id'] = $excludeId;
        }

        $sql .= ' ORDER BY display_order ASC, name ASC';

        return $this->fetchAll($sql, $parameters);
    }

    public function find(int $id): ?array
    {
        return $this->fetchOne('SELECT * FROM categories WHERE id = :id LIMIT 1', ['id' => $id]);
    }

    public function slugExists(string $slug, ?int $excludeId = null): bool
    {
        $parameters = ['slug' => $slug];
        $sql = 'SELECT id FROM categories WHERE slug = :slug';

        if ($excludeId !== null) {
            $sql .= ' AND id != :exclude_id';
            $parameters['exclude_id'] = $excludeId;
        }

        $sql .= ' LIMIT 1';

        return $this->fetchOne($sql, $parameters) !== null;
    }

    public function parentIdFor(int $id): ?int
    {
        $category = $this->fetchOne('SELECT parent_id FROM categories WHERE id = :id LIMIT 1', ['id' => $id]);

        if ($category === null || $category['parent_id'] === null) {
            return null;
        }

        return (int) $category['parent_id'];
    }

    public function create(array $data): void
    {
        $this->execute(
            'INSERT INTO categories (
                parent_id,
                name,
                slug,
                description,
                image_path,
                status,
                display_order,
                created_by,
                updated_by
            ) VALUES (
                :parent_id,
                :name,
                :slug,
                :description,
                :image_path,
                :status,
                :display_order,
                :created_by,
                :updated_by
            )',
            $data
        );
    }

    public function update(int $id, array $data): void
    {
        $data['id'] = $id;

        $this->execute(
            'UPDATE categories SET
                parent_id = :parent_id,
                name = :name,
                slug = :slug,
                description = :description,
                image_path = :image_path,
                status = :status,
                display_order = :display_order,
                updated_by = :updated_by
            WHERE id = :id',
            $data
        );
    }

    public function archive(int $id, ?int $userId): void
    {
        $this->execute(
            'UPDATE categories SET status = "archived", updated_by = :updated_by WHERE id = :id',
            ['id' => $id, 'updated_by' => $userId]
        );
    }

    public function hasChildren(int $id): bool
    {
        return $this->fetchOne('SELECT id FROM categories WHERE parent_id = :id LIMIT 1', ['id' => $id]) !== null;
    }

    public function delete(int $id): void
    {
        $this->execute('DELETE FROM categories WHERE id = :id', ['id' => $id]);
    }
}
