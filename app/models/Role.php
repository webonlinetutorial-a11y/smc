<?php

class Role extends BaseModel
{
    public function findActiveByName(string $name): ?array
    {
        return $this->fetchOne(
            'SELECT id, name, description, status FROM roles WHERE name = :name AND status = :status LIMIT 1',
            [
                'name' => $name,
                'status' => 'active',
            ]
        );
    }
}
