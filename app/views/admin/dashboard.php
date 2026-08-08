<main class="admin-content">
    <div class="admin-page-heading">
        <div>
            <h1>Dashboard</h1>
            <p>Welcome, <?= e(currentUser()['name'] ?? 'Admin'); ?>.</p>
        </div>
    </div>

    <section class="admin-summary-grid" aria-label="CMS summary">
        <?php foreach ($summaryItems as $item): ?>
            <article class="admin-summary-card">
                <span><?= e($item['label']); ?></span>
                <strong><?= e($item['value']); ?></strong>
            </article>
        <?php endforeach; ?>
    </section>

    <section class="admin-panel">
        <div class="admin-section-heading">
            <h2>CMS Modules</h2>
        </div>
        <div class="admin-table-wrap">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th scope="col">Module</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($moduleItems as $item): ?>
                        <tr>
                            <td><?= e($item['label']); ?></td>
                            <td><span class="admin-status"><?= e($item['status']); ?></span></td>
                            <td><a href="<?= e(appUrl($item['path'])); ?>">Open</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
</main>
