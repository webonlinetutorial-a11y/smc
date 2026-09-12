<main>
    <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'page-banner.php'; ?>
    <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

    <section class="section">
        <div class="container">
            <div class="content-shell privacy-policy">
                <p class="privacy-policy__intro"><?= e($introText ?? ''); ?></p>

                <?php if (!empty($faqs)): ?>
                    <h2 class="privacy-policy__faq-heading"><?= e($faqHeading ?? 'Frequently Asked Questions'); ?></h2>
                    <div class="privacy-policy__faq">
                        <?php foreach ($faqs as $faq): ?>
                            <article class="privacy-policy__faq-item">
                                <h3><?= e($faq['question']); ?></h3>
                                <p><?= e($faq['answer']); ?></p>
                            </article>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>
