<?php

class Setting extends BaseModel
{
    public function getGlobal(): array
    {
        $settings = $this->fetchOne('SELECT * FROM settings WHERE id = 1 LIMIT 1');

        if ($settings !== null) {
            return $settings;
        }

        return [
            'id' => 1,
            'company_name' => 'Nepack Industrial Automation',
            'tagline' => 'Industrial Automation',
            'phone' => '+91 22 4008 8000',
            'alternate_phone' => '',
            'email' => 'info@nepack.com',
            'address' => 'Mumbai, India',
            'business_hours' => 'Mon - Sat, 9:00 AM - 6:00 PM',
            'facebook_url' => '',
            'linkedin_url' => '',
            'twitter_url' => '',
            'youtube_url' => '',
            'instagram_url' => '',
            'default_meta_title' => 'Nepack Website',
            'default_meta_description' => 'Industrial automation products and pneumatic solutions from Nepack.',
        ];
    }

    public function updateGlobal(array $data, ?int $userId): void
    {
        $sql = '
            INSERT INTO settings (
                id,
                company_name,
                tagline,
                phone,
                alternate_phone,
                email,
                address,
                business_hours,
                facebook_url,
                linkedin_url,
                twitter_url,
                youtube_url,
                instagram_url,
                default_meta_title,
                default_meta_description,
                updated_by
            ) VALUES (
                1,
                :company_name,
                :tagline,
                :phone,
                :alternate_phone,
                :email,
                :address,
                :business_hours,
                :facebook_url,
                :linkedin_url,
                :twitter_url,
                :youtube_url,
                :instagram_url,
                :default_meta_title,
                :default_meta_description,
                :updated_by
            )
            ON DUPLICATE KEY UPDATE
                company_name = VALUES(company_name),
                tagline = VALUES(tagline),
                phone = VALUES(phone),
                alternate_phone = VALUES(alternate_phone),
                email = VALUES(email),
                address = VALUES(address),
                business_hours = VALUES(business_hours),
                facebook_url = VALUES(facebook_url),
                linkedin_url = VALUES(linkedin_url),
                twitter_url = VALUES(twitter_url),
                youtube_url = VALUES(youtube_url),
                instagram_url = VALUES(instagram_url),
                default_meta_title = VALUES(default_meta_title),
                default_meta_description = VALUES(default_meta_description),
                updated_by = VALUES(updated_by)
        ';

        $data['updated_by'] = $userId;
        $this->execute($sql, $data);
    }
}
