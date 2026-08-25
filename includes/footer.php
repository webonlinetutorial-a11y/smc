<footer class="site-footer">
    <div class="container site-footer__grid">
        <div class="site-footer__brand">
            <a class="site-logo site-logo--footer" href="<?= e(appUrl('/')); ?>">
                <strong>B</strong>
                <span>Bharat Mill</span>
                <small>Industrial Automation</small>
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
            <h2>Quick Links</h2>
            <a href="<?= e(appUrl('/')); ?>">Home</a>
            <a href="<?= e(appUrl('/products.php')); ?>">Products</a>
            <a href="<?= e(appUrl('/about-us.php')); ?>">About Us</a>
            <a href="<?= e(appUrl('/contact-us.php')); ?>">Contact Us</a>
        </nav>
        <nav aria-label="Product links">
            <h2>Products</h2>
            <a href="<?= e(appUrl('/automation.php')); ?>">Automation</a>
            <a href="<?= e(appUrl('/products.php')); ?>">Pneumatic Components</a>
            <a href="<?= e(appUrl('/products.php')); ?>">Industrial Valves</a>
            <a href="<?= e(appUrl('/products.php')); ?>">Air Compressors</a>
            <a href="<?= e(appUrl('/products.php')); ?>">Vacuum Technology</a>
            <a href="<?= e(appUrl('/products.php')); ?>">Accessories</a>
        </nav>
        <div class="site-footer__contact">
            <h2>Contact Info</h2>
            <p><?= lucideIcon('settings'); ?>Bharat Mill Industrial Automation</p>
            <p><?= lucideIcon('phone'); ?>+91 22 4008 8000</p>
            <p><?= lucideIcon('mail'); ?>info@bharatmill.com</p>
            <p><?= lucideIcon('clock'); ?>Mon - Sat, 9:00 AM - 6:00 PM</p>
            <p><?= lucideIcon('map-pin'); ?>Mumbai, India</p>
        </div>
    </div>
    <div class="container site-footer__bottom">
        <small>&copy; <?= e(date('Y')); ?> <?= e(configValue('app.name', 'Bharat Mill Website')); ?>. All rights reserved.</small>
        <nav aria-label="Legal links">
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Use</a>
            <a href="#">Sitemap</a>
        </nav>
    </div>
</footer>
