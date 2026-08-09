<?php

class SettingsController extends BaseController
{
    private SettingsService $settingsService;

    public function __construct(?SettingsService $settingsService = null)
    {
        $this->settingsService = $settingsService ?? new SettingsService();
    }

    public function edit(): array
    {
        return [
            'pageTitle' => 'Settings',
            'settings' => $this->settingsService->getSettings(),
            'errors' => [],
        ];
    }

    public function update(): never
    {
        if (!verifyCsrfToken((string) ($_POST['csrf_token'] ?? ''))) {
            setFlash('error', 'Your session expired. Please try again.');
            $this->redirect('/admin/settings.php');
        }

        $userId = currentAdminUserId();

        if ($this->settingsService->update($_POST, $userId)) {
            setFlash('success', 'Settings saved successfully.');
            $this->redirect('/admin/settings.php');
        }

        $_SESSION['settings_form'] = $_POST;
        $_SESSION['settings_errors'] = $this->settingsService->errors();
        $this->redirect('/admin/settings.php');
    }
}
