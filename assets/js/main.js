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

        window.jQuery('[data-featured-products-carousel]').slick({
            autoplay: false,
            arrows: true,
            dots: false,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            speed: 360,
            responsive: [
                {
                    breakpoint: 980,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 640,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
    }

    var industrySlider = document.querySelector('[data-industry-slider]');

    if (industrySlider && typeof window.Swiper === 'function') {
        var industryTitle = industrySlider.querySelector('[data-industry-title]');
        var industryText = industrySlider.querySelector('[data-industry-text]');
        var industrySlides = Array.prototype.slice.call(industrySlider.querySelectorAll('[data-industry-background] .swiper-slide'));
        var industryTitles = industrySlides.map(function (slide) {
            return slide.getAttribute('data-title') || '';
        });
        var industryTexts = industrySlides.map(function (slide) {
            return slide.getAttribute('data-desc') || '';
        });
        var industryInitialSlide = Math.min(2, Math.max(industrySlides.length - 1, 0));

        var industryCenterSwiper = new window.Swiper(industrySlider.querySelector('[data-industry-center]'), {
            allowTouchMove: false,
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            initialSlide: industryInitialSlide,
            loop: true,
            slidesPerView: 1,
            speed: 760
        });

        var industryBackgroundSwiper = new window.Swiper(industrySlider.querySelector('[data-industry-background]'), {
            autoplay: {
                delay: 3200,
                disableOnInteraction: false,
                pauseOnMouseEnter: true
            },
            centeredSlides: true,
            grabCursor: true,
            initialSlide: industryInitialSlide,
            loop: true,
            slidesPerView: 'auto',
            spaceBetween: 45,
            speed: 860
        });

        industryBackgroundSwiper.on('slideChange', function () {
            var activeIndex = this.realIndex;

            industryCenterSwiper.slideTo(activeIndex, 680);

            if (!industryTitle || !industryText) {
                return;
            }

            industryTitle.classList.add('is-moving-out');
            industryText.classList.add('is-moving-out');

            window.setTimeout(function () {
                industryTitle.textContent = industryTitles[activeIndex] || '';
                industryText.textContent = industryTexts[activeIndex] || '';
                industryTitle.classList.remove('is-moving-out');
                industryText.classList.remove('is-moving-out');
                industryTitle.classList.add('is-moving-in');
                industryText.classList.add('is-moving-in');

                window.setTimeout(function () {
                    industryTitle.classList.remove('is-moving-in');
                    industryText.classList.remove('is-moving-in');
                }, 320);
            }, 280);
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
