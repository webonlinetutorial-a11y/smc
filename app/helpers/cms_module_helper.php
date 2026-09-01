<?php

function cmsStatusOptions(array $values = ['active', 'inactive', 'archived']): array
{
    return array_combine($values, array_map(static fn (string $value): string => ucfirst(str_replace('_', ' ', $value)), $values));
}

function cmsCategoryOptions(): array
{
    $rows = (new Category())->activeForParentOptions();
    $options = ['' => 'Select category'];

    foreach ($rows as $row) {
        $options[(string) $row['id']] = (string) $row['name'];
    }

    return $options;
}

function cmsBrandOptions(): array
{
    $rows = (new CmsModule())->all('brands', 'display_order ASC, name ASC');
    $options = ['' => 'None'];

    foreach ($rows as $row) {
        if (($row['status'] ?? '') !== 'archived') {
            $options[(string) $row['id']] = (string) $row['name'];
        }
    }

    return $options;
}

function cmsProductOptions(): array
{
    $rows = (new CmsModule())->all('products', 'display_order ASC, name ASC');
    $options = ['' => 'None'];

    foreach ($rows as $row) {
        if (($row['status'] ?? '') !== 'archived') {
            $options[(string) $row['id']] = (string) $row['name'];
        }
    }

    return $options;
}

function cmsProductGroupOptions(): array
{
    $rows = (new CmsModule())->all('product_groups', 'display_order ASC, name ASC');
    $options = ['' => 'None (standalone product)'];

    foreach ($rows as $row) {
        if (($row['status'] ?? '') !== 'archived') {
            $options[(string) $row['id']] = (string) $row['name'];
        }
    }

    return $options;
}

function cmsMediaFileOptions(): array
{
    $rows = (new MediaFile())->allImages();
    $options = ['' => 'None (or set Image Path manually below)'];

    foreach ($rows as $row) {
        $label = '[' . $row['category'] . '] ' . ($row['title'] !== '' ? $row['title'] : $row['original_name']);
        $options[(string) $row['id']] = $label;
    }

    return $options;
}

function cmsGalleryAlbumOptions(): array
{
    $rows = (new CmsModule())->all('gallery_albums', 'display_order ASC, name ASC');
    $options = ['' => 'Select album'];

    foreach ($rows as $row) {
        if (($row['status'] ?? '') !== 'archived') {
            $options[(string) $row['id']] = (string) $row['name'];
        }
    }

    return $options;
}
