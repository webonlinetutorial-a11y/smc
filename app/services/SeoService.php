<?php

class SeoService extends BaseService
{
    public function metadataForPath(string $path): ?array
    {
        try {
            $statement = databaseConnection()->prepare('SELECT * FROM seo_metadata WHERE page_path = :page_path AND status = "active" LIMIT 1');
            $statement->execute(['page_path' => $path]);
            $row = $statement->fetch();

            return $row === false ? null : $row;
        } catch (Throwable $exception) {
            error_log($exception);
            return null;
        }
    }
}
