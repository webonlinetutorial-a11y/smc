<main class="admin-content">
    <div class="admin-page-heading">
        <div>
            <h1>Categories</h1>
            <p>Create, organize, and archive product categories.</p>
        </div>
    </div>

    <?php if ($errors !== []): ?>
        <div class="admin-form-errors" role="alert">
            <?php foreach ($errors as $error): ?>
                <p><?= e($error); ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <form class="admin-form" method="post" action="<?= e(appUrl('/admin/categories.php' . ($editingCategory !== null ? '?edit=' . (int) $editingCategory['id'] : ''))); ?>">
        <?= csrfField(); ?>
        <input type="hidden" name="action" value="<?= $editingCategory !== null ? 'update' : 'create'; ?>">
        <?php if ($editingCategory !== null): ?>
            <input type="hidden" name="category_id" value="<?= e($editingCategory['id']); ?>">
        <?php endif; ?>

        <section class="admin-panel admin-form-section">
            <div class="admin-section-heading">
                <h2><?= $editingCategory !== null ? 'Edit Category' : 'Create Category'; ?></h2>
            </div>
            <div class="admin-form-grid">
                <label>
                    <span>Name</span>
                    <input type="text" name="name" value="<?= e($form['name'] ?? ''); ?>" required maxlength="150">
                </label>
                <label>
                    <span>Slug</span>
                    <input type="text" name="slug" value="<?= e($form['slug'] ?? ''); ?>" maxlength="170">
                </label>
                <label>
                    <span>Parent Category</span>
                    <select name="parent_id">
                        <option value="">None</option>
                        <?php foreach ($parentOptions as $parentOption): ?>
                            <option value="<?= e($parentOption['id']); ?>" <?= (int) ($form['parent_id'] ?? 0) === (int) $parentOption['id'] ? 'selected' : ''; ?>>
                                <?= e($parentOption['name']); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </label>
                <label>
                    <span>Status</span>
                    <select name="status" required>
                        <?php foreach (['active', 'inactive', 'archived'] as $status): ?>
                            <option value="<?= e($status); ?>" <?= ($form['status'] ?? 'active') === $status ? 'selected' : ''; ?>>
                                <?= e(ucfirst($status)); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </label>
                <label>
                    <span>Display Order</span>
                    <input type="number" name="display_order" value="<?= e($form['display_order'] ?? 0); ?>" min="0" step="1">
                </label>
                <label>
                    <span>Image Path</span>
                    <input type="text" name="image_path" value="<?= e($form['image_path'] ?? ''); ?>" maxlength="255">
                </label>
                <label class="admin-form-field-wide">
                    <span>Description</span>
                    <textarea name="description" rows="4"><?= e($form['description'] ?? ''); ?></textarea>
                    <small class="admin-field-hint">Type one point per line to show it as a bullet list on the category page. A single line shows as a plain paragraph instead.</small>
                </label>
            </div>
        </section>

        <div class="admin-form-actions">
            <?php if ($editingCategory !== null): ?>
                <a class="admin-button admin-button-secondary" href="<?= e(appUrl('/admin/categories.php')); ?>">Cancel</a>
            <?php endif; ?>
            <button class="admin-button admin-button-primary" type="submit"><?= $editingCategory !== null ? 'Update Category' : 'Create Category'; ?></button>
        </div>
    </form>

    <section class="admin-panel admin-media-panel">
        <div class="admin-section-heading">
            <h2>Category List</h2>
        </div>
        <?php if ($categories === []): ?>
            <p class="admin-muted">No categories have been created yet.</p>
        <?php else: ?>
            <div class="admin-table-wrap">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Parent</th>
                            <th>Status</th>
                            <th>Order</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($categories as $category): ?>
                            <tr>
                                <td><?= e($category['name']); ?></td>
                                <td><?= e($category['slug']); ?></td>
                                <td><?= e($category['parent_name'] ?? '-'); ?></td>
                                <td><span class="admin-status admin-status-<?= e($category['status']); ?>"><?= e(ucfirst((string) $category['status'])); ?></span></td>
                                <td><?= e($category['display_order']); ?></td>
                                <td class="admin-table-actions">
                                    <a href="<?= e(appUrl('/admin/categories.php?edit=' . (int) $category['id'])); ?>">Edit</a>
                                    <?php if ($category['status'] !== 'archived'): ?>
                                        <form method="post" action="<?= e(appUrl('/admin/categories.php')); ?>">
                                            <?= csrfField(); ?>
                                            <input type="hidden" name="action" value="archive">
                                            <input type="hidden" name="category_id" value="<?= e($category['id']); ?>">
                                            <button type="submit">Archive</button>
                                        </form>
                                    <?php endif; ?>
                                    <form method="post" action="<?= e(appUrl('/admin/categories.php')); ?>" onsubmit="return confirm('Permanently delete this category? This cannot be undone.');">
                                        <?= csrfField(); ?>
                                        <input type="hidden" name="action" value="delete">
                                        <input type="hidden" name="category_id" value="<?= e($category['id']); ?>">
                                        <button type="submit" class="admin-button-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </section>
</main>
