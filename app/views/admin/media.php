<main class="admin-content">
    <div class="admin-page-heading">
        <div>
            <h1>Media Library</h1>
            <p>Upload and manage reusable CMS images and PDF documents.</p>
        </div>
    </div>

    <?php if ($errors !== []): ?>
        <div class="admin-form-errors" role="alert">
            <?php foreach ($errors as $error): ?>
                <p><?= e($error); ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <form class="admin-form" method="post" action="<?= e(appUrl('/admin/media.php')); ?>" enctype="multipart/form-data">
        <?= csrfField(); ?>

        <section class="admin-panel admin-form-section">
            <div class="admin-section-heading">
                <h2>Upload Media</h2>
            </div>
            <div class="admin-form-grid">
                <label>
                    <span>Title</span>
                    <input type="text" name="title" value="<?= e($form['title'] ?? ''); ?>" required maxlength="190">
                </label>
                <label>
                    <span>Category</span>
                    <select name="category" required>
                        <?php foreach ($categories as $category): ?>
                            <option value="<?= e($category); ?>" <?= ($form['category'] ?? '') === $category ? 'selected' : ''; ?>>
                                <?= e(ucfirst($category)); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </label>
                <label class="admin-form-field-wide">
                    <span>Alt Text</span>
                    <input type="text" name="alt_text" value="<?= e($form['alt_text'] ?? ''); ?>" maxlength="190">
                </label>
                <label class="admin-form-field-wide">
                    <span>File</span>
                    <input type="file" name="media_file" accept=".jpg,.jpeg,.png,.webp,.pdf,image/jpeg,image/png,image/webp,application/pdf" required>
                </label>
            </div>
            <p class="admin-muted">Images support JPG, PNG, and WebP up to 5 MB. PDFs are allowed only in the PDFs category up to 10 MB.</p>
        </section>

        <div class="admin-form-actions">
            <button class="admin-button admin-button-primary" type="submit">Upload Media</button>
        </div>
    </form>

    <section class="admin-panel admin-media-panel">
        <div class="admin-section-heading">
            <h2>Recent Media</h2>
        </div>
        <?php if ($mediaFiles === []): ?>
            <p class="admin-muted">No media files have been uploaded yet.</p>
        <?php else: ?>
            <div class="admin-table-wrap">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Type</th>
                            <th>Size</th>
                            <th>Uploaded</th>
                            <th>File</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($mediaFiles as $mediaFile): ?>
                            <tr>
                                <td><?= e($mediaFile['title']); ?></td>
                                <td><?= e(ucfirst((string) $mediaFile['category'])); ?></td>
                                <td><?= e(strtoupper((string) $mediaFile['file_type'])); ?></td>
                                <td><?= e(formatFileSize((int) $mediaFile['file_size'])); ?></td>
                                <td><?= e(date('M j, Y', strtotime((string) $mediaFile['created_at']))); ?></td>
                                <td><a href="<?= e(appUrl($mediaFile['relative_path'])); ?>" target="_blank" rel="noopener">Open</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </section>
</main>
