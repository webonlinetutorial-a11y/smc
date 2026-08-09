<main>
    <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'page-banner.php'; ?>
    <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

    <section class="section">
        <div class="container content-shell">
            <form class="contact-form" method="get" action="<?= e(appUrl('/search.php')); ?>">
                <label class="contact-form-wide">
                    <span>Search</span>
                    <input type="search" name="q" value="<?= e($query ?? ''); ?>">
                </label>
                <button class="button button--primary" type="submit">Search</button>
            </form>

            <?php if (($query ?? '') !== ''): ?>
                <h2>Search Results</h2>
                <?php if (($results ?? []) === []): ?>
                    <p>No matching active records found.</p>
                <?php else: ?>
                    <div class="cms-listing-grid">
                        <?php foreach ($results as $result): ?>
                            <article class="cms-listing-card">
                                <small><?= e($result['type']); ?></small>
                                <h3><?= e($result['title']); ?></h3>
                                <a class="button button--secondary" href="<?= e($result['url']); ?>">Open</a>
                            </article>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </section>
</main>
