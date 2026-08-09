<?php

class CmsModule extends BaseModel
{
    public function all(string $table, string $orderBy = 'display_order ASC, id DESC'): array
    {
        return $this->fetchAll('SELECT * FROM ' . $table . ' ORDER BY ' . $orderBy);
    }

    public function find(string $table, int $id): ?array
    {
        return $this->fetchOne('SELECT * FROM ' . $table . ' WHERE id = :id LIMIT 1', ['id' => $id]);
    }

    public function slugExists(string $table, string $slug, ?int $excludeId = null): bool
    {
        $parameters = ['slug' => $slug];
        $sql = 'SELECT id FROM ' . $table . ' WHERE slug = :slug';

        if ($excludeId !== null) {
            $sql .= ' AND id != :exclude_id';
            $parameters['exclude_id'] = $excludeId;
        }

        return $this->fetchOne($sql . ' LIMIT 1', $parameters) !== null;
    }

    public function create(string $table, array $data): void
    {
        $columns = array_keys($data);
        $columnSql = implode(', ', $columns);
        $placeholderSql = ':' . implode(', :', $columns);

        $this->execute('INSERT INTO ' . $table . ' (' . $columnSql . ') VALUES (' . $placeholderSql . ')', $data);
    }

    public function update(string $table, int $id, array $data): void
    {
        $assignments = [];

        foreach (array_keys($data) as $column) {
            $assignments[] = $column . ' = :' . $column;
        }

        $data['id'] = $id;
        $this->execute('UPDATE ' . $table . ' SET ' . implode(', ', $assignments) . ' WHERE id = :id', $data);
    }

    public function archive(string $table, int $id, ?int $userId): void
    {
        $this->execute(
            'UPDATE ' . $table . ' SET status = :status, updated_by = :updated_by WHERE id = :id',
            ['id' => $id, 'status' => 'archived', 'updated_by' => $userId]
        );
    }
}
