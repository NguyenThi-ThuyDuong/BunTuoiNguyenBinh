/* Validation form */
ValidationFormSelf("validation-newsletter");
ValidationFormSelf("validation-cart");
ValidationFormSelf("validation-user");
ValidationFormSelf("validation-contact");

$("#popup-cart")
    .on("shown.bs.modal", function() {
        $("body").addClass("popup-cart-scroll-context");
    })
    .on("hidden.bs.modal", function() {
        $("body").removeClass("popup-cart-scroll-context");
    });

/* Exists */
$.fn.exists = function() {
    return this.length;
};

/* Paging ajax */
if ($(".paging-product").exists()) {
    loadPagingAjax("ajax/ajax_news.php?perpage=6", '.paging-product');
}

$(".paging-product-index").each(function() {
    let idl = $(this).attr('data-id');
    loadPagingAjax("ajax/ajax_product_paging.php?perpage=12", '.paging-product-index', '#load_pro_', idl);
});
/* Paging category ajax 
    if($(".paging-product-category").exists()){
        $(".paging-product-category").each(function(){
            var list = $(this).data("list");
            var cat = $(this).data("cat");
            var item = $(this).data("item");
            var namelist = $(this).data("namelist");
            loadPagingAjax("ajax/ajax_product.php?perpage=8&idList="+list+"&idCat="+cat+"&idItem="+item+"&namelist="+namelist,'.paging-product-category-'+cat);
        });

        $('.boxproitem_item').click(function(){
            var list = $(this).data("list");
            var cat = $(this).data("cat");
            var item = $(this).data("item");
            var namelist = $(this).data("namelist");
            loadPagingAjax("ajax/ajax_product.php?perpage=8&idList="+list+"&idCat="+cat+"&idItem="+item+"&namelist="+namelist,'.paging-product-category-'+cat);
        });
    }
*/

/* Back to top */
NN_FRAMEWORK.BackToTop = function() {
    $(window).scroll(function() {
        if (!$('.scrollToTop').length) $("body").append('<div class="scrollToTop"><img src="' + GOTOP + '" alt="Go Top"/></div>');
        if ($(this).scrollTop() > 100) $('.scrollToTop').fadeIn();
        else $('.scrollToTop').fadeOut();
    });

    $('body').on("click", ".scrollToTop", function() {
        $('html, body').animate({ scrollTop: 0 }, 800);
        return false;
    });
};

/* Alt images */
NN_FRAMEWORK.AltImages = function() {
    $('img').each(function(index, element) {
        if (!$(this).attr('alt') || $(this).attr('alt') == '') {
            $(this).attr('alt', WEBSITE_NAME);
        }
    });
};

