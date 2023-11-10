var _functions = {};

jQuery(function($) {

	"use strict";

	/*###############*/
	/* FUNCTION ON DOCUMENT READY */ 
	/*###############*/

	if (navigator.userAgent.indexOf("Firefox") >= 0) {
		$('body').addClass('firefox');
	}
	if (navigator.userAgent.indexOf('Edge') >= 0) {
		$('body').addClass('edge');
	}
	if (navigator.userAgent.indexOf("Trident") >= 0) {
		$('body').addClass('ie');
	}
	if (navigator.userAgent.indexOf('Safari') >= 0 && navigator.userAgent.indexOf('Chrome') < 0) {
		$('body').addClass('safari');
	}
	if (navigator.userAgent.indexOf('Chrome') >= 0 && navigator.userAgent.indexOf('Edge') < 0) {
		$('body').addClass('chrome');
	}

	// setTimeout( function(){
	// 	$("#loader-wrapper").fadeOut(0);
	// },100);

	$('[data-bg]').each(function(i, el){
		$(el).css({'background-image': 'url('+$(el).data('bg')+')'});
	});

	$('img[data-src]').each(function(i, el){
		$(el).attr({'src': $(el).data('src')});
	});

	/*###############*/
	/* ANIMATIONS */
	/*###############*/

	_functions.customAnimation = function() {
		if ($('.animation').length) {
			$('.animation').each(function() {
				if ($(this).offset().top < $(window).scrollTop() + $(window).height()) {
					$(this).addClass('animated');
				}
			});
		}
	}
	_functions.scrollHeadern = function() {
		var a = $(window).scrollTop();

        if(a > 20) {
			$('.header').addClass('scrolled');
        } else if(a < 20) {
			$('.header').removeClass('scrolled');
        }
	}

	/*###############*/
	/* SCROLL */
	/*###############*/

	$(window).on('scroll load', function(){
		_functions.customAnimation();
		_functions.scrollHeadern();
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

	/*###############*/
	/* POPUP */
	/*###############*/

	function removeScroll() {
		$('html').css({
			"overflow": "hidden"
		});
	}
	function addScroll() {
		$('html').css({
			"overflow": "visible"
		});
	}
	_functions.openPopup = function(popup){
		$('.popup-content').removeClass('active');
		$(popup).addClass('active').parents('.popup-wrapper').addClass('active');
		removeScroll();
	};

	_functions.closePopup = function(){
		$('.popup-wrapper, .popup-content').removeClass('active');
		addScroll();
	};

	_functions.textPopup = function(title, description){
		$('#text-popup .text-popup-title').html(title);
		$('#text-popup .text-popup-description').html(description);
		_functions.openPopup('#text-popup');
	};

	$(document).on('click', '.open-popup', function(e){
		e.preventDefault();
		_functions.openPopup('.popup-content[data-rel="' + $(this).data('rel') +'"]');
	});

	$(document).on('click', '.popup-wrapper .btn-close, .popup-wrapper .close-popup, .popup-wrapper .layer-close, .popup-wrapper .close-popup', function(e){
		e.preventDefault();
		_functions.closePopup();
	});

	// thanks popup

	_functions.thanksPopup = function(){
		event.preventDefault();
		_functions.openPopup('.popup-content[data-rel="thanks-popup"]');
		
		// setTimeout( function(){
		// 	_functions.closePopup();
		// },3000);
	};

		// swiper sliders 

		_functions.getSwOptions = function(swiper){
			var options = swiper.data('options'),
				slidesLength = swiper.find('.swiper-slide').length;


			options = (!options || typeof options !=='object') ? {} : options;
			var $p = swiper.closest('.swiper-entry');

			if(slidesLength === 1) $p.addClass('single-slide-swiper');

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
			options.speed = 500;
			options.roundLengths = false;
			// if(isTouchScreen) options.direction = "horizontal";
			return options;
		};

		

		_functions.swiperDesert = function(el){
			var slWrapper = $(el.$el[0]).closest('.desert-slides'),
					slActive = slWrapper.find('.swiper-slide-active'),
					slNext = slActive.next('.swiper-slide'),
					slPrev = slActive.prev('.swiper-slide');

				slWrapper.find('.desert-btn-prev .circle').css({'background': slPrev.data('color')});
				slWrapper.find('.desert-btn-next .circle').css({'background': slNext.data('color')});
				
				slWrapper.find('.desert-btn-prev .icon-pr img').animate({opacity: 0.3}, 220).attr('src', slPrev.data('image')).animate({opacity: 1}, 220);
				slWrapper.find('.desert-btn-next .icon-pr img').animate({opacity: 0.3}, 220).attr('src', slNext.data('image')).animate({opacity: 1}, 220);
		}

		_functions.swiperRealFruits = function(el){
			var slWrapper = $(el.$el[0]).closest('.real-fruits-slides');

			if(slWrapper.length){
				var $index = el.realIndex;
				$(slWrapper).find('.real-fruits-list').children('li').eq($index).addClass('active').siblings('li').removeClass('active');
			}
					
		}

		_functions.initSwiper = function(el){
			var swiper = new Swiper(el[0], _functions.getSwOptions(el));

			_functions.swiperDesert(swiper);

			swiper.on('slideChangeTransitionEnd', function () {

				_functions.swiperDesert(swiper);
				_functions.swiperRealFruits(swiper);

			});

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


		$('.real-fruits-list > li').on('click', function() {
			var $this = $(this),
			$wrapper = $this.closest('.real-fruits-slides'),
			$index = $this.index() + 1,
			$swiper = $wrapper.find('.swiper-container')[0].swiper;
   
			$swiper.slideTo($index, 500);
   
		});




	//height basket
	_functions.heightBasket = function(){
		if($('.height-wrapper').length > 0){
			var n = 0;

			$('.height-wrapper .height-offset').each(function(i, el){
				var a = parseInt($(el).outerHeight());
				n += a;
			});

			$('.height-wrapper .height-inner').css({'height': 'calc(100vh - ' + n + 'px)'});
		}
	}

	_functions.heightBasket();

	$(window).on('resize load', function(){
		_functions.heightBasket();
	});

	//show text
    $(document).on('click', '.btn-show-text', function(){
		// $('.wrapper-hidden[data-show="' + $(this).data('show') +'"]').slideToggle(280);
		$(this).parents('.seo-text-sc').find('.wrapper-hidden').slideToggle(280);
        $(this).hide().siblings('.btn-show-text').show();
	});


	//anchor scroll
	$('a.onScroll').on('click', function(){

		event.preventDefault();
	
		var a = $(this).attr('href'),
			t = $(a).offset().top - 20;

			$('body,html').animate({scrollTop: t}, 1000);

	});


	//quantity-product add
	$('.quantity-product .add').on('click', function(){
		var a = $(this).siblings('input'),
			v = +a.val(),
			max = +a.data('max'),
			s = +a.data('step'),
			r = v + s;
			
			a.val(r <= max ? r : max).trigger("change");
	
	})

	//quantity-product dec
	$('.quantity-product .dec').on('click', function(){
		var a = $(this).siblings('input'),
			v = +a.val(),
			min = +a.data('min'),
			s = +a.data('step'),
			r = v - s;
			
			a.val(r >= min ? r : min).trigger("change");
	})


	//quantity basket price
	_functions.quantityPrice = function(){

		var total = 0;

		$('.product-cart-wrapper .product-cart').each(function(i, el){
			var p = +$(el).attr('data-price'),
				n = +$(el).find('.quantity-product input').val(),
				t = n * p;

				total += t;
		});



		$('.cart-total-price span').html(total.toFixed(2));
	}

	_functions.quantityPrice();

	//change quantity in basket 
	$('.product-cart-wrapper .product-cart input').on('change', function(){
		_functions.quantityPrice();
	})

	//delete product from basket
	$('.product-cart .product-delete').on('click', function(){
		$(this).parents('.product-cart').slideUp(300, function(){ $(this).remove(); });
		setTimeout(_functions.quantityPrice, 500);
	});

	//select
    
	$('select').SumoSelect();

	// slide toggle
	$('.slide-toggle-btn').on('click', function(){
		$(this).toggleClass('active');
		$(this).parents('.slide-toggle-wrap').find('.slide-toggle-inner').slideToggle();
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

	$('.header-inner .user-menu').on('click', function() {
		$(this).toggleClass('active');
	});

	//burger btn-show

	var menuOpened = false;

	$(document).on('click', '.btn-show, .header-layer', function(){

		if($(this).parents('.header').hasClass('active')){
			$(this).removeClass('active');
			$(this).parents('.header').removeClass('active');
			$('html').removeClass('overflow-hidden');
			menuOpened = false;
		}else{
			$(this).addClass('active');
			$(this).parents('.header').addClass('active');
			$('html').addClass('overflow-hidden');
			menuOpened = true;
		}

	});

	function pageScroll(current,header_height){
		$('html, body').animate({scrollTop: current.offset().top - header_height}, 700);
	}

	$('a[href*="#"]:not([href="#"])').click(function() {
        var $this = $(this);
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			
            if (target.length) {
                if (menuOpened) {
					menuOpened = false;
					$('.header').removeClass('active');
					$('html').removeClass('overflow-hidden');
					pageScroll(target, $('header').outerHeight() + 40);
                } else {
                    pageScroll(target, $('header').outerHeight() + 40);
				}	

                return false;
            }
        }
    });

    var hash= window.location.hash;

    if ( hash !== '' && hash !== '#' && hash !== undefined ) {
        var target = $(hash),
            headerHeight = $('header').outerHeight();

        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');

        if (target.length) {
            $('html,body').animate({
                scrollTop: target.offset().top - headerHeight - 30 //offsets for fixed header
            });

        }
        window.location.hash = '';
    }



});
 