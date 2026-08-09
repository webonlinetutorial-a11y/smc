<?php

class MediaService extends BaseService
{
    private const ALLOWED_CATEGORIES = ['products', 'brands', 'gallery', 'sliders', 'testimonials', 'pdfs'];
    private const IMAGE_EXTENSIONS = ['jpg', 'jpeg', 'png', 'webp'];
    private const PDF_EXTENSIONS = ['pdf'];
    private const IMAGE_MIME_TYPES = ['image/jpeg', 'image/png', 'image/webp'];
    private const PDF_MIME_TYPES = ['application/pdf'];
    private const MAX_IMAGE_SIZE = 5242880;
    private const MAX_PDF_SIZE = 10485760;

    private MediaFile $mediaFileModel;

    public function __construct(?MediaFile $mediaFileModel = null)
    {
        $this->mediaFileModel = $mediaFileModel ?? new MediaFile();
    }

    public function latest(): array
    {
        return $this->mediaFileModel->latest();
    }

    public function categories(): array
    {
        return self::ALLOWED_CATEGORIES;
    }

    public function upload(array $file, array $input, ?int $userId): bool
    {
        $this->errors = [];
        $category = sanitizeString($input['category'] ?? '');
        $title = sanitizeString($input['title'] ?? '');
        $altText = sanitizeString($input['alt_text'] ?? '');

        $this->validateUpload($file, $category, $title);

        if ($this->hasErrors()) {
            return false;
        }

        $originalName = basename((string) $file['name']);
        $extension = strtolower((string) pathinfo($originalName, PATHINFO_EXTENSION));
        $fileType = $extension === 'pdf' ? 'pdf' : 'image';
        $mimeType = $this->detectMimeType((string) $file['tmp_name'], (string) ($file['type'] ?? ''));
        $storedName = $this->generateStoredName($title !== '' ? $title : $originalName, $extension, $category);
        $targetDirectory = UPLOADS_PATH . DIRECTORY_SEPARATOR . $category;
        $targetPath = $targetDirectory . DIRECTORY_SEPARATOR . $storedName;
        $relativePath = 'uploads/' . $category . '/' . $storedName;

        if (!is_dir($targetDirectory) && !mkdir($targetDirectory, 0755, true)) {
            $this->addError('Upload directory is not available.');
            return false;
        }

        if (!move_uploaded_file((string) $file['tmp_name'], $targetPath)) {
            $this->addError('File could not be stored. Please try again.');
            return false;
        }

        try {
            $this->mediaFileModel->create([
                'category' => $category,
                'file_type' => $fileType,
                'title' => $title !== '' ? $title : pathinfo($originalName, PATHINFO_FILENAME),
                'original_name' => $originalName,
                'stored_name' => $storedName,
                'relative_path' => $relativePath,
                'mime_type' => $mimeType,
                'extension' => $extension,
                'file_size' => (int) $file['size'],
                'alt_text' => $altText,
                'uploaded_by' => $userId,
            ]);
        } catch (Throwable $exception) {
            error_log($exception);
            if (is_file($targetPath)) {
                unlink($targetPath);
            }
            $this->addError('Media record could not be saved. Please try again.');
            return false;
        }

        return true;
    }

    public function validateUpload(array $file, string $category, string $title): void
    {
        if (!in_array($category, self::ALLOWED_CATEGORIES, true)) {
            $this->addError('Choose a valid media category.');
        }

        if (!isRequired($title) || !isWithinLength($title, 190)) {
            $this->addError('Title is required and must be 190 characters or fewer.');
        }

        if (($file['error'] ?? UPLOAD_ERR_NO_FILE) !== UPLOAD_ERR_OK) {
            $this->addError('Choose a valid file to upload.');
            return;
        }

        $originalName = basename((string) ($file['name'] ?? ''));
        $extension = strtolower((string) pathinfo($originalName, PATHINFO_EXTENSION));
        $size = (int) ($file['size'] ?? 0);
        $mimeType = $this->detectMimeType((string) ($file['tmp_name'] ?? ''), (string) ($file['type'] ?? ''));

        $isPdfCategory = $category === 'pdfs';
        $allowedExtensions = $isPdfCategory ? self::PDF_EXTENSIONS : self::IMAGE_EXTENSIONS;
        $allowedMimeTypes = $isPdfCategory ? self::PDF_MIME_TYPES : self::IMAGE_MIME_TYPES;
        $maxSize = $isPdfCategory ? self::MAX_PDF_SIZE : self::MAX_IMAGE_SIZE;

        if (!in_array($extension, $allowedExtensions, true)) {
            $this->addError($isPdfCategory ? 'Only PDF files are allowed for PDFs.' : 'Only JPG, PNG, and WebP images are allowed.');
        }

        if (!in_array($mimeType, $allowedMimeTypes, true)) {
            $this->addError('File type could not be verified.');
        }

        if ($size <= 0 || $size > $maxSize) {
            $this->addError($isPdfCategory ? 'PDF files must be 10 MB or smaller.' : 'Image files must be 5 MB or smaller.');
        }

        if (!$isPdfCategory && is_file((string) ($file['tmp_name'] ?? '')) && getimagesize((string) $file['tmp_name']) === false) {
            $this->addError('Image file appears to be invalid.');
        }
    }

    private function detectMimeType(string $path, string $fallback): string
    {
        if (is_file($path)) {
            $finfo = finfo_open(FILEINFO_MIME_TYPE);

            if ($finfo !== false) {
                $mimeType = finfo_file($finfo, $path);
                finfo_close($finfo);

                if (is_string($mimeType) && $mimeType !== '') {
                    return $mimeType;
                }
            }
        }

        return $fallback;
    }

    private function generateStoredName(string $name, string $extension, string $category): string
    {
        $baseName = sanitizeSlug(pathinfo($name, PATHINFO_FILENAME));

        if ($baseName === '') {
            $baseName = 'media';
        }

        $baseName = substr($baseName, 0, 80);
        $suffix = date('YmdHis') . '-' . bin2hex(random_bytes(4));

        return $baseName . '-' . $suffix . '.' . $extension;
    }
}
