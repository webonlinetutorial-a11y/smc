ALTER TABLE products
    ADD COLUMN part_number_spec1_label VARCHAR(100) NULL AFTER part_numbers,
    ADD COLUMN part_number_spec2_label VARCHAR(100) NULL AFTER part_number_spec1_label;
