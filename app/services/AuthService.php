<?php

class AuthService extends BaseService
{
    private User $userModel;

    public function __construct(?User $userModel = null)
    {
        $this->userModel = $userModel ?? new User();
    }

    public function attempt(string $identity, string $password): bool
    {
        if (!isRequired($identity) || !isRequired($password)) {
            return false;
        }

        try {
            $user = $this->userModel->findActiveAdminByIdentity($identity);
        } catch (Throwable $exception) {
            error_log($exception);
            return false;
        }

        if ($user === null || !password_verify($password, (string) $user['password_hash'])) {
            return false;
        }

        session_regenerate_id(true);

        $_SESSION['auth'] = [
            'user_id' => (int) $user['id'],
            'name' => (string) $user['name'],
            'email' => (string) $user['email'],
            'username' => (string) $user['username'],
            'role' => (string) $user['role_name'],
            'authenticated_at' => time(),
        ];

        $this->userModel->updateLastLogin((int) $user['id']);

        return true;
    }

    public function logout(): void
    {
        $_SESSION = [];

        if (ini_get('session.use_cookies')) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
        }

        if (session_status() === PHP_SESSION_ACTIVE) {
            session_destroy();
        }
    }
}
