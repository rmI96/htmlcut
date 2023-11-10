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


	// createFullpage();

	var fullp = false;

	if($(window).width() > 1199 && $(window).height() > 599){
		createFullpage();
	}

	$(window).resize(function(){

		if($(window).width() < 1199 || $(window).height() < 599){
			if(fullp && $('#fullpage').length > 0){
				fullpage_api.destroy('all');
			}
		}else if($(window).width() > 1199 && $(window).height() > 599){
			createFullpage();
		}
	});

	function createFullpage() {

		fullp = true;

		new fullpage('#fullpage', {
			menu: '#fullpage-menu',
			easingcss3: 'ease-out',
			recordHistory: true,
			animateAnchor: true,
			// fitToSectionDelay: 100,
			// normalScrollElements: '..',
			onLeave: function(index, origin, destination, direction){

				if(origin.isFirst){
					$('.header').addClass('header-light');
				}else{
					$('.header').removeClass('header-light');
				}

				var a = $(origin.item).data('gradient');

				if(a){
					$('.header').addClass('header-gradient');
				}else{
					$('.header').removeClass('header-gradient');
				}

			},

			afterLoad: function(index, origin){

				if(origin.isFirst){
					$('.header').addClass('header-light');
				}else{
					$('.header').removeClass('header-light');
				}



			},
 
		});
	}


	//Open menu
	var menuOpened = 0;
    $(document).on('click', '.header-burger', function(){


        $(this).parents('.header').toggleClass('show-menu');
		$(this).toggleClass('active');
		

        if (!menuOpened) {
        	menuOpened = 1;


        	$('.wrapper-section').removeClass('hide-menu');
            $('.wrapper-section').addClass('show-menu');

        	

        	if(fullp && $('#fullpage').length > 0){
            	fullpage_api.setAllowScrolling(false); 
            }

        } else {
            menuOpened = 0;

			$('.wrapper-section').toggleClass('show-menu hide-menu');

            if(fullp && $('#fullpage').length > 0){
            	fullpage_api.setAllowScrolling(true);
            }
        }

    });

    //anchor mobile

    $(document).on('click', '.header .nav li a, .baner-scrolled', function(){

    	menuOpened = 0;

		if(fullp && $('#fullpage').length > 0){
			fullpage_api.setAllowScrolling(true);
		}


		// setTimeout( function(){
  		//  $('.header').removeClass('show-menu');
		// 	$('.header-burger').removeClass('active');
		// 	$('.wrapper-section').toggleClass('show-menu hide-menu');
		// },500);
		
		$('.header').removeClass('show-menu');
		$('.header-burger').removeClass('active');
		$('.wrapper-section').removeClass('show-menu');



		if($(window).width() < 1199 || $(window).height() < 599){

			if($('#fullpage').length > 0){

				event.preventDefault();

				var a = $(this).data('menuanchor');
				var t = $('[data-anchor="'+a+'"]').offset().top - 60;

				$('body,html').animate({scrollTop: t}, 1000);

			}

		}

	});	

    //partners hover
    $('.partners-thumbnail').on('mouseenter', function(){
    	$('.partners-thumbnail').not($(this)).stop().animate({opacity: 0.6}, 150);
    });

    $('.partners-thumbnail').on('mouseleave', function(){
		$('.partners-thumbnail').not($(this)).stop().animate({opacity: 1}, 150);
    });

    //partners image hover
    var movementStrength = 25;
	var height = movementStrength / $(window).height();
	$(".partners-thumbnail").mousemove(function(e){

	          var pageY = e.pageY - ($(window).height() / 2);
	          var newvalueY = height * pageY * 1 - 50;

	          $(this).find(".image").css("transform", "translateY(" + newvalueY + "px)");

	});


	//anchor mobile loading a page
    if($(window).width() < 1199 || $(window).height() < 599){

    	var targetLoc = window.location.hash,
	    targetLoc = targetLoc.replace('#', '');


	    $(window).ready( function() {

		    if (targetLoc && $('#fullpage').length > 0) {
		        var topS = $('[data-anchor="'+targetLoc+'"]').offset().top - 60;
		        $('body,html').animate({scrollTop: topS}, 1000);
		    }
		});

    }

  //   $(window).on('scroll', function(){
  //   	var a = $(window).scrollTop();

  //       if(a > 10 && a < $(window).height() / 2) {
		// 	$('body,html').animate({scrollTop: $(window).height()}, 1000);
  //       }else if(a < $(window).height()) {
		// 	$('body,html').animate({scrollTop: 0}, 1000);
		// }

  //   });

    var body = $("html, body");
    $(body).on('mousewheel', function(e){

    	var a = $(window).scrollTop();

    	if($('.baner-full').hasClass('scrolling-full') && $(window).width() > 1199 && $(window).height() > 599){

	        if(e.originalEvent.wheelDelta /120 > 0 && a < $(window).height() + 60) {
	            body.stop().animate({scrollTop:0}, 800);
	        } else if(a == 0) {
	            body.stop().animate({scrollTop: $(window).height()}, 800);       
	        }
        }
    });

});
 