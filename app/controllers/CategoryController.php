<?php

class CategoryController extends BaseController
{
    private CategoryService $categoryService;

    public function __construct(?CategoryService $categoryService = null)
    {
        $this->categoryService = $categoryService ?? new CategoryService();
    }

    public function index(): array
    {
        $editId = sanitizeInt($_GET['edit'] ?? 0);
        $editingCategory = $editId > 0 ? $this->categoryService->find($editId) : null;

        return [
            'pageTitle' => 'Categories',
            'categories' => $this->categoryService->all(),
            'parentOptions' => $this->categoryService->parentOptions($editingCategory !== null ? (int) $editingCategory['id'] : null),
            'editingCategory' => $editingCategory,
            'errors' => [],
            'form' => $editingCategory ?? [
                'name' => '',
                'slug' => '',
                'parent_id' => '',
                'description' => '',
                'image_path' => '',
                'status' => 'active',
                'display_order' => 0,
            ],
        ];
    }

    public function handlePost(): never
    {
        if (!verifyCsrfToken((string) ($_POST['csrf_token'] ?? ''))) {
            setFlash('error', 'Your session expired. Please try again.');
            $this->redirect('/admin/categories.php');
        }

        $action = sanitizeString($_POST['action'] ?? 'create');
        $categoryId = sanitizeInt($_POST['category_id'] ?? 0);
        $success = false;

        if ($action === 'archive' && $categoryId > 0) {
            $success = $this->categoryService->archive($categoryId, currentAdminUserId());
            $successMessage = 'Category archived successfully.';
        } elseif ($action === 'update' && $categoryId > 0) {
            $success = $this->categoryService->update($categoryId, $_POST, currentAdminUserId());
            $successMessage = 'Category updated successfully.';
        } else {
            $success = $this->categoryService->create($_POST, currentAdminUserId());
            $successMessage = 'Category created successfully.';
        }

        if ($success) {
            setFlash('success', $successMessage);
            $this->redirect('/admin/categories.php');
        }

        $_SESSION['category_form'] = $_POST;
        $_SESSION['category_errors'] = $this->categoryService->errors();
        $redirectPath = $action === 'update' && $categoryId > 0 ? '/admin/categories.php?edit=' . $categoryId : '/admin/categories.php';
        $this->redirect($redirectPath);
    }
}
