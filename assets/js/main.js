document.addEventListener('DOMContentLoaded', function () {
    var navToggle = document.querySelector('[data-site-menu-toggle]');
    var siteHeader = document.querySelector('.site-header');
    var backToTop = document.querySelector('[data-back-to-top]');
    var testimonialTrack = document.querySelector('[data-testimonial-carousel]');
    var testimonialSlides = testimonialTrack ? Array.prototype.slice.call(testimonialTrack.children) : [];
    var testimonialIndex = 0;
    var testimonialTimer = null;

    function syncHeaderHeight() {
        if (!siteHeader) {
            return;
        }

        document.documentElement.style.setProperty('--site-header-height', siteHeader.offsetHeight + 'px');
    }

    syncHeaderHeight();
    window.addEventListener('resize', syncHeaderHeight);

    if (navToggle) {
        navToggle.addEventListener('click', function () {
            syncHeaderHeight();
            var isOpen = document.body.classList.toggle('site-nav-open');
            navToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        });
    }

    if (backToTop) {
        window.addEventListener('scroll', function () {
            backToTop.classList.toggle('is-visible', window.scrollY > 480);
        });

        backToTop.addEventListener('click', function () {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    if (window.jQuery && typeof window.jQuery.fn.slick === 'function') {
        window.jQuery('[data-hero-carousel]').slick({
            autoplay: true,
            autoplaySpeed: 5000,
            arrows: true,
            dots: false,
            fade: true,
            infinite: true,
            pauseOnHover: true,
            speed: 450
        });
    }

    function showTestimonialSlide(nextIndex) {
        if (!testimonialTrack || !testimonialSlides.length) {
            return;
        }

        testimonialIndex = (nextIndex + testimonialSlides.length) % testimonialSlides.length;
        testimonialTrack.style.transform = 'translateX(-' + (testimonialIndex * 100) + '%)';
    }

    if (testimonialSlides.length > 1) {
        testimonialTimer = window.setInterval(function () {
            showTestimonialSlide(testimonialIndex + 1);
        }, 3500);

        if (testimonialTrack.parentElement) {
            testimonialTrack.parentElement.addEventListener('mouseenter', function () {
                window.clearInterval(testimonialTimer);
            });

            testimonialTrack.parentElement.addEventListener('mouseleave', function () {
                testimonialTimer = window.setInterval(function () {
                    showTestimonialSlide(testimonialIndex + 1);
                }, 3500);
            });
        }
    }
});
