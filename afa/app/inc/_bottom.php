<div class="popup-wrapper">
    <div class="popup-overlay"></div>
    <div class="popup-conteiner size-a" data-rel="feedback-form">
        <div class="popup-align">
            <button class="btn btn-close popup-close"></button>
            <div class="h4_2 color-secondary text-uppercase sp-mb-40">Форма зворотного зв’язку</div>
            <form class="form-group">
                <div class="form-group-hidden"></div>
                <div class="sp-mb-60">
                    <div class="input-inner">
                        <input name="name" type="text" class="input" placeholder="Ім’я">
                        <div class="input-error">Error</div>
                    </div>
                    <div class="input-inner">
                        <input type="tel" name="tel" class="input masked-phone" data-phonemask="+38 (0__)___-____" placeholder="Телефон">
                        <div class="input-error">Error</div>
                    </div>
                    <div class="input-inner">
                        <input name="name" type="text" class="input error" placeholder="E-mail">
                        <div class="input-error">Електронна адреса має містити «@»</div>
                    </div>
                    <div class="input-inner">
                        <textarea class="input" placeholder="Коментар"></textarea>
                    </div>
                    <div class="text-lg color-grey sp-mb-20">
                        Якщо ви знаходитесь в іншому місті або закордоном, резервуйте час зідзвону <a href="#" class="btn btn-link f-400 grey md">тут</a>
                    </div>
                    <label class="checkbox-entry">
                        <input type="checkbox"><span class="dark"></span>
                        <a href="#" class="btn btn-link dark btn-block md">Погоджуюсь з політикою конфіденційності</a>
                    </label>
                </div>
                <button type="button" class="btn btn-primary xl btn-block" onclick="_functions.popupClose(event); _functions.popupOpen('thanks')">Відправити</button>
            </form>
        </div>
    </div>
    <div class="popup-conteiner size-a" data-rel="thanks">
        <div class="popup-align t2">
            <button class="btn btn-close popup-close"></button>
            <div class="h4_2 color-secondary text-uppercase sp-mb-15">Дякуємо</div>
            <div class="text-md">Ми отримали ваш запит і скоро вам відповімо</div>
        </div>
    </div>
</div>
<button class="btn btn-scroll-top">
    <span class="icon"><svg viewBox="0 0 28 15" width="28" height="15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 14 14 1l13 13" class="stroke-dark" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
</button>

<div class="cookie-popup">
    <div class="text-in">Цей сайт використовує cookie для збереження даних. Продовжуючи використовувати сайт, Ви погоджуєтесь на роботу з цими файлами</div>
    <button class="btn btn-primary xl_2 cookie-popup-btn">Прийняти</button>
</div>
<!-- STYLE -->
<link rel="stylesheet" href="./libs/choices/choices.min.css" type="text/css" />
<link rel="stylesheet" href="./libs/swiper/swiper.min.css" type="text/css" />
<link rel="stylesheet" href="./css/style.css" type="text/css" />

<!-- SCRIPT -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.10/SmoothScroll.min.js"></script>

<script src="./libs/swiper/swiper.min.js"></script>
<script src="./libs/phone-mask/phone-mask.min.js"></script>
<script src="./libs/choices/choices.min.js"></script>

<script src="./js/global.js"></script>
