const _functions = {};

(function() {
	"use strict"

	/*###############*/
	/* FUNCTION ON DOCUMENT READY */
	/*###############*/

	_functions.crossBrowser = function () {
		const e = document.querySelector('body')

		if (navigator.userAgent.indexOf("Firefox") >= 0) {
			e.classList.add('firefox')
		}
		if (navigator.userAgent.indexOf('Edge') >= 0) {
			e.classList.add('edge')
		}
		if (navigator.userAgent.indexOf("Trident") >= 0) {
			e.classList.add('ie')
		}
		if (navigator.userAgent.indexOf('Safari') >= 0 && navigator.userAgent.indexOf('Chrome') < 0) {
			e.classList.add('safari')
		}
		if (navigator.userAgent.indexOf('Chrome') >= 0 && navigator.userAgent.indexOf('Edge') < 0) {
			e.classList.add('chrome')
		}
	}
	_functions.crossBrowser()

	setTimeout( function(){
		const e = document.querySelector('#loader-wrapper')
		if(e){
			e.style.display = 'none'
		}
	},150);

	/*###############*/
	/* ANIMATIONS */
	/*###############*/

	_functions.customAnimation = function() {
		const e = document.querySelectorAll('.animation')
		if (e.length) {
			e.forEach(function(e) {
				if(e.offsetTop < window.scrollY + window.innerHeight){
					e.classList.add('animated')
				}
			});
		}
	}
	_functions.customAnimation()

	_functions.scrollHeadern = function() {
		const a = window.scrollY
		const e = document.querySelector('header')
		if(a > 20) {
			e.classList.add('scrolled');
		} else if(a < 20) {
			e.classList.remove('scrolled');
		}
	}
	_functions.scrollBtnTop = function() {
		const a = window.scrollY
		const e = document.querySelector('.btn-scroll-top')
		if(a > 300) {
			e.classList.add('active');
		} else if(a < 300) {
			e.classList.remove('active');
		}
	}

	/*###############*/
	/* SCROLL */
	/*###############*/
	addEventListener('scroll', _functions.scrollHeadern)
	addEventListener('scroll', _functions.customAnimation)
	addEventListener('scroll', _functions.scrollBtnTop)

	/*###############*/
	/* POP-UP */
	/*###############*/

	_functions.popupClose = function(e) {
		const $p = e.target.closest('.popup-wrapper')
		$p.classList.remove('active')
		$p.querySelector('.popup-conteiner.active').classList.remove('active')
	}
	document.querySelector('.popup-overlay').addEventListener('click', _functions.popupClose)
	document.querySelectorAll('.popup-close').forEach((e) => {
		e.addEventListener('click', _functions.popupClose)
	})
	_functions.popupOpen = function(e) {
		const $p = document.querySelector('.popup-wrapper')
		$p.classList.add('active')
		document.querySelector(".popup-conteiner[data-rel='" + e +"']").classList.add('active')
	}
	document.querySelectorAll('.popup-open').forEach((e) => {
		e.addEventListener('click', function() {
			const d = this.getAttribute('data-rel')
			_functions.popupOpen(d)
			if (e.classList.contains('is-info')) {
				_functions.addInfoInForm(e, d)
			}
		})
	})
	_functions.createInput = function (t, v) {
		const i = document.createElement('input');
		i.setAttribute('name', 'description[]')
		i.setAttribute('type', t)
		i.setAttribute('value', v)
		return i
	}
	_functions.addInfoInForm = function(e, d) {
		const $p = document.querySelector(".popup-conteiner[data-rel='" + d +"']")
		const $hidden_block = $p.querySelector('.form-group-hidden')
		$hidden_block.innerHTML = ''
		/* Page name */
		$hidden_block.insertAdjacentElement('beforeend', _functions.createInput('hidden', e.dataset.page))
		/* Input radio */
		const $items_radio = e.closest('.get_info_wrapper').querySelectorAll('.get_info_item')
		$items_radio.forEach(($e) => {
			const $all_i = $e.querySelectorAll('.get_info_input')
			$all_i.forEach((c) => {
				if (c.checked) {
					$hidden_block.insertAdjacentElement('beforeend', _functions.createInput('hidden', c.dataset.info))
				}
			})
		})
		/* Input range */
		const $items_range = e.closest('.get_info_wrapper').querySelectorAll('.get_info_range')
		$items_range.forEach(($e) => {
			$hidden_block.insertAdjacentElement('beforeend', _functions.createInput('hidden', $e.dataset.info + ': ' + $e.value))
		})
	}

	/*###############*/
	/* SWIPER */
	/*###############*/

	_functions.getSwOptions = function(swiper){
		let options = JSON.parse(swiper.getAttribute('data-options')),
			slidesLength = swiper.querySelectorAll('.swiper-slide').length

		options = (!options || typeof options !== 'object') ? {} : options
		let $p = swiper.closest('.swiper-entry')

		if (slidesLength === 1) $p.classList.add('single-slide-swiper')

		if(!options.pagination) options.pagination = {
			el: $p.querySelector('.swiper-pagination'),
			clickable: true
		}
		if(!options.navigation) options.navigation = {
			nextEl: $p.querySelector('.swiper-button-next'),
			prevEl: $p.querySelector('.swiper-button-prev')
		}
		options.preloadImages = false
		options.lazy = {loadPrevNext: true}
		options.observer = true
		options.observeParents = true
		options.watchOverflow = true
		if(!options.speed) options.speed = 500
		options.roundLengths = false
		return options;
	};
	_functions.initSwiper = function(el){
		const swiper = new Swiper(el, _functions.getSwOptions(el))
	};

	const $sw_container = document.querySelectorAll('.swiper-entry .swiper-container')
	$sw_container.forEach((e) => {
		_functions.initSwiper(e)
	})
	const $sw_thumbs = document.querySelectorAll('.swiper-thumbs')
	$sw_thumbs.forEach((e) => {
		const top = e.querySelector('.swiper-container.swiper-thumbs-top').swiper,
			bottom = e.querySelector('.swiper-container.swiper-thumbs-bottom').swiper
		top.thumbs.swiper = bottom
		top.thumbs.init()
		top.thumbs.update()
	})
	const $sw_control = document.querySelectorAll('.swiper-control')
	$sw_control.forEach((e) => {
		const top = e.querySelector('.swiper-container').swiper,
			bottom = e.querySelector('.swiper-container').swiper
		top.controller.control = bottom
		bottom.controller.control = top
	})

	/*###############*/
	/* choice */
	/*###############*/

	_functions.getChoicesOptions = function(e){
		let options = JSON.parse(e.getAttribute('data-options'))
		options = (!options || typeof options !== 'object') ? {} : options
		return options;
	};
	_functions.initChoices = function(el){
		const choices = new Choices(el, _functions.getChoicesOptions(el))
	};

	const $choice_container = document.querySelectorAll('.select-choice')
	$choice_container.forEach((e) => {
		_functions.initChoices(e)
	})

	/*###############*/
	/* Search */
	/*###############*/
	_functions.checkAutocomplete = function(e) {
		const $a = e.closest('.header-search-js').querySelector('.search-autocomplete')
		if (e.value.length > 0) {
			$a.style.display = 'block'
		} else {
			$a.style.display = 'none'
		}
	}
	document.querySelector('.header-search-js .search-btn').addEventListener('click', (e) => {
		if (!e.target.closest('.header-search-js').classList.contains('active')) {
			e.preventDefault()
			const $i = e.target.closest('.header-search-js').querySelector('.search-input')
			e.target.closest('.header-search-js').classList.add('active')
			$i.value = ''
			_functions.checkAutocomplete($i)
		}
	})
	document.querySelector('.header-search-js .search-layer').addEventListener('click', (e) => {
		const $i = e.target.closest('.header-search-js').querySelector('.search-input')
		e.target.closest('.header-search-js').classList.remove('active')
		$i.value = ''
		_functions.checkAutocomplete($i)
	})
	document.querySelector('.header-search-js .search-input').addEventListener('input', (e) => {
		_functions.checkAutocomplete(e.target)
	})

	//Search mob
	document.querySelector('.header-search-mobile .search-btn').addEventListener('click', () => {
		const $e = document.querySelector('.header-search-js')
		if ($e.classList.contains('active')) {
			$e.classList.remove('active')
		} else {
			$e.classList.add('active')
		}
	})

	//Search resize
	_functions.searchLongitude = function() {
		const $s = document.querySelector('.header-search-js')
		const $l = document.querySelector('.header .logo')
		if ($s && $l) {
			const s_pos = $s.getBoundingClientRect()
			const l_pos = $l.getBoundingClientRect()
			$s.querySelector('.search-input-wrapper').style.width = s_pos.left - (l_pos.width + l_pos.left + 20) + 'px'
		}
	}
	_functions.searchLongitude()
	window.addEventListener('resize', (e) => {
		_functions.searchLongitude()
	})

	/*###############*/
	/* Mob. menu */
	/*###############*/
	_functions.blockedScroll = function (e) {
		if (e) {
			document.querySelector('html').classList.add('no-scroll-mob')
		} else {
			document.querySelector('html').classList.remove('no-scroll-mob')
		}

	}
	_functions.toggleMenu = function(e) {
		const $h = e.closest('.header')
		if ($h.classList.contains('open-menu')) {
			$h.classList.remove('open-menu')
			_functions.blockedScroll(false)
		} else {
			$h.classList.add('open-menu')
			_functions.blockedScroll(true)
		}
	}
	document.querySelector('.header-hamburger').addEventListener('click', (e) => {
		_functions.toggleMenu(e.target)
	})
	document.querySelector('.header-layer').addEventListener('click', (e) => {
		_functions.toggleMenu(e.target)
	})

	/*###############*/
	/* Cookie */
	/*###############*/

	_functions.createCookie = function (name, value, days) {
		let date, expires;
		if (days) {
			date = new Date();
			date.setDate(date.getDate()+days);
			expires = "; expires="+date.toUTCString();
		} else {
			expires = "";
		}
		document.cookie = name+"="+value+expires+"; path=/";
	}
	const $cookie_btn = document.querySelector('.cookie-popup-btn')
	if ($cookie_btn) {
		$cookie_btn.addEventListener('click', (e) => {
			_functions.createCookie('cookie_popup', '1', 1)
			e.target.closest('.cookie-popup').classList.remove('active')
		})
	}
	if (document.cookie.indexOf('cookie_popup=') < 0) {
		const $cookie = document.querySelector('.cookie-popup')
		if ($cookie) {
			$cookie.classList.add('active')
		}
	}

	/*###############*/
	/* Range slider */
	/*###############*/

	/* Limited */
	_functions.maxReached = function(event){
		const e = event.target ? event.target : event
		const $i_max = e.closest('.input-limited-wrapper').querySelector('.range-slider-input.limited-max')
		const max = $i_max.value * 0.6
		const v = e.value
		let target
		if(v > +max){
			target = e;
			target.value = target.value - (v - max)
			if (event.target) {
				event.preventDefault()
			} else {
				_functions.range_slider(e.closest('.range-slider-wrapper'), e)
			}
			return false;
		}
		return true;
	}
	const $limited_input = document.querySelector('.input-limited-wrapper .range-slider-input.limited')
	if ($limited_input) {
		$limited_input.addEventListener('input', _functions.maxReached)
	}

	/* Slider */
	_functions.range_slider = function($e, $i) {
		const v = $i.value
		const min = $i.min ? $i.min : 0
		const max = $i.max ? $i.max : 100
		const p = Number(((v - min) * 100) / (max - min))
		$e.querySelector('.slide span').style.width = p + '%'
		$e.querySelector('.handle').style.left = p + '%'
		$e.querySelector('.range-value').innerHTML = v.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',')
	}
	const $range_container = document.querySelectorAll('.range-slider-wrapper')
	$range_container.forEach(($e) => {
		const $i = $e.querySelector('.range-slider-input')
		_functions.range_slider($e, $i)
		$i.addEventListener('input', (event) => {
			_functions.maxReached($limited_input)
			_functions.range_slider($e, $i)
		})
	})



	/*###############*/
	/* Dropdown */
	/*###############*/
	const dropdown_items = document.querySelectorAll('.dropdown')
	dropdown_items.forEach(($e) => {
		$e.querySelector('.dropdown-inner').addEventListener('click', (event) => {
			if ($e.classList.contains('active')){
				$e.classList.remove('active')
			} else {
				$e.classList.add('active')
			}
		})
		$e.querySelector('.dropdown-layer').addEventListener('click', (event) => {
			$e.classList.remove('active')
		})
	})

	/*###############*/
	/* Banner */
	/*###############*/
	_functions.get_offset_top = function($e) {
		let offsetTop = 0;
		while($e) {
			offsetTop += $e.offsetTop;
			$e = $e.offsetParent;
		}
		return offsetTop;
	}
	_functions.banner_height = function($e) {
		const h = window.innerHeight - _functions.get_offset_top($e)
		$e.querySelector('.banner-inner').style.height = h <= window.innerHeight ? h + 'px' : window.innerHeight + 'px'
	}
	const $banners = document.querySelectorAll('.banner-height-js')
	document.addEventListener("DOMContentLoaded", () => {
		$banners.forEach(($e) => {
			_functions.banner_height($e)
			window.addEventListener('resize', (event) => {
				_functions.banner_height($e)
			})
		})
	})

	/*###############*/
	/* Scroll-top */
	/*###############*/
	document.querySelector('.btn-scroll-top').addEventListener('click', () => {
		window.scrollTo({
			top: 0,
			behavior: 'smooth'
		})
	})

	/*###############*/
	/* Calculator-radio-input */
	/*###############*/
	const $radio_inputs = document.querySelectorAll('.calculator-radio-input')
	$radio_inputs.forEach(($e) => {
		$e.addEventListener('input', (event) => {
			const $p = event.target.closest('.calculator-radio-wrapper')
			const v = event.target.value
			$p.querySelector('.calculator-radio-result').innerHTML = v
		})
	})

})();

