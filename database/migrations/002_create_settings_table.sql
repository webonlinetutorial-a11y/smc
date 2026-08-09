CREATE TABLE IF NOT EXISTS settings (
    id TINYINT UNSIGNED PRIMARY KEY,
    company_name VARCHAR(190) NOT NULL,
    tagline VARCHAR(190) NULL,
    phone VARCHAR(50) NULL,
    alternate_phone VARCHAR(50) NULL,
    email VARCHAR(190) NULL,
    address TEXT NULL,
    business_hours VARCHAR(190) NULL,
    facebook_url VARCHAR(255) NULL,
    linkedin_url VARCHAR(255) NULL,
    twitter_url VARCHAR(255) NULL,
    youtube_url VARCHAR(255) NULL,
    instagram_url VARCHAR(255) NULL,
    default_meta_title VARCHAR(190) NULL,
    default_meta_description VARCHAR(255) NULL,
    updated_by INT UNSIGNED NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    CONSTRAINT fk_settings_updated_by FOREIGN KEY (updated_by) REFERENCES users(id) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO settings (
    id,
    company_name,
    tagline,
    phone,
    email,
    address,
    business_hours,
    default_meta_title,
    default_meta_description
) VALUES (
    1,
    'Nepack Industrial Automation',
    'Industrial Automation',
    '+91 22 4008 8000',
    'info@nepack.com',
    'Mumbai, India',
    'Mon - Sat, 9:00 AM - 6:00 PM',
    'Nepack Website',
    'Industrial automation products and pneumatic solutions from Nepack.'
) ON DUPLICATE KEY UPDATE id = id;
