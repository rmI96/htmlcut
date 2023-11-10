document.addEventListener('DOMContentLoaded', () => {

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

        /*###############*/
        /* SCROLL */
        /*###############*/
        addEventListener('scroll', _functions.scrollHeadern)
        addEventListener('scroll', _functions.customAnimation)

        /*###############*/
        /* SLIDE */
        /*###############*/
        function _slide(el, duration, callback, isDown) {

            if (typeof duration === 'undefined') duration = 400;
            if (typeof isDown === 'undefined') isDown = false;

            el.style.overflow = "hidden";
            if (isDown) el.style.display = "block";

            const elStyles        = window.getComputedStyle(el);

            const elHeight        = parseFloat(elStyles.getPropertyValue('height'));
            const elPaddingTop    = parseFloat(elStyles.getPropertyValue('padding-top'));
            const elPaddingBottom = parseFloat(elStyles.getPropertyValue('padding-bottom'));
            const elMarginTop     = parseFloat(elStyles.getPropertyValue('margin-top'));
            const elMarginBottom  = parseFloat(elStyles.getPropertyValue('margin-bottom'));

            const stepHeight        = elHeight        / duration;
            const stepPaddingTop    = elPaddingTop    / duration;
            const stepPaddingBottom = elPaddingBottom / duration;
            const stepMarginTop     = elMarginTop     / duration;
            const stepMarginBottom  = elMarginBottom  / duration;

            let start;

            function step(timestamp) {

                if (start === undefined) start = timestamp;

                const elapsed = timestamp - start;

                if (isDown) {
                    el.style.height        = (stepHeight        * elapsed) + "px";
                    el.style.paddingTop    = (stepPaddingTop    * elapsed) + "px";
                    el.style.paddingBottom = (stepPaddingBottom * elapsed) + "px";
                    el.style.marginTop     = (stepMarginTop     * elapsed) + "px";
                    el.style.marginBottom  = (stepMarginBottom  * elapsed) + "px";
                } else {
                    el.style.height        = elHeight        - (stepHeight        * elapsed) + "px";
                    el.style.paddingTop    = elPaddingTop    - (stepPaddingTop    * elapsed) + "px";
                    el.style.paddingBottom = elPaddingBottom - (stepPaddingBottom * elapsed) + "px";
                    el.style.marginTop     = elMarginTop     - (stepMarginTop     * elapsed) + "px";
                    el.style.marginBottom  = elMarginBottom  - (stepMarginBottom  * elapsed) + "px";
                }

                if (elapsed >= duration) {
                    el.style.height        = "";
                    el.style.paddingTop    = "";
                    el.style.paddingBottom = "";
                    el.style.marginTop     = "";
                    el.style.marginBottom  = "";
                    el.style.overflow      = "";
                    if (!isDown) el.style.display = "none";
                    if (typeof callback === 'function') callback();
                } else {
                    window.requestAnimationFrame(step);
                }
            }

            window.requestAnimationFrame(step);
        }

        _functions.slideToggle = function(el, duration, callback) {
            if (el.clientHeight === 0) {
                _slide(el, duration, callback, true);
            } else {
                _slide(el, duration, callback);
            }
        }

        _functions.slideUp = function(el, duration, callback) {
            _slide(el, duration, callback);
        }

        _functions.slideDown = function(el, duration, callback) {
            _slide(el, duration, callback, true);
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
            swiper.on('slideChange', function (e) {
                const $entry = this.el.closest('.swiper-entry')
                if ($entry) {
                    $entry.setAttribute('data-rel', 'slide-' + e.realIndex)
                }
            })
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
        /* POP-UP */
        /*###############*/

        _functions.popupClose = function(event) {
            const $p = event.target.closest('.popup-wrapper')
            $p.classList.remove('active')
            $p.querySelector('.popup-conteiner.active').classList.remove('active')
            document.querySelector('#video-popup .embed-responsive').innerHTML = ''
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
            })
        })

        _functions.videoPopup = function (src, videoType) {
            if (videoType === 'youtube') {
                document.querySelector('#video-popup .embed-responsive').innerHTML = '<iframe src="' + src + '"></iframe>';
            } else if (videoType === 'html') {
                document.querySelector('#video-popup .embed-responsive').innerHTML = '<video autoplay controls playsinline class="active"><source src="'+src+'" type="video/mp4"></video>';
            }
            _functions.popupOpen('video')
        };

        document.querySelectorAll('.video-popup').forEach((e) => {
            e.addEventListener('click', function() {
                let src;

                if (e.getAttribute('data-youtube-src')) {
                    src = e.getAttribute('data-youtube-src')
                    _functions.videoPopup(src, 'youtube');
                } else if (e.getAttribute('data-html-src')) {
                    src = e.getAttribute('data-html-src')
                    _functions.videoPopup(src, 'html');
                }
            })
        })

        /*###############*/
        /* ACCORDION */
        /*###############*/
        document.body.addEventListener('click', function(event){
            const e = event.target
            if(e.classList.contains('accordion-header') || e.closest('.accordion-header')){
                const p = e.closest('.accordion-item')
                if(p.classList.contains('active')){
                    p.classList.remove('active')
                    _functions.slideUp(p.querySelector('.accordion-content'))
                }else{
                    p.classList.add('active')
                    _functions.slideDown(p.querySelector('.accordion-content'))
                }
            }
        })
        document.body.addEventListener('click', function(event){
            const e = event.target
            if(e.classList.contains('trigger-js') || e.closest('.trigger-js')){
                const p = e.closest('.accordion-item')
                if(p.classList.contains('active')){
                    p.classList.remove('active')
                    _functions.slideUp(p.querySelector('.accordion-content'))
                }else{
                    p.classList.add('active')
                    _functions.slideDown(p.querySelector('.accordion-content'))
                }
            }
        })

        /*###############*/
        /* NAVIGATION */
        /*###############*/

        const headerHamburger = document.querySelector('#header-hamburger');
        if (headerHamburger) {
            headerHamburger.addEventListener('click', (e) => {
                const c = document.querySelector('#content-block')
                if (c.classList.contains('open-navigation')) {
                    c.classList.remove('open-navigation');
                } else {
                    c.classList.add('open-navigation');
                }
            })
        }

        const headerHamburgerClose = document.querySelectorAll('.navigation-close');
        if (headerHamburgerClose) {
            headerHamburgerClose.forEach(($e) => {
                $e.addEventListener('click', (e) => {
                    const c = document.querySelector('#content-block')
                    c.classList.remove('open-navigation');
                })
            })
        }

        /*###############*/
        /* PhoneInputField */
        /*###############*/

        const phoneInputFields = document.querySelectorAll(".input-phone input");
        if (phoneInputFields.length) {
            phoneInputFields.forEach((e) => {
                const v = e.getAttribute('data-default')
                const phoneInput = window.intlTelInput(e, {
                    initialCountry: v ? v : 'ua',
                    separateDialCode: false,
                    autoHideDialCode: false,
                    utilsScript: 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js'
                    // customPlaceholder: function(selectedCountryPlaceholder, selectedCountryData) {
                    //     let c = selectedCountryPlaceholder.replace(/ /g, "-")
                    //     let p = c.replace(/[0-9]/g, "0")
                    //     return p + '*';
                    // }
                });
            })
        }

        /*###############*/
        /* password */
        /*###############*/
        const inputHiddenText = document.querySelectorAll('.input-hidden-text .toggle')
        inputHiddenText.forEach((e) => {
            e.addEventListener('click', function() {
                const p = this.closest('.input-hidden-text')
                if (p.classList.contains('hide')) {
                    p.classList.remove('hide')
                    p.querySelector('input').setAttribute('type', 'text')
                } else {
                    p.classList.add('hide')
                    p.querySelector('input').setAttribute('type', 'password')
                }
            })
        })

        /*###############*/
        /* Menu(footer.mob) */
        /*###############*/
        document.body.addEventListener('click', function(event){
            const e = event.target
            if(e.classList.contains('have-sub-menu__trigger') || e.closest('.have-sub-menu__trigger')){
                const p = e.closest('.have-sub-menu')
                if(p.classList.contains('active')){
                    p.classList.remove('active')
                    _functions.slideUp(p.querySelector('ul'))
                }else{
                    p.classList.add('active')
                    _functions.slideDown(p.querySelector('ul'))
                }
            }
        })


        /*###############*/
        /* dropdown2 */
        /*###############*/
        document.body.addEventListener('click', function(event){
            const e = event.target
            if(e.classList.contains('dropdown2-inner') || e.closest('.dropdown2-inner')){
                e.closest('.dropdown2').classList.add('active')
            }
            if(e.classList.contains('dropdown2-layer') || e.closest('.dropdown2-layer')){
                e.closest('.dropdown2').classList.remove('active')
            }
        })

        /*###############*/
        /* dropdown3 */
        /*###############*/
        document.body.addEventListener('click', function(event){
            const e = event.target
            if(e.classList.contains('dropdown3-trigger') || e.closest('.dropdown3-trigger')){
                if (e.closest('.dropdown3').classList.contains('active')) {
                    e.closest('.dropdown3').classList.remove('active')
                } else {
                    e.closest('.dropdown3').classList.add('active')
                }
            }
            if(e.classList.contains('dropdown3-layer') || e.closest('.dropdown3-layer')){
                if (e.closest('.dropdown3').classList.contains('active')) {
                    e.closest('.dropdown3').classList.remove('active')
                }
            }
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
        /* Banner2 */
        /*###############*/
        const banner2_item = document.querySelectorAll('.program__banner2 .item')
        banner2_item.forEach((e) => {
            e.addEventListener('mouseover', (event) => {
                const $item = event.target.classList.contains('item') ? event.target : event.target.closest('.item')
                const $siblings = $item.closest('.program__banner2').querySelectorAll('.item')
                $siblings.forEach(($sibling) => {
                    $sibling.classList.remove('active')
                })
                $item.classList.add('active')
            })
        })

        /*###############*/
        /* InputRadio */
        /*###############*/
        const inputRadioTabs = document.querySelectorAll('.input-radio_wrapper input.input-radio_item')
        if (inputRadioTabs) {
            inputRadioTabs.forEach(($e) => {
                $e.addEventListener('change', (event) => {
                    const t = event.target.getAttribute('data-text')
                    if (t) {
                        const p = event.target.closest('.input-radio_wrapper').querySelector('.input-radio_text')
                        p.innerHTML = t
                    }
                    const i = event.target.getAttribute('data-info')
                    if (i) {
                        const p_i = event.target.closest('.input-radio_wrapper').querySelector('.input-radio_info')
                        p_i.innerHTML = i
                    }
                })
            })
        }

        /*###############*/
        /* InputCheckbox */
        /*###############*/
        const inputCheckboxTabs = document.querySelectorAll('.input-checkbox_wrapper input.input-checkbox_item')
        if (inputCheckboxTabs) {
            inputCheckboxTabs.forEach(($e) => {
                console.log($e)
                $e.addEventListener('change', (event) => {
                    const p = event.target.closest('.input-checkbox_wrapper').querySelector('.input-checkbox_content')
                    if (event.target.checked) {
                        _functions.slideDown(p)
                    } else {
                        _functions.slideUp(p)
                    }
                })
            })
        }

    })();

})