/* Fix menu */
NN_FRAMEWORK.FixMenu = function() {
    var menuWrapper = $('.header-height');
    var mobileHeader = $('.header-cachtop');
    var desktopHeaderType1 = $('.header-type-1__height');
    var desktopHeaderType2 = $('.header-type-2__top');
    var desktopAlwaysSticky = desktopHeaderType1.hasClass('is-inner-page');
    var mobileSpacer = $('<div class="mobile-header-spacer" aria-hidden="true"></div>');
    var desktopSpacer = $('<div class="desktop-header-spacer" aria-hidden="true"></div>');

    if (!menuWrapper.length && !mobileHeader.length) return;

    if (mobileHeader.length) mobileHeader.after(mobileSpacer);
    if (desktopHeaderType1.length) desktopHeaderType1.after(desktopSpacer);

    var stickyPoint = menuWrapper.length ? menuWrapper.offset().top : 0;
    var desktopHeaderHeight = desktopHeaderType1.length ? desktopHeaderType1.outerHeight() : 0;
    var desktopStickyPoint = stickyPoint + desktopHeaderHeight;

    function updateFixedMenu() {
        var isMobile = window.matchMedia('(max-width: 1024px)').matches;
        var scrollTop = $(window).scrollTop();
        var mobileSticky = isMobile && scrollTop > mobileHeader.outerHeight();
        var desktopSticky = !isMobile && (desktopAlwaysSticky || scrollTop > desktopStickyPoint);

        menuWrapper.toggleClass('is-sticky', desktopSticky);
        desktopHeaderType2.toggleClass('is-sticky-desktop', desktopSticky);
        desktopSpacer.height(0);

        if (desktopSticky && desktopHeaderType2.length) {
            menuWrapper.css('top', desktopHeaderType2.find('.header').outerHeight() + 'px');
        } else {
            menuWrapper.css('top', '');
        }

        mobileHeader.toggleClass('is-sticky', mobileSticky);
        mobileSpacer.height(mobileSticky ? mobileHeader.outerHeight() : 0).toggleClass('is-active', mobileSticky);
    }

    $(window).on('scroll', updateFixedMenu);
    $(window).on('resize', function() {
        menuWrapper.removeClass('is-sticky');
        menuWrapper.css('top', '');
        mobileHeader.removeClass('is-sticky');
        desktopHeaderType2.removeClass('is-sticky-desktop');
        desktopSpacer.height(0);
        mobileSpacer.removeClass('is-active').height(0);
        if (menuWrapper.length) {
            stickyPoint = menuWrapper.offset().top;
            desktopHeaderHeight = desktopHeaderType1.length ? desktopHeaderType1.outerHeight() : 0;
            desktopStickyPoint = stickyPoint + desktopHeaderHeight;
        }
        updateFixedMenu();
    });

    updateFixedMenu();
};

/* Production process progress */
NN_FRAMEWORK.ProductionProcess = function() {
    var sections = document.querySelectorAll('.production-process');
    var ticking = false;

    if (!sections.length) return;

    function updateProcessProgress() {
        var viewportHeight = window.innerHeight || document.documentElement.clientHeight;

        sections.forEach(function(section) {
            var track = section.querySelector('.production-process__track');
            var steps = section.querySelectorAll('.production-process__step');
            var rect = section.getBoundingClientRect();
            var startPoint = viewportHeight * 0.82;
            var endPoint = viewportHeight * 0.28;
            var progress = (startPoint - rect.top) / (startPoint - endPoint);

            progress = Math.max(0, Math.min(1, progress));

            if (track) track.style.setProperty('--process-progress', progress.toFixed(3));

            steps.forEach(function(step, index) {
                var stepPoint = steps.length > 1 ? index / (steps.length - 1) : 0;
                step.classList.toggle('is-reached', progress + 0.025 >= stepPoint);
            });
        });

        ticking = false;
    }

    function requestProcessUpdate() {
        if (ticking) return;
        ticking = true;
        window.requestAnimationFrame(updateProcessProgress);
    }

    window.addEventListener('scroll', requestProcessUpdate, { passive: true });
    window.addEventListener('resize', requestProcessUpdate);
    updateProcessProgress();
};

