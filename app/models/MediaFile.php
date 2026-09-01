<?php

class MediaFile extends BaseModel
{
    public function latest(int $limit = 30): array
    {
        $limit = max(1, min($limit, 100));

        return $this->fetchAll('SELECT * FROM media_files ORDER BY created_at DESC, id DESC LIMIT ' . $limit);
    }

    public function find(int $id): ?array
    {
        return $this->fetchOne('SELECT * FROM media_files WHERE id = :id LIMIT 1', ['id' => $id]);
    }

    public function allImages(): array
    {
        return $this->fetchAll(
            "SELECT * FROM media_files WHERE file_type = 'image' ORDER BY category ASC, created_at DESC, id DESC"
        );
    }

    public function create(array $data): void
    {
        $this->execute(
            'INSERT INTO media_files (
                category,
                file_type,
                title,
                original_name,
                stored_name,
                relative_path,
                mime_type,
                extension,
                file_size,
                alt_text,
                uploaded_by
            ) VALUES (
                :category,
                :file_type,
                :title,
                :original_name,
                :stored_name,
                :relative_path,
                :mime_type,
                :extension,
                :file_size,
                :alt_text,
                :uploaded_by
            )',
            $data
        );
    }
}
