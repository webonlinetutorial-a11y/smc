<footer class="site-footer">
    <div class="container site-footer__grid">
        <div class="site-footer__brand">
            <a class="site-logo site-logo--footer" href="<?= e(appUrl('/')); ?>">
                <img src="<?= e(assetUrl('images/logo.png')); ?>" alt="<?= e(configValue('app.name', 'Indian Mill Stores Website')); ?>">
            </a>
            <p>Leading provider of industrial automation and pneumatic solutions, delivering reliable products and expert support across diverse industries.</p>
            <div class="social-links" aria-label="Social links">
                <a href="#" aria-label="Facebook">f</a>
                <a href="#" aria-label="LinkedIn">in</a>
                <a href="#" aria-label="Twitter">x</a>
                <a href="#" aria-label="YouTube">yt</a>
                <a href="#" aria-label="Instagram">ig</a>
            </div>
        </div>
        <nav aria-label="Quick links">
            <h2>Our Company</h2>
            <a href="<?= e(appUrl('/')); ?>">Home</a>
            <a href="<?= e(appUrl('/products.php')); ?>">Products</a>
            <a href="<?= e(appUrl('/about-us.php')); ?>">About Us</a>
            <a href="<?= e(appUrl('/contact-us.php')); ?>">Contact Us</a>
        </nav>
        <nav aria-label="Product links">
            <h2>Quick link</h2>
            <a href="<?= e(appUrl('/privacy-policy.php')); ?>">Privacy Policy</a>
            <a href="<?= e(appUrl('/terms-of-use.php')); ?>">Terms of Use</a>
        </nav>
        <div class="site-footer__contact">
            <h2>Contact Info</h2>
            <p><?= lucideIcon('settings'); ?>Indian Mill Stores Industrial Automation</p>
            <p><?= lucideIcon('phone'); ?>+91 9936503386</p>
            <p><?= lucideIcon('mail'); ?>info@Indianmillstores.com</p>
            <p><?= lucideIcon('clock'); ?>Mon - Sat, 9:00 AM - 6:00 PM</p>
            <p><?= lucideIcon('map-pin'); ?>Kanpur, India</p>
        </div>
    </div>
    <div class="container site-footer__bottom">
        <small>&copy; <?= e(date('Y')); ?> <?= e(configValue('app.name', 'Indian Mill Stores Website')); ?>. All rights reserved.</small>
    </div>
</footer>

<a class="whatsapp-float" href="https://wa.me/919936503386" target="_blank" rel="noopener" aria-label="Chat with us on WhatsApp">
    <img src="<?= e(assetUrl('images/whatsapp.png')); ?>" alt="WhatsApp">
</a>
