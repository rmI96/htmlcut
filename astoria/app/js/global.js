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
	},300);

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
				if ($(this).offset().top < $(window).scrollTop() + $(window).height() - 150 && $(window).width() > 991) {
					$(this).addClass('animated');
				} else if ($(this).offset().top < $(window).scrollTop() + $(window).height() - 50 && $(window).width() < 992) {
					$(this).addClass('animated');
				}
			});
		}
	}

	_functions.customAnimation();

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

	// thanks popup
	_functions.thanksPopup = function(){
		event.preventDefault();
		_functions.openPopup('.popup-content[data-rel="thanks-popup"]');
		
		setTimeout( function(){
			_functions.closePopup();
		},3000);
	};

	// swiper sliders 

	_functions.getSwOptions = function(swiper){
		var options = swiper.data('options');
        options = (!options || typeof options !=='object') ? {} : options;
        var $p = swiper.closest('.swiper-entry');
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

	//select
    
	$('select').SumoSelect();
	
	//burger btn-show

	$(document).on('click', '.btn-show', function(){

        let r = $(this).data('rel');

        if($(this).hasClass('active')){
            $(this).removeClass('active');
			$('.' + r).removeClass('active');
			$('html').removeClass('overflow-hidden');
        }else{
            $(this).addClass('active');
			$('.' + r).addClass('active');
			$('html').addClass('overflow-hidden');
        }

	});

	//hover amenities

	$(document).on('mouseenter','.amenitie-hover', function (event) {
		var i = $(this).parents('.amenities-item').index();

		$('.amenities-img .image-inner .bg').eq(i).addClass('active').siblings('.bg').removeClass('active');

	}).on('mouseleave','.amenitie-hover',  function(){
		$('.amenities-img .image-inner .bg').last().addClass('active').siblings('.bg').removeClass('active');
	});

	//show text
    $(document).on('click', '.btn-show-text', function(){
        $(this).hide().siblings('.btn-show-text').show();
        $('.wrapper-hidden[data-show="' + $(this).data('show') +'"]').slideToggle()
	});
	
	//menu
	$('.menu-title').on('click', function() {
		$(this).parents('.menu-wrapper').toggleClass('active');
	});

	//cookie policy

	$('.cookie-policy .cookie-close').on('click', function(){
		$(this).parents('.cookie-policy').hide(300);
	});

	//events haight

	$(window).on('resize load', function(){
		$('.events-p-item').each(function(i, el){
			var h =  $(el).find('.picture').height();
			$(el).find('.info').css({'height': h + 'px'});
		}); 
	});

	//Custom Scrollbar

	$(window).on('resize load', function(){
		if($(this).width()>991){
			$(".mCustomScrollbar").mCustomScrollbar({
				// theme:"dark",
				autoExpandScrollbar: false,
				scrollInertia: 500,
				mouseWheel:{ scrollAmount: 150 }
			});
		}else{
			$(".mCustomScrollbar").mCustomScrollbar("destroy");
		}
	}).trigger("resize");  

	//isotope masonry

	$('.blog-grid').isotope({
		itemSelector: '.grid-item',
		percentPosition: true,
		masonry: {
			columnWidth: '.grid-sizer'
		}
	});

	/*###############*/
	/* lightbox */
	/*###############*/

		$('.lightbox-wrapper .open-img').on('click', function(e){
			if (screen.width < 998) {
				e.preventDefault();
				e.unbind('click');
			}
		});

		var lightBoxOptions = {
			animationSlide: false,
			loop: false,
			disableScroll: false,
			captionSelector: 'self',
			closeText: '<button class="btn-close"></button>',
			alertErrorMessage: 'Картинку не знайдено. Наступна картинка буде завантажена для перегляду.',
			history: false,
			widthRatio: 1,
			heightRatio: 1
		},
		lightboxSelector = $('.lightbox-wrapper'),
		lightboxLength = lightboxSelector.length,
		lightbox = [];
		for(var i = 0; i < lightboxLength; i++){
			lightbox[i] = $(lightboxSelector[i]).find('.open-img').simpleLightbox(lightBoxOptions);
		}
		
		

});
 