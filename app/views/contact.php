<main>
    <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'page-banner.php'; ?>
    <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

    <section class="section">
        <div class="container content-shell">
            <h2>Contact Nepack</h2>
            <p>Send your requirement and our team will review it.</p>

            <?php $successMessage = consumeFlash('success'); ?>
            <?php if ($successMessage !== null): ?>
                <p class="form-message form-message-success" role="status"><?= e($successMessage); ?></p>
            <?php endif; ?>

            <?php if (($errors ?? []) !== []): ?>
                <div class="form-message form-message-error" role="alert">
                    <?php foreach ($errors as $error): ?>
                        <p><?= e($error); ?></p>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <form class="contact-form" method="post" action="<?= e(appUrl('/contact-us.php')); ?>">
                <?= csrfField(); ?>
                <input type="hidden" name="source_page" value="<?= e(currentPath()); ?>">
                <?php if (($productContext ?? null) !== null): ?>
                    <input type="hidden" name="product_id" value="<?= e($productContext['id']); ?>">
                    <p class="contact-form-wide form-message form-message-success">Inquiry for: <?= e($productContext['name']); ?></p>
                <?php endif; ?>
                <label>
                    <span>Name</span>
                    <input type="text" name="visitor_name" value="<?= e($form['visitor_name'] ?? ''); ?>" required>
                </label>
                <label>
                    <span>Email</span>
                    <input type="email" name="email" value="<?= e($form['email'] ?? ''); ?>" required>
                </label>
                <label>
                    <span>Phone</span>
                    <input type="text" name="phone" value="<?= e($form['phone'] ?? ''); ?>">
                </label>
                <label>
                    <span>Location</span>
                    <input type="text" name="location" value="<?= e($form['location'] ?? ''); ?>">
                </label>
                <label class="contact-form-wide">
                    <span>Requirement</span>
                    <textarea name="message" rows="5" required><?= e($form['message'] ?? ''); ?></textarea>
                </label>
                <button class="button button--primary" type="submit">Send Inquiry</button>
            </form>
        </div>
    </section>
</main>
