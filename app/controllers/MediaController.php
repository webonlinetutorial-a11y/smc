<?php

class MediaController extends BaseController
{
    private MediaService $mediaService;

    public function __construct(?MediaService $mediaService = null)
    {
        $this->mediaService = $mediaService ?? new MediaService();
    }

    public function index(): array
    {
        return [
            'pageTitle' => 'Media Library',
            'mediaFiles' => $this->mediaService->latest(),
            'categories' => $this->mediaService->categories(),
            'errors' => [],
            'form' => [
                'title' => '',
                'category' => 'products',
                'alt_text' => '',
            ],
        ];
    }

    public function upload(): never
    {
        if (!verifyCsrfToken((string) ($_POST['csrf_token'] ?? ''))) {
            setFlash('error', 'Your session expired. Please try again.');
            $this->redirect('/admin/media.php');
        }

        if ($this->mediaService->upload($_FILES['media_file'] ?? [], $_POST, currentAdminUserId())) {
            setFlash('success', 'Media file uploaded successfully.');
            $this->redirect('/admin/media.php');
        }

        $_SESSION['media_form'] = $_POST;
        $_SESSION['media_errors'] = $this->mediaService->errors();
        $this->redirect('/admin/media.php');
    }
}
