<main class="admin-content">
    <div class="admin-page-heading">
        <div>
            <h1>Inquiries</h1>
            <p>Review and update public contact and product inquiries.</p>
        </div>
    </div>

    <section class="admin-panel">
        <div class="admin-section-heading">
            <h2>Recent Inquiries</h2>
        </div>
        <?php if ($inquiries === []): ?>
            <p class="admin-muted">No inquiries have been submitted yet.</p>
        <?php else: ?>
            <div class="admin-table-wrap">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Status</th>
                            <th>Submitted</th>
                            <th>Update</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($inquiries as $inquiry): ?>
                            <tr>
                                <td><?= e($inquiry['visitor_name']); ?></td>
                                <td><?= e($inquiry['email']); ?></td>
                                <td><?= e(mb_strimwidth((string) $inquiry['message'], 0, 90, '...')); ?></td>
                                <td><span class="admin-status admin-status-<?= e($inquiry['status']); ?>"><?= e(ucfirst(str_replace('_', ' ', (string) $inquiry['status']))); ?></span></td>
                                <td><?= e(date('M j, Y', strtotime((string) $inquiry['created_at']))); ?></td>
                                <td>
                                    <form class="admin-inline-form" method="post" action="<?= e(appUrl('/admin/inquiries.php')); ?>">
                                        <?= csrfField(); ?>
                                        <input type="hidden" name="inquiry_id" value="<?= e($inquiry['id']); ?>">
                                        <select name="status">
                                            <?php foreach (['new', 'in_progress', 'resolved', 'archived'] as $status): ?>
                                                <option value="<?= e($status); ?>" <?= $inquiry['status'] === $status ? 'selected' : ''; ?>><?= e(ucfirst(str_replace('_', ' ', $status))); ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <button type="submit">Save</button>
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
