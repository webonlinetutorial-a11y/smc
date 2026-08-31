<?php

class CmsModuleService extends BaseService
{
    private CmsModule $cmsModuleModel;

    public function __construct(?CmsModule $cmsModuleModel = null)
    {
        $this->cmsModuleModel = $cmsModuleModel ?? new CmsModule();
    }

    public function all(array $config): array
    {
        return $this->cmsModuleModel->all($config['table'], $config['orderBy'] ?? 'display_order ASC, id DESC');
    }

    public function find(array $config, int $id): ?array
    {
        return $this->cmsModuleModel->find($config['table'], $id);
    }

    public function save(array $config, array $input, ?int $id, ?int $userId): bool
    {
        $this->errors = [];
        $data = $this->prepareData($config, $input, $id, $userId);

        if ($this->hasErrors()) {
            return false;
        }

        try {
            if ($id === null) {
                $this->cmsModuleModel->create($config['table'], $data);
            } else {
                unset($data['created_by'], $data['uploaded_by']);
                $this->cmsModuleModel->update($config['table'], $id, $data);
            }
        } catch (Throwable $exception) {
            error_log($exception);
            $this->addError($config['singular'] . ' could not be saved. Please try again.');
            return false;
        }

        return true;
    }

    public function archive(array $config, int $id, ?int $userId): bool
    {
        $this->errors = [];

        if ($this->cmsModuleModel->find($config['table'], $id) === null) {
            $this->addError($config['singular'] . ' was not found.');
            return false;
        }

        try {
            $this->cmsModuleModel->archive($config['table'], $id, $userId);
        } catch (Throwable $exception) {
            error_log($exception);
            $this->addError($config['singular'] . ' could not be archived. Please try again.');
            return false;
        }

        return true;
    }

    public function delete(array $config, int $id): bool
    {
        $this->errors = [];

        if ($this->cmsModuleModel->find($config['table'], $id) === null) {
            $this->addError($config['singular'] . ' was not found.');
            return false;
        }

        try {
            $this->cmsModuleModel->delete($config['table'], $id);
        } catch (Throwable $exception) {
            error_log($exception);

            if ($exception instanceof PDOException && $exception->getCode() === '23000') {
                $this->addError($config['singular'] . ' cannot be deleted because other records still reference it. Archive it instead, or remove those records first.');
            } else {
                $this->addError($config['singular'] . ' could not be deleted. Please try again.');
            }

            return false;
        }

        return true;
    }

    private function prepareData(array $config, array $input, ?int $id, ?int $userId): array
    {
        $data = [];

        foreach ($config['fields'] as $field => $fieldConfig) {
            $type = $fieldConfig['type'] ?? 'text';
            $value = $input[$field] ?? '';

            if ($type === 'int' || $type === 'select_int') {
                $value = sanitizeInt($value);
                $data[$field] = $value > 0 ? $value : null;
                continue;
            }

            if ($type === 'number') {
                $data[$field] = max(0, sanitizeInt($value));
                continue;
            }

            if ($type === 'checkbox') {
                $data[$field] = isset($input[$field]) ? 1 : 0;
                continue;
            }

            if ($field === 'slug') {
                $source = (string) ($value !== '' ? $value : ($input[$config['slugSource'] ?? 'name'] ?? ''));
                $data[$field] = sanitizeSlug($source);
                continue;
            }

            $data[$field] = sanitizeString($value);
        }

        foreach ($config['required'] ?? [] as $requiredField) {
            if (!isRequired($data[$requiredField] ?? '')) {
                $this->addError(($config['labels'][$requiredField] ?? ucfirst($requiredField)) . ' is required.');
            }
        }

        if (isset($data['slug']) && $data['slug'] !== '' && $this->cmsModuleModel->slugExists($config['table'], $data['slug'], $id)) {
            $this->addError($config['singular'] . ' slug already exists.');
        }

        foreach (($config['statusFieldValues'] ?? []) as $field => $allowedValues) {
            if (isset($data[$field]) && !in_array($data[$field], $allowedValues, true)) {
                $this->addError('Choose a valid ' . ($config['labels'][$field] ?? $field) . '.');
            }
        }

        if (array_key_exists('created_by', $config)) {
            $data['created_by'] = $userId;
        }

        if (array_key_exists('uploaded_by', $config)) {
            $data['uploaded_by'] = $userId;
        }

        if (array_key_exists('updated_by', $config)) {
            $data['updated_by'] = $userId;
        }

        return $data;
    }
}