/* Drag horizontal lists with mouse */
NN_FRAMEWORK.DragScroll = function() {
    document.querySelectorAll('.certificate-drag-scroll').forEach(function(scroller) {
        if (scroller.dataset.dragScrollReady === 'true') return;
        scroller.dataset.dragScrollReady = 'true';

        var isDragging = false;
        var isInteracting = false;
        var isHovered = false;
        var isVisible = true;
        var startX = 0;
        var startScrollLeft = 0;
        var cycleWidth = 0;
        var lastFrameTime = 0;
        var autoScrollSpeed = 26;
        var originalItems = Array.prototype.slice.call(scroller.children);

        function cloneOriginalItems() {
            originalItems.forEach(function(item) {
                var clone = item.cloneNode(true);
                clone.setAttribute('aria-hidden', 'true');
                clone.querySelectorAll('a, button, input, select, textarea, [tabindex]').forEach(function(element) {
                    element.setAttribute('tabindex', '-1');
                });
                scroller.appendChild(clone);
            });
        }

        function prepareInfiniteScroll() {
            if (originalItems.length < 2) return;

            var styles = window.getComputedStyle(scroller);
            var gap = parseFloat(styles.columnGap || styles.gap) || 0;
            cycleWidth = originalItems.reduce(function(width, item) {
                return width + item.getBoundingClientRect().width + gap;
            }, 0);

            if (!cycleWidth) return;

            while (scroller.scrollWidth < scroller.clientWidth + (cycleWidth * 2)) {
                cloneOriginalItems();
            }

            scroller.scrollLeft = cycleWidth;
        }

        function normalizeScrollPosition() {
            if (!cycleWidth) return;

            if (scroller.scrollLeft >= cycleWidth * 2) {
                scroller.scrollLeft -= cycleWidth;
            } else if (scroller.scrollLeft < cycleWidth) {
                scroller.scrollLeft += cycleWidth;
            }
        }

        function autoScroll(time) {
            if (!lastFrameTime) lastFrameTime = time;
            var elapsed = Math.min(time - lastFrameTime, 50);
            lastFrameTime = time;

            if (cycleWidth && isVisible && !isDragging && !isInteracting && !isHovered && !document.hidden) {
                scroller.scrollLeft += autoScrollSpeed * (elapsed / 1000);
                normalizeScrollPosition();
            }

            window.requestAnimationFrame(autoScroll);
        }

        prepareInfiniteScroll();

        if ('IntersectionObserver' in window) {
            new IntersectionObserver(function(entries) {
                isVisible = entries[0].isIntersecting;
            }, { threshold: 0.05 }).observe(scroller);
        }

        scroller.addEventListener('mouseenter', function() {
            isHovered = true;
        });

        scroller.addEventListener('mouseleave', function() {
            isHovered = false;
        });

        scroller.addEventListener('focusin', function() {
            isInteracting = true;
        });

        scroller.addEventListener('focusout', function() {
            isInteracting = false;
        });

        scroller.addEventListener('pointerdown', function(event) {
            isInteracting = true;
            if (event.pointerType !== 'mouse' || event.button !== 0) return;

            isDragging = true;
            startX = event.clientX;
            startScrollLeft = scroller.scrollLeft;
            scroller.classList.add('is-dragging');
            scroller.setPointerCapture(event.pointerId);
        });

        scroller.addEventListener('pointermove', function(event) {
            if (!isDragging) return;

            scroller.scrollLeft = startScrollLeft - (event.clientX - startX);
            event.preventDefault();
        });

        function stopDragging(event) {
            isInteracting = false;
            if (!isDragging) return;

            isDragging = false;
            scroller.classList.remove('is-dragging');
            normalizeScrollPosition();

            if (scroller.hasPointerCapture(event.pointerId)) {
                scroller.releasePointerCapture(event.pointerId);
            }
        }

        scroller.addEventListener('pointerup', stopDragging);
        scroller.addEventListener('pointercancel', stopDragging);
        scroller.addEventListener('dragstart', function(event) {
            event.preventDefault();
        });

        window.requestAnimationFrame(autoScroll);
    });
};

/* Tools */
NN_FRAMEWORK.Tools = function() {
    if ($(".toolbar").exists()) {
        $(".footer").css({ marginBottom: $(".toolbar").innerHeight() });
    }
};

/* Popup */
NN_FRAMEWORK.Popup = function() {
    if ($("#popup").exists()) {
        $('#popup').modal('show');
    }
};

/* Wow */
NN_FRAMEWORK.WowAnimation = function() {

    new WOW().init();
};

/* Toc */
NN_FRAMEWORK.Toc = function() {
    if ($(".toc-list").exists()) {
        $(".toc-list").toc({
            content: "div#toc-content",
            headings: "h2,h3,h4"
        });

        if (!$(".toc-list li").length) $(".meta-toc").hide();

        $('.toc-list').find('a').click(function() {
            var x = $(this).attr('data-rel');
            goToByScroll(x);
        });
    }
};

