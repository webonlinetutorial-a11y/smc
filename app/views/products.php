<section class="products-video-hero" aria-label="Products video banner">
    <video autoplay muted loop playsinline preload="metadata">
        <source src="<?= e(assetUrl('videos/Smc-Corporate-Video.mp4')); ?>" type="video/mp4">
    </video>
</section>

<main class="products-page">
    <?php require INCLUDES_PATH . DIRECTORY_SEPARATOR . 'breadcrumb.php'; ?>

    <section class="section">
        <div class="container content-shell product-category-shell">
            <div class="section-heading section-heading--tight">
                <h1>Product Category</h1>
            </div>

            <div class="product-category-list" aria-label="Product categories">
                <?php foreach ([
                    ['Air Cylinders', 'Linear motion for precise and reliable operation', 'air-cylinder.webp', '/automation-air-cylinders.php'],
                    ['Directional Control Valves', 'Control airflow direction for efficient automation', 'Direction-control-valves.webp', '/automation-directional-control-valves.php'],
                    ['Pressure Control Equipment', 'Maintain optimal system pressure', 'pressure-control-equipment.webp', '/automation-pressure-control-equipment.php'],
                    ['Modular FRL Units', 'Air preparation in a compact design', 'modular-frl-unit.webp', '/automation-modular-f.r.l.-units-.php'],
                    ['Switches / Sensors', 'Accurate position and presence detection', 'Switches-sensors.webp', '/automation-switches-sensors-controller-.php'],
                    ['Flow Control Equipment', 'Precise flow regulation', 'flow-control-equipment.webp', '/automation-flow-control-equipment-speed-controllers.php'],
                    ['Vacuum Equipment', 'Reliable vacuum generation and handling', 'Vacuum-Equipment.webp', '/automation-vacuum-equipment-vacuum-ejectors-.php'],
                    ['Process Valves', 'Accurate control for process applications', 'Process-Valves.webp', '/automation-process-valves.php'],
                    ['Air Preparation Equipment', 'Clean, dry and regulated air supply', 'air-preparation-equipment.webp', '/automation-air-preparation-equipment.php'],
                    ['Silencers / Exhaust', 'Noise reduction for quiet operation', 'Silencer-Exhaust.webp', '/automation-silencers-exhaust-cleaners-blow-guns-pressure-gauges.php'],
                    ['Fittings & Tubings', 'Secure connections and flexible routing', 'Fittings-Tubings.webp', '/automation-fittings-tubings.php'],
                ] as $category): ?>
                    <a class="product-category-card" href="<?= e(appUrl($category[3])); ?>">
                        <span class="product-category-card__image">
                            <img src="<?= e(assetUrl('images/' . $category[2])); ?>" alt="<?= e($category[0]); ?>" loading="lazy">
                        </span>
                        <span class="product-category-card__body">
                            <strong><?= e($category[0]); ?></strong>
                            <span><?= e($category[1]); ?></span>
                            <small>Explore <?= lucideIcon('arrow-right'); ?></small>
                        </span>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section new-products-section">
        <div class="container">
            <div class="section-heading section-heading--tight">
                <h2>New Products</h2>
            </div>

            <div class="new-products-list" aria-label="New products">
                <?php foreach ([
                    ['Mounting Kit for Multi-Axis System - LCA Series', 'Compatible actuator for X, Y axis', 'Mounting-Kit-400-removebg-preview.webp', 'mounting-kit-for-multi-axis-system-lca-series'],
                    ['Residual Pressure Release Valve', 'Can be connected to F.R.L. units (LAC O series). Allows for precise early and...', 'Residual-Pressure-VP346-400.webp', 'residual-pressure-release-valve'],
                    ['Pulse Blow Unit PU Series', 'Intermittent pulse blow improves removal efficiency of dust and particles.', 'Pulse-Blow-Unit-PU-Series.webp', 'pulse-blow-unit-pu-series'],
                    ['Membrane Nitrogen Generator', 'Nitrogen enriched air purification is easily possible with only a compressed air supply.', 'Membrane-Nitrogen-Generator.webp', 'membrane-nitrogen-generator'],
                    ['Slider Type/Rod Type/Guide Rod Type EQF Series', 'Easy to set up, built to outperform. Simplified operation.', 'Slider-Type-Guide-Rod.webp', 'slider-type-rod-type-guide-rod-type-eqf-series'],
                    ['Remote Control Valve (Electric Speed Controller)', 'Speed controlled regulation of turntable control for "scientific control".', 'Remote-Control-Valve.webp', 'remote-control-valve-electric-speed-controller'],
                ] as $product): ?>
                    <article class="new-product-card">
                        <div class="new-product-card__media">
                            <img src="<?= e(assetUrl('images/' . $product[2])); ?>" alt="<?= e($product[0]); ?>" loading="lazy">
                        </div>
                        <div class="new-product-card__body">
                            <h3><?= e($product[0]); ?></h3>
                            <p><?= e($product[1]); ?></p>
                            <div class="new-product-card__actions">
                                <a class="button button--secondary" href="<?= e(appUrl('/products.php?product=' . $product[3])); ?>">View Details</a>
                                <a class="button button--secondary" href="<?= e(appUrl('/contact-us.php?product=' . $product[3])); ?>" data-enquiry-trigger data-enquiry-product="<?= e($product[0]); ?>">Send Enquiry</a>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section featured-products-section">
        <div class="container">
            <div class="section-heading section-heading--tight">
                <h2>Featured Products</h2>
            </div>

            <div class="featured-products-carousel" data-featured-products-carousel aria-label="Featured products">
                <?php foreach ([
                    ['ISE20/ZSE20 Series', '', 'ISE20-ZSE20-Series.webp', 'ise20-zse20-series'],
                    ['ITV Series', '', 'ITV-series.webp', 'itv-series'],
                    ['Refrigerated Air Dryer IDFA60/70/80/90 Series', 'The IDFA*E Series refrigerated air dryers are ideal for aftercooled compressed air systems using compressors up to ~20 hp, depending on the required dew point.', 'refrigerator-air-dryer-idfa.webp', 'refrigerated-air-dryer-idfa60-70-80-90-series'],
                    ['S Couplers KK/KKH Series', 'Simplify your setup with S couplers and multi-connectors - quick-connect solutions that allow fast changes and modular configurations in pneumatic systems.', 'S-Coupler-KK-KKH.webp', 's-couplers-kk-kkh-series'],
                    ['Air Cylinder, MB1-Z Series', 'Reduced weight by changing the shape of the rod cover and head cover.', 'Air Cylinder MB1-MDB1.webp', 'air-cylinder-mb1-z-series'],
                ] as $product): ?>
                    <article class="featured-product-card featured-product-card--<?= e($product[3]); ?>">
                        <div class="featured-product-card__media">
                            <img src="<?= e(assetUrl('images/' . $product[2])); ?>" alt="<?= e($product[0]); ?>" loading="lazy">
                        </div>
                        <div class="featured-product-card__body">
                            <h3><?= e($product[0]); ?></h3>
                            <?php if ($product[1] !== ''): ?>
                                <p><?= e($product[1]); ?></p>
                            <?php endif; ?>
                            <div class="featured-product-card__actions">
                                <a class="button button--primary" href="<?= e(appUrl('/products.php?product=' . $product[3])); ?>">View Detail</a>
                                <a class="button button--secondary" href="<?= e(appUrl('/contact-us.php?product=' . $product[3])); ?>" data-enquiry-trigger data-enquiry-product="<?= e($product[0]); ?>">Send Query</a>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php if (($cmsProducts ?? []) !== []): ?>
        <section class="section">
            <div class="container content-shell">
                <div class="section-heading section-heading--tight">
                    <h2>CMS Products</h2>
                </div>
                <div class="cms-listing-grid">
                    <?php foreach ($cmsProducts as $product): ?>
                        <article class="cms-listing-card">
                            <h3><?= e($product['name']); ?></h3>
                            <?php if (($product['short_description'] ?? '') !== ''): ?>
                                <p><?= e(mb_strimwidth((string) $product['short_description'], 0, 180, '...')); ?></p>
                            <?php endif; ?>
                            <a class="button button--secondary" href="<?= e(appUrl('/contact-us.php?product=' . $product['slug'])); ?>" data-enquiry-trigger data-enquiry-product="<?= e($product['name']); ?>">Send Query</a>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <section class="section industry-section">
        <div class="container">
            <div class="section-heading section-heading--tight">
                <h2>Industry We Serve</h2>
            </div>

            <?php $industries = [
                ['Automotive Industry', 'Automation for automotive assembly and movement', 'Automotive-industry.webp'],
                ['Chocolate SMC', 'The experts in Chocolate Industry', 'Choclate Industry.webp'],
                ['Brewery', 'Brewery Industry for solutions', 'bREWERY.webp'],
                ['Life Science', 'Pioneering Solutions in the Life Science Industry', 'Life-Science (1).webp'],
                ['Battery Manufacturing', 'Discover our solutions for the battery manufacturing Industry', 'BATTERY-1.webp'],
                ['Pharma Industry', 'Precision automation for pharmaceutical production', 'Pharma Industry.webp'],
                ['Dairy', 'Reliable pneumatic solutions for dairy processing', 'Dairy.webp'],
                ['Food Industry', 'Clean and efficient automation for food production', 'food.webp'],
                ['Snack Industry', 'Flexible automation for snack packaging lines', 'Snack Industry.webp'],
                ['Chemical Industry', 'Durable control solutions for chemical applications', 'chemical-11.webp'],
                ['Tyre Industry', 'Industrial automation for tyre production systems', 'tyre.webp'],
                ['Machine Tool', 'Productivity-focused solutions for machine tools', 'Machine-Tool.webp'],
            ]; ?>

            <div class="industry-slider" data-industry-slider>
                <div class="swiper industry-slider__background" data-industry-background>
                    <div class="swiper-wrapper">
                        <?php foreach ($industries as $industry): ?>
                            <article class="swiper-slide industry-slide" data-title="<?= e($industry[0]); ?>" data-desc="<?= e($industry[1]); ?>">
                                <img src="<?= e(assetUrl('images/' . $industry[2])); ?>" alt="<?= e($industry[0]); ?>" loading="lazy">
                                <div class="industry-slide__content">
                                    <h3><?= e($industry[0]); ?></h3>
                                    <p><?= e($industry[1]); ?></p>
                                </div>
                            </article>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="swiper industry-slider__center" data-industry-center aria-hidden="true">
                    <div class="swiper-wrapper">
                        <?php foreach ($industries as $industry): ?>
                            <div class="swiper-slide industry-center-slide">
                                <img src="<?= e(assetUrl('images/' . $industry[2])); ?>" alt="" loading="lazy">
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <h3 class="industry-slider__title" data-industry-title><?= e($industries[2][0]); ?></h3>
                <p class="industry-slider__text" data-industry-text><?= e($industries[2][1]); ?></p>
            </div>
        </div>
    </section>
</main>
