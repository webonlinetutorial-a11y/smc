document.addEventListener('DOMContentLoaded', function () {
    var navToggle = document.querySelector('[data-site-menu-toggle]');
    var siteHeader = document.querySelector('.site-header');
    var siteHeaderInner = document.querySelector('.site-header__inner');
    var topStrip = document.querySelector('.top-strip');
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
    var enquiryModal = document.querySelector('[data-enquiry-modal]');
    var enquiryForm = enquiryModal ? enquiryModal.querySelector('[data-enquiry-form]') : null;
    var enquiryProductInput = enquiryModal ? enquiryModal.querySelector('[data-enquiry-product]') : null;
    var enquiryMessage = enquiryModal ? enquiryModal.querySelector('[data-enquiry-message]') : null;
    var enquiryCloseButtons = enquiryModal ? Array.prototype.slice.call(enquiryModal.querySelectorAll('[data-enquiry-close]')) : [];

    function escapeHtml(value) {
        return String(value || '')
            .replace(/&/g, '&amp;')
            .replace(/</g, '&lt;')
            .replace(/>/g, '&gt;')
            .replace(/"/g, '&quot;')
            .replace(/'/g, '&#039;');
    }

    function setEnquiryMessage(message, isError) {
        if (!enquiryMessage) {
            return;
        }

        enquiryMessage.textContent = message;
        enquiryMessage.hidden = message === '';
        enquiryMessage.classList.toggle('is-error', Boolean(isError));
        enquiryMessage.classList.toggle('is-success', !isError && message !== '');
    }

    function openEnquiryModal(productName) {
        if (!enquiryModal || !enquiryForm || !enquiryProductInput) {
            return;
        }

        enquiryProductInput.value = productName || 'General Enquiry';
        setEnquiryMessage('', false);
        enquiryModal.hidden = false;
        document.body.classList.add('is-enquiry-modal-open');

        // Force layout so the browser registers the pre-open state before the
        // "is-open" class flips in, letting the CSS transition actually run.
        void enquiryModal.offsetWidth;

        window.requestAnimationFrame(function () {
            enquiryModal.classList.add('is-open');
        });

        var firstInput = enquiryForm.querySelector('input:not([type="hidden"]):not([readonly]), textarea, select');

        if (firstInput) {
            firstInput.focus();
        }
    }

    function closeEnquiryModal() {
        if (!enquiryModal) {
            return;
        }

        enquiryModal.classList.remove('is-open');
        document.body.classList.remove('is-enquiry-modal-open');

        window.setTimeout(function () {
            enquiryModal.hidden = true;
        }, 280);
    }

    var videoModal = document.createElement('div');
    videoModal.className = 'automation-product-video-modal';
    videoModal.hidden = true;
    videoModal.innerHTML =
        '<div class="automation-product-video-modal__dialog" role="dialog" aria-modal="true" aria-label="Product video">' +
            '<button type="button" class="automation-product-video-modal__close" aria-label="Close product video">&times;</button>' +
            '<div class="automation-product-video-modal__frame"></div>' +
        '</div>';
    document.body.appendChild(videoModal);

    var videoModalFrame = videoModal.querySelector('.automation-product-video-modal__frame');
    var videoModalClose = videoModal.querySelector('.automation-product-video-modal__close');

    function youtubeEmbedUrl(videoUrl) {
        var parsedUrl;
        var videoId = '';
        var startTime = 0;

        try {
            parsedUrl = new URL(videoUrl, window.location.href);
        } catch (error) {
            return '';
        }

        if (parsedUrl.hostname.indexOf('youtu.be') !== -1) {
            videoId = parsedUrl.pathname.replace('/', '');
        } else {
            videoId = parsedUrl.searchParams.get('v') || '';
        }

        startTime = parseInt(parsedUrl.searchParams.get('t') || parsedUrl.searchParams.get('start') || '0', 10);

        if (!videoId) {
            return '';
        }

        return 'https://www.youtube.com/embed/' + encodeURIComponent(videoId) + '?autoplay=1&rel=0&start=' + (Number.isNaN(startTime) ? 0 : startTime);
    }

    function openVideoModal(videoUrl) {
        var embedUrl = youtubeEmbedUrl(videoUrl);

        if (!embedUrl || !videoModalFrame) {
            return;
        }

        videoModalFrame.innerHTML = '<iframe src="' + escapeHtml(embedUrl) + '" title="Product video" allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen></iframe>';
        videoModal.hidden = false;
        document.body.classList.add('is-video-modal-open');

        if (videoModalClose) {
            videoModalClose.focus();
        }
    }

    function closeVideoModal() {
        videoModal.hidden = true;
        document.body.classList.remove('is-video-modal-open');

        if (videoModalFrame) {
            videoModalFrame.innerHTML = '';
        }
    }

    if (videoModalClose) {
        videoModalClose.addEventListener('click', closeVideoModal);
    }

    videoModal.addEventListener('click', function (event) {
        if (event.target === videoModal) {
            closeVideoModal();
        }
    });

    document.addEventListener('click', function (event) {
        var videoTrigger = event.target.closest('[data-product-video-url]');

        if (!videoTrigger) {
            return;
        }

        event.preventDefault();
        openVideoModal(videoTrigger.getAttribute('data-product-video-url'));
    });

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape' && !videoModal.hidden) {
            closeVideoModal();
        }
    });

    if (enquiryModal && enquiryForm) {
        enquiryCloseButtons.forEach(function (button) {
            button.addEventListener('click', closeEnquiryModal);
        });

        enquiryModal.addEventListener('click', function (event) {
            if (event.target === enquiryModal) {
                closeEnquiryModal();
            }
        });

        document.addEventListener('click', function (event) {
            var trigger = event.target.closest('[data-enquiry-trigger]');

            if (!trigger) {
                return;
            }

            event.preventDefault();
            openEnquiryModal(trigger.getAttribute('data-enquiry-product') || 'General Enquiry');
        });

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape' && !enquiryModal.hidden) {
                closeEnquiryModal();
            }
        });

        enquiryForm.addEventListener('submit', function (event) {
            var submitButton = enquiryForm.querySelector('[type="submit"]');

            event.preventDefault();
            setEnquiryMessage('', false);

            if (submitButton) {
                submitButton.disabled = true;
                submitButton.textContent = 'Submitting...';
            }

            fetch(enquiryForm.action, {
                method: 'POST',
                body: new FormData(enquiryForm),
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
                .then(function (response) {
                    return response.json().then(function (payload) {
                        return {ok: response.ok, payload: payload};
                    });
                })
                .then(function (result) {
                    setEnquiryMessage(result.payload.message || 'Thank you. Your enquiry has been submitted.', !result.ok || !result.payload.success);

                    if (result.ok && result.payload.success) {
                        enquiryForm.reset();

                        if (enquiryProductInput) {
                            enquiryProductInput.value = 'General Enquiry';
                        }
                    }
                })
                .catch(function () {
                    setEnquiryMessage('Enquiry could not be submitted. Please try again.', true);
                })
                .finally(function () {
                    if (submitButton) {
                        submitButton.disabled = false;
                        submitButton.textContent = 'Submit';
                    }
                });
        });
    }

    function syncHeaderHeight() {
        if (!siteHeader) {
            return;
        }

        var topStripHeight = topStrip ? topStrip.offsetHeight : 0;
        var headerInnerHeight = siteHeaderInner ? siteHeaderInner.offsetHeight : 0;
        var headerHeight = topStripHeight + headerInnerHeight || siteHeader.offsetHeight;

        document.documentElement.style.setProperty('--site-header-height', headerHeight + 'px');

        if (siteHeaderInner) {
            document.documentElement.style.setProperty('--site-header-inner-height', headerInnerHeight + 'px');
        }

        if (topStrip) {
            document.documentElement.style.setProperty('--top-strip-height', topStripHeight + 'px');
        }
    }

    syncHeaderHeight();
    window.addEventListener('resize', syncHeaderHeight);

    function showSiteHeader() {
        if (!siteHeaderInner) {
            return;
        }

        siteHeaderInner.classList.remove('is-hidden');
    }

    if (siteHeader && siteHeaderInner) {
        var lastHeaderScrollY = Math.max(window.pageYOffset || document.documentElement.scrollTop || 0, 0);
        var headerDirectionStartY = lastHeaderScrollY;
        var headerLastDirection = 0;
        var headerScrollTicking = false;
        var headerTransitionLocked = false;
        var headerTransitionTimer = null;
        var headerScrollNoise = 4;
        var headerScrollThreshold = 44;
        var headerTopOffset = 24;
        var headerTransitionDuration = 580;

        function setSiteHeaderHidden(isHidden, currentScrollY) {
            if (siteHeaderInner.classList.contains('is-hidden') === isHidden) {
                return;
            }

            siteHeaderInner.classList.toggle('is-hidden', isHidden);
            headerTransitionLocked = true;
            window.clearTimeout(headerTransitionTimer);
            headerTransitionTimer = window.setTimeout(function () {
                var latestScrollY = Math.max(window.pageYOffset || document.documentElement.scrollTop || 0, 0);

                headerTransitionLocked = false;
                lastHeaderScrollY = latestScrollY;
                headerDirectionStartY = latestScrollY;
                headerLastDirection = 0;
                syncHeaderHeight();
            }, headerTransitionDuration);

            lastHeaderScrollY = currentScrollY;
            headerDirectionStartY = currentScrollY;
            headerLastDirection = 0;
        }

        function shouldKeepSiteHeaderVisible(currentScrollY) {
            return currentScrollY <= headerTopOffset ||
                document.body.classList.contains('site-nav-open') ||
                document.body.classList.contains('products-menu-open') ||
                siteHeaderInner.contains(document.activeElement);
        }

        function updateSiteHeaderVisibility() {
            var currentScrollY = Math.max(window.pageYOffset || document.documentElement.scrollTop || 0, 0);
            var scrollDelta = currentScrollY - lastHeaderScrollY;

            if (shouldKeepSiteHeaderVisible(currentScrollY)) {
                showSiteHeader();
                lastHeaderScrollY = currentScrollY;
                headerDirectionStartY = currentScrollY;
                headerLastDirection = 0;
                return;
            }

            if (headerTransitionLocked || Math.abs(scrollDelta) < headerScrollNoise) {
                lastHeaderScrollY = currentScrollY;
                return;
            }

            var scrollDirection = scrollDelta > 0 ? 1 : -1;

            if (scrollDirection !== headerLastDirection) {
                headerDirectionStartY = lastHeaderScrollY;
                headerLastDirection = scrollDirection;
            }

            if (Math.abs(currentScrollY - headerDirectionStartY) < headerScrollThreshold) {
                lastHeaderScrollY = currentScrollY;
                return;
            }

            setSiteHeaderHidden(scrollDirection > 0, currentScrollY);
            lastHeaderScrollY = currentScrollY;
        }

        window.addEventListener('scroll', function () {
            if (headerScrollTicking) {
                return;
            }

            headerScrollTicking = true;
            window.requestAnimationFrame(function () {
                updateSiteHeaderVisibility();
                headerScrollTicking = false;
            });
        }, {passive: true});

        siteHeaderInner.addEventListener('focusin', showSiteHeader);
    }

    if (navToggle) {
        navToggle.addEventListener('click', function () {
            showSiteHeader();
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
            showSiteHeader();
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

    Array.prototype.slice.call(document.querySelectorAll('[data-product-gallery]')).forEach(function (gallery) {
        var mainImage = gallery.querySelector('[data-product-gallery-main]');
        var thumbs = Array.prototype.slice.call(gallery.querySelectorAll('[data-product-gallery-thumb]'));

        if (!mainImage || !thumbs.length) {
            return;
        }

        thumbs.forEach(function (thumb) {
            thumb.addEventListener('click', function () {
                var imageSrc = thumb.getAttribute('data-product-gallery-src');

                if (!imageSrc) {
                    return;
                }

                mainImage.setAttribute('src', imageSrc);
                thumbs.forEach(function (item) {
                    item.classList.remove('is-active');
                });
                thumb.classList.add('is-active');
            });
        });
    });

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

        function renderProductActions(actions, productTitle) {
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
                var isEnquiryAction = action.enquiry || label.toLowerCase().indexOf('enquiry') !== -1;
                var videoAttribute = action.videoUrl ? ' data-product-video-url="' + escapeHtml(action.videoUrl) + '"' : '';
                var urlAttribute = action.url ? ' data-product-action-url="' + escapeHtml(action.url) + '"' : '';
                var targetAttribute = action.sameTab ? ' data-product-action-target="self"' : '';
                var enquiryAttribute = isEnquiryAction ? ' data-product-enquiry data-enquiry-product="' + escapeHtml(action.productName || productTitle || '') + '"' : '';

                return '<button type="button" class="' + className + '" title="' + escapeHtml(label) + '" aria-label="' + escapeHtml(label) + '"' + videoAttribute + urlAttribute + targetAttribute + enquiryAttribute + '>' +
                    labelMarkup +
                    iconMarkup(action.icon) +
                '</button>';
            }).join('');
        }

        function renderProductDescription(product) {
            if (Array.isArray(product.descriptionItems) && product.descriptionItems.length) {
                return '<ul class="automation-selected-product-card__features">' +
                    product.descriptionItems.map(function (item) {
                        return '<li>' + escapeHtml(item) + '</li>';
                    }).join('') +
                '</ul>';
            }

            return '<span>' + escapeHtml(product.description) + '</span>';
        }

        function renderProductCard(product) {
            var detailUrl = product.url || '';
            var linkAttributes = detailUrl
                ? ' data-product-detail-url="' + escapeHtml(detailUrl) + '" role="link" tabindex="0"'
                : '';
            var linkClass = detailUrl ? ' automation-selected-product-card--link' : '';
            var ribbonMarkup = product.isNew
                ? '<span class="automation-category-card__ribbon">New</span>'
                : '';
            var seriesMarkup = product.series
                ? '<em>' + escapeHtml(product.series) + '</em>'
                : '';

            return (
                '<article class="automation-selected-product-card' + linkClass + '"' + linkAttributes + '>' +
                    ribbonMarkup +
                    '<span class="automation-selected-product-card__media">' +
                        '<img src="' + escapeHtml(product.image) + '" alt="' + escapeHtml(product.title) + '">' +
                    '</span>' +
                    '<span class="automation-selected-product-card__body">' +
                        '<strong>' + escapeHtml(product.title) + '</strong>' +
                        seriesMarkup +
                        renderProductDescription(product) +
                        '<span class="automation-selected-product-card__actions">' +
                            renderProductActions(product.actions, product.title) +
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

                if (activeTrigger === trigger && !panel.hidden) {
                    trigger.classList.remove('is-selected');
                    trigger.setAttribute('aria-expanded', 'false');
                    panel.hidden = true;
                    panel.innerHTML = '';
                    activeTrigger = null;
                    return;
                }

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

        function eventTargetElement(event) {
            if (!event.target) {
                return null;
            }

            return event.target.nodeType === 1 ? event.target : event.target.parentElement;
        }

        panel.addEventListener('click', function (event) {
            var target = eventTargetElement(event);
            var action = target ? target.closest('.automation-selected-product-card__action') : null;
            var detailCard = target ? target.closest('[data-product-detail-url]') : null;
            var videoButton = target ? target.closest('[data-product-video-url]') : null;
            var actionUrlButton = target ? target.closest('[data-product-action-url]') : null;
            var enquiryButton = target ? target.closest('[data-product-enquiry]') : null;

            if (videoButton) {
                event.preventDefault();
                event.stopPropagation();
                openVideoModal(videoButton.getAttribute('data-product-video-url'));
                return;
            }

            if (enquiryButton) {
                event.preventDefault();
                openEnquiryModal(enquiryButton.getAttribute('data-enquiry-product') || 'General Enquiry');
                return;
            }

            if (actionUrlButton) {
                event.preventDefault();

                if (actionUrlButton.getAttribute('data-product-action-target') === 'self') {
                    window.location.href = actionUrlButton.getAttribute('data-product-action-url');
                    return;
                }

                window.open(actionUrlButton.getAttribute('data-product-action-url'), '_blank', 'noopener');
                return;
            }

            if (action || !detailCard) {
                return;
            }

            window.location.href = detailCard.getAttribute('data-product-detail-url');
        });

        panel.addEventListener('keydown', function (event) {
            var target = eventTargetElement(event);
            var detailCard = target ? target.closest('[data-product-detail-url]') : null;

            if (!detailCard || (event.key !== 'Enter' && event.key !== ' ')) {
                return;
            }

            event.preventDefault();
            window.location.href = detailCard.getAttribute('data-product-detail-url');
        });

        window.addEventListener('resize', function () {
            if (activeTrigger && !panel.hidden) {
                positionProductDetail(activeTrigger);
            }
        });
    });

    Array.prototype.slice.call(document.querySelectorAll('[data-part-number-section]')).forEach(function (section) {
        var filter = section.querySelector('[data-part-number-filter]');
        var search = section.querySelector('[data-part-number-search]');
        var rows = Array.prototype.slice.call(section.querySelectorAll('[data-part-number-row]'));
        var empty = section.querySelector('[data-part-number-empty]');

        if (!filter || !search || !rows.length) {
            return;
        }

        function rowMatches(row, field, query) {
            var searchable;

            if (query === '') {
                return true;
            }

            searchable = row.getAttribute('data-field-' + field) || row.getAttribute('data-field-all') || '';

            return searchable.toLowerCase().indexOf(query) !== -1;
        }

        function updatePartNumberRows() {
            var field = filter.value || 'all';
            var query = (search.value || '').trim().toLowerCase();
            var visibleCount = 0;

            rows.forEach(function (row) {
                var isVisible = rowMatches(row, field, query);

                row.hidden = !isVisible;

                if (isVisible) {
                    visibleCount += 1;
                }
            });

            if (empty) {
                empty.hidden = visibleCount !== 0;
            }
        }

        filter.addEventListener('change', updatePartNumberRows);
        search.addEventListener('input', updatePartNumberRows);
    });

    var siteSearch = document.querySelector('[data-site-search]');
    var siteSearchToggle = siteSearch ? siteSearch.querySelector('[data-site-search-toggle]') : null;
    var siteSearchPanel = siteSearch ? siteSearch.querySelector('[data-site-search-panel]') : null;
    var siteSearchInput = siteSearch ? siteSearch.querySelector('[data-site-search-input]') : null;
    var siteSearchResults = siteSearch ? siteSearch.querySelector('[data-site-search-results]') : null;

    if (siteSearch && siteSearchToggle && siteSearchPanel && siteSearchInput && siteSearchResults) {
        var searchDebounceTimer = null;
        var searchAbortController = null;
        var searchRequestSeq = 0;

        function openSiteSearch() {
            siteSearchPanel.hidden = false;
            siteSearchToggle.setAttribute('aria-expanded', 'true');
            siteSearch.classList.add('is-open');
            window.setTimeout(function () {
                siteSearchInput.focus();
            }, 0);
        }

        function closeSiteSearch() {
            siteSearchPanel.hidden = true;
            siteSearchToggle.setAttribute('aria-expanded', 'false');
            siteSearchInput.setAttribute('aria-expanded', 'false');
            siteSearch.classList.remove('is-open');
            siteSearchResults.hidden = true;
            siteSearchResults.innerHTML = '';
        }

        function renderSiteSearchResults(payload) {
            var results = (payload && payload.results) || [];

            siteSearchResults.innerHTML = '';

            if (!payload || payload.query === '') {
                siteSearchResults.hidden = true;
                siteSearchInput.setAttribute('aria-expanded', 'false');
                return;
            }

            if (!results.length) {
                var empty = document.createElement('p');
                empty.className = 'site-search__empty';
                empty.textContent = 'No products found for "' + payload.query + '".';
                siteSearchResults.appendChild(empty);
                siteSearchResults.hidden = false;
                siteSearchInput.setAttribute('aria-expanded', 'true');
                return;
            }

            results.forEach(function (item) {
                var link = document.createElement('a');
                link.className = 'site-search__result';
                link.href = item.url;
                link.setAttribute('role', 'option');

                var thumbHtml = item.image
                    ? '<img class="site-search__result-thumb" src="' + escapeHtml(item.image) + '" alt="" loading="lazy">'
                    : '<span class="site-search__result-thumb site-search__result-thumb--empty"></span>';

                link.innerHTML = thumbHtml +
                    '<span class="site-search__result-text">' +
                        '<span class="site-search__result-title">' + escapeHtml(item.title) + '</span>' +
                        (item.category ? '<span class="site-search__result-category">' + escapeHtml(item.category) + '</span>' : '') +
                    '</span>';

                siteSearchResults.appendChild(link);
            });

            siteSearchResults.hidden = false;
            siteSearchInput.setAttribute('aria-expanded', 'true');
        }

        function fetchSiteSearchResults(query) {
            var requestId = ++searchRequestSeq;
            var endpoint = siteSearch.getAttribute('data-search-endpoint') || '/search-suggest.php';

            if (searchAbortController) {
                searchAbortController.abort();
            }
            searchAbortController = typeof AbortController === 'function' ? new AbortController() : null;

            fetch(endpoint + '?q=' + encodeURIComponent(query), {
                headers: { 'X-Requested-With': 'XMLHttpRequest' },
                signal: searchAbortController ? searchAbortController.signal : undefined
            })
                .then(function (response) {
                    if (!response.ok) {
                        throw new Error('Search request failed');
                    }
                    return response.json();
                })
                .then(function (payload) {
                    if (requestId !== searchRequestSeq) {
                        return;
                    }
                    renderSiteSearchResults(payload);
                })
                .catch(function (error) {
                    if (error && error.name === 'AbortError') {
                        return;
                    }
                    siteSearchResults.innerHTML = '';
                    siteSearchResults.hidden = true;
                });
        }

        siteSearchToggle.addEventListener('click', function () {
            if (siteSearch.classList.contains('is-open')) {
                closeSiteSearch();
            } else {
                openSiteSearch();
            }
        });

        siteSearchInput.addEventListener('input', function () {
            var query = siteSearchInput.value.trim();

            window.clearTimeout(searchDebounceTimer);

            if (query.length < 2) {
                renderSiteSearchResults({ query: '', results: [] });
                return;
            }

            searchDebounceTimer = window.setTimeout(function () {
                fetchSiteSearchResults(query);
            }, 250);
        });

        document.addEventListener('click', function (event) {
            if (siteSearch.contains(event.target)) {
                return;
            }
            closeSiteSearch();
        });

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape' && siteSearch.classList.contains('is-open')) {
                closeSiteSearch();
                siteSearchToggle.focus();
            }
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

        window.jQuery('[data-brand-strip-carousel]').slick({
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: false,
            dots: false,
            infinite: true,
            centerMode: true,
            centerPadding: '0',
            slidesToShow: 1,
            slidesToScroll: 1,
            speed: 400,
            pauseOnHover: true
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