/* Simply scroll */
NN_FRAMEWORK.SimplyScroll = function() {
    if ($(".roll_news ul").exists()) {
        $(".roll_news ul").simplyScroll({
            customClass: 'vert',
            orientation: 'vertical',
            // orientation: 'horizontal',
            auto: true,
            manualMode: 'auto',
            pauseOnHover: 1,
            speed: 1,
            loop: 0
        });
    }
    if ($(".roll_news1 ul").exists()) {
        $(".roll_news1 ul").simplyScroll({
            customClass: 'vert',
            orientation: 'vertical',
            // orientation: 'horizontal',
            auto: true,
            manualMode: 'auto',
            pauseOnHover: 1,
            speed: 1,
            loop: 0
        });
    }
};

/* Tabs */
NN_FRAMEWORK.Tabs = function() {
    if ($(".ul-tabs-pro-detail").exists()) {
        $(".ul-tabs-pro-detail li").click(function() {
            var tabs = $(this).data("tabs");
            $(".content-tabs-pro-detail, .ul-tabs-pro-detail li").removeClass("active");
            $(this).addClass("active");
            $("." + tabs).addClass("active");
        });
    }
};

/* Search */
NN_FRAMEWORK.Search = function() {
    if ($(".icon-search").exists()) {
        $(".icon-search").click(function() {
            if ($(this).hasClass('active')) {
                $(this).removeClass('active');
                $(".search-grid").stop(true, true).animate({ opacity: "0", width: "0px" }, 200);
            } else {
                $(this).addClass('active');
                $(".search-grid").stop(true, true).animate({ opacity: "1", width: "230px" }, 200);
            }
            document.getElementById($(this).next().find("input").attr('id')).focus();
            $('.icon-search i').toggleClass('fa fa-search fa fa-times');
        });
    }
};

/* Videos */
NN_FRAMEWORK.Videos = function() {

    if ($(".video").exists()) {
        $('[data-fancybox="video"]').fancybox({
            transitionEffect: "fade",
            transitionDuration: 800,
            animationEffect: "fade",
            animationDuration: 800,
            arrows: true,
            infobar: false,
            toolbar: true,
            hash: false
        });
    }
};

