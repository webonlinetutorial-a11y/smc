<div class="enquiry-modal" data-enquiry-modal hidden>
    <div class="enquiry-modal__dialog" role="dialog" aria-modal="true" aria-labelledby="enquiry-modal-title">
        <button class="enquiry-modal__close" type="button" data-enquiry-close aria-label="Close enquiry form">&times;</button>
        <h2 id="enquiry-modal-title">Fill the form below</h2>

        <form class="enquiry-modal__form" action="<?= e(appUrl('/inquiry-submit.php')); ?>" method="post" data-enquiry-form>
            <?= csrfField(); ?>
            <input type="hidden" name="inquiry_type" value="product">
            <input type="hidden" name="source_page" value="<?= e(currentPath()); ?>" data-enquiry-source-page>

            <label>
                <span class="sr-only">Product</span>
                <input type="text" name="product_name" value="General Enquiry" readonly data-enquiry-product>
            </label>

            <label>
                <span class="sr-only">Your Name</span>
                <input type="text" name="visitor_name" placeholder="Your Name*" required>
            </label>

            <label>
                <span class="sr-only">Email</span>
                <input type="email" name="email" placeholder="Email*" required>
            </label>

            <div class="enquiry-modal__phone-row">
                <label class="enquiry-modal__code">
                    <span class="sr-only">Country Code</span>
                    <img class="flag-icon" src="<?= e(assetUrl('images/in.svg')); ?>" alt="" aria-hidden="true">
                    <select name="country_code" aria-label="Country code">
                        <option value="+91" selected>+91</option>
                    </select>
                </label>
                <label>
                    <span class="sr-only">Phone Number</span>
                    <input type="tel" name="phone" placeholder="Phone Number*" required>
                </label>
            </div>

            <label>
                <span class="sr-only">Address</span>
                <textarea name="address" rows="2" placeholder="Your Address*" required></textarea>
            </label>

            <label>
                <span class="sr-only">State</span>
                <select name="state" required>
                    <option value="">Select State</option>
                    <?php foreach (indianStateList() as $state): ?>
                        <option value="<?= e($state); ?>"><?= e($state); ?></option>
                    <?php endforeach; ?>
                </select>
            </label>

            <div class="enquiry-modal__two-col">
                <label>
                    <span class="sr-only">City</span>
                    <input type="text" name="city" placeholder="Your City*" required>
                </label>
                <label>
                    <span class="sr-only">Pincode</span>
                    <input type="text" name="pincode" placeholder="Your Pincode*" required>
                </label>
            </div>

            <label>
                <span class="sr-only">Message</span>
                <textarea name="message" rows="2" placeholder="Message" required></textarea>
            </label>

            <p class="enquiry-modal__message" data-enquiry-message hidden></p>
            <button class="enquiry-modal__submit" type="submit">Submit</button>
        </form>
    </div>
</div>
