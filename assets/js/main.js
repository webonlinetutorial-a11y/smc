document.addEventListener('DOMContentLoaded', function () {
    var navToggle = document.querySelector('[data-site-menu-toggle]');
    var siteHeader = document.querySelector('.site-header');
    var productsNavItem = document.querySelector('.site-nav__item--products');
    var productsMenuToggle = document.querySelector('[data-products-menu-toggle]');
    var productsLineTrigger = document.querySelector('[data-products-line-trigger]');
    var productsBackButton = document.querySelector('[data-products-menu-back]');
    var productsMenuTitle = document.querySelector('[data-products-menu-title]');
    var productsPanel = document.querySelector('.mega-menu__products');
    var desktopMegaMenu = document.querySelector('.mega-menu');
    var productsCategoryTriggers = Array.prototype.slice.call(document.querySelectorAll('[data-products-category-trigger]'));
    var backToTop = document.querySelector('[data-back-to-top]');
    var testimonialTrack = document.querySelector('[data-testimonial-carousel]');
    var testimonialSlides = testimonialTrack ? Array.prototype.slice.call(testimonialTrack.children) : [];
    var testimonialIndex = 0;
    var testimonialTimer = null;
    var mobileMenuQuery = window.matchMedia('(max-width: 900px)');

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

    function closeProductsMenu() {
        if (!productsNavItem || !productsMenuToggle) {
            return;
        }

        productsNavItem.classList.remove('is-open');
        productsNavItem.classList.remove('is-mobile-level-line');
        productsNavItem.classList.remove('is-mobile-level-categories');
        productsNavItem.classList.remove('is-mobile-level-products');
        document.body.classList.remove('products-menu-open');
        productsMenuToggle.setAttribute('aria-expanded', 'false');

        if (productsPanel) {
            productsPanel.innerHTML = '';
        }
    }

    function setProductsMenuLevel(level, title) {
        if (!productsNavItem || !productsMenuTitle) {
            return;
        }

        productsNavItem.classList.remove('is-mobile-level-line');
        productsNavItem.classList.remove('is-mobile-level-categories');
        productsNavItem.classList.remove('is-mobile-level-products');
        productsNavItem.classList.add('is-mobile-level-' + level);
        productsMenuTitle.textContent = title;
    }

    if (productsNavItem && productsMenuToggle) {
        productsMenuToggle.addEventListener('click', function (event) {
            event.preventDefault();
            syncHeaderHeight();

            if (!mobileMenuQuery.matches) {
                closeProductsMenu();
                return;
            }

            var isOpen = productsNavItem.classList.toggle('is-open');
            productsMenuToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');

            if (isOpen) {
                document.body.classList.add('products-menu-open');
                setProductsMenuLevel('line', 'Product Line');
            } else {
                closeProductsMenu();
            }
        });

        if (productsLineTrigger) {
            productsLineTrigger.addEventListener('click', function (event) {
                if (!mobileMenuQuery.matches) {
                    return;
                }

                event.preventDefault();
                setProductsMenuLevel('categories', 'Automation');
            });
        }

        productsCategoryTriggers.forEach(function (categoryTrigger) {
            categoryTrigger.addEventListener('click', function (event) {
                var submenu = categoryTrigger.parentElement ? categoryTrigger.parentElement.querySelector('.mega-menu__submenu') : null;

                if (!mobileMenuQuery.matches || !submenu || !productsPanel) {
                    return;
                }

                event.preventDefault();
                productsPanel.innerHTML = submenu.innerHTML;
                setProductsMenuLevel('products', categoryTrigger.getAttribute('data-category-label') || categoryTrigger.textContent.trim());
            });
        });

        if (productsBackButton) {
            productsBackButton.addEventListener('click', function () {
                if (!mobileMenuQuery.matches) {
                    return;
                }

                if (productsNavItem.classList.contains('is-mobile-level-products')) {
                    if (productsPanel) {
                        productsPanel.innerHTML = '';
                    }

                    setProductsMenuLevel('categories', 'Automation');
                    return;
                }

                if (productsNavItem.classList.contains('is-mobile-level-categories')) {
                    setProductsMenuLevel('line', 'Product Line');
                    return;
                }

                closeProductsMenu();
            });
        }

        document.addEventListener('click', function (event) {
            if (productsNavItem.contains(event.target)) {
                return;
            }

            closeProductsMenu();
        });

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape') {
                closeProductsMenu();
            }
        });

        if (typeof mobileMenuQuery.addEventListener === 'function') {
            mobileMenuQuery.addEventListener('change', closeProductsMenu);
        } else if (typeof mobileMenuQuery.addListener === 'function') {
            mobileMenuQuery.addListener(closeProductsMenu);
        }
    }

    function clearDesktopMegaSubmenus() {
        Array.prototype.slice.call(document.querySelectorAll('.mega-menu__category.is-submenu-active')).forEach(function (category) {
            category.classList.remove('is-submenu-active');
        });
    }

    Array.prototype.slice.call(document.querySelectorAll('[data-mega-category-trigger]')).forEach(function (trigger) {
        var category = trigger.closest('.mega-menu__category');

        if (!category) {
            return;
        }

        trigger.addEventListener('mouseenter', function () {
            if (mobileMenuQuery.matches) {
                return;
            }

            clearDesktopMegaSubmenus();
            category.classList.add('is-submenu-active');
        });

        trigger.addEventListener('focus', function () {
            if (mobileMenuQuery.matches) {
                return;
            }

            clearDesktopMegaSubmenus();
            category.classList.add('is-submenu-active');
        });
    });

    if (desktopMegaMenu) {
        desktopMegaMenu.addEventListener('mouseleave', clearDesktopMegaSubmenus);
    }

    Array.prototype.slice.call(document.querySelectorAll('[data-category-accordion]')).forEach(function (accordion) {
        var accordionItems = Array.prototype.slice.call(accordion.querySelectorAll('.automation-category-accordion__item'));

        accordionItems.forEach(function (item) {
            var trigger = item.querySelector('.automation-category-accordion__trigger');

            if (!trigger) {
                return;
            }

            trigger.addEventListener('click', function () {
                var isOpen = item.classList.contains('is-open');

                accordionItems.forEach(function (otherItem) {
                    var otherTrigger = otherItem.querySelector('.automation-category-accordion__trigger');

                    otherItem.classList.remove('is-open');

                    if (otherTrigger) {
                        otherTrigger.setAttribute('aria-expanded', 'false');
                    }
                });

                if (!isOpen) {
                    item.classList.add('is-open');
                    trigger.setAttribute('aria-expanded', 'true');
                }
            });
        });
    });

    Array.prototype.slice.call(document.querySelectorAll('[data-product-detail-shell]')).forEach(function (shell) {
        var dataNode = shell.querySelector('[data-product-detail-data]');
        var panel = shell.querySelector('[data-product-detail-panel]');
        var triggers = Array.prototype.slice.call(shell.querySelectorAll('[data-product-detail-trigger]'));
        var details = {};
        var activeTrigger = null;

        if (!dataNode || !panel || !triggers.length) {
            return;
        }

        try {
            details = JSON.parse(dataNode.textContent || '{}');
        } catch (error) {
            details = {};
        }

        function escapeHtml(value) {
            return String(value || '')
                .replace(/&/g, '&amp;')
                .replace(/</g, '&lt;')
                .replace(/>/g, '&gt;')
                .replace(/"/g, '&quot;')
                .replace(/'/g, '&#039;');
        }

        function iconMarkup(icon) {
            var icons = {
                'circle-help': '<circle cx="12" cy="12" r="10"></circle><path d="M9.1 9a3 3 0 1 1 5.8 1c-.4.8-1.2 1.2-1.9 1.7-.7.5-1 1-1 1.8"></path><path d="M12 17h.01"></path>',
                'circle-play': '<circle cx="12" cy="12" r="10"></circle><polygon points="10 8 16 12 10 16 10 8"></polygon>',
                'file-text': '<path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="M10 9H8"></path><path d="M16 13H8"></path><path d="M16 17H8"></path>',
                'list': '<path d="M8 6h13"></path><path d="M8 12h13"></path><path d="M8 18h13"></path><path d="M3 6h.01"></path><path d="M3 12h.01"></path><path d="M3 18h.01"></path>'
            };

            if (!icons[icon]) {
                return '';
            }

            return '<svg class="lucide-icon" aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">' + icons[icon] + '</svg>';
        }

        function renderProductActions(actions) {
            if (!Array.isArray(actions) || !actions.length) {
                return '';
            }

            return actions.map(function (action) {
                var label = action.label || '';
                var className = 'automation-selected-product-card__action' +
                    (action.primary ? ' is-primary' : '') +
                    (action.wide ? ' is-wide' : '') +
                    (label && action.wide ? ' has-label' : '');
                var labelMarkup = label && action.wide ? '<span>' + escapeHtml(label) + '</span>' : '';

                return '<button type="button" class="' + className + '" title="' + escapeHtml(label) + '" aria-label="' + escapeHtml(label) + '">' +
                    labelMarkup +
                    iconMarkup(action.icon) +
                '</button>';
            }).join('');
        }

        function renderProductCard(product) {
            return (
                '<article class="automation-selected-product-card">' +
                    '<span class="automation-selected-product-card__media">' +
                        '<img src="' + escapeHtml(product.image) + '" alt="' + escapeHtml(product.title) + '">' +
                    '</span>' +
                    '<span class="automation-selected-product-card__body">' +
                        '<strong>' + escapeHtml(product.title) + '</strong>' +
                        '<span>' + escapeHtml(product.description) + '</span>' +
                        '<span class="automation-selected-product-card__actions">' +
                            renderProductActions(product.actions) +
                        '</span>' +
                    '</span>' +
                '</article>'
            );
        }

        function positionProductDetail(trigger) {
            var grid = trigger.closest('.automation-category-grid');
            var rowEnd = trigger;
            var triggerTop;

            if (!grid) {
                return;
            }

            if (panel.parentElement !== shell) {
                shell.insertBefore(panel, dataNode);
            }

            triggerTop = trigger.offsetTop;

            triggers.forEach(function (item) {
                if (item.closest('.automation-category-grid') !== grid) {
                    return;
                }

                if (Math.abs(item.offsetTop - triggerTop) < 4) {
                    rowEnd = item;
                }
            });

            panel.style.setProperty('--selected-product-offset', trigger.offsetLeft + 'px');
            rowEnd.insertAdjacentElement('afterend', panel);
        }

        function renderProductDetail(product, trigger) {
            var products = Array.isArray(product.items) && product.items.length ? product.items : [product];

            positionProductDetail(trigger);
            panel.hidden = false;
            panel.innerHTML = products.map(renderProductCard).join('');
        }

        triggers.forEach(function (trigger) {
            trigger.addEventListener('click', function (event) {
                var productId = trigger.getAttribute('data-product-id');
                var product = details[productId];

                if (!product) {
                    return;
                }

                event.preventDefault();

                triggers.forEach(function (item) {
                    item.classList.remove('is-selected');
                    item.setAttribute('aria-expanded', 'false');
                });

                trigger.classList.add('is-selected');
                trigger.setAttribute('aria-expanded', 'true');
                activeTrigger = trigger;
                renderProductDetail(product, trigger);
            });
        });

        window.addEventListener('resize', function () {
            if (activeTrigger && !panel.hidden) {
                positionProductDetail(activeTrigger);
            }
        });
    });

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
