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

	setTimeout( function(){
		$("#loader-wrapper").fadeOut(0);
	},100);

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

	var popupTop = 0;
	function removeScroll() {
		popupTop = $(window).scrollTop();
		$('html').css({
			"position": "fixed",
			"top": -$(window).scrollTop(),
			"width": "100%"
		});
	}
	function addScroll() {
		$('html').css({
			"position": "static"
		});
		window.scroll(0, popupTop);
	}
	_functions.openPopup = function(popup){
		$('.popup-content').removeClass('active');
		$(popup + ', .popup-wrapper').addClass('active');
		removeScroll();
	};

	_functions.closePopup = function () {
        $('.popup-wrapper, .popup-content').removeClass('active');

        $('#video-popup iframe').remove();

        addScroll();
    };

    _functions.videoPopup = function (src, videoType) {
        if (videoType === 'youtube') {
            $('#video-popup .embed-responsive').html('<iframe src="' + src + '"></iframe>');
        } else if (videoType === 'html') {
            $('#video-popup .embed-responsive').html('<video autoplay controls playsinline class="active"><source src="'+src+'" type="video/mp4"></video>');
        }
        _functions.openPopup('#video-popup');
    };

    $(document).on('click', '.video-popup', function (e) {
        e.preventDefault();
        var src, videoType;

        if ($(this).data('youtube-src')) {
            src = $(this).data('youtube-src');
            _functions.videoPopup(src, 'youtube');
        } else if ($(this).data('html-src')) {
            src = $(this).data('html-src');
            _functions.videoPopup(src, 'html');
        }
    });

    _functions.imagePopup = function (bg) {
		$('#image-popup .popup-align').html('<img src="'+bg+'">');

        _functions.openPopup('#image-popup');
    };

    // $(document).on('click', '.open-img', function (e) {
    // 	if($(window).width()>991){
    // 		e.preventDefault();
	   //      var bg = $(this).find('.bg').data('bg');
	   //      _functions.imagePopup(bg);

    // 	}
        
    // });


	$(document).on('click', '.open-popup', function(e){
		e.preventDefault();
		_functions.openPopup('.popup-content[data-rel="' + $(this).data('rel') +'"]');
	});

	$(document).on('click', '.popup-wrapper .btn-close, .popup-wrapper .layer-close, .popup-wrapper .close-popup', function(e){
		e.preventDefault();
		_functions.closePopup();
	});


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

	// createFullpage();

	var fullp = false,
		posBg = $('#content-block').data('position');

	if($(window).width() > 1200 && $(window).height() > 599){
		createFullpage();
	}

	$(window).resize(function(){

		if($(window).width() < 1200 || $(window).height() < 599){
			if(fullp && $('#fullpage').length > 0){
				fullpage_api.destroy('all');
			}
		}else if($(window).width() > 1200 && $(window).height() > 599){
			createFullpage();
		}
	});

	function createFullpage() {

		fullp = true;

		new fullpage('#fullpage', {
			// scrollHorizontally: false,
			menu: '#fullpage-menu, #fullpage-menu-two, .footer-inner, .catalog-menu',
			animateAnchor: true,
			easingcss3: 'ease-out',
			recordHistory: true,
			normalScrollElements: '.hidden-scroll-content .scroll-lr',
			responsiveSlides: 1200,

			onLeave: function(index, origin, direction){

				

				if(origin.isLast){
					$('.navigation-panel').addClass('last-section');
					$('.navigation-panel').removeClass('first-section');
	                $('.footer').addClass('last-section');
	            }else if(origin.isFirst){
	            	$('.navigation-panel').addClass('first-section');
	            	$('.navigation-panel').removeClass('last-section');
					$('.footer').removeClass('last-section');
	            }else{
	            	$('.navigation-panel').removeClass('last-section');
	            	$('.navigation-panel').removeClass('first-section');
	            	$('.footer').removeClass('last-section');
	            }

	            if($(origin.item).hasClass('catalog-menu-show')){
	            	$('.catalog-menu').addClass('show');
	            }else{
	            	$('.catalog-menu').removeClass('show');
	            }

	            if($(origin.item).hasClass('catalog-menu-color')){
	            	$('.catalog-menu').addClass('color');
	            }else{
	            	$('.catalog-menu').removeClass('color');
	            }


	           	var movBg = $('#content-block').data('movement');

	            if(direction == 'up'){
					posBg += movBg;
					$('#content-block').css('background-position-y', posBg);
				}else{
					posBg -= movBg;
					$('#content-block').css('background-position-y', posBg);
	            }

			},

			afterLoad: function(index, origin){


				
				if(origin.isLast){
					$('.navigation-panel').addClass('last-section');
					$('.navigation-panel').removeClass('first-section');
	                $('.footer').addClass('last-section');
	            }else if(origin.isFirst){
	            	$('.navigation-panel').addClass('first-section');
	            	$('.navigation-panel').removeClass('last-section');
					$('.footer').removeClass('last-section');
	            }else{
	            	$('.navigation-panel').removeClass('last-section');
	            	$('.navigation-panel').removeClass('first-section');
	            	$('.footer').removeClass('last-section');
	            }

			},

		});
	}


	$('.js-scroll-next').click(function(){
	    fullpage_api.moveSectionDown();
	});


	$('.js-scroll-prev').click(function(){
	   fullpage_api.moveSectionUp();
	});

	//Open menu
	var menuOpened = 0;
    $(document).on('click', '.hamburger, .header-layer', function(){

        $('.header').toggleClass('open-menu');

        if (!menuOpened) {
        	menuOpened = 1;

        	if(fullp){
            	fullpage_api.setAllowScrolling(false); 
            }
        } else {
            menuOpened = 0;
            if(fullp){
            	fullpage_api.setAllowScrolling(true);
            }
        }
    });

    //anchor mobile
    $(document).on('click', '.header .nav li a', function(){

    	menuOpened = 0;

    	if(fullp){
    		fullpage_api.setAllowScrolling(true);
    	}
		
		$('.header').removeClass('open-menu');



		if($(window).width() < 1200 || $(window).height() < 599){
			event.preventDefault();

			var a = $(this).data('menuanchor');
			var t = $('[data-anchor="'+a+'"]').offset().top - 70;

			$('body,html').animate({scrollTop: t}, 1000);

		}

	});

	//anchor mobile
    $(document).on('click', '.anchor-item', function(){

		if($(window).width() < 1200 || $(window).height() < 599){
			event.preventDefault();

			var a = $(this).data('menuanchor');
			var t = $('[data-anchor="'+a+'"]').offset().top - 80;

			$('body,html').animate({scrollTop: t}, 1000);

		}

	});



	$(document).on('click', '.header .language', function(){
		$(this).toggleClass('active');
	});






});
 