<main>
    <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'page-banner.php'; ?>
    <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

    <section class="section">
        <div class="container">
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

            <div class="contact-layout">
                <div class="contact-info-card">
                    <h3>Contact Information</h3>
                    <ul class="contact-info-list">
                        <li>
                            <span class="contact-info-list__icon"><?= lucideIcon('user'); ?></span>
                            <span>
                                <strong>Contact Person</strong>
                                <?= e($contactPersonName ?? ''); ?>
                            </span>
                        </li>
                        <li>
                            <span class="contact-info-list__icon"><?= lucideIcon('phone'); ?></span>
                            <span>
                                <strong>Phone</strong>
                                <?= e($contactPhone ?? ''); ?>
                            </span>
                        </li>
                        <li>
                            <span class="contact-info-list__icon"><?= lucideIcon('mail'); ?></span>
                            <span>
                                <strong>Email</strong>
                                <?= e($contactEmail ?? ''); ?>
                            </span>
                        </li>
                        <li>
                            <span class="contact-info-list__icon"><?= lucideIcon('map-pin'); ?></span>
                            <span>
                                <strong>Address</strong>
                                <?= nl2br(e($contactAddress ?? '')); ?>
                            </span>
                        </li>
                    </ul>
                </div>

                <div class="contact-form-card">
                    <h3>Send Us a Message</h3>
                    <form class="contact-request-form" method="post" action="<?= e(appUrl('/contact-us.php')); ?>">
                        <?= csrfField(); ?>
                        <input type="hidden" name="source_page" value="<?= e(currentPath()); ?>">
                        <?php if (($productContext ?? null) !== null): ?>
                            <input type="hidden" name="product_id" value="<?= e($productContext['id']); ?>">
                        <?php endif; ?>

                        <label>
                            <span class="sr-only">Product / Service Looking For</span>
                            <input type="text" name="product_name" placeholder="Product / Service Looking For" value="<?= e($productContext['name'] ?? ($form['product_name'] ?? '')); ?>">
                        </label>

                        <div class="contact-request-form__two-col">
                            <label>
                                <span class="sr-only">Name</span>
                                <input type="text" name="visitor_name" placeholder="Name" value="<?= e($form['visitor_name'] ?? ''); ?>" required>
                            </label>
                            <label>
                                <span class="sr-only">Email</span>
                                <input type="email" name="email" placeholder="Email" value="<?= e($form['email'] ?? ''); ?>" required>
                            </label>
                        </div>

                        <div class="phone-input-group">
                            <label class="phone-input-group__code">
                                <span class="sr-only">Country code</span>
                                <img class="flag-icon" src="<?= e(assetUrl('images/in.svg')); ?>" alt="" aria-hidden="true">
                                <select name="country_code">
                                    <option value="+91" selected>+91</option>
                                </select>
                            </label>
                            <label>
                                <span class="sr-only">Phone Number</span>
                                <input type="tel" name="phone" placeholder="Phone Number" value="<?= e($form['phone'] ?? ''); ?>">
                            </label>
                        </div>

                        <label>
                            <span class="sr-only">Address</span>
                            <input type="text" name="address" placeholder="Address" value="<?= e($form['address'] ?? ''); ?>">
                        </label>

                        <label>
                            <span class="sr-only">State</span>
                            <select name="state">
                                <option value="">State</option>
                                <?php foreach (indianStateList() as $state): ?>
                                    <option value="<?= e($state); ?>" <?= ($form['state'] ?? '') === $state ? 'selected' : ''; ?>><?= e($state); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </label>

                        <div class="contact-request-form__two-col">
                            <label>
                                <span class="sr-only">City</span>
                                <input type="text" name="city" placeholder="City" value="<?= e($form['city'] ?? ''); ?>">
                            </label>
                            <label>
                                <span class="sr-only">Pincode</span>
                                <input type="text" name="pincode" placeholder="Pincode" value="<?= e($form['pincode'] ?? ''); ?>">
                            </label>
                        </div>

                        <label>
                            <span class="sr-only">Message</span>
                            <textarea name="message" rows="4" placeholder="Message" required><?= e($form['message'] ?? ''); ?></textarea>
                        </label>

                        <button class="button button--primary" type="submit">Submit <?= lucideIcon('send'); ?></button>
                    </form>
                </div>
            </div>

            <div class="contact-quick-links">
                <a href="<?= e(appUrl('/contact-us.php')); ?>" data-enquiry-trigger data-enquiry-product="General Quotation">
                    <span class="contact-quick-links__icon"><?= lucideIcon('file-text'); ?></span>
                    <span>Request Quotation</span>
                    <?= lucideIcon('arrow-right'); ?>
                </a>
                <a href="tel:<?= e($contactPhone ?? ''); ?>">
                    <span class="contact-quick-links__icon"><?= lucideIcon('phone'); ?></span>
                    <span>Call Us Now<small><?= e($contactPhone ?? ''); ?></small></span>
                    <?= lucideIcon('arrow-right'); ?>
                </a>
                <a href="mailto:<?= e($contactEmail ?? ''); ?>">
                    <span class="contact-quick-links__icon"><?= lucideIcon('mail'); ?></span>
                    <span>Email Us<small><?= e($contactEmail ?? ''); ?></small></span>
                    <?= lucideIcon('arrow-right'); ?>
                </a>
            </div>
        </div>
    </section>
</main>
