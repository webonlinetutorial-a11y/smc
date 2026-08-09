<main class="admin-content">
    <div class="admin-page-heading">
        <div>
            <h1>Settings</h1>
            <p>Manage global company, contact, social, and default SEO details.</p>
        </div>
    </div>

    <?php if ($errors !== []): ?>
        <div class="admin-form-errors" role="alert">
            <?php foreach ($errors as $error): ?>
                <p><?= e($error); ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <form class="admin-form" method="post" action="<?= e(appUrl('/admin/settings.php')); ?>">
        <?= csrfField(); ?>

        <section class="admin-panel admin-form-section">
            <div class="admin-section-heading">
                <h2>Company Details</h2>
            </div>
            <div class="admin-form-grid">
                <label>
                    <span>Company Name</span>
                    <input type="text" name="company_name" value="<?= e($settings['company_name'] ?? ''); ?>" required maxlength="190">
                </label>
                <label>
                    <span>Tagline</span>
                    <input type="text" name="tagline" value="<?= e($settings['tagline'] ?? ''); ?>" maxlength="190">
                </label>
                <label>
                    <span>Phone</span>
                    <input type="text" name="phone" value="<?= e($settings['phone'] ?? ''); ?>" maxlength="50">
                </label>
                <label>
                    <span>Alternate Phone</span>
                    <input type="text" name="alternate_phone" value="<?= e($settings['alternate_phone'] ?? ''); ?>" maxlength="50">
                </label>
                <label>
                    <span>Email</span>
                    <input type="email" name="email" value="<?= e($settings['email'] ?? ''); ?>" maxlength="190">
                </label>
                <label>
                    <span>Business Hours</span>
                    <input type="text" name="business_hours" value="<?= e($settings['business_hours'] ?? ''); ?>" maxlength="190">
                </label>
                <label class="admin-form-field-wide">
                    <span>Address</span>
                    <textarea name="address" rows="4"><?= e($settings['address'] ?? ''); ?></textarea>
                </label>
            </div>
        </section>

        <section class="admin-panel admin-form-section">
            <div class="admin-section-heading">
                <h2>Social Links</h2>
            </div>
            <div class="admin-form-grid">
                <label>
                    <span>Facebook URL</span>
                    <input type="url" name="facebook_url" value="<?= e($settings['facebook_url'] ?? ''); ?>" maxlength="255">
                </label>
                <label>
                    <span>LinkedIn URL</span>
                    <input type="url" name="linkedin_url" value="<?= e($settings['linkedin_url'] ?? ''); ?>" maxlength="255">
                </label>
                <label>
                    <span>Twitter/X URL</span>
                    <input type="url" name="twitter_url" value="<?= e($settings['twitter_url'] ?? ''); ?>" maxlength="255">
                </label>
                <label>
                    <span>YouTube URL</span>
                    <input type="url" name="youtube_url" value="<?= e($settings['youtube_url'] ?? ''); ?>" maxlength="255">
                </label>
                <label>
                    <span>Instagram URL</span>
                    <input type="url" name="instagram_url" value="<?= e($settings['instagram_url'] ?? ''); ?>" maxlength="255">
                </label>
            </div>
        </section>

        <section class="admin-panel admin-form-section">
            <div class="admin-section-heading">
                <h2>Default SEO</h2>
            </div>
            <div class="admin-form-grid">
                <label>
                    <span>Default Meta Title</span>
                    <input type="text" name="default_meta_title" value="<?= e($settings['default_meta_title'] ?? ''); ?>" maxlength="190">
                </label>
                <label class="admin-form-field-wide">
                    <span>Default Meta Description</span>
                    <textarea name="default_meta_description" rows="3" maxlength="255"><?= e($settings['default_meta_description'] ?? ''); ?></textarea>
                </label>
            </div>
        </section>

        <div class="admin-form-actions">
            <button class="admin-button admin-button-primary" type="submit">Save Settings</button>
        </div>
    </form>
</main>
