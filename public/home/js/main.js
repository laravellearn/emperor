$(document).ready(function () {
    //    resposive-megamenu-mobile------------------
    $('.dropdown-toggle').on('click', function (e) {
        e.stopPropagation();
        e.preventDefault();

        var self = $(this);
        if (self.is('.disabled, :disabled')) {
            return false;
        }
        self.parent().toggleClass("open");
    });

    $(document).on('click', function (e) {
        if ($('.dropdown').hasClass('open')) {
            $('.dropdown').removeClass('open');
        }
    });

    $('.nav-btn').on('click', function () {
        $('.overlay').show();
        $('nav').toggleClass("open");
    });

    $('.overlay').on('click', function () {
        if ($('nav').hasClass('open')) {
            $('nav').removeClass('open');
        }
        $(this).hide();
    });


    $('li.active').addClass('open').children('ul').show();
    $("li.has-sub > a").on('click', function () {
        $(this).removeAttr('href');
        var e = $(this).parent('li');
        if (e.hasClass('open')) {
            e.removeClass('open');
            e.find('li').removeClass('opne');
            e.find('ul').slideUp(200);
        }
        else {
            e.addClass('open');
            e.children('ul').slideDown(200);
            e.siblings('li').children('ul').slideUp(200);
            e.siblings('li').removeClass('open');
            e.siblings('li').find('li').removeClass('open');
            e.siblings('li').find('ul').slideUp(200);
        }
    });
    //    resposive-megamenu-mobile------------------

    //    hover-menu-overlay-------------------------
    $('li.nav-overlay').hover(function () {
        $('.sub-menu').removeClass('active');
        $('.nav-categories-overlay').addClass('active');
    }, function () {
        $('.nav-categories-overlay').removeClass('active');
    });
    //    hover-menu-overlay-------------------------

    //    SearchResult-----------------------------
    $('.search-box form input').on('click', function () {
        $(this).parents('.search-box').addClass('show-result').find('.search-result').fadeIn(0);
        $(".overlay-search-box").css({ "opacity": "1", "visibility": "visible" });
    })
    $('.search-box form input').keyup(function () {
        $(this).parents('.search-box').addClass('show-result').find('.search-result').fadeIn(0);
        $(this).parents('.search-box').find('.search-result-list').fadeIn(0);
        if ($(this).val().length == 0) {

            $(this).parents('.search-box').removeClass('show-result').find('.search-result').fadeOut(0);
            $(this).parents('.search-box').find('.search-result-list').fadeOut(0);
            $(this).parents('.search-box').removeClass('show-result');
        } else {

            $(this).parents('.search-box').find('.search-result').fadeIn(0);
            $(this).parents('.search-box').find('.search-result-list').fadeIn(0);
        }
    });
    $(document).click(function (e) {
        if ($(e.target).is('.search-box *')) return;
        $('.search-result').hide();
        $('.search-box').removeClass('show-result');
        $(".overlay-search-box").css({ "opacity": "0", "visibility": "hidden" });
    });

    //    SearchResult-----------------------------

    //    header fixed-----------------------------
    $(window).scroll(function () {
        if ($(this).scrollTop() > 60) {
            $('.header-main-page').addClass('fixed');
        } else {
            $('.header-main-page').removeClass('fixed');
        }
    });
    var lastScrollTop = 0;
    window.addEventListener('scroll', function () {
        var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        if (scrollTop > lastScrollTop && !$('.main-menu').hasClass('is-active')) {
            $('.header-main-page .main-menu').addClass('hidden-nav-main');
            $('.header-main-page .main-menu').slideUp(200);
        } else {
            $('.header-main-page .main-menu').removeClass('hidden-nav-main');
            $('.header-main-page .main-menu').slideDown(200);
        }
        lastScrollTop = scrollTop;
    });
    //    header fixed-----------------------------
    // categorylist----------------------------------
    $('.main-menu').on('mouseenter', function () {
        $(this).addClass('is-active');
    });
    $('.main-menu').on('mouseleave', function () {
        $(this).removeClass('is-active');
    });
    $('.item-list-menu>ul>li:first-child').addClass('active');
    $('.item-list-menu>ul>li').on('mouseenter', function () {
        $(this).addClass('active').siblings().removeClass('active');
    });
    // categorylist----------------------------------
    //    countdown--------------------------------
    ! function (l) {
        var t = {
            init: function () {
                t.countDown()
            },
            countDown: function (t, i) {
                l(".countdown").each(function () {
                    var t = l(this),
                        a = l(this).data("date-time"),
                        e = l(this).data("labels");
                    (i || t).countdown(a, function (t) {
                        l(this).html(t.strftime('<div class="countdown-item"><div class="countdown-value">%D</div><div class="countdown-label">' + e["label-day"] + '</div></div><div class="countdown-item"><div class="countdown-value">%H</div><div class="countdown-label">' + e["label-hour"] + '</div></div><div class="countdown-item"><div class="countdown-value">%M</div><div class="countdown-label">' + e["label-minute"] + '</div></div><div class="countdown-item"><div class="countdown-value">%S</div><div class="countdown-label">' + e["label-second"] + "</div></div>"))
                    })
                })
            },
        };
        l(function () {
            t.init()
        })
    }(jQuery);
    //    countdown--------------------------------

    //    sidebar-sticky---------------------------
    if ($('.sticky-sidebar').length) {
        $('.sticky-sidebar').theiaStickySidebar();
    }

    // nice-select-----------------------------------
    if ($('.custom-select-ui').length) {
        $('.custom-select-ui select').niceSelect();
    }

    //    tab---------------------------------
    $(".checkout-tab-pill").click(function () {
        var index = $(this).index();
        $(".checkout-tab-pill").removeClass("listing-active-cart");
        $(this).addClass("listing-active-cart");
        $(".cart-tab-main").slideUp(0);
        $(".cart-tab-main").eq(index).slideDown(0);

    });

    $(".box-header-sidebar").on('click', function (e) {
        e.preventDefault();
        $(".box-header-sidebar").removeClass("activeacc");
        $(this).addClass("activeacc");
        $(this).next().slideToggle(200);
    });

    $("li.box-tabs-tab").click(function (e) {
        e.preventDefault();
        var index = $(this).index();
        $("li.box-tabs-tab").removeClass("active-tabs");
        $(this).addClass("active-tabs");
        $(".tab-active-content .tab").slideUp(0);
        $(".tab-active-content .tab").eq(index).slideDown(0);

    });
    //    tab---------------------------------

    //    modal-------------------------
    var modal = document.getElementById("modal");
    window.onclick = (function (event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    });

    //    modal-------------------------

    // advantages-----------------------------
    var inputs = $('#advantage-input, #disadvantage-input');
    var inputChangeCallback = function () {
        var self = $(this);
        if (self.val().trim().length > 0) {
            self.siblings('.js-icon-form-add').show();
        } else {
            self.siblings('.js-icon-form-add').hide();
        }
    };
    inputs.each(function () {
        inputChangeCallback.bind(this)();
        $(this).on('change keyup', inputChangeCallback.bind(this));
    });
    $("#advantages").delegate(".js-icon-form-add", 'click', function (e) {

        var parent = $('.js-advantages-list');
        if (parent.find(".js-advantage-item").length >= 5) {
            return;
        }

        var advantageInput = $('#advantage-input');

        if (advantageInput.val().trim().length > 0) {
            parent.append(
                '<div class="ui-dynamic-label ui-dynamic-label--positive js-advantage-item">\n' +
                advantageInput.val() +
                '<button type="button" class="ui-dynamic-label-remove js-icon-form-remove"></button>\n' +
                '<input type="hidden" name="comment[advantages][]" value="' + advantageInput
                    .val() + '">\n' +
                '</div>');

            advantageInput.val('').change();
            advantageInput.focus();
        }

    }).delegate(".js-icon-form-remove", 'click', function (e) {
        $(this).parent('.js-advantage-item').remove();
    });

    $("#disadvantages").delegate(".js-icon-form-add", 'click', function (e) {

        var parent = $('.js-disadvantages-list');
        if (parent.find(".js-disadvantage-item").length >= 5) {
            return;
        }

        var disadvantageInput = $('#disadvantage-input');

        if (disadvantageInput.val().trim().length > 0) {
            parent.append(
                '<div class="ui-dynamic-label ui-dynamic-label--negative js-disadvantage-item">\n' +
                disadvantageInput.val() +
                '<button type="button" class="ui-dynamic-label-remove js-icon-form-remove"></button>\n' +
                '<input type="hidden" name="comment[disadvantages][]" value="' +
                disadvantageInput.val() + '">\n' +
                '</div>');

            disadvantageInput.val('').change();
            disadvantageInput.focus();
        }

    }).delegate(".js-icon-form-remove", 'click', function (e) {
        $(this).parent('.js-disadvantage-item').remove();
    });
    // advantages-----------------------------

    //    Scroll---------------------------
    $(document).on("scroll", function () {
        var st = $(this).scrollTop();
        if (st > 10) {
            $(".footer-jump-angle").fadeIn(0, "swing");
        }
        else if (st < 300) {
            $(".footer-jump-angle").fadeOut(0, "swing");
        }
    });
    $(".footer-jump-angle").on("click", function () {
        $("html,body").animate({ scrollTop: "0px" }, 3000, "swing");
    });
    $(document).scroll(function () {
        var scroll = $(document).scrollTop();

        if (scroll > 200) {
            $(".main-menu").addClass("NavFix");
        } else if (scroll < 10) {
            $(".main-menu").removeClass("NavFix");
        }
    });

    //    Scroll--------------------------- 

    //    quantity-selector---------------------------
    jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>').insertAfter('.quantity input');
    jQuery('.quantity').each(function () {
        var spinner = jQuery(this),
            input = spinner.find('input[type="number"]'),
            btnUp = spinner.find('.quantity-up'),
            btnDown = spinner.find('.quantity-down'),
            min = input.attr('min'),
            max = input.attr('max');

        btnUp.click(function () {
            var oldValue = parseFloat(input.val());
            if (oldValue >= max) {
                var newVal = oldValue;
            } else {
                var newVal = oldValue + 1;
            }
            spinner.find("input").val(newVal);
            spinner.find("input").trigger("change");
        });

        btnDown.click(function () {
            var oldValue = parseFloat(input.val());
            if (oldValue <= min) {
                var newVal = oldValue;
            } else {
                var newVal = oldValue - 1;
            }
            spinner.find("input").val(newVal);
            spinner.find("input").trigger("change");
        });

    });
    //    quantity-selector---------------------------

    //    verify-phone-number--------------------
    if ($("#countdown-verify-end").length) {
        var $countdownOptionEnd = $("#countdown-verify-end");

        $countdownOptionEnd.countdown({
            date: (new Date()).getTime() + 180 * 1000, // 1 minute later
            text: '<span class="day">%s</span><span class="hour">%s</span><span>: %s</span><span>%s</span>',
            end: function () {
                $countdownOptionEnd.html("<a href='' class='link-border-verify form-account-link'>ارسال مجدد</a>");
            }
        });
    }
    $(".line-number-account").keyup(function () {
        $(this).next().focus();
    });
    //    verify-phone-number--------------------

    // favorites product----------------------
    $("ul.gallery-options button.btn-option-wishes").on("click", function () {
        $(this).toggleClass("btn-option-favorites");
    });
    // favorites product-----------------------

    //single-product------------------
    $("#gallery-slider").owlCarousel({
        rtl: true,
        margin: 10,
        nav: true,
        navText: ['<i class="fa fa-angle-right"></i>', '<i class="fa fa-angle-left"></i>'],
        dots: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 4,
                slideBy: 1
            }
        }
    });

    // zoom gallery product----------------
    $('.back-to-top').click(function (e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop: 0 }, 800, 'easeInExpo');
    });

    if ($("#img-product-zoom").length) {
        $("#img-product-zoom").ezPlus({
            zoomType: "inner",
            containLensZoom: true,
            gallery: 'gallery_01f',
            cursor: "crosshair",
            galleryActiveClass: "active",
            responsive: true,
            imageCrossfade: true,
            zoomWindowFadeIn: 500,
            zoomWindowFadeOut: 500
        });
    }
    // zoom gallery product----------------
    //single-product------------------
    // collapse tab-------------------
    $(".product-params-more-handler a").on('click', function (e) {
        e.preventDefault();
        $(".product-params-more").slideToggle(200);
        $(this).find('.show-more').fadeToggle(0);
        $(this).find('.show-less').fadeToggle(0);
    });

    $(".table-suppliers-more a").on('click', function (e) {
        e.preventDefault();
        $(".in-list").slideToggle(200);
        $(this).find('.show-more').fadeToggle(0);
        $(this).find('.show-less').fadeToggle(0);
    });

    $(".mask-handler").click(function (e) {
        e.preventDefault();
        var sumaryBox = $(this).parents('.content-expert-summary');
        sumaryBox.find('.mask-text-product-summary').toggleClass('active');
        sumaryBox.find('.shadow-box').fadeToggle(0);
        $(this).find('.show-more').fadeToggle(0);
        $(this).find('.show-less').fadeToggle(0);
    });

    $(".expert-article-button").click(function (e) {
        e.preventDefault();
        var sumaryBox = $(this).parents('.js-expert-article');
        sumaryBox.find('.js-expert-article').toggleClass('active');
        sumaryBox.find('.content-expert-text').slideToggle();
        $(this).find('.show-more').fadeToggle(0);
        $(this).find('.show-less').fadeToggle(0);
    });
    // collapse tab-------------------
    //start slider sidebar-----------------------------
    $("#suggestion-slider").owlCarousel({
        rtl: true,
        items: 1,
        autoplay: true,
        autoplayTimeout: 5000,
        loop: true,
        dots: false,
        onInitialized: startProgressBar,
        onTranslate: resetProgressBar,
        onTranslated: startProgressBar
    });

    function startProgressBar() {
        $(".slide-progress").css({
            width: "100%",
            transition: "width 5000ms"
        });
    }

    function resetProgressBar() {
        $(".slide-progress").css({
            width: 0,
            transition: "width 0s"
        });
    }
    //start slider sidebar-----------------------------

    //    slider-product-------------------
    $(".product-carousel").owlCarousel({
        rtl: true,
        margin: 10,
        nav: true,
        navText: ['<i class="fa fa-angle-right"></i>', '<i class="fa fa-angle-left"></i>'],
        dots: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                slideBy: 1
            },
            576: {
                items: 1,
                slideBy: 1
            },
            768: {
                items: 3,
                slideBy: 2
            },
            992: {
                items: 4,
                slideBy: 2
            },
            1400: {
                items: 4,
                slideBy: 3
            }
        }
    });
    //    slider-product------------------- 
});