/* Owl */
NN_FRAMEWORK.OwlPage = function() {
    if ($(".promo-product-swiper").exists() && typeof Swiper !== "undefined") {
        new Swiper(".promo-product-swiper", {
            loop: true,
            speed: 650,
            spaceBetween: 12,
            slidesPerView: 1,
            autoplay: {
                delay: 2800,
                disableOnInteraction: false,
                pauseOnMouseEnter: true
            },
            navigation: {
                nextEl: ".promo-products__next",
                prevEl: ".promo-products__prev"
            },
            pagination: {
                el: ".promo-products__pagination",
                clickable: true
            },
            breakpoints: {
                576: {
                    slidesPerView: 2,
                    spaceBetween: 18
                },
                992: {
                    slidesPerView: 3,
                    spaceBetween: 22
                },
                1200: {
                    slidesPerView: 4,
                    spaceBetween: 24
                },
                1500: {
                    slidesPerView: 5,
                    spaceBetween: 24
                }
            }
        });
    }

    if ($(".news-updates-swiper").exists() && typeof Swiper !== "undefined") {
        new Swiper(".news-updates-swiper", {
            loop: $(".news-updates-swiper .swiper-slide").length > 4,
            speed: 650,
            spaceBetween: 24,
            slidesPerView: 2,
            watchOverflow: true,
            navigation: {
                nextEl: ".news-updates__next",
                prevEl: ".news-updates__prev"
            },
            pagination: {
                el: ".news-updates__pagination",
                clickable: true
            },
            breakpoints: {
                576: {
                    slidesPerView: 2
                },
                992: {
                    slidesPerView: 3
                },
                1200: {
                    slidesPerView: 4
                }
            }
        });
    }

    if ($(".production-capacity-swiper").exists() && typeof Swiper !== "undefined") {
        new Swiper(".production-capacity-swiper", {
            speed: 600,
            spaceBetween: 10,
            slidesPerView: 2,
            watchOverflow: true,
            navigation: {
                nextEl: ".production-capacity__next",
                prevEl: ".production-capacity__prev"
            },
            breakpoints: {
                480: {
                    slidesPerView: 2
                },
                768: {
                    slidesPerView: 3
                },
                1025: {
                    slidesPerView: 3
                },
                1200: {
                    slidesPerView: 4
                },
                1440: {
                    slidesPerView: 5
                }
            }
        });
    }

    if ($(".owl-slideshow").exists()) {
        $('.owl-slideshow').owlCarousel({
            items: 1,
            rewind: true,
            autoplay: true,
            loop: false,
            lazyLoad: false,
            mouseDrag: false,
            touchDrag: false,
            animateIn: 'animate__animated animate__fadeInLeft',
            animateOut: 'animate__animated animate__fadeOutRight',
            margin: 0,
            smartSpeed: 500,
            autoplaySpeed: 3500,
            nav: false,
            dots: false
        });
        $('.prev-slideshow').click(function() {
            $('.owl-slideshow').trigger('prev.owl.carousel');
        });
        $('.next-slideshow').click(function() {
            $('.owl-slideshow').trigger('next.owl.carousel');
        });
    }

    if ($(".owl-dv").exists()) {
        $('.owl-dv').owlCarousel({
            rewind: true,
            autoplay: true,
            loop: false,
            lazyLoad: false,
            mouseDrag: true,
            touchDrag: true,
            smartSpeed: 250,
            autoplaySpeed: 1000,
            nav: false,
            dots: false,
            responsiveClass: true,
            responsiveRefreshRate: 200,
            responsive: {
                0: {
                    items: 1,
                    margin: 10,
                },
                450: {
                    items: 2,
                    margin: 10,
                },
                800: {
                    items: 3,
                    margin: 10,
                },
                1000: {
                    items: 4,
                    margin: 20,
                },
                1025: {
                    items: 4,
                    margin: 30,
                }
            }
        });
        /*$('.prev-partner').click(function() {
            $('.owl-partner').trigger('prev.owl.carousel');
        });
        $('.next-partner').click(function() {
            $('.owl-partner').trigger('next.owl.carousel');
        });*/
    }
    if ($(".auto_video").exists()) {
        $('.auto_video').owlCarousel({
            rewind: true,
            autoplay: true,
            loop: false,
            lazyLoad: false,
            mouseDrag: true,
            touchDrag: true,
            smartSpeed: 250,
            autoplaySpeed: 1000,
            nav: false,
            dots: false,
            responsiveClass: true,
            responsiveRefreshRate: 200,
            responsive: {
                0: {
                    items: 1,
                    margin: 10,
                },
                450: {
                    items: 1,
                    margin: 10,
                },
                800: {
                    items: 1,
                    margin: 10,
                },
                1000: {
                    items: 1,
                    margin: 20,
                },
                1030: {
                    items: 1,
                    margin: 30,
                }
            }
        });
        /*$('.prev-partner').click(function() {
            $('.owl-partner').trigger('prev.owl.carousel');
        });
        $('.next-partner').click(function() {
            $('.owl-partner').trigger('next.owl.carousel');
        });*/
    }
    if ($(".auto_dcategory").exists()) {
        $('.auto_dcategory').owlCarousel({
            rewind: true,
            autoplay: true,
            loop: false,
            lazyLoad: false,
            mouseDrag: true,
            touchDrag: true,
            smartSpeed: 250,
            autoplaySpeed: 1000,
            nav: false,
            dots: false,
            responsiveClass: true,
            responsiveRefreshRate: 200,
            responsive: {
                0: {
                    items: 1,
                    margin: 10,
                },
                450: {
                    items: 2,
                    margin: 10,
                },
                800: {
                    items: 3,
                    margin: 10,
                },
                1000: {
                    items: 4,
                    margin: 20,
                },
                1030: {
                    items: 4,
                    margin: 30,
                }
            }
        });
        /*$('.prev-partner').click(function() {
            $('.owl-partner').trigger('prev.owl.carousel');
        });
        $('.next-partner').click(function() {
            $('.owl-partner').trigger('next.owl.carousel');
        });*/
    }
    $(document).on('click', '.home-category-trial__next', function() {
        var categoryGrid = $(this).siblings('.home-category-trial__grid').get(0);

        if (categoryGrid) {
            var maxScrollLeft = categoryGrid.scrollWidth - categoryGrid.clientWidth;
            var isAtEnd = categoryGrid.scrollLeft >= maxScrollLeft - 8;

            if (isAtEnd) {
                categoryGrid.scrollTo({
                    left: 0,
                    behavior: 'smooth'
                });
                return;
            }

            categoryGrid.scrollBy({
                left: Math.max(categoryGrid.clientWidth * 0.5, 220),
                behavior: 'smooth'
            });
        }
    });
    if ($(".auto_social").exists()) {
        $('.auto_social').owlCarousel({
            rewind: true,
            autoplay: true,
            loop: false,
            lazyLoad: false,
            mouseDrag: true,
            touchDrag: true,
            smartSpeed: 250,
            autoplaySpeed: 1000,
            nav: false,
            dots: false,
            responsiveClass: true,
            responsiveRefreshRate: 200,
            responsive: {
                0: {
                    items: 1,
                    margin: 10,
                },
                450: {
                    items: 2,
                    margin: 10,
                },
                800: {
                    items: 3,
                    margin: 10,
                },
                1000: {
                    items: 3,
                    margin: 20,
                },
                1030: {
                    items: 3,
                    margin: 30,
                }
            }
        });
        /*$('.prev-partner').click(function() {
            $('.owl-partner').trigger('prev.owl.carousel');
        });
        $('.next-partner').click(function() {
            $('.owl-partner').trigger('next.owl.carousel');
        });*/
    }




};

