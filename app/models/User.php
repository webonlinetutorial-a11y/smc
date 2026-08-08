<?php

class User extends BaseModel
{
    public function findActiveAdminByIdentity(string $identity): ?array
    {
        $sql = '
            SELECT
                users.id,
                users.name,
                users.email,
                users.username,
                users.password_hash,
                users.status,
                roles.name AS role_name
            FROM users
            INNER JOIN roles ON roles.id = users.role_id
            WHERE (users.email = :identity_email OR users.username = :identity_username)
                AND users.status = :user_status
                AND roles.status = :role_status
            LIMIT 1
        ';

        return $this->fetchOne($sql, [
            'identity_email' => $identity,
            'identity_username' => $identity,
            'user_status' => 'active',
            'role_status' => 'active',
        ]);
    }

    public function updateLastLogin(int $userId): void
    {
        $this->execute(
            'UPDATE users SET last_login_at = NOW(), updated_at = NOW() WHERE id = :id',
            ['id' => $userId]
        );
    }
}
