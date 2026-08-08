<?php

class AuthController extends BaseController
{
    private ?AuthService $authService;

    public function __construct(?AuthService $authService = null)
    {
        $this->authService = $authService;
    }

    public function showLogin(): void
    {
        if (isAuthenticated()) {
            $this->redirect('/admin/dashboard.php');
        }

        $this->render('admin/login', [
            'title' => 'Admin Login',
            'robotsNoIndex' => true,
            'error' => consumeFlash('auth_error'),
            'csrfToken' => csrfToken(),
        ]);
    }

    public function login(): void
    {
        if (!isPostRequest()) {
            $this->redirect('/admin/login.php');
        }

        if (!verifyCsrfToken((string) ($_POST['csrf_token'] ?? ''))) {
            setFlash('auth_error', 'Your session expired. Please try again.');
            $this->redirect('/admin/login.php');
        }

        $identity = sanitizeString($_POST['identity'] ?? '');
        $password = (string) ($_POST['password'] ?? '');

        if ($this->authService()->attempt($identity, $password)) {
            $this->redirect('/admin/dashboard.php');
        }

        setFlash('auth_error', 'Invalid login details.');
        $this->redirect('/admin/login.php');
    }

    public function logout(): void
    {
        $this->authService()->logout();
        $this->redirect('/admin/login.php');
    }

    private function authService(): AuthService
    {
        if (!$this->authService instanceof AuthService) {
            $this->authService = new AuthService();
        }

        return $this->authService;
    }
}
