var _functions = {};

jQuery(function ($) {

    "use strict";

    /* function on page ready */ 
    var isTouchScreen = navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i);
    if (isTouchScreen) $('html').addClass('touch-screen');

    if (navigator.userAgent.indexOf("Firefox") >= 0) {
        $('html').addClass('firefox');
    }
    if (navigator.userAgent.indexOf('Edge') >= 0) {
        $('html').addClass('edge');
    }
    if (navigator.userAgent.indexOf("Trident") >= 0) {
        $('html').addClass('ie');
    }
    if (navigator.userAgent.indexOf('Safari') >= 0 && navigator.userAgent.indexOf('Chrome') < 0) {
        $('html').addClass('safari');
    }
    if (navigator.userAgent.indexOf('Chrome') >= 0 && navigator.userAgent.indexOf('Edge') < 0) {
        $('html').addClass('chrome');
    }

    /* function on page scroll */
    $(window).scroll(function () {
        _functions.scrollCall();
    });

    var prev_scroll = 0;
    _functions.scrollCall = function () {
        var winScr = $(window).scrollTop();
        if (winScr > 200 && !$('.popup-wrapper').hasClass('active')) {
            $('header').addClass('scrolled');
        } else {
            $('header').removeClass('scrolled');
        }

        if (winScr > prev_scroll) {
            $('header').addClass('show-top');
        } else {
            $('header').removeClass('show-top');
        }
        prev_scroll = winScr; 

        if (winScr <= 10) {
            $('header').removeClass('show-top');
            prev_scroll = 0;
        }
    };

    _functions.scrollCall();

    setTimeout(function () {
        /* images load */
        $('img[data-i-src], iframe[data-i-src]').each(function (i, el) {
            $(el).attr({'src': $(el).data('i-src')}).addClass('imgLoaded');
        });

        $('[data-bg]').each(function (i, el) {
            $(el).css({'background-image': 'url(' + $(el).data('bg') + ')'});
        });
    }, 100);

    $('.video').each(function () {
        var video = '<video ' + ($(this).is('[data-autoplay]') ? 'autoplay' : '') + ' muted playsinline><source src="' + $(this).data('src') + '" type="video/mp4" /></video>';
        $(this).prepend(video);
        $(this).find('video')[0].oncanplay = function () {
            $(this).addClass('active');
        };
    });

    /* swiper sliders */
    _functions.getSwOptions = function (swiper) {
        var options = swiper.data('options');
        options = (!options || typeof options !== 'object') ? {} : options;
        var $p = swiper.closest('.swiper-entry');
        if (!options.pagination) options.pagination = {
            el: $p.find('.swiper-pagination')[0],
            clickable: true
        };
        if (!options.navigation) options.navigation = {
            nextEl: $p.find('.swiper-button-next')[0],
            prevEl: $p.find('.swiper-button-prev')[0]
        };
        options.preloadImages = false;
        options.lazy = {loadPrevNext: true};
        options.observer = true;
        options.observeParents = true;
        options.watchOverflow = true;
        options.speed = 500;
        options.roundLengths = true;
        if (isTouchScreen) options.direction = "horizontal";
        return options;
    };
    _functions.initSwiper = function (el) {
        var swiper = new Swiper(el[0], _functions.getSwOptions(el));
    };

    $('.swiper-entry .swiper-container').each(function () {
        _functions.initSwiper($(this));
    });
    $('.swiper-thumbs').each(function () {
        var top = $(this).find('.swiper-container.swiper-thumbs-top')[0].swiper,
            bottom = $(this).find('.swiper-container.swiper-thumbs-bottom')[0].swiper;
        top.thumbs.swiper = bottom;
        top.thumbs.init();
        top.thumbs.update();
    });
    $('.swiper-control').each(function () {
        var top = $(this).find('.swiper-container')[0].swiper,
            bottom = $(this).find('.swiper-container')[1].swiper;
        top.controller.control = bottom;
        bottom.controller.control = top;
    });

    function slideLength() {
        $('.swiper-custom').each(function () {
            var slidesLength = $(this).find('.swiper-slide').length,
                visibleSlidesLength = $(this).find('.swiper-slide-visible').length;

            if (slidesLength <= visibleSlidesLength) {
                $(this).addClass('swiper-no');
            }
        });
    }

    slideLength();
    $(window).on('resize', function () {
        slideLength();
    });

    //custom slide-image change
    if ($('.main-banner').length) {

        function customSlideChange(swiper, $imageWrap) {

            var $cSlides = $imageWrap.find('.slide-image');
            if (!$('html').hasClass('ie')) {
                TweenMax.set($cSlides, {transformStyle: 'preserve-3d'});
            }

            $imageWrap.find('video').each(function () {
                $(this)[0].addEventListener('ended', endVideoCallback, false);
            });

            function endVideoCallback() {
                if (swiper.activeIndex === swiper.slides.length - 1) {
                    swiper.slideTo(0);
                } else {
                    swiper.slideNext();
                }
            }

            if ($('html').hasClass('ie')) {
                swiper.on('slideChange', function () {
                    customSlide(swiper, $cSlides, 'fade');
                });
            } else {
                if ($(window).width() < 992) {
                    swiper.on('slideChange', function () {
                        customSlide(swiper, $cSlides, 'clip-right');
                    });
                } else {
                    swiper.on('slideNextTransitionStart', function () {
                        customSlide(swiper, $cSlides, 'clip-right');
                    });
                    swiper.on('slidePrevTransitionStart', function () {
                        customSlide(swiper, $cSlides, 'clip-left');
                    });
                }
            }
        }

        function customSlide(swiperObj, $customSlides, cssClassName) {
            var slideTo = $customSlides.eq(swiperObj.activeIndex),
                slideFrom = $customSlides.eq(swiperObj.previousIndex);

            var prevSlideVideo = slideFrom.find('video'),
                activeSlideVideo = slideTo.find('video');

            if (prevSlideVideo.length) prevSlideVideo[0].pause();
            if (prevSlideVideo.length) prevSlideVideo[0].currentTime = 0;
            if (activeSlideVideo.length) activeSlideVideo[0].play();

            slideFrom.addClass(cssClassName).css({'z-index': 3});
            slideTo.css({'z-index': 2});

            if ($('html').hasClass('ie')) {
                slideFrom.removeClass(cssClassName).css({'z-index': 1});
            } else {
                TweenMax.set(slideTo, {scale: 1.1});
                TweenMax.to(slideTo, .8, {scale: 1});
                setTimeout(function () {
                    slideFrom.removeClass(cssClassName).css({'z-index': 1});
                }, 800);
            }
        }

        customSlideChange($('.banner-slider .swiper-container')[0].swiper, $('.slide-images-wrap'));

        if ($(window).width() < 992) {
            $('.banner-slider .swiper-container').removeClass('swiper-no-swiping');
        }
    }


    //popup
    var scrollbarWidth = (window.innerWidth - $(window).width());

    $(document).on('click', '.open-popup', function(e){
        e.preventDefault();
        var video = $(this).data('video-src');
        $('.popup-content').removeClass('active');
        $('.popup-content[data-rel="' + $(this).data('rel') + '"] , .popup-wrapper').addClass('active');
        if ($(this).hasClass('open-video')) {
            $('.embed-responsive-16by9').html('<iframe src="' + video + '"></iframe>');
        }
        $('html').addClass('overflow-hidden');
        $('html').css('margin-right', scrollbarWidth + 'px');
    });

    $(document).on('click', '.popup-wrapper .btn-close, .popup-wrapper .layer-close', function (e) {
        $('html').removeClass('overflow-hidden');
        $('html').css('margin-right', 0);
        $('.popup-wrapper, .popup-content').removeClass('active');
        $('.video-popup iframe').attr('src','about:blank');
        e.preventDefault();
    });

    $(document).on('click', '.cookie-message .btn-close', function (e) {
        $(this).closest('.cookie-message').fadeOut(300);
    });


    //scroll animation
    $(window).on('scroll load', function () {
        if ($('.animate-item').length && (!isTouchScreen || $(window).width() >= 1200)) {
            $('.animate-item').not('.animated').each(function () {
                var th = $(this);
                if ($(window).scrollTop() >= th.offset().top - ($(window).height() * 0.7)) {
                    th.addClass('animated');
                }
            });
        }
    });


    /*###############*/
    /* INPUT MATERIAL */
    /*###############*/

    $('.input-wrapper-material .input-material').on('focus', function(){
        $(this).parent().addClass('focus');
    });
    $('.input-wrapper-material .input-material').on('blur', function () {
        $(this).parent().removeClass('focus');
    });
    $('.input-wrapper-material .input-material').on('keyup', function () {
        if(!$(this).val()) $(this).parent().removeClass('typed');
        else $(this).parent().addClass('typed');
    });

    //header search
    $('.show-search').on('click', function () {
        $(this).closest('.header').find('.header-search').addClass('visible');
    });
    $('.close-search').on('click', function () {
        $(this).closest('.header').find('.header-search').removeClass('visible');
    });

    //menu
    // $('.with-submenu>a').on('click', function () {
    //     $(this).closest('.with-submenu').toggleClass('active');
    //     $(this).closest('.with-submenu').find('.submenu').slideToggle(300);
    // });

    $(document).on('mouseenter','.with-submenu', function (event) {
        if($(window).width() > 1329){
            $(this).find('.submenu').stop().slideDown();
        }
    }).on('mouseleave','.with-submenu',  function(){
        if($(window).width() > 1329){
            $(this).find('.submenu').stop().slideUp();
        }
    });

    $(document).on('click','.with-submenu > a', function (event) {
        if($(window).width() < 1329){
            event.preventDefault();
            $(this).closest('.with-submenu').toggleClass('active');
            $(this).closest('.with-submenu').find('.submenu').stop().slideToggle();
        }
    })

    $(document).on('click','.with-submenu-deep > a', function (event) {
        if($(window).width() < 1329){
            event.preventDefault();
            $(this).closest('.with-submenu-deep').toggleClass('active');
            $(this).closest('.with-submenu-deep').find('.submenu-deep').stop().slideToggle();
        }
    })

    //mobile phones
    $('.toggle-phones').on('click', function () {
        $(this).closest('.mobile-phones').find('.phones-list').slideToggle(300);
    });

    //toggle menu
    $('.toggle-menu').on('click', function () {
        $(this).toggleClass('active');
        $(this).closest('.header').find('.header__main').slideToggle(300);
    });

    //catalog hover
    $('.hover-item').on({
        mouseenter: function () {
            $(this).closest('.left-right-1').find('.lr-text').addClass('change-width');
            $(this).closest('.left-right-1').find('.hover-item').addClass('hover');
        },
        mouseleave: function () {
            $(this).closest('.left-right-1').find('.lr-text').removeClass('change-width');
            $(this).closest('.left-right-1').find('.hover-item').removeClass('hover');
        },
    });

    //parallax
    $('.big-logo').paroller();

    //SVG text width
    $('.svg-text svg').each(function () {
        var textWidth = $(this).find('tspan')[0].getBoundingClientRect().width;
        $(this).width(textWidth);
    });


    //tabs
    $('.tabs__caption').on('click', 'li:not(.active)', function() {
        
        var tab = $(this).closest('.tabs').find('.tabs__content'),
            i = $(this).index();

            $(this).addClass('active').siblings().removeClass('active');

            tab.eq(i).siblings('.tabs__content:visible').stop().fadeOut(300, function(){
                tab.eq(i).stop().fadeIn(300);
            });
    });

    //accordeon
    $('.acc-head').on('click', function () {
        $(this).toggleClass('active');
        $(this).closest('.acc-item').find('.acc-body').slideToggle(500).toggleClass('active');
    });

    //scroll top
    $(".scroll-top").on('click', function() {
        $("html, body").animate({scrollTop: 0}, 2000);
    });

    //hover amenities
    $(document).on('mouseenter','.hover-image-list .item', function (event) {
        var i = $(this).index();
        $(this).closest('.hover-image-container').find('.hover-image-wrapper .bg').eq(i).addClass('active').siblings('.bg').removeClass('active');

    }).on('mouseleave','.hover-image-list .item',  function(){
        $(this).closest('.hover-image-container').find('.hover-image-wrapper .bg').last().addClass('active').siblings('.bg').removeClass('active');
    });


    //filter products
    $('.filter-products .title').on('click', function(){
        $(this).toggleClass('active');
        $(this).siblings('.content-fl').slideToggle();
    });


    /*###############*/
    /* SLIDER RANGE */
    /*###############*/

    _functions.initRange = function(el){

        noUiSlider.create(el[0], {
            start: [$(el[0]).data('start'), $(el[0]).data('end')],
            connect: true,
            step: 1,
            tooltips: true,
            // connect: [true, false],
            range: {
                'min': $(el).data('min'),
                'max': $(el).data('max')
            },
            format: wNumb({
                decimals: 0,
                suffix: ' грн'
            })
        });

        // var minCostInput = $(el[0]).parents('.filters-range').find('.minCost'),
        //     maxCostInput = $(el[0]).parents('.filters-range').find('.maxCost');
        

        // el[0].noUiSlider.on('update', function( values, handle ) {

        //     if ( handle ) {
        //         maxCostInput.val(~~values[handle]);
        //     } else {
        //         minCostInput.val(~~values[handle]);
        //     }

        // });


        // minCostInput[0].addEventListener('change', function(){
        //     el[0].noUiSlider.set([this.value, null]);
        // });

        // maxCostInput[0].addEventListener('change', function(){
        //     el[0].noUiSlider.set([null, this.value]);
        // });

    };

    $('.slider-range').each(function () {
        _functions.initRange($(this));
    });



    $('.compare-button').on('click', function(){
        $(this).toggleClass('compare');
    });

    $('.filter-products-btn').on('click', function(){
        $(this).parents('.filter-products-wrap').toggleClass('active');
    });






    /*###############*/
    /* TABS */
    /*###############*/

    $('.tab-title').on('click', function() {
        $(this).parent().toggleClass('active');
    });
    

    $('.tab-toggle div').on('click', function() {


        var tab = $(this).closest('.tabs-wrapper').children('.tab');
        var i = $(this).index();

        $(this).addClass('active').siblings().removeClass('active');

        tab.eq(i).siblings('.tab:visible').stop().fadeOut(300, function(){
            tab.eq(i).stop().fadeIn(300);
        });
        

        $(this).closest('.tab-nav').removeClass('active').find('.tab-title span').text($(this).text());

    });


    /*###############*/
    /* product-detail-filter */
    /*###############*/

    $('.product-detail-filter .item').on('click', function(){
        $(this).addClass('active').siblings('.item').removeClass('active');
    });

    /*###############*/
    /* SELECT */
    /*###############*/

    $('.select').SumoSelect();


    /*###############*/
    /* order area */
    /*###############*/
    $('.order-popup .order-popup-area').on('input', function(){
        $(this).val($(this).val().replace(/[A-Za-zА-Яа-яЁё]/, ''))

        var $this = $(this),
            a = +$this.val();

        if(a >= 50){
            $this.parents('.order-popup').find('.order-popup-type-1').stop().fadeOut(300, function(){
                $this.parents('.order-popup').find('.order-popup-type-2').stop().fadeIn(300);
            });
        }else{
            $this.parents('.order-popup').find('.order-popup-type-2').stop().fadeOut(300, function(){
                $this.parents('.order-popup').find('.order-popup-type-1').stop().fadeIn(300);
            });
        }
    });
        
    $('.btn-toggle').on('click', function(){
        $(this).toggleClass('added');
    });

    $('.product-detail-color .item-color').on('click', function(){
        var a = $(this).data('color');
        $(this).addClass('active').siblings('.item-color').removeClass('active');
        $(this).parents('.product-detail-color-js').find('.product-detail-color-sw' + '.' + a)
        .addClass('active').siblings('.product-detail-color-sw').removeClass('active');
    });


    //quantity-el add
    $('.quantity-elements .add').on('click', function(){
        var a = $(this).siblings('input'),
            v = +a.val(),
            max = +a.data('max'),
            s = +a.data('step'),
            r = v + s;
            
            a.val(r <= max ? r : max).trigger("change");
    
    })

    //quantity-el dec
    $('.quantity-elements .dec').on('click', function(){
        var a = $(this).siblings('input'),
            v = +a.val(),
            min = +a.data('min'),
            s = +a.data('step'),
            r = v - s;
            
            a.val(r >= min ? r : min).trigger("change");
    })

    //paralax
    var is_IE = /MSIE 9/i.test(navigator.userAgent) || /rv:11.0/i.test(navigator.userAgent) || /MSIE 10/i.test(navigator.userAgent) || /Edge\/\d+/.test(navigator.userAgent);

    if(!is_IE && $('.rellax').length && $(window).width() > 1199){
        var rellax = new Rellax('.rellax', {
            center: true
        });
    }

    $('.menu-top-wrap .title').on('click', function(){
        $(this).parents('.menu-top-wrap').toggleClass('active');
    });

    /*###############*/
    /* DROP MENU */
    /*###############*/

    $('.drop-menu-inner').on('click', function(){
        $(this).parents('.drop-menu').toggleClass('active');
    });

    $('.profile-categories-sub > a').on('click', function(e){
        e.preventDefault();
        $(this).parents('.profile-categories-sub').find('ul').slideToggle();
    });

    $('.filter-list-sub > a').on('click', function(e){
        e.preventDefault();
        $(this).parents('.filter-list-sub').find('ul').slideToggle();
    });


    $(".order-delivery-rd input").on('change', function(){
        if($('.order-delivery-input').prop('checked')){
            $('.order-delivery-form').slideDown();
        }else{
            $('.order-delivery-form').slideUp();
        }
    
    });

    //compare-table

    $(".compare-table").clone(true).appendTo('.compare-table-scroll').addClass('clone');
    $(window).on('resize load', function(){
        var w = +window.innerWidth,
            c = +$('.js-container-width').width(),
            r = (w - c) / 2,
            s = w - r;
        $('.compare-table-scroll .table-wrap').css("maxWidth", s + "px")
    });

    //compare-remove

    $('.compare-remove').on('click', function(){
        var i = $(this).parents('th').index();

        $('.compare-table').find('tr').each(function(){
            console.log($(this));
            $(this).find('td').eq(i).hide();
            $(this).find('th').eq(i).hide();
        });

    });


    //compare-btn

    $('.compare-btn').on('click', function(){
        $(this).toggleClass('active');
    });

    $('.product-detail-filter-js .item').on('click', function(){
        $('.product-detail-price-js span').html($(this).data('price'));
    });


    $('.quantity-elements input').on('change', function(){
        var v = +$(this).val(),
            p = +$(this).parents('.quantity-elements').data('price');

            $('.product-detail-price-js span').html(p * v);

    });

    //profile-menu-title
    $('.profile-menu-title').on('click', function(){
        $(this).parents('.profile-menu').toggleClass('active');
    });

    /*###############*/
    /* lightgallery */
    /*###############*/

    $('.lightgallery').each(function () {
        $($(this)).lightGallery({
            selector: '.lightgallery-simple',
            pager: true,
            counter: false,
            download: false,
            hideControlOnEnd: true,
        });
    });

    //input-number
    
    $('.input-number').on('input', function(){
        $(this).val($(this).val().replace(/[A-Za-zА-Яа-яЁё]/, ''));
    });

    $('.input.invalid').keyup( function(){

        if($(this).val()){
            $(this).removeClass('invalid');
        }else{
            $(this).addClass('invalid');
        }
        
    });


    //drag scrolling
    if($('.drag-scrolling').length){

        const dragScrolling = document.querySelector('.drag-scrolling');
        let isDown = false;
        let startX;
        let scrollLeft;

        dragScrolling.addEventListener('mousedown', (e) => {
          isDown = true;
          dragScrolling.classList.add('active');
          startX = e.pageX - dragScrolling.offsetLeft;
          scrollLeft = dragScrolling.scrollLeft;
        });
        dragScrolling.addEventListener('mouseleave', () => {
          isDown = false;
          dragScrolling.classList.remove('active');
        });
        dragScrolling.addEventListener('mouseup', () => {
          isDown = false;
          dragScrolling.classList.remove('active');
        });
        dragScrolling.addEventListener('mousemove', (e) => {
          if(!isDown) return;
          e.preventDefault();
          const x = e.pageX - dragScrolling.offsetLeft;
          const walk = (x - startX) * 1; //scroll-fast
          dragScrolling.scrollLeft = scrollLeft - walk;
        });

    }

});