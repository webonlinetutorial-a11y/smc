ALTER TABLE products
    ADD COLUMN catalog_url VARCHAR(255) NULL AFTER part_numbers,
    ADD COLUMN video_url VARCHAR(255) NULL AFTER catalog_url;
