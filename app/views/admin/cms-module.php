<main class="admin-content">
    <div class="admin-page-heading">
        <div>
            <h1><?= e($config['title']); ?></h1>
            <p><?= e($config['description']); ?></p>
        </div>
    </div>

    <?php if ($errors !== []): ?>
        <div class="admin-form-errors" role="alert">
            <?php foreach ($errors as $error): ?>
                <p><?= e($error); ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <form class="admin-form" method="post" action="<?= e(appUrl($config['path'] . ($editingRecord !== null ? '?edit=' . (int) $editingRecord['id'] : ''))); ?>">
        <?= csrfField(); ?>
        <input type="hidden" name="action" value="<?= $editingRecord !== null ? 'update' : 'create'; ?>">
        <?php if ($editingRecord !== null): ?>
            <input type="hidden" name="record_id" value="<?= e($editingRecord['id']); ?>">
        <?php endif; ?>

        <section class="admin-panel admin-form-section">
            <div class="admin-section-heading">
                <h2><?= $editingRecord !== null ? 'Edit ' . e($config['singular']) : 'Create ' . e($config['singular']); ?></h2>
            </div>
            <div class="admin-form-grid">
                <?php foreach ($config['fields'] as $field => $fieldConfig): ?>
                    <?php
                    $type = $fieldConfig['type'] ?? 'text';
                    $label = $config['labels'][$field] ?? ucfirst(str_replace('_', ' ', $field));
                    $value = $form[$field] ?? ($fieldConfig['default'] ?? '');
                    $isWide = in_array($type, ['textarea', 'longtext'], true);
                    ?>
                    <label class="<?= $isWide ? 'admin-form-field-wide' : ''; ?>">
                        <span><?= e($label); ?></span>
                        <?php if ($type === 'textarea' || $type === 'longtext'): ?>
                            <textarea name="<?= e($field); ?>" rows="<?= $type === 'longtext' ? '6' : '3'; ?>"><?= e($value); ?></textarea>
                        <?php elseif ($type === 'select' || $type === 'select_int'): ?>
                            <select name="<?= e($field); ?>" <?= in_array($field, $config['required'] ?? [], true) ? 'required' : ''; ?>>
                                <?php foreach (($fieldConfig['options'] ?? []) as $optionValue => $optionLabel): ?>
                                    <option value="<?= e($optionValue); ?>" <?= (string) $value === (string) $optionValue ? 'selected' : ''; ?>>
                                        <?= e($optionLabel); ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        <?php elseif ($type === 'checkbox'): ?>
                            <input type="checkbox" name="<?= e($field); ?>" value="1" <?= (int) $value === 1 ? 'checked' : ''; ?>>
                        <?php else: ?>
                            <input
                                type="<?= $type === 'number' ? 'number' : 'text'; ?>"
                                name="<?= e($field); ?>"
                                value="<?= e($value); ?>"
                                <?= in_array($field, $config['required'] ?? [], true) ? 'required' : ''; ?>
                            >
                        <?php endif; ?>
                    </label>
                <?php endforeach; ?>
            </div>
        </section>

        <div class="admin-form-actions">
            <?php if ($editingRecord !== null): ?>
                <a class="admin-button admin-button-secondary" href="<?= e(appUrl($config['path'])); ?>">Cancel</a>
            <?php endif; ?>
            <button class="admin-button admin-button-primary" type="submit"><?= $editingRecord !== null ? 'Update' : 'Create'; ?></button>
        </div>
    </form>

    <section class="admin-panel admin-media-panel">
        <div class="admin-section-heading">
            <h2><?= e($config['listTitle']); ?></h2>
        </div>
        <?php if ($records === []): ?>
            <p class="admin-muted">No records yet.</p>
        <?php else: ?>
            <div class="admin-table-wrap">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <?php foreach ($config['listColumns'] as $column => $label): ?>
                                <th><?= e($label); ?></th>
                            <?php endforeach; ?>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($records as $record): ?>
                            <tr>
                                <?php foreach ($config['listColumns'] as $column => $label): ?>
                                    <td>
                                        <?php if ($column === 'status'): ?>
                                            <span class="admin-status admin-status-<?= e($record[$column]); ?>"><?= e(ucfirst((string) $record[$column])); ?></span>
                                        <?php else: ?>
                                            <?= e($record[$column] ?? ''); ?>
                                        <?php endif; ?>
                                    </td>
                                <?php endforeach; ?>
                                <td class="admin-table-actions">
                                    <a href="<?= e(appUrl($config['path'] . '?edit=' . (int) $record['id'])); ?>">Edit</a>
                                    <?php if (($record['status'] ?? '') !== 'archived'): ?>
                                        <form method="post" action="<?= e(appUrl($config['path'])); ?>">
                                            <?= csrfField(); ?>
                                            <input type="hidden" name="action" value="archive">
                                            <input type="hidden" name="record_id" value="<?= e($record['id']); ?>">
                                            <button type="submit">Archive</button>
                                        </form>
                                    <?php endif; ?>
                                    <form method="post" action="<?= e(appUrl($config['path'])); ?>" onsubmit="return confirm('Permanently delete this <?= e(strtolower($config['singular'])); ?>? This cannot be undone.');">
                                        <?= csrfField(); ?>
                                        <input type="hidden" name="action" value="delete">
                                        <input type="hidden" name="record_id" value="<?= e($record['id']); ?>">
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
