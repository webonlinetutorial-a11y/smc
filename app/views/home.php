<section class="hero-carousel" aria-label="Featured automation banners">
    <div class="hero-carousel__track" data-hero-carousel>
        <figure class="hero-carousel__slide is-active">
            <img src="<?= e(assetUrl('images/hero-1.webp.webp')); ?>" alt="Industrial automation hero banner" loading="eager">
        </figure>
        <figure class="hero-carousel__slide">
            <img src="<?= e(assetUrl('images/hero-2.webp.webp')); ?>" alt="Automation products hero banner" loading="lazy">
        </figure>
        <figure class="hero-carousel__slide">
            <img src="<?= e(assetUrl('images/hero-3.webp.webp')); ?>" alt="Industrial products hero banner" loading="lazy">
        </figure>
    </div>
</section>

<main>
    <section class="stats-strip" aria-label="Company highlights">
        <div class="container stats-strip__grid">
            <article><?= lucideIcon('settings'); ?><span>30+</span><strong>Years Experience</strong></article>
            <article><?= lucideIcon('package'); ?><span>10,000+</span><strong>Products</strong></article>
            <article><?= lucideIcon('users'); ?><span>500+</span><strong>Industrial Customers</strong></article>
            <article><?= lucideIcon('shield-check'); ?><span>15+</span><strong>Global Brands</strong></article>
            <article><?= lucideIcon('smile'); ?><span>99%</span><strong>Customer Satisfaction</strong></article>
        </div>
    </section>

    <section class="section section--compact product-line-section">
        <div class="container">
            <div class="section-heading section-heading--tight">
                <h1>SMC Product Line</h1>
            </div>
            <a class="product-line-intro" href="<?= e(appUrl('/products.php')); ?>">
                <div>
                    <h2>Automation</h2>
                    <p>SMC Corporation (India) Pvt. Ltd., a 100% subsidiary of SMC Corporation Japan, was incorporated in 1995 and is a leading provider of precision automation solutions in India.</p>
                    <p>We offer a wide range of industrial products including automation, food, packaging, testing and pharmaceutical solutions.</p>
                    <span class="text-link">View More &rarr;</span>
                </div>
                <div class="product-line-intro__image">
                    <img src="<?= e(assetUrl('images/smc-product-line1.png')); ?>" alt="SMC pneumatic cylinder" loading="lazy">
                </div>
            </a>
        </div>
    </section>

    <section class="section section--compact">
        <div class="container">
            <div class="section-heading">
                <h2>Why Choose Us</h2>
            </div>
            <div class="icon-card-grid">
                <?php foreach ([
                    ['badge-check', 'Authorized Distributor', 'Reliable genuine products with technical support'],
                    ['wrench', 'Expert Technical Team', 'Experienced support for your applications'],
                    ['truck', 'Fast Delivery', 'Timely supply across India and worldwide'],
                    ['boxes', 'Wide Product Range', 'Complete range of industrial automation solutions'],
                    ['headphones', 'After Sales Support', 'Dedicated service for long-term partnership'],
                ] as $item): ?>
                    <article class="icon-card">
                        <span class="icon-card__mark"><?= lucideIcon($item[0]); ?></span>
                        <h3><?= e($item[1]); ?></h3>
                        <p><?= e($item[2]); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section section--compact">
        <div class="container">
            <div class="section-heading">
                <h2>Product Selection Process</h2>
            </div>
            <div class="process-grid">
                <?php foreach ([
                    ['01', 'Share Requirement', 'Tell us about your application needs'],
                    ['02', 'Consult Expert', 'Get expert advice from our team'],
                    ['03', 'Select Product', 'Choose the right product'],
                    ['04', 'Select Configuration', 'Choose the right package'],
                    ['05', 'Receive Quotation', 'Get a detailed quote'],
                ] as $item): ?>
                    <article class="process-card">
                        <span><?= e($item[0]); ?></span>
                        <h3><?= e($item[1]); ?></h3>
                        <p><?= e($item[2]); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section section--compact">
        <div class="container">
            <div class="section-heading">
                <h2>Other Brands Product Line</h2>
            </div>
            <div class="product-card-grid">
                <?php foreach ([
                    ['Lubricated Air Compressors', 'lubricated-air-compressor.webp'],
                    ['Oil-Free Air Compressors', 'oil-free-air-compressor.webp'],
                    ['Vacuum Pumps', 'vacuum-pump.webp'],
                ] as $product): ?>
                    <article class="product-card">
                        <div class="product-card__image">
                            <img src="<?= e(assetUrl('images/' . $product[1])); ?>" alt="<?= e($product[0]); ?>" loading="lazy">
                        </div>
                        <h3><?= e($product[0]); ?></h3>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section section--compact">
        <div class="container">
            <div class="section-heading">
                <h2>Authorized Brand</h2>
            </div>
            <div class="brand-strip">
                <article><img src="<?= e(assetUrl('images/brand-anest-iwata.webp')); ?>" alt="ANEST IWATA brand logo" loading="lazy"></article>
                <article><img src="<?= e(assetUrl('images/brand-smc.webp')); ?>" alt="SMC brand logo" loading="lazy"></article>
            </div>
        </div>
    </section>

    <section class="section section--compact">
        <div class="container about-preview">
            <div class="about-preview__image">
                <img src="<?= e(assetUrl('images/about-nepack.webp')); ?>" alt="Nepack industrial automation team" loading="lazy">
            </div>
            <div>
                <h2>About Bharat Mill</h2>
                <h3>Your Trusted Partner in Industrial Automation</h3>
                <p>Bharat Mill is a leading distributor and solution provider of industrial automation and pneumatic components, serving diverse industries with high-quality products and expert technical support.</p>
                <div class="about-preview__stats">
                    <span><?= lucideIcon('award'); ?><strong>30+</strong> Years of Experience</span>
                    <span><?= lucideIcon('boxes'); ?><strong>10,000+</strong> Products Offered</span>
                    <span><?= lucideIcon('users'); ?><strong>500+</strong> Happy Customers</span>
                </div>
                <a class="button button--primary" href="<?= e(appUrl('/about-us.php')); ?>">Learn More &rarr;</a>
            </div>
        </div>
    </section>

    <section class="section section--compact">
        <div class="container testimonial-carousel">
            <div class="testimonial-carousel__track" data-testimonial-carousel>
                <article class="testimonial-card">
                    <blockquote>Bharat Mill has been our trusted partner for years. Their product quality, technical support and timely delivery make them stand out in the industry.</blockquote>
                    <div class="testimonial-card__meta">
                        <strong>Tata Motors</strong>
                        <span>Procurement Head</span>
                        <small class="rating-stars" aria-label="5 star rating">
                            <?= lucideIcon('star'); ?>
                            <?= lucideIcon('star'); ?>
                            <?= lucideIcon('star'); ?>
                            <?= lucideIcon('star'); ?>
                            <?= lucideIcon('star'); ?>
                        </small>
                    </div>
                </article>
                <article class="testimonial-card">
                    <blockquote>Their technical guidance helped us select the right automation products quickly, with dependable delivery and responsive support throughout the process.</blockquote>
                    <div class="testimonial-card__meta">
                        <strong>Manufacturing Partner</strong>
                        <span>Operations Head</span>
                        <small class="rating-stars" aria-label="5 star rating">
                            <?= lucideIcon('star'); ?>
                            <?= lucideIcon('star'); ?>
                            <?= lucideIcon('star'); ?>
                            <?= lucideIcon('star'); ?>
                            <?= lucideIcon('star'); ?>
                        </small>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="contact-band">
        <div class="container contact-band__grid">
            <div class="contact-band__info">
                <h2>Get in Touch</h2>
                <p>We are here to help you with your automation needs.</p>
                <ul>
                    <li><?= lucideIcon('phone'); ?>+91 22 4008 8000</li>
                    <li><?= lucideIcon('mail'); ?>info@bharatmill.com</li>
                    <li><?= lucideIcon('clock'); ?>Mon - Sat, 9:00 AM - 6:00 PM</li>
                </ul>
            </div>
            <form class="inquiry-form" action="<?= e(appUrl('/contact-us.php')); ?>" method="post">
                <?= csrfField(); ?>
                <div class="form-grid">
                    <label>Your Name<input type="text" name="visitor_name" placeholder="Enter your name"></label>
                    <label>Company Name<input type="text" name="company" placeholder="Enter your company name"></label>
                    <label>Email<input type="email" name="email" placeholder="Enter your email"></label>
                    <label>Phone<input type="tel" name="phone" placeholder="Enter your phone number"></label>
                </div>
                <label>Your Message<textarea name="message" rows="3" placeholder="Tell us about your requirement"></textarea></label>
                <button type="submit">Submit Enquiry <?= lucideIcon('send'); ?></button>
            </form>
        </div>
    </section>
</main>
