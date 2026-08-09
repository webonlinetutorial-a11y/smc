<?php

class CmsModuleController extends BaseController
{
    private array $config;
    private CmsModuleService $service;

    public function __construct(array $config, ?CmsModuleService $service = null)
    {
        $this->config = $config;
        $this->service = $service ?? new CmsModuleService();
    }

    public function index(): array
    {
        $editId = sanitizeInt($_GET['edit'] ?? 0);
        $editingRecord = $editId > 0 ? $this->service->find($this->config, $editId) : null;

        return [
            'pageTitle' => $this->config['title'],
            'config' => $this->config,
            'records' => $this->service->all($this->config),
            'editingRecord' => $editingRecord,
            'errors' => [],
            'form' => $editingRecord ?? $this->emptyForm(),
        ];
    }

    public function handlePost(): never
    {
        if (!verifyCsrfToken((string) ($_POST['csrf_token'] ?? ''))) {
            setFlash('error', 'Your session expired. Please try again.');
            $this->redirect($this->config['path']);
        }

        $action = sanitizeString($_POST['action'] ?? 'create');
        $recordId = sanitizeInt($_POST['record_id'] ?? 0);

        if ($action === 'archive' && $recordId > 0) {
            $success = $this->service->archive($this->config, $recordId, currentAdminUserId());
            $successMessage = $this->config['singular'] . ' archived successfully.';
        } else {
            $id = $action === 'update' && $recordId > 0 ? $recordId : null;
            $success = $this->service->save($this->config, $_POST, $id, currentAdminUserId());
            $successMessage = $this->config['singular'] . ($id === null ? ' created successfully.' : ' updated successfully.');
        }

        if ($success) {
            setFlash('success', $successMessage);
            $this->redirect($this->config['path']);
        }

        $_SESSION[$this->config['sessionKey'] . '_form'] = $_POST;
        $_SESSION[$this->config['sessionKey'] . '_errors'] = $this->service->errors();
        $redirectPath = $action === 'update' && $recordId > 0 ? $this->config['path'] . '?edit=' . $recordId : $this->config['path'];
        $this->redirect($redirectPath);
    }

    private function emptyForm(): array
    {
        $form = [];

        foreach ($this->config['fields'] as $field => $fieldConfig) {
            $form[$field] = $fieldConfig['default'] ?? '';
        }

        return $form;
    }
}
