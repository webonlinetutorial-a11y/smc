<?php

class SettingsService extends BaseService
{
    private Setting $settingModel;

    public function __construct(?Setting $settingModel = null)
    {
        $this->settingModel = $settingModel ?? new Setting();
    }

    public function getSettings(): array
    {
        return $this->settingModel->getGlobal();
    }

    public function update(array $input, ?int $userId): bool
    {
        $this->errors = [];
        $data = $this->sanitize($input);
        $this->validate($data);

        if ($this->hasErrors()) {
            return false;
        }

        try {
            $this->settingModel->updateGlobal($data, $userId);
        } catch (Throwable $exception) {
            error_log($exception);
            $this->addError('Settings could not be saved. Please try again.');
            return false;
        }

        return true;
    }

    private function sanitize(array $input): array
    {
        return [
            'company_name' => sanitizeString($input['company_name'] ?? ''),
            'tagline' => sanitizeString($input['tagline'] ?? ''),
            'phone' => sanitizeString($input['phone'] ?? ''),
            'alternate_phone' => sanitizeString($input['alternate_phone'] ?? ''),
            'email' => sanitizeEmail($input['email'] ?? ''),
            'address' => sanitizeString($input['address'] ?? ''),
            'business_hours' => sanitizeString($input['business_hours'] ?? ''),
            'facebook_url' => sanitizeString($input['facebook_url'] ?? ''),
            'linkedin_url' => sanitizeString($input['linkedin_url'] ?? ''),
            'twitter_url' => sanitizeString($input['twitter_url'] ?? ''),
            'youtube_url' => sanitizeString($input['youtube_url'] ?? ''),
            'instagram_url' => sanitizeString($input['instagram_url'] ?? ''),
            'default_meta_title' => sanitizeString($input['default_meta_title'] ?? ''),
            'default_meta_description' => sanitizeString($input['default_meta_description'] ?? ''),
        ];
    }

    private function validate(array $data): void
    {
        if (!isRequired($data['company_name'])) {
            $this->addError('Company name is required.');
        }

        if (!isWithinLength($data['company_name'], 190)) {
            $this->addError('Company name must be 190 characters or fewer.');
        }

        if ($data['email'] !== '' && !isValidEmail($data['email'])) {
            $this->addError('Enter a valid contact email address.');
        }

        foreach (['tagline', 'phone', 'alternate_phone', 'business_hours', 'default_meta_title'] as $field) {
            if (!isWithinLength($data[$field], 190)) {
                $this->addError('One or more short text fields are too long.');
                break;
            }
        }

        if (!isWithinLength($data['default_meta_description'], 255)) {
            $this->addError('Default meta description must be 255 characters or fewer.');
        }

        foreach (['facebook_url', 'linkedin_url', 'twitter_url', 'youtube_url', 'instagram_url'] as $field) {
            if ($data[$field] !== '' && filter_var($data[$field], FILTER_VALIDATE_URL) === false) {
                $this->addError('Social links must be valid URLs.');
                break;
            }
        }
    }
}
