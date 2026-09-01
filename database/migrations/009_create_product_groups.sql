CREATE TABLE IF NOT EXISTS product_groups (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(150) NOT NULL,
    slug VARCHAR(170) NOT NULL,
    image_path VARCHAR(255) NULL,
    description TEXT NULL,
    status ENUM('active', 'inactive', 'archived') NOT NULL DEFAULT 'active',
    display_order INT UNSIGNED NOT NULL DEFAULT 0,
    created_by INT UNSIGNED NULL,
    updated_by INT UNSIGNED NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    UNIQUE KEY uq_product_groups_slug (slug),
    INDEX idx_product_groups_status_order (status, display_order),
    CONSTRAINT fk_product_groups_created_by FOREIGN KEY (created_by) REFERENCES users(id) ON DELETE SET NULL,
    CONSTRAINT fk_product_groups_updated_by FOREIGN KEY (updated_by) REFERENCES users(id) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

ALTER TABLE products
    ADD COLUMN group_id INT UNSIGNED NULL AFTER category_id,
    ADD CONSTRAINT fk_products_group_id FOREIGN KEY (group_id) REFERENCES product_groups(id) ON DELETE SET NULL;
