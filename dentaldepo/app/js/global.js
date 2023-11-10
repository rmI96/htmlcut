var _functions = {}, winW, winH, winScr, isTouchScreen, is_Mac, isIE;

jQuery(function($) {

	"use strict";
        
    /* function on page ready */
    isTouchScreen = navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i);
    is_Mac = navigator.platform.toUpperCase().indexOf('MAC') >= 0;
    isIE = /MSIE 9/i.test(navigator.userAgent) || /rv:11.0/i.test(navigator.userAgent) || /MSIE 10/i.test(navigator.userAgent);

    $('body').addClass('loaded'); 

    if (isTouchScreen) $('html').addClass('touch-screen');
    if (is_Mac) $('body').addClass('mac');
    if (isIE) $('body').addClass('ie');
    if (navigator.userAgent.indexOf('Safari') >= 0 && navigator.userAgent.indexOf('Chrome') < 0) {
        $('body').addClass('safari');
    }
    if (navigator.userAgent.indexOf('Edge') >= 0) {
        $('body').addClass('edge');
    }


    _functions.pageCalculations = function () {
        winW = $(window).width();
        winH = $(window).height();
    }

    _functions.pageCalculations();

    //images preload
    setTimeout(function() {

        /* images load */
        $('img[data-i-src], iframe[data-i-src]').each(function (i, el) {
            $(el).attr({'src': $(el).data('i-src')}).addClass('imgLoaded');
        });

        $('[data-bg]').each(function (i, el) {
            $(el).css({'background-image': 'url(' + $(el).data('bg') + ')'});
        });

        // if (winW > 767) {
        //     $('img[data-i-md-src], iframe[data-i-md-src]').each(function (i, el) {
        //         $(el).attr({'src': $(el).data('i-md-src')}).addClass('imgLoaded');
        //     });
        // }

    }, 100);

	/* function on page scroll */
	$(window).scroll(function(){
		_functions.scrollCall();
	});

    _functions.scrollCall = function() {
        winScr = $(window).scrollTop();
        if(winScr > 30) {
            $('header').addClass('scrolled');
        } else {
            $('header').removeClass('scrolled');
        }

        _functions.customAnimation();

        //rotate decor
        if ($('.rotate-decor').length) {
            $('.rotate-decor').each(function () {
                $(this).css({'transform': 'rotate(' + winScr * 0.05 + 'deg)'});
            });
        }
    }

    setTimeout(_functions.scrollCall, 0);

    //animation
    _functions.customAnimation = function () {
        if ($('.anime').length) {
            $('.anime').not('.animated').each(function () {
                if (winScr >= $(this).offset().top - (winH * 0.95)) {
                    $(this).addClass('animated');
                }
            });
        }
    };

    /* function on page resize */
    _functions.resizeCall = function () {
        setTimeout(function () {
            _functions.pageCalculations();
        }, 100);
    };

    if (!isTouchScreen) {
        $(window).resize(function () {
            _functions.resizeCall();
        });
    } else {
        window.addEventListener("orientationchange", function () {
            _functions.resizeCall();
        }, false);
    }

	/* swiper sliders */
	_functions.getSwOptions = function(swiper){
		var options = swiper.data('options'),
            slidesLength = swiper.find('.swiper-slide').length;

        options = (!options || typeof options !=='object') ? {} : options;
        var $p = swiper.closest('.swiper-entry');

        if (slidesLength === 1) $p.addClass('single-slide-swiper');

        if(!options.pagination) options.pagination = {
            el: $p.find('.swiper-pagination')[0],
            clickable: true
        };
		if(!options.navigation) options.navigation = {
            nextEl: $p.find('.swiper-button-next')[0],
            prevEl: $p.find('.swiper-button-prev')[0]
        };
		options.preloadImages = false;
		options.lazy = {loadPrevNext: true};
		options.observer = true;
		options.observeParents = true;
		options.watchOverflow = true;
        if(!options.speed) options.speed = 500;
		options.roundLengths = false;
        if(isTouchScreen) options.direction = "horizontal";
        if (options.loop && slidesLength == 1) options.loop = false;
		return options;
	};
	_functions.initSwiper = function(el){
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
    
    //popup
    var popupTop = 0;
    function removeScroll() {
        popupTop = $(window).scrollTop();
        $('html').css({
            "position": "fixed",
            "top": -$(window).scrollTop(),
            "width": "100%"
        });
        $('body').addClass('remove-scroll');
    }
    function addScroll() {
        $('html').css({
            "position": "static"
        });
        window.scroll(0, popupTop);
        $('body').removeClass('remove-scroll');
    }

	_functions.openPopup = function(popup){
        $('.popup-content').removeClass('active');
        $(popup + ', .popup-wrapper').addClass('active');
        removeScroll();
	};

    _functions.videoPopup = function (src) {
        $('#video-popup .embed-responsive').html('<iframe src="' + src + '"></iframe>');
        _functions.openPopup('#video-popup');
    };

	_functions.closePopup = function(){
		$('.popup-wrapper, .popup-content').removeClass('active');

        // $('.popup-iframe').html('');
        $('#video-popup iframe').remove();

		addScroll();
	};

	_functions.textPopup = function(title, description){
		$('#text-popup .text-popup-title').html(title);
		$('#text-popup .text-popup-description').html(description);
		_functions.openPopup('#text-popup');
	};

    $(document).on('click', '.video-popup', function (e) {
        e.preventDefault();
        _functions.videoPopup($(this).data('src'));
    });

	$(document).on('click', '.open-popup', function(e){
		e.preventDefault();
        _functions.openPopup('.popup-content[data-rel="' + $(this).data('rel') +'"]');
	});

	$(document).on('click', '.popup-wrapper .btn-close, .popup-wrapper .layer-close', function(e){
		e.preventDefault();
		_functions.closePopup();
	});

    // Esc close popup
    $(document).on('keyup', function(e) {
        if ( e.keyCode === 27 && $('.popup-wrapper').hasClass('active') ) {
            _functions.closePopup();
        }
    });

    //menu
    var menuOpened = 0;
    $('.hamburger').on('click', function(){
        $(this).toggleClass('active');
        $('.header').toggleClass('active');

        if (!menuOpened) {
            removeScroll();
            menuOpened = 1;
        } else {
            addScroll();
            menuOpened = 0;
        }
    });

    $(document).on('click', '.header.active .header_mobile_layer', function() {
        $('.hamburger').trigger('click')
    });

    //input
    $('.input').each(function() {
        if ($(this).val()) {
            $(this).closest('.input-wrapper').addClass('dirty');
        }
    });

    $(document).on('focus', '.input', function() {
        $(this).closest('.input-wrapper').addClass('focus');
    });

    $(document).on('blur', '.input', function () {
        $(this).parent().removeClass('focus');
        if (!$(this).val()) {
            $(this).closest('.input-wrapper').removeClass('dirty');
        }
    });

    $(document).on('keyup', '.input', function () {
        $(this).closest('.input-wrapper').addClass('dirty');
    });

    // detect if user is using keyboard tab-button to navigate
    // with 'keyboard-focus' class we add default css outlines
    function keyboardFocus (e) {
        if (e.keyCode !== 9) {
            return;
        }

        switch (e.target.nodeName.toLowerCase()) {
            case 'input':
            case 'select':
            case 'textarea':
                break;
            default:
                document.documentElement.classList.add('keyboard-focus');
                document.removeEventListener('keydown', keyboardFocus, false);
        }
    }
    document.addEventListener('keydown', keyboardFocus, false);

    // tabs
    var tabsFinish = 0;
    $('.js-tab-menu').on('click', function () {

        if (tabsFinish) return false;

        var $this = $(this),
            tab = $this.closest('.js-tabs').find('.js-tab'),
            i = $this.index();

        tabsFinish = 1;

        $this.addClass('active').siblings().removeClass('active');
        tab.eq(i).siblings('.js-tab:visible').fadeOut(function () {
            // tab.eq(i).fadeIn(function() {
            //     tabsFinish = 0;
            // });
            tab.eq(i).css({'display': 'block', 'opacity': 0});
            tab.eq(i).find('.swiper-container')[0].swiper.update();
            tab.eq(i).animate({'opacity': 1}, function() {
                tabsFinish = 0;
            });
        });
    });

    //scroll to
    $('.scroll-to').on('click', function() {
        $('body, html').animate({
            'scrollTop':$('.scroll-to-block[data-rel="'+$(this).data('rel')+'"]').offset().top - $('.header').outerHeight()
        }, 800);
    });

    //mobile dropdown
    $('.mob-drop-title').on('click', function () {
        var $this = $(this);
        $this.closest('.mob-drop-wrap').toggleClass('active');
    });

    $('.drop-list li').on('click', function () {
        var $this = $(this);
        $this.closest('.mob-drop-wrap').removeClass('active').find('.mob-drop-title').text($this.text());
    });

    //inputmask
    if ($('.inputmask').length) {
        $('.inputmask').inputmask({
            clearMaskOnLostFocus: false
        });
    }

    //card
    $('.js-open-card').on('click', function() {
        $(this).toggleClass('active');
        $('.card').toggleClass('active');
        $('.header').toggleClass('card-active');

        if(!$(this).hasClass('active')){
            addScroll();
        }else{
            removeScroll();
        }
        
    });

    _functions.hideCard = function() {
        $('.js-open-card').removeClass('active');
        $('.card').removeClass('active');
        $('.header').removeClass('card-active');
        addScroll();
    }

    $('.search-bg-layer, .card .btn-close, .card .card-close').on('click', _functions.hideCard);

    //search
    _functions.hideSearch = function() {
        $('.js-open-search').removeClass('active');
        $('.header').removeClass('search-active');
        $('.search-input').blur();
        addScroll();
    }

    $('.js-open-search').on('click', function () {
        $(this).toggleClass('active');
        $('.header').toggleClass('search-active');
        $('.search-input').focus();
        
        if(!$(this).hasClass('active')){
            addScroll();
        }else{
            removeScroll();
        }

    });

    $('.search-input-wrap .btn-close, .search-bg-layer').on('click',  _functions.hideSearch);

    //esc button close search
    $(document).on('keyup', function(e) {
        if (e.keyCode === 27 ) {
            _functions.hideSearch();
            _functions.hideCard();
        }
    });

    var searchSource = [
        'Пошук',
        'Fluor Protector Лак, 5х1 мл',
        'PROPHYflex 4 Perio Kit набір PROPHYflex 4 содоструменевий наконечник',
        'PROPHYflex 4 содоструменевий наконечник,Лайм (салатовий), колір салатовий',
        'PROPHYflex 4 содоструменевий наконечник, Фламінго (рожевий), колір рожевий'
    ];
    $('.search-input').autocomplete({
        minLength: 3,
        source: searchSource
    }).autocomplete("instance")._renderItem = function(ul, item) {
        //
        var re = new RegExp( '(' + this.term + ')', 'gi' ),
            template = '<span class="autocomplete-highlight">$1</span>',
            label = item.label.replace( re, template );

        //create custom autocomplete results
        return $('<li class="each">')
            .append('<span><span>' +label+ '</span>').appendTo(ul);
    }

    jQuery.ui.autocomplete.prototype._resizeMenu = function () {
        var ul = this.menu.element;
        ul.outerWidth(this.element.outerWidth());
    }

    //plus-minus
    $(document).on('click', '.decrement', function() {
        var $this = $(this),
            $input = $this.parent().find('input'),
            value = parseInt($input.val(),10);
        if (value != 1) {
            value = value - 1;
        } else {
            value = 1;
        }
        $input.val(value);
    });

    $(document).on('click', '.increment', function() {
        var $this = $(this),
            $input = $this.parent().find('input'),
            value = parseInt($input.val(),10);
        $input.val(value + 1);
    });

    //format price
    var priceFormatter = new Intl.NumberFormat('en-US', {
        style: 'currency',
        currency: 'USD',
        currencyDisplay: 'symbol'
    });
    //calculate price inside product
    $(document).on('click', '.js-product .thumb-input-number button', function(e) {
        var $this = $(this),
            prodPrice = parseInt($this.closest('.js-product').data('price')),
            $priceOutput = $this.closest('.js-product').find('.total-price-num'),
            amount = parseInt($this.siblings('input').val()),
            totalPrice;

        totalPrice = priceFormatter
            .format(prodPrice * amount)
            .substring(1);

        $priceOutput.text(totalPrice);
    });

    // cart popup total price
    _functions.calculateAllProductPrice = function() {
        var allSummProduct = 0;
        $('.card .js-product').each(function(){
            allSummProduct += +$(this).data('price') * +$(this).find('.thumb-input-number input').val();
        });
        allSummProduct = priceFormatter
            .format(allSummProduct)
            .substring(1);

        $('#card-total-price').html(allSummProduct);
    }

    _functions.calculateAllProductPrice();

    $(document).on('click', '.card .js-product .thumb-input-number button', function() {
        _functions.calculateAllProductPrice();
    });

    $(document).on('click', '.js-product .product_remove', function(){
        $(this).parents('.js-product').slideUp(250, function(){ $(this).remove(); });
        setTimeout(_functions.calculateAllProductPrice, 600);

    });


    //show text
    $(document).on('click', '.btn-show-text', function(){
		$(this).parents('.seo-text').find('.seo-text-hidden').slideToggle(300);
        $(this).hide().siblings('.btn-show-text').show();
    });
    
    //select
    
    $('select').SumoSelect();

    //filter slide

    $(document).on('click', '.products-filter .title', function(){
        var p = $(this).parents('.products-filter');
        if(p.hasClass('active')){
            p.removeClass('active');
            p.find('.content').slideToggle();
        }else{
            p.addClass('active');
            p.find('.content').slideToggle();
        }
    });

    // slider range 

	if($('#slider-range').length > 0){
		var slider = document.getElementById('slider-range');
		noUiSlider.create(slider, {
			start: [$(slider).data('start'), $(slider).data('end')],
			connect: true,
			step: 1,
			range: {
				'min': $(slider).data('min'),
				'max': $(slider).data('max')
			}
		});

		var minCostInput = document.getElementById('minCost'),
			maxCostInput = document.getElementById('maxCost');

		// When the slider value changes, update the input and span
		slider.noUiSlider.on('update', function( values, handle ) {
			if ( handle ) {
				maxCostInput.value = ~~values[handle];
			} else {
				minCostInput.value = ~~values[handle];
			}
		});

		minCostInput.addEventListener('change', function(){
			slider.noUiSlider.set([this.value, null]);
		});

		maxCostInput.addEventListener('change', function(){
			slider.noUiSlider.set([null, this.value]);
		});
		
	}



    //like product detail

    $(document).on('click', '.product-detail-like', function(){
        $(this).toggleClass('active');
    });

    //tabs

    $('.tab-toggle li').on('click', function() {
        var tab = $(this).closest('.tabs-wrapper').find('.tab');
        var i = $(this).index();
        $(this).addClass('active').siblings().removeClass('active');
        tab.eq(i).siblings('.tab:visible').fadeOut(function() {
            tab.eq(i).fadeIn();
        });
    });

    $(document).on('click', '.products-filter-btn', function(){
        $(this).parents('.products-filter-wrap').toggleClass('active');
    });

    // slide toggle
    $('.slide-wrapper .slide-btn').on('click', function(){
        $(this).toggleClass('active');
        $(this).parents('.slide-wrapper').find('.slide-content').slideToggle();
    });

    //user-menu
    $('.user-menu .inner').on('click', function(){
        $(this).parents('.user-menu').toggleClass('active');
    });

    //add to card button
    $('.btn-add-cart').on('click', function() {
        var $this = $(this);

        $this.addClass('load');

        setTimeout(function () {
            $this.removeClass('load');
            $this.addClass('last');
            setTimeout(function () {
                $this.removeClass('last');
            }, 3500);
        }, 2000);
        
    });

    //order
    $('.select-radio').change(function(){
        
        if($(this).is(':checked')){
            $('.new-post-block').slideDown();
        }
    });

    $('.select-radio1').change(function(){
        
        if($(this).is(':checked')){
            $('.new-post-block').slideUp();
        }
    });

    

});