/* Owl pro detail */
NN_FRAMEWORK.OwlProDetail = function() {
    if ($(".owl-thumb-pro").exists()) {
        $('.owl-thumb-pro').owlCarousel({
            items: 4,
            lazyLoad: false,
            mouseDrag: true,
            touchDrag: true,
            margin: 10,
            smartSpeed: 250,
            nav: false,
            dots: false,
            responsiveClass: true,
            responsiveRefreshRate: 200,
            responsive: {
                0: {
                    items: 3,
                    margin: 10
                },
                500: {
                    items: 4,
                    margin: 10
                }
            }
        });
        $('.prev-thumb-pro').click(function() {
            $('.owl-thumb-pro').trigger('prev.owl.carousel');
        });
        $('.next-thumb-pro').click(function() {
            $('.owl-thumb-pro').trigger('next.owl.carousel');
        });
    }
};

/* Cart */
NN_FRAMEWORK.loadmap = function() {
    $("body").on("click", ".loadmap", function() {
        $('.loadmap').removeClass('active');
        $(this).addClass('active');
        let id = $(this).attr('data-id');
        $.ajax({
            url: 'ajax/ajax_bando.php',
            type: "POST",
            async: false,
            data: { id: id },
            success: function(result) {
                $('.form-contact').html(result);
            }
        });
    });
}
NN_FRAMEWORK.Cart = function() {
    var cartNoticeTimer;

    function showCartNotice(message, isError) {
        var $notice = $("#cart-add-notice");

        if (!$notice.length) {
            $notice = $('<div id="cart-add-notice" class="cart-add-notice" role="status" aria-live="polite" aria-atomic="true"><span class="cart-add-notice__icon" aria-hidden="true"><i class="fa fa-check"></i></span><span class="cart-add-notice__message"></span></div>');
            $("body").append($notice);
        }

        clearTimeout(cartNoticeTimer);
        $notice.toggleClass("is-error", !!isError);
        $notice.find(".cart-add-notice__icon i").attr("class", isError ? "fa fa-exclamation-circle" : "fa fa-check");
        $notice.find(".cart-add-notice__message").text(message);
        $notice.removeClass("is-visible");
        $notice[0].offsetWidth;
        $notice.addClass("is-visible");

        cartNoticeTimer = setTimeout(function() {
            $notice.removeClass("is-visible");
        }, 2400);
    }

    $("body").on("click", ".quantity-minus-pro-detail, .quantity-plus-pro-detail", function() {
        var input = $(this).siblings("#quantity");
        var currentQuantity = parseInt(input.val(), 10) || 1;

        if ($(this).hasClass("quantity-plus-pro-detail")) currentQuantity++;
        else currentQuantity = Math.max(1, currentQuantity - 1);

        input.val(currentQuantity);
    });

    $("body").on("click", ".addcart", function() {
        var mau = ($(".color-pro-detail input:checked").val()) ? $(".color-pro-detail input:checked").val() : 0;
        var size = ($(".size-pro-detail input:checked").val()) ? $(".size-pro-detail input:checked").val() : 0;
        var id = $(this).data("id");
        var action = $(this).data("action");
        var quantity = ($("#quantity").val()) ? $("#quantity").val() : 1;

        if (id) {
            $.ajax({
                url: 'ajax/ajax_cart.php',
                type: "POST",
                dataType: 'json',
                async: false,
                data: { cmd: 'add-cart', id: id, mau: mau, size: size, quantity: quantity },
                success: function(result) {
                    if (action == 'addnow') {
                        $('.count-cart').html(result.max);
                        showCartNotice("Đã thêm sản phẩm vào giỏ hàng.", false);
                    } else if (action == 'buynow') {
                        window.location = CONFIG_BASE + "gio-hang";
                    }
                },
                error: function() {
                    showCartNotice("Chưa thể thêm vào giỏ hàng. Vui lòng thử lại.", true);
                }
            });
        }
    });

    $("body").on("click", ".del-procart", function() {
        if (confirm(LANG['delete_product_from_cart'])) {
            var code = $(this).data("code");
            var ship = $(".price-ship").val();

            $.ajax({
                type: "POST",
                url: 'ajax/ajax_cart.php',
                dataType: 'json',
                data: { cmd: 'delete-cart', code: code, ship: ship },
                success: function(result) {
                    $('.count-cart').html(result.max);
                    if (result.max) {
                        $('.price-temp').val(result.temp);
                        $('.load-price-temp').html(result.tempText);
                        $('.price-total').val(result.total);
                        $('.load-price-total').html(result.totalText);
                        $(".procart-" + code).remove();
                    } else {
                        $(".wrap-cart").html('<a href="" class="empty-cart text-decoration-none"><i class="fa fa-cart-arrow-down"></i><p>' + LANG['no_products_in_cart'] + '</p><span>' + LANG['back_to_home'] + '</span></a>');
                    }
                }
            });
        }
    });

    $("body").on("click", ".counter-procart", function() {
        var $button = $(this);
        var input = $button.parent().find("input");
        var id = input.data('pid');
        var code = input.data('code');
        var oldValue = $button.parent().find("input").val();
        if ($button.text() == "+") quantity = parseFloat(oldValue) + 1;
        else if (oldValue > 1) quantity = parseFloat(oldValue) - 1;
        $button.parent().find("input").val(quantity);
        update_cart(id, code, quantity);
    });

    $("body").on("change", "input.quantity-procat", function() {
        var quantity = $(this).val();
        var id = $(this).data("pid");
        var code = $(this).data("code");
        update_cart(id, code, quantity);
    });

    if ($(".select-city-cart").exists()) {
        $(".select-city-cart").change(function() {
            var id = $(this).val();
            load_wards(id);
            load_ship();
        });
    }

    // if ($(".select-district-cart").exists()) {
    //     $(".select-district-cart").change(function() {
    //         var id = $(this).val();
    //         load_wards(id);
    //         load_ship();
    //     });
    // }

    if ($(".select-wards-cart").exists()) {
        $(".select-wards-cart").change(function() {
            var id = $(this).val();
            load_ship(id);
        });
    }

    if ($(".payments-label").exists()) {
        $(".payments-label").click(function() {
            var payments = $(this).data("payments");
            $(".payments-cart .payments-label, .payments-info").removeClass("active");
            $(this).addClass("active");
            $(".payments-info-" + payments).addClass("active");
        });
    }

    if ($(".color-pro-detail").exists()) {
        $(".color-pro-detail").click(function() {
            $(".color-pro-detail").removeClass("active");
            $(this).addClass("active");

            var id_mau = $("input[name=color-pro-detail]:checked").val();
            var idpro = $(this).data('idpro');

            $.ajax({
                url: 'ajax/ajax_color.php',
                type: "POST",
                dataType: 'html',
                data: { id_mau: id_mau, idpro: idpro },
                success: function(result) {
                    if (result != '') {
                        $('.left-pro-detail').html(result);
                        MagicZoom.refresh("Zoom-1");
                        NN_FRAMEWORK.OwlProDetail();
                    }
                }
            });
        });
    }

    if ($(".size-pro-detail").exists()) {
        $(".size-pro-detail").click(function() {
            $(".size-pro-detail").removeClass("active");
            $(this).addClass("active");
        });
    }

    if ($(".quantity-pro-detail button").exists()) {
        $(".quantity-pro-detail button").click(function() {
            var $button = $(this);
            var oldValue = $button.parent().find("input").val();
            if ($button.text() == "+") {
                var newVal = parseFloat(oldValue) + 1;
            } else {
                if (oldValue > 1) var newVal = parseFloat(oldValue) - 1;
                else var newVal = 1;
            }
            $button.parent().find("input").val(newVal);
        });
    }
};
var star = document.querySelectorAll('.star');
var dem = 0;
for (let index = 0; index < star.length; index++) {
    const element = star[index];
    element.addEventListener('click', function () {
        for (let index1 = 0; index1 < $(element).data('star'); index1++) {
            $(star[index1]).css({ background: '#dbc656' });
            $(star[index1]).css({ color: '#ffffff' });
            $(star[index1]).find('i').css({ color: '#ffffff' });
            dem = index1 + 1;
        }
        for (let index2 = dem; index2 <= 5; index2++) {
            $(star[index2]).css({ background: 'rgba(128, 128, 128, 0.281)' });
            $(star[index2]).css({ color: 'gray' });
            $(star[index2]).find('i').css({ color: 'gray' });
        }
    });
}
var checktime = true;
$('.send_danhgia').click(function () {
    if (dem == 0) {
        alert('Vui lòng chọn số sao trước khi gửi!!!');
    } else if (checktime == false) {
        alert('Vui lòng không đánh giá liên tục!!!');
    } else {
        checktime = false;
        var id = $(this).data('id');
        $.ajax({
            url: 'ajax/ajax_danhgiaproduct.php',
            type: "POST",
            dataType: 'html',
            data: { dem: dem, id: id },
            success: function (result) {
                $('.result_danhgia').append(result);
                setTimeout(function () {
                    checktime = true;
                }, 10000);
            }
        });
    }
})

/* Ready */
$(document).ready(function() {
    NN_FRAMEWORK.Cart();
    NN_FRAMEWORK.loadmap();
    NN_FRAMEWORK.Tools();
    NN_FRAMEWORK.Popup();
    NN_FRAMEWORK.WowAnimation();
    NN_FRAMEWORK.AltImages();
    NN_FRAMEWORK.BackToTop();
    NN_FRAMEWORK.FixMenu();
    NN_FRAMEWORK.ProductionProcess();
    NN_FRAMEWORK.DragScroll();
    NN_FRAMEWORK.OwlPage();
    NN_FRAMEWORK.OwlProDetail();
    NN_FRAMEWORK.Toc();
    NN_FRAMEWORK.SimplyScroll();
    NN_FRAMEWORK.Tabs();
    NN_FRAMEWORK.Videos();
    NN_FRAMEWORK.Search();
});
