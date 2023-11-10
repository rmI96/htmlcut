<!DOCTYPE html>
<html lang="uk">
<head>
    <?php include 'inc/_top.php'; ?>
    <title>DENTAL DEPO - HOME</title>

    <?php include 'inc/_noscript-top.php'; ?>
</head>
<body>
    
    <div id="loader-wrapper"></div>

<div id="content-block"> 

    <!-- HEADER --> 
    <header class="header">
        <?php include 'inc/_header.php'; ?> 
    </header>

    <main>

        <div class="decor-wrapper">
            <div class="decor pos1"><img src="./img/decor-02.svg" alt=""></div>
        </div>

        <!-- HOME PAGE SLIDER -->
        <div class="section main_slider-section">

            <div class="swiper-entry main_slider">
                <div class="container swiper-buttons-container">
                    <div class="swiper-buttons-wrap pos-left-center">
                        <div class="swiper-button-prev style-1">
                            <div class="arr"></div>
                        </div>
                        <div class="swiper-button-next style-1">
                            <div class="arr"></div>
                        </div>
                    </div>
                </div>

                <div class="swiper-container"
                     data-options='{"autoHeight":true, "autoplay": {"delay":3500}, "loop":true, "speed": 800, "effect":"fade", "fadeEffect": { "crossFade": true }}'
                >
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="main_slider-img bg-image swiper-lazy" data-background="img/bg1.jpg">
                                <div class="swiper-lazy-preloader"></div>
                            </div>
                            <div class="container">
                                <!--   here we have main_slider-img image source from next swiper-slide (if it's present)  -->
                                <div class="main_slider-leftimg bg-image swiper-lazy" data-background="img/img1.jpg">
                                    <div class="swiper-lazy-preloader"></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-xl-4 offset-lg-1">
                                        <div class="cell-view">
                                            <div class="subtitle color-secondary">OSSTEM ФОРУМ 2020</div>
                                            <h1 class="h1 content-title"><b>Новітні методики в імплантації та аугментації</b>
                                            </h1>
                                            <div class="text-lg main_slider-text article color-grey">3 авторитетні спікери з практичним
                                                досвідом та 2 дні теорії та практики
                                            </div>
                                            <a class="btn btn-primary mb-block" href="./about.php">
                                                <span class="btn-text">Детальніше</span>
                                                <span class="arr"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="main_slider-img bg-image swiper-lazy" data-background="img/img1.jpg">
                                <div class="swiper-lazy-preloader"></div>
                            </div>
                            <div class="container">
                                <div class="main_slider-leftimg bg-image swiper-lazy" data-background="img/bg1.jpg">
                                    <div class="swiper-lazy-preloader"></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-xl-4 offset-lg-1">
                                        <div class="cell-view">
                                            <div class="subtitle color-secondary">OSSTEM ФОРУМ 2020</div>
                                            <div class="h1 content-title"><b>Lorem ipsum dolor sit.</b></div>
                                            <div class="text-lg main_slider-text article color-grey">3 авторитетні спікери з практичним
                                                досвідом та 2 дні теорії та практики
                                            </div>
                                            <a class="btn btn-primary" href="./about.php">
                                                <span class="btn-text">Детальніше</span>
                                                <span class="arr"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container swiper-pagination-container">
                    <div class="swiper-pagination swiper-pagination-relative style-buttons-left"></div>
                </div>

                <div class="scroll-btn scroll-to" data-rel="1">
                    <div class="arr"></div>
                </div>
            </div>

        </div>
        <!-- end of HOME PAGE SLIDER -->

        <!-- PRODUCT THUMBS SWIPER SECTION -->
        <div class="section pd-bottom-lg scroll-to-block" data-rel="1">

            <div class="container">

                <div class="row js-tabs anime">
                    <div class="col-sm-9 col-md-11 col-lg-4 col-xl-3 zi3">
                        <div class="thumb_swiper-content">

                            <div class="h1 main-title">
                                <b class="anime-title-inner">Асортимент <br><span
                                        class="color-secondary">продукції</span>
                                </b>
                                <b aria-hidden="true">
                                    <svg class="title-svg" version="1.1" viewBox="0 0 100 200" width="100%" height="100%" preserveAspectRatio="xMinYMid meet">
                                        <text x="0" y="76" stroke-width="1" text-anchor="start">
                                            <tspan>Асортимент</tspan>
                                        </text>
                                        <text class="color-secondary" x="0" y="176">
                                            <tspan>продукції</tspan>
                                        </text>
                                    </svg>
                                </b>
                            </div>
                            <div class="thumb_swiper-controls mob-drop-wrap">
                                <div class="mob-drop-title">Популярні</div>
                                <ul class="arrow-list color-grey drop-list">
                                    <li class="js-tab-menu active">
                                        <div class="arr"></div>
                                        Популярні
                                    </li>
                                    <li class="js-tab-menu">
                                        <div class="arr"></div>
                                        Новинки
                                    </li>
                                    <li class="js-tab-menu">
                                        <div class="arr"></div>
                                        Акції
                                    </li>
                                </ul>
                            </div>
                            <a class="btn btn-primary mb-block" href="./products.php">
                                <span class="btn-text">перейти в магазин</span>
                                <span class="arr"></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-11 col-lg-8 col-xl-9">
                        <div class="thumb_swiper-outer">
                            <div class="js-tab" style="display: block;">
                                <div class="swiper-entry thumb_swiper">
                                    <div class="swiper-button-prev d-none"></div>
                                    <div class="swiper-button-next d-none"></div>
                                    <div class="swiper-container" data-options='{ "autoHeight":true, "autoplay": {"delay":3500}, "speed":800, "spaceBetween":30, "slidesPerView":3, "breakpoints":  {"1368": {"spaceBetween": 10}, "1199": {"slidesPerView": 2}, "575": {"slidesPerView": 1, "spaceBetween":20} },
                                    "watchSlidesProgress":true, "watchSlidesVisibility":true
                                 }'>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="product_thumb">
                                                    <div class="product_thumb-image">
                                                        <span class="product_thumb-special">Акція</span>
                                                        <img class="img swiper-lazy" src="img/preloader.jpg"
                                                             data-src="img/products/intraoralnyj-skaner-trios4.png"
                                                             alt="Інтраоральний сканер Trios4">
                                                        <span class="swiper-lazy-preloader"></span>
                                                        <a class='link' href="./product-detail.php"></a>
                                                        <div class='product_thumb-amount'>
                                                            <div class="thumb-input-number">
                                                                <button type="button" class="decrement"></button>
                                                                <input value="1" readonly="">
                                                                <button type="button" class="increment"></button>
                                                            </div>
                                                            <button class="btn btn-lg btn-secondary btn-add-cart">
                                                                <span class="mob-tx">В кошик</span>
                                                                <span class="desctop-tx">Додати в кошик</span>
                                                                <span class="add-cart-last">в кошику</span>
                                                                <span class="add-cart-loader">
                                                                    <span></span><span></span><span></span>
                                                                </span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_thumb-title text-md"><a href="./product-detail.php">Інтраоральний
                                                            сканер Trios4</a></div>
                                                    <div class="product_thumb-price"><b>6,428.00</b> <span>грн</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product_thumb">
                                                    <div class="product_thumb-image">
                                                        <img class="img swiper-lazy" src="img/preloader.jpg"
                                                             data-src="img/products/SMARTtorque-S1619-L-turbinnyj-nakonechnyk.png"
                                                             alt="SMARTtorque S619 L турбінний наконечник, зі світлооптикою">
                                                        <span class="swiper-lazy-preloader"></span>
                                                        <a class='link' href="./product-detail.php"></a>
                                                        <div class='product_thumb-amount'>
                                                            <div class="thumb-input-number">
                                                                <button type="button" class="decrement"></button>
                                                                <input value="1" readonly="">
                                                                <button type="button" class="increment"></button>
                                                            </div>
                                                            <button class="btn btn-lg btn-secondary btn-add-cart">
                                                <span class="mob-tx">В кошик</span>
                                                <span class="desctop-tx">Додати в кошик</span>
                                                <span class="add-cart-last">в кошику</span>
                                                <span class="add-cart-loader">
                                                    <span></span><span></span><span></span>
                                                </span>
                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_thumb-title text-md"><a href="./product-detail.php">SMARTtorque
                                                            S619 L
                                                            турбінний наконечник, зі світлооптикою</a></div>
                                                    <div class="product_thumb-price">
                                                        <b>288,600.00</b> <span>грн</span>
                                                        <div class="old-price">294,600.00 грн</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product_thumb">
                                                    <div class="product_thumb-image">
                                                        <img class="img swiper-lazy" src="img/preloader.jpg"
                                                             data-src="img/products/instrument-dlia-tuneliuvannia-typ-Steigmann-TKSTEIG2.png"
                                                             alt="Інструмент для тунелювання, тип Steigmann, TKSTEIG2">
                                                        <span class="swiper-lazy-preloader"></span>
                                                        <a class='link' href="./product-detail.php"></a>
                                                        <div class='product_thumb-amount'>
                                                            <div class="thumb-input-number">
                                                                <button type="button" class="decrement"></button>
                                                                <input value="1" readonly="">
                                                                <button type="button" class="increment"></button>
                                                            </div>
                                                            <button class="btn btn-lg btn-secondary btn-add-cart">
                                                <span class="mob-tx">В кошик</span>
                                                <span class="desctop-tx">Додати в кошик</span>
                                                <span class="add-cart-last">в кошику</span>
                                                <span class="add-cart-loader">
                                                    <span></span><span></span><span></span>
                                                </span>
                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_thumb-title text-md"><a href="./product-detail.php">Інструмент для
                                                            тунелювання, тип Steigmann, TKSTEIG2</a></div>
                                                    <div class="product_thumb-price">
                                                        <b>10,500.00</b> <span>грн</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product_thumb">
                                                    <div class="product_thumb-image">
                                                        <span class="product_thumb-special">Акція</span>
                                                        <img class="img swiper-lazy" src="img/preloader.jpg"
                                                             data-src="img/products/intraoralnyj-skaner-trios4.png"
                                                             alt="Інтраоральний сканер Trios4">
                                                        <span class="swiper-lazy-preloader"></span>
                                                        <a class='link' href="./product-detail.php"></a>
                                                        <div class='product_thumb-amount'>
                                                            <div class="thumb-input-number">
                                                                <button type="button" class="decrement"></button>
                                                                <input value="1" readonly="">
                                                                <button type="button" class="increment"></button>
                                                            </div>
                                                            <button class="btn btn-lg btn-secondary btn-add-cart">
                                                <span class="mob-tx">В кошик</span>
                                                <span class="desctop-tx">Додати в кошик</span>
                                                <span class="add-cart-last">в кошику</span>
                                                <span class="add-cart-loader">
                                                    <span></span><span></span><span></span>
                                                </span>
                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_thumb-title text-md"><a href="./product-detail.php">Інтраоральний
                                                            сканер Trios4</a></div>
                                                    <div class="product_thumb-price"><b>6,428.00</b> <span>грн</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product_thumb">
                                                    <div class="product_thumb-image">
                                                        <img class="img swiper-lazy" src="img/preloader.jpg"
                                                             data-src="img/products/SMARTtorque-S1619-L-turbinnyj-nakonechnyk.png"
                                                             alt="SMARTtorque S619 L турбінний наконечник, зі світлооптикою">
                                                        <span class="swiper-lazy-preloader"></span>
                                                        <a class='link' href="./product-detail.php"></a>
                                                        <div class='product_thumb-amount'>
                                                            <div class="thumb-input-number">
                                                                <button type="button" class="decrement"></button>
                                                                <input value="1" readonly="">
                                                                <button type="button" class="increment"></button>
                                                            </div>
                                                            <button class="btn btn-lg btn-secondary btn-add-cart">
                                                <span class="mob-tx">В кошик</span>
                                                <span class="desctop-tx">Додати в кошик</span>
                                                <span class="add-cart-last">в кошику</span>
                                                <span class="add-cart-loader">
                                                    <span></span><span></span><span></span>
                                                </span>
                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_thumb-title text-md"><a href="./product-detail.php">SMARTtorque
                                                            S619 L
                                                            турбінний наконечник, зі світлооптикою</a></div>
                                                    <div class="product_thumb-price">
                                                        <b>288,600.00</b> <span>грн</span>
                                                        <div class="old-price">294,600.00 грн</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product_thumb">
                                                    <div class="product_thumb-image">
                                                        <img class="img swiper-lazy" src="img/preloader.jpg"
                                                             data-src="img/products/instrument-dlia-tuneliuvannia-typ-Steigmann-TKSTEIG2.png"
                                                             alt="Інструмент для тунелювання, тип Steigmann, TKSTEIG2">
                                                        <span class="swiper-lazy-preloader"></span>
                                                        <a class='link' href="./product-detail.php"></a>
                                                        <div class='product_thumb-amount'>
                                                            <div class="thumb-input-number">
                                                                <button type="button" class="decrement"></button>
                                                                <input value="1" readonly="">
                                                                <button type="button" class="increment"></button>
                                                            </div>
                                                            <button class="btn btn-lg btn-secondary btn-add-cart">
                                                <span class="mob-tx">В кошик</span>
                                                <span class="desctop-tx">Додати в кошик</span>
                                                <span class="add-cart-last">в кошику</span>
                                                <span class="add-cart-loader">
                                                    <span></span><span></span><span></span>
                                                </span>
                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_thumb-title text-md"><a href="./product-detail.php">Інструмент для
                                                            тунелювання, тип Steigmann, TKSTEIG2</a></div>
                                                    <div class="product_thumb-price">
                                                        <b>10,500.00</b> <span>грн</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-tab">
                                <div class="swiper-entry thumb_swiper">
                                    <div class="swiper-button-prev d-none"></div>
                                    <div class="swiper-button-next d-none"></div>
                                    <div class="swiper-container" data-options='{ "autoHeight":true, "autoplay": {"delay":3500}, "speed":800, "spaceBetween":30, "slidesPerView":3, "breakpoints": {"1368": {"spaceBetween": 10},"1199": {"slidesPerView": 2}, "575": {"slidesPerView": 1, "spaceBetween":20} },
                                    "watchSlidesProgress":true, "watchSlidesVisibility":true
                                 }'>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="product_thumb">
                                                    <div class="product_thumb-image">
                                                        <span class="product_thumb-special">Акція</span>
                                                        <img class="img swiper-lazy" src="img/preloader.jpg"
                                                             data-src="img/products/intraoralnyj-skaner-trios4.png"
                                                             alt="Інтраоральний сканер Trios4">
                                                        <span class="swiper-lazy-preloader"></span>
                                                        <a class='link' href="./product-detail.php"></a>
                                                        <div class='product_thumb-amount'>
                                                            <div class="thumb-input-number">
                                                                <button type="button" class="decrement"></button>
                                                                <input value="1" readonly="">
                                                                <button type="button" class="increment"></button>
                                                            </div>
                                                            <button class="btn btn-lg btn-secondary btn-add-cart">
                                                <span class="mob-tx">В кошик</span>
                                                <span class="desctop-tx">Додати в кошик</span>
                                                <span class="add-cart-last">в кошику</span>
                                                <span class="add-cart-loader">
                                                    <span></span><span></span><span></span>
                                                </span>
                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_thumb-title text-md"><a href="./product-detail.php">Інтраоральний
                                                            сканер Trios4</a></div>
                                                    <div class="product_thumb-price"><b>6,428.00</b> <span>грн</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product_thumb">
                                                    <div class="product_thumb-image">
                                                        <img class="img swiper-lazy" src="img/preloader.jpg"
                                                             data-src="img/products/SMARTtorque-S1619-L-turbinnyj-nakonechnyk.png"
                                                             alt="SMARTtorque S619 L турбінний наконечник, зі світлооптикою">
                                                        <span class="swiper-lazy-preloader"></span>
                                                        <a class='link' href="./product-detail.php"></a>
                                                        <div class='product_thumb-amount'>
                                                            <div class="thumb-input-number">
                                                                <button type="button" class="decrement"></button>
                                                                <input value="1" readonly="">
                                                                <button type="button" class="increment"></button>
                                                            </div>
                                                            <button class="btn btn-lg btn-secondary btn-add-cart">
                                                <span class="mob-tx">В кошик</span>
                                                <span class="desctop-tx">Додати в кошик</span>
                                                <span class="add-cart-last">в кошику</span>
                                                <span class="add-cart-loader">
                                                    <span></span><span></span><span></span>
                                                </span>
                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_thumb-title text-md"><a href="./product-detail.php">SMARTtorque
                                                            S619 L
                                                            турбінний наконечник, зі світлооптикою</a></div>
                                                    <div class="product_thumb-price">
                                                        <b>288,600.00</b> <span>грн</span>
                                                        <div class="old-price">294,600.00 грн</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product_thumb">
                                                    <div class="product_thumb-image">
                                                        <img class="img swiper-lazy" src="img/preloader.jpg"
                                                             data-src="img/products/instrument-dlia-tuneliuvannia-typ-Steigmann-TKSTEIG2.png"
                                                             alt="Інструмент для тунелювання, тип Steigmann, TKSTEIG2">
                                                        <span class="swiper-lazy-preloader"></span>
                                                        <a class='link' href="./product-detail.php"></a>
                                                        <div class='product_thumb-amount'>
                                                            <div class="thumb-input-number">
                                                                <button type="button" class="decrement"></button>
                                                                <input value="1" readonly="">
                                                                <button type="button" class="increment"></button>
                                                            </div>
                                                            <button class="btn btn-lg btn-secondary btn-add-cart">
                                                <span class="mob-tx">В кошик</span>
                                                <span class="desctop-tx">Додати в кошик</span>
                                                <span class="add-cart-last">в кошику</span>
                                                <span class="add-cart-loader">
                                                    <span></span><span></span><span></span>
                                                </span>
                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_thumb-title text-md"><a href="./product-detail.php">Інструмент для
                                                            тунелювання, тип Steigmann, TKSTEIG2</a></div>
                                                    <div class="product_thumb-price">
                                                        <b>10,500.00</b> <span>грн</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product_thumb">
                                                    <div class="product_thumb-image">
                                                        <span class="product_thumb-special">Акція</span>
                                                        <img class="img swiper-lazy" src="img/preloader.jpg"
                                                             data-src="img/products/intraoralnyj-skaner-trios4.png"
                                                             alt="Інтраоральний сканер Trios4">
                                                        <span class="swiper-lazy-preloader"></span>
                                                        <a class='link' href="./product-detail.php"></a>
                                                        <div class='product_thumb-amount'>
                                                            <div class="thumb-input-number">
                                                                <button type="button" class="decrement"></button>
                                                                <input value="1" readonly="">
                                                                <button type="button" class="increment"></button>
                                                            </div>
                                                            <button class="btn btn-lg btn-secondary btn-add-cart">
                                                <span class="mob-tx">В кошик</span>
                                                <span class="desctop-tx">Додати в кошик</span>
                                                <span class="add-cart-last">в кошику</span>
                                                <span class="add-cart-loader">
                                                    <span></span><span></span><span></span>
                                                </span>
                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_thumb-title text-md"><a href="./product-detail.php">Інтраоральний
                                                            сканер Trios4</a></div>
                                                    <div class="product_thumb-price"><b>6,428.00</b> <span>грн</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product_thumb">
                                                    <div class="product_thumb-image">
                                                        <img class="img swiper-lazy" src="img/preloader.jpg"
                                                             data-src="img/products/SMARTtorque-S1619-L-turbinnyj-nakonechnyk.png"
                                                             alt="SMARTtorque S619 L турбінний наконечник, зі світлооптикою">
                                                        <span class="swiper-lazy-preloader"></span>
                                                        <a class='link' href="./product-detail.php"></a>
                                                        <div class='product_thumb-amount'>
                                                            <div class="thumb-input-number">
                                                                <button type="button" class="decrement"></button>
                                                                <input value="1" readonly="">
                                                                <button type="button" class="increment"></button>
                                                            </div>
                                                            <button class="btn btn-lg btn-secondary btn-add-cart">
                                                <span class="mob-tx">В кошик</span>
                                                <span class="desctop-tx">Додати в кошик</span>
                                                <span class="add-cart-last">в кошику</span>
                                                <span class="add-cart-loader">
                                                    <span></span><span></span><span></span>
                                                </span>
                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_thumb-title text-md"><a href="./product-detail.php">SMARTtorque
                                                            S619 L
                                                            турбінний наконечник, зі світлооптикою</a></div>
                                                    <div class="product_thumb-price">
                                                        <b>288,600.00</b> <span>грн</span>
                                                        <div class="old-price">294,600.00 грн</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product_thumb">
                                                    <div class="product_thumb-image">
                                                        <img class="img swiper-lazy" src="img/preloader.jpg"
                                                             data-src="img/products/instrument-dlia-tuneliuvannia-typ-Steigmann-TKSTEIG2.png"
                                                             alt="Інструмент для тунелювання, тип Steigmann, TKSTEIG2">
                                                        <span class="swiper-lazy-preloader"></span>
                                                        <a class='link' href="./product-detail.php"></a>
                                                        <div class='product_thumb-amount'>
                                                            <div class="thumb-input-number">
                                                                <button type="button" class="decrement"></button>
                                                                <input value="1" readonly="">
                                                                <button type="button" class="increment"></button>
                                                            </div>
                                                            <button class="btn btn-lg btn-secondary btn-add-cart">
                                                <span class="mob-tx">В кошик</span>
                                                <span class="desctop-tx">Додати в кошик</span>
                                                <span class="add-cart-last">в кошику</span>
                                                <span class="add-cart-loader">
                                                    <span></span><span></span><span></span>
                                                </span>
                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_thumb-title text-md"><a href="./product-detail.php">Інструмент для
                                                            тунелювання, тип Steigmann, TKSTEIG2</a></div>
                                                    <div class="product_thumb-price">
                                                        <b>10,500.00</b> <span>грн</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-tab">
                                <div class="swiper-entry thumb_swiper">
                                    <div class="swiper-button-prev d-none"></div>
                                    <div class="swiper-button-next d-none"></div>
                                    <div class="swiper-container" data-options='{ "autoHeight":true, "speed":800, "autoplay": {"delay":3500}, "spaceBetween":30, "slidesPerView":3, "breakpoints": {"1368": {"spaceBetween": 10},"1199": {"slidesPerView": 2}, "575": {"slidesPerView": 1, "spaceBetween":20} },
                                    "watchSlidesProgress":true, "watchSlidesVisibility":true
                                 }'>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="product_thumb">
                                                    <div class="product_thumb-image">
                                                        <span class="product_thumb-special">Акція</span>
                                                        <img class="img swiper-lazy" src="img/preloader.jpg"
                                                             data-src="img/products/intraoralnyj-skaner-trios4.png"
                                                             alt="Інтраоральний сканер Trios4">
                                                        <span class="swiper-lazy-preloader"></span>
                                                        <a class='link' href="./product-detail.php"></a>
                                                        <div class='product_thumb-amount'>
                                                            <div class="thumb-input-number">
                                                                <button type="button" class="decrement"></button>
                                                                <input value="1" readonly="">
                                                                <button type="button" class="increment"></button>
                                                            </div>
                                                            <button class="btn btn-lg btn-secondary btn-add-cart">
                                                <span class="mob-tx">В кошик</span>
                                                <span class="desctop-tx">Додати в кошик</span>
                                                <span class="add-cart-last">в кошику</span>
                                                <span class="add-cart-loader">
                                                    <span></span><span></span><span></span>
                                                </span>
                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_thumb-title text-md"><a href="./product-detail.php">Інтраоральний
                                                            сканер Trios4</a></div>
                                                    <div class="product_thumb-price"><b>6,428.00</b> <span>грн</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product_thumb">
                                                    <div class="product_thumb-image">
                                                        <img class="img swiper-lazy" src="img/preloader.jpg"
                                                             data-src="img/products/SMARTtorque-S1619-L-turbinnyj-nakonechnyk.png"
                                                             alt="SMARTtorque S619 L турбінний наконечник, зі світлооптикою">
                                                        <span class="swiper-lazy-preloader"></span>
                                                        <a class='link' href="./product-detail.php"></a>
                                                        <div class='product_thumb-amount'>
                                                            <div class="thumb-input-number">
                                                                <button type="button" class="decrement"></button>
                                                                <input value="1" readonly="">
                                                                <button type="button" class="increment"></button>
                                                            </div>
                                                            <button class="btn btn-lg btn-secondary btn-add-cart">
                                                <span class="mob-tx">В кошик</span>
                                                <span class="desctop-tx">Додати в кошик</span>
                                                <span class="add-cart-last">в кошику</span>
                                                <span class="add-cart-loader">
                                                    <span></span><span></span><span></span>
                                                </span>
                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_thumb-title text-md"><a href="./product-detail.php">SMARTtorque
                                                            S619 L
                                                            турбінний наконечник, зі світлооптикою</a></div>
                                                    <div class="product_thumb-price">
                                                        <b>288,600.00</b> <span>грн</span>
                                                        <div class="old-price">294,600.00 грн</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product_thumb">
                                                    <div class="product_thumb-image">
                                                        <img class="img swiper-lazy" src="img/preloader.jpg"
                                                             data-src="img/products/instrument-dlia-tuneliuvannia-typ-Steigmann-TKSTEIG2.png"
                                                             alt="Інструмент для тунелювання, тип Steigmann, TKSTEIG2">
                                                        <span class="swiper-lazy-preloader"></span>
                                                        <a class='link' href="./product-detail.php"></a>
                                                        <div class='product_thumb-amount'>
                                                            <div class="thumb-input-number">
                                                                <button type="button" class="decrement"></button>
                                                                <input value="1" readonly="">
                                                                <button type="button" class="increment"></button>
                                                            </div>
                                                            <button class="btn btn-lg btn-secondary btn-add-cart">
                                                <span class="mob-tx">В кошик</span>
                                                <span class="desctop-tx">Додати в кошик</span>
                                                <span class="add-cart-last">в кошику</span>
                                                <span class="add-cart-loader">
                                                    <span></span><span></span><span></span>
                                                </span>
                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_thumb-title text-md"><a href="./product-detail.php">Інструмент для
                                                            тунелювання, тип Steigmann, TKSTEIG2</a></div>
                                                    <div class="product_thumb-price">
                                                        <b>10,500.00</b> <span>грн</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product_thumb">
                                                    <div class="product_thumb-image">
                                                        <span class="product_thumb-special">Акція</span>
                                                        <img class="img swiper-lazy" src="img/preloader.jpg"
                                                             data-src="img/products/intraoralnyj-skaner-trios4.png"
                                                             alt="Інтраоральний сканер Trios4">
                                                        <span class="swiper-lazy-preloader"></span>
                                                        <a class='link' href="./product-detail.php"></a>
                                                        <div class='product_thumb-amount'>
                                                            <div class="thumb-input-number">
                                                                <button type="button" class="decrement"></button>
                                                                <input value="1" readonly="">
                                                                <button type="button" class="increment"></button>
                                                            </div>
                                                            <button class="btn btn-lg btn-secondary btn-add-cart">
                                                <span class="mob-tx">В кошик</span>
                                                <span class="desctop-tx">Додати в кошик</span>
                                                <span class="add-cart-last">в кошику</span>
                                                <span class="add-cart-loader">
                                                    <span></span><span></span><span></span>
                                                </span>
                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_thumb-title text-md"><a href="./product-detail.php">Інтраоральний
                                                            сканер Trios4</a></div>
                                                    <div class="product_thumb-price"><b>6,428.00</b> <span>грн</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product_thumb">
                                                    <div class="product_thumb-image">
                                                        <img class="img swiper-lazy" src="img/preloader.jpg"
                                                             data-src="img/products/SMARTtorque-S1619-L-turbinnyj-nakonechnyk.png"
                                                             alt="SMARTtorque S619 L турбінний наконечник, зі світлооптикою">
                                                        <span class="swiper-lazy-preloader"></span>
                                                        <a class='link' href="./product-detail.php"></a>
                                                        <div class='product_thumb-amount'>
                                                            <div class="thumb-input-number">
                                                                <button type="button" class="decrement"></button>
                                                                <input value="1" readonly="">
                                                                <button type="button" class="increment"></button>
                                                            </div>
                                                            <button class="btn btn-lg btn-secondary btn-add-cart">
                                                <span class="mob-tx">В кошик</span>
                                                <span class="desctop-tx">Додати в кошик</span>
                                                <span class="add-cart-last">в кошику</span>
                                                <span class="add-cart-loader">
                                                    <span></span><span></span><span></span>
                                                </span>
                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_thumb-title text-md"><a href="./product-detail.php">SMARTtorque
                                                            S619 L
                                                            турбінний наконечник, зі світлооптикою</a></div>
                                                    <div class="product_thumb-price">
                                                        <b>288,600.00</b> <span>грн</span>
                                                        <div class="old-price">294,600.00 грн</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product_thumb">
                                                    <div class="product_thumb-image">
                                                        <img class="img swiper-lazy" src="img/preloader.jpg"
                                                             data-src="img/products/instrument-dlia-tuneliuvannia-typ-Steigmann-TKSTEIG2.png"
                                                             alt="Інструмент для тунелювання, тип Steigmann, TKSTEIG2">
                                                        <span class="swiper-lazy-preloader"></span>
                                                        <a class='link' href="./product-detail.php"></a>
                                                        <div class='product_thumb-amount'>
                                                            <div class="thumb-input-number">
                                                                <button type="button" class="decrement"></button>
                                                                <input value="1" readonly="">
                                                                <button type="button" class="increment"></button>
                                                            </div>
                                                            <button class="btn btn-lg btn-secondary btn-add-cart">
                                                <span class="mob-tx">В кошик</span>
                                                <span class="desctop-tx">Додати в кошик</span>
                                                <span class="add-cart-last">в кошику</span>
                                                <span class="add-cart-loader">
                                                    <span></span><span></span><span></span>
                                                </span>
                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_thumb-title text-md"><a href="./product-detail.php">Інструмент для
                                                            тунелювання, тип Steigmann, TKSTEIG2</a></div>
                                                    <div class="product_thumb-price">
                                                        <b>10,500.00</b> <span>грн</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-12 d-lg-none">
                        <a class="btn btn-primary mb-block thumb_swiper-md-btn" href="./products.php">
                            <span class="btn-text">перейти в магазин</span>
                            <span class="arr"></span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end of PRODUCT THUMBS SWIPER SECTION -->
        </div>

        <!-- EVENT THUMBS SWIPER SECTION -->
        <div class="section st-dark content-section">

            <div class="decor-wrapper">
                <div class="decor pos2"><img src="./img/decor-dark-01.svg" alt=""></div>
                <div class="decor pos3"><img src="./img/decor-dark-02.svg" alt=""></div>
            </div>

            <div class="container">
                <div class="row anime">
                    <div class="col-sm-8">

                        <div class="h1 main-title color-white" style="position: relative">
                            <b class="anime-title-inner">Найближчі <span class="color-secondary">заходи</span></b>
                            <b aria-hidden="true">
                                <svg class="title-svg" version="1.1" viewBox="0 0 100 100" width="100%" height="100%" preserveAspectRatio="xMinYMid meet">
                                    <text x="0" y="76" stroke-width="1" text-anchor="start">
                                        <tspan>Найближчі</tspan> <tspan class="color-secondary">заходи</tspan>
                                    </text>
                                </svg>
                            </b>
                        </div>


                    </div>
                    <div class="col-12">
                        <div class="swiper-entry event_thumb-swiper thumb-dark-bg">
                            <div class="swiper-buttons-wrap pos-right-top style-line light">
                                <div class="swiper-button-prev style-1">
                                    <div class="arr"></div>
                                </div>
                                <div class="swiper-button-next style-1">
                                    <div class="arr"></div>
                                </div>
                            </div>
                            <div class="swiper-container" data-options='{ "speed":800, "autoplay": {"delay":3500}, "spaceBetween":0, "slidesPerView":3, "breakpoints": {"1199": {"slidesPerView": 2}, "575": {"slidesPerView": 1} } }'>
                          <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                  
                                  <div class="event_thumb">
                                      <div class="event_thumb-info">
                                          <div class="text-icon text-sm color-white">
                                              <i class="icon">
                                                  <img class="img" src="img/preloader.jpg" data-i-src="img/icons/icon-calendar-orange.svg" alt="">
                                              </i>
                                              <span>06 листопада, 2020</span>
                                          </div>
                                          <div class="text-icon text-sm color-white">
                                              <i class="icon">
                                                  <img class="img" src="img/preloader.jpg" data-i-src="img/icons/icon-location-orange.svg" alt="">
                                              </i>
                                              <span>Львів</span>
                                          </div>
                                      </div>
                                      <a href="./event-detail.php" class="event_thumb-image">
                                          <!-- images here MUST be cropped to size 456*300 ( or same proportion ) -->
                                          <img class="img swiper-lazy" src="img/preloader.jpg" data-src="img/events/hirurgichnyj-majster-kurs-vid-doctora-andrija-gauka.jpg" alt="Хірургічний Майстер курс від доктора Андрія Гаука">
                                          <span class="swiper-lazy-preloader"></span>
                                      </a>
                                      <div class="event_thumb-title text-lg"><a href="./event-detail.php">Хірургічний Майстер курс від доктора Андрія Гаука</a></div>
                                      <div class="event_thumb-desc text-md article">Базовий практичний курс з хірургії : 4 дні практики та реальні операції.</div>
                                  </div>
                              </div>
                              <div class="swiper-slide">
                                  <div class="event_thumb">
                                      <div class="event_thumb-info">
                                          <div class="text-icon text-sm color-white">
                                              <i class="icon">
                                                  <img class="img" src="img/preloader.jpg" data-i-src="img/icons/icon-calendar-orange.svg" alt="">
                                              </i>
                                              <span>06 листопада, 2020</span>
                                          </div>
                                          <div class="text-icon text-sm color-white">
                                              <i class="icon">
                                                  <img class="img" src="img/preloader.jpg" data-i-src="img/icons/icon-location-orange.svg" alt="">
                                              </i>
                                              <span>Львів</span>
                                          </div>
                                      </div>
                                      <a href="./event-detail.php" class="event_thumb-image">
                                          <!-- images here MUST be cropped to size 456*300 ( or same proportion ) -->
                                          <img class="img swiper-lazy" src="img/preloader.jpg" data-src="img/events/majster-klas-na-fantomnych-modeliah-vid-dr-karol-babinski.jpg" alt="Майстер-клас на фантомних моделях від Dr. Karol Babinski">
                                          <span class="swiper-lazy-preloader"></span>
                                      </a>
                                      <div class="event_thumb-title text-lg"><a href="./event-detail.php">Майстер-клас на фантомних моделях від Dr. Karol Babinski</a></div>
                                      <div class="event_thumb-desc text-md article">Базовий практичний курс з хірургії : 4 дні практики та реальні операції.</div>
                                  </div>
                              </div>
                              <div class="swiper-slide">
                                  <div class="event_thumb">
                                      <div class="event_thumb-info">
                                          <div class="text-icon text-sm color-white">
                                              <i class="icon">
                                                  <img class="img" src="img/preloader.jpg" data-i-src="img/icons/icon-calendar-orange.svg" alt="">
                                              </i>
                                              <span>06 листопада, 2020</span>
                                          </div>
                                          <div class="text-icon text-sm color-white">
                                              <i class="icon">
                                                  <img class="img" src="img/preloader.jpg" data-i-src="img/icons/icon-location-orange.svg" alt="">
                                              </i>
                                              <span>Львів</span>
                                          </div>
                                      </div>
                                      <a href="./event-detail.php" class="event_thumb-image">
                                          <!-- images here MUST be cropped to size 456*300 ( or same proportion ) -->
                                          <img class="img swiper-lazy" src="img/preloader.jpg" data-src="img/events/majster-klasy-ta-demonstratsii.jpg" alt="Майстер-класи та демонстрації">
                                          <span class="swiper-lazy-preloader"></span>
                                      </a>
                                      <div class="event_thumb-title text-lg"><a href="./event-detail.php">Майстер-класи та демонстрації</a></div>
                                      <div class="event_thumb-desc text-md article">Базовий практичний курс з хірургії : 4 дні практики та реальні операції.</div>
                                  </div>
                              </div>
                              <div class="swiper-slide">
                                  <div class="event_thumb">
                                      <div class="event_thumb-info">
                                          <div class="text-icon text-sm color-white">
                                              <i class="icon">
                                                  <img class="img" src="img/preloader.jpg" data-i-src="img/icons/icon-calendar-orange.svg" alt="">
                                              </i>
                                              <span>06 листопада, 2020</span>
                                          </div>
                                          <div class="text-icon text-sm color-white">
                                              <i class="icon">
                                                  <img class="img" src="img/preloader.jpg" data-i-src="img/icons/icon-location-orange.svg" alt="">
                                              </i>
                                              <span>Львів</span>
                                          </div>
                                      </div>
                                      <a href="./event-detail.php" class="event_thumb-image">
                                          <!-- images here MUST be cropped to size 456*300 ( or same proportion ) -->
                                          <img class="img swiper-lazy" src="img/preloader.jpg" data-src="img/events/hirurgichnyj-majster-kurs-vid-doctora-andrija-gauka.jpg" alt="Хірургічний Майстер курс від доктора Андрія Гаука">
                                          <span class="swiper-lazy-preloader"></span>
                                      </a>
                                      <div class="event_thumb-title text-lg"><a href="./event-detail.php">Хірургічний Майстер курс від доктора Андрія Гаука</a></div>
                                      <div class="event_thumb-desc text-md article">Базовий практичний курс з хірургії : 4 дні практики та реальні операції.</div>
                                  </div>
                              </div>
                              <div class="swiper-slide">
                                  <div class="event_thumb">
                                      <div class="event_thumb-info">
                                          <div class="text-icon text-sm color-white">
                                              <i class="icon">
                                                  <img class="img" src="img/preloader.jpg" data-i-src="img/icons/icon-calendar-orange.svg" alt="">
                                              </i>
                                              <span>06 листопада, 2020</span>
                                          </div>
                                          <div class="text-icon text-sm color-white">
                                              <i class="icon">
                                                  <img class="img" src="img/preloader.jpg" data-i-src="img/icons/icon-location-orange.svg" alt="">
                                              </i>
                                              <span>Львів</span>
                                          </div>
                                      </div>
                                      <a href="./event-detail.php" class="event_thumb-image">
                                          <!-- images here MUST be cropped to size 456*300 ( or same proportion ) -->
                                          <img class="img swiper-lazy" src="img/preloader.jpg" data-src="img/events/majster-klas-na-fantomnych-modeliah-vid-dr-karol-babinski.jpg" alt="Майстер-клас на фантомних моделях від Dr. Karol Babinski">
                                          <span class="swiper-lazy-preloader"></span>
                                      </a>
                                      <div class="event_thumb-title text-lg"><a href="./event-detail.php">Майстер-клас на фантомних моделях від Dr. Karol Babinski</a></div>
                                      <div class="event_thumb-desc text-md article">Базовий практичний курс з хірургії : 4 дні практики та реальні операції.</div>
                                  </div>
                              </div>
                              <div class="swiper-slide">
                                  <div class="event_thumb">
                                      <div class="event_thumb-info">
                                          <div class="text-icon text-sm color-white">
                                              <i class="icon">
                                                  <img class="img" src="img/preloader.jpg" data-i-src="img/icons/icon-calendar-orange.svg" alt="">
                                              </i>
                                              <span>06 листопада, 2020</span>
                                          </div>
                                          <div class="text-icon text-sm color-white">
                                              <i class="icon">
                                                  <img class="img" src="img/preloader.jpg" data-i-src="img/icons/icon-location-orange.svg" alt="">
                                              </i>
                                              <span>Львів</span>
                                          </div>
                                      </div>
                                      <a href="./event-detail.php" class="event_thumb-image">
                                          <!-- images here MUST be cropped to size 456*300 ( or same proportion ) -->
                                          <img class="img swiper-lazy" src="img/preloader.jpg" data-src="img/events/majster-klasy-ta-demonstratsii.jpg" alt="Майстер-класи та демонстрації">
                                          <span class="swiper-lazy-preloader"></span>
                                      </a>
                                      <div class="event_thumb-title text-lg"><a href="./event-detail.php">Майстер-класи та демонстрації</a></div>
                                      <div class="event_thumb-desc text-md article">Базовий практичний курс з хірургії : 4 дні практики та реальні операції.</div>
                                  </div>
                              </div>
                          </div>
                      </div>
                            <div class="swiper-pagination d-sm-none"></div>
                        </div>

                        <a class="btn btn-primary content-btn mb-block" href="./events.php">
                            <span class="btn-text">Всі події</span>
                            <span class="arr"></span>
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <!-- end of EVENT THUMBS SWIPER SECTION -->

        <!-- LEFT-RIGHT SECTION -->
        <div class="section content-section left_right-section">
                
            <div class="decor-wrapper">
                <div class="decor pos1"><img src="./img/decor-03.svg" alt=""></div>
                <div class="decor pos4"><img src="./img/decor-04.svg" alt=""></div>
            </div>

            <div class="left_right">
                <div class="container">
                    <div class="row anime">
                        <div class="col-lg-6 col-xl-6 offset-xl-1 order-lg-2">
                            <img class="left_right-img img" src="img/preloader.jpg" data-i-src="img/img2.jpg" alt="Програма навчання спеціалістів">
                        </div>

                        <div class="col-lg-5 offset-lg-1 col-xl-4 offset-xl-1 align-self-center">
                            <!-- <div class="h1"><b>Програм навчання<span class="color-secondary"> спеціалістів</span></b></div> -->

                            <div class="h1 main-title content-title">
                                <b class="anime-title-inner">
                                    <span class="color-secondary">Програм навчання</span><br> спеціалістів
                                </b>
                                <b aria-hidden="true">
                                    <svg class="title-svg" version="1.1" viewBox="0 0 100 200" width="100%" height="100%" preserveAspectRatio="xMinYMid meet">
                                        <text class="color-secondary" x="0" y="76" stroke-width="1" text-anchor="start">
                                            <tspan>Програм навчання </tspan>
                                        </text>
                                        <text x="0" y="176">
                                            <tspan>спеціалістів</tspan>
                                        </text>
                                    </svg>
                                </b>
                            </div>


                            <div class="article left_right-desc article text font-text color-grey">
                                <p>Ефективна система навчання в невеликих групах — дозволяє здобути нові практичні навички, з практикою на фантомах і демонстрацією на пацієнті</p>
                            </div>
                            <a href="./template.php" class="simple-link">Детальніше<i class="arr"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="left_right">
                <div class="container">
                    <div class="row anime">
                        <div class="col-lg-6 col-xl-5">
                            <img class="left_right-img img" src="img/preloader.jpg" data-i-src="img/img3.jpg" alt="Високоякісне обладнання для Вашої клініки">
                        </div>
                        <div class="col-lg-5 offset-lg-1 col-xl-4 offset-xl-1 align-self-center">


                            <div class="h1 main-title content-title">
                                <b class="anime-title-inner">
                                     <span class="color-secondary">Високоякісне<br> обладнання</span> для <br> Вашої клініки
                                </b>
                                <b aria-hidden="true">
                                    <svg class="title-svg" version="1.1" viewBox="0 0 100 300" width="100%" height="100%" preserveAspectRatio="xMinYMid meet">
                                        <text class="color-secondary" x="0" y="76" stroke-width="1" text-anchor="start">
                                            <tspan>Високоякісне</tspan>
                                        </text>
                                        <text x="0" y="176">
                                            <tspan class="color-secondary">обладнання</tspan> <tspan> для</tspan>
                                        </text>
                                        <text x="0" y="276">
                                            <tspan>Вашої клініки</tspan>
                                        </text>
                                    </svg>
                                </b>
                            </div>


                            <div class="left_right-desc article text font-text color-grey">
                                <p>Спеціалісти <b>Dental Depo</b> готові з рішеннями для цифрових реставрацій. Це складний процес, який вимагає спільної роботи та залежить від організації цифрового протоколу в клініці</p>
                            </div>
                            <a href="./template.php" class="simple-link">Детальніше<i class="arr"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="left_right">
                <div class="container">
                    <div class="row anime">
                        <div class="col-lg-6 col-xl-6 offset-xl-1 order-lg-2">
                            <img class="left_right-img img" src="img/preloader.jpg" data-i-src="img/img4.jpg" alt="Відповідальний сервіс та підтримка обладнання">
                        </div>
                        <div class="col-lg-5 offset-lg-1 col-xl-4 offset-xl-1 align-self-center">

                            <!-- <div class="h1 content-title"><b><span class="color-secondary"> Відповідальний сервіс</span> та підтримка обладнання</b></div> -->
                            
                            <div class="h1 main-title content-title">
                                <b class="anime-title-inner">
                                     <span class="color-secondary">Відповідальний<br> сервіс</span> та підтримка <br> обладнання
                                </b>
                                <b aria-hidden="true">
                                    <svg class="title-svg" version="1.1" viewBox="0 0 100 300" width="100%" height="100%" preserveAspectRatio="xMinYMid meet">
                                        <text class="color-secondary" x="0" y="76" stroke-width="1" text-anchor="start">
                                            <tspan>Відповідальний</tspan>
                                        </text>
                                        <text x="0" y="176">
                                            <tspan class="color-secondary">сервіс</tspan> <tspan> та підтримка</tspan>
                                        </text>
                                        <text x="0" y="276">
                                            <tspan>обладнання</tspan>
                                        </text>
                                    </svg>
                                </b>
                            </div>

                            <div class="left_right-desc article text font-text color-grey">
                                <p>Нам важливо, щоб обладнання у Вашій клініці працювало бездоганно, бо ми розуміємо наскільки це впливає на рівень обслуговування пацієнтів</p>
                            </div>
                            <a href="./template.php" class="simple-link">Детальніше<i class="arr"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- end of LEFT-RIGHT SECTION -->

        <!-- LOGO SWIPER SECTION -->
        <div class="section st-dark overflow-hidden content-section">
            <div class="decor-wrapper">
                <div class="decor pos2"><img src="./img/decor-dark-03.svg" alt=""></div>
            </div>
            <div class="container">
                <div class="row anime">
                    <div class="col-xl-4 col-lg-6">



                        <div class="h1 main-title color-white logo-swiper-title">
                            <span class="anime-title-inner">
                                <b class="color-secondary">Співпрацюємо</b> з <br> кращими лідерами
                            </span>
                            <b aria-hidden="true">
                                <svg class="title-svg" version="1.1" viewBox="0 0 100 200" width="100%" height="100%" preserveAspectRatio="xMinYMid meet">
                                    <text class="color-secondary" x="0" y="76" stroke-width="1" text-anchor="start">
                                        <tspan>Співпрацюємо </tspan> <tspan class="w-regular">з</tspan>
                                    </text>
                                    <text class="w-regular" x="0" y="176">
                                        <tspan>кращими лідерами</tspan>
                                    </text>
                                </svg>
                            </b>
                        </div>

                    </div>
                    <div class="col-xl-5 offset-xl-1 col-lg-6 align-self-center">
                        <div class="article color-grey2 text-lg">
                            <p>Спочатку уявити, а потім втілити в життя проекти клінік, що стають взірцевими і відомими в Україні та за її межами – це те, що надихає і сповнює нас енергією.</p>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="swiper-entry logo-swiper logo-bg-dark">
                            <div class="swiper-button-prev style-no-borders pos-on-sides">
                                <div class="arr"></div>
                            </div>
                            <div class="swiper-button-next style-no-borders pos-on-sides">
                                <div class="arr"></div>
                            </div>
                            <div class="swiper-container" data-options='{"speed":800, "centerInsufficientSlides": false, "autoplay": {"delay":3500}, "spaceBetween":0, "slidesPerView":6, "breakpoints": {"1499": {"slidesPerView": 5}, "991": {"slidesPerView": 4}, "575": {"slidesPerView": 2} } }'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="logo-swiper-item">
                                            <img class="img swiper-lazy" src="img/preloader.jpg" data-src="img/logos/logo-0-1.png" alt="" >
                                            <div class="swiper-lazy-preloader"></div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="logo-swiper-item">
                                            <img class="img swiper-lazy" src="img/preloader.jpg" data-src="img/logos/logo-0-2.png" alt="" >
                                            <div class="swiper-lazy-preloader"></div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="logo-swiper-item">
                                            <img class="img swiper-lazy" src="img/preloader.jpg" data-src="img/logos/logo-0-3.png" alt="" >
                                            <div class="swiper-lazy-preloader"></div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="logo-swiper-item">
                                            <img class="img swiper-lazy" src="img/preloader.jpg" data-src="img/logos/logo-0-4.png" alt="" >
                                            <div class="swiper-lazy-preloader"></div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="logo-swiper-item">
                                            <img class="img swiper-lazy" src="img/preloader.jpg" data-src="img/logos/logo-0-5.png" alt="" >
                                            <div class="swiper-lazy-preloader"></div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="logo-swiper-item">
                                            <img class="img swiper-lazy" src="img/preloader.jpg" data-src="img/logos/logo-0-6.png" alt="" >
                                            <div class="swiper-lazy-preloader"></div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="logo-swiper-item">
                                            <img class="img swiper-lazy" src="img/preloader.jpg" data-src="img/logos/logo-0-1.png" alt="" >
                                            <div class="swiper-lazy-preloader"></div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="logo-swiper-item">
                                            <img class="img swiper-lazy" src="img/preloader.jpg" data-src="img/logos/logo-0-2.png" alt="" >
                                            <div class="swiper-lazy-preloader"></div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="logo-swiper-item">
                                            <img class="img swiper-lazy" src="img/preloader.jpg" data-src="img/logos/logo-0-3.png" alt="" >
                                            <div class="swiper-lazy-preloader"></div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="logo-swiper-item">
                                            <img class="img swiper-lazy" src="img/preloader.jpg" data-src="img/logos/logo-0-4.png" alt="" >
                                            <div class="swiper-lazy-preloader"></div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="logo-swiper-item">
                                            <img class="img swiper-lazy" src="img/preloader.jpg" data-src="img/logos/logo-0-5.png" alt="" >
                                            <div class="swiper-lazy-preloader"></div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="logo-swiper-item">
                                            <img class="img swiper-lazy" src="img/preloader.jpg" data-src="img/logos/logo-0-6.png" alt="" >
                                            <div class="swiper-lazy-preloader"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination swiper-pagination-relative d-md-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of LOGO SWIPER SECTION -->

        <!-- INSTAGRAM SECTION -->
        <div class="section content-section">
            <div class="decor-wrapper">
                <div class="decor pos1"><img src="./img/decor-05.svg" alt=""></div>
            </div>
            <div class="container anime">
                <div class="text-center">
                    <div class="h1 inline-title main-title">
                        <b class="anime-title-inner"><span class="color-secondary">Ми</span> в Instagram</b>
                        <b aria-hidden="true">
                            <svg class="title-svg" version="1.1" viewBox="0 0 100 100" width="100%" height="100%" preserveAspectRatio="xMinYMid meet">
                                <text x="0" y="76" stroke-width="1" text-anchor="start">
                                    <tspan class="color-secondary">Ми</tspan> <tspan>в Instagram</tspan>
                                </text>
                            </svg>
                        </b>
                    </div>
                </div>
                <ul class="insta_list">
                    <li class="insta_item"></li>
                    <li class="insta_item"></li>
                    <li class="insta_item"></li>
                    <li class="insta_item"></li>
                    <li class="insta_item"></li>
                </ul>
                <div class="text-center">
                    <a class="btn btn-primary mb-block" href="https://instagram.com" target="_blank">
                        <span class="btn-text">@Dentaldepo</span>
                        <span class="arr"></span>
                    </a>
                </div>
            </div>
        </div>
        <!-- end of INSTAGRAM SECTION -->
        
        <!-- SEO-TEXT SECTION -->
        <div class='section pd-bottom-lg seo-text'>
            
            <div class="decor-wrapper">
                <div class="decor pos5 zInx"><img src="./img/decor-06.svg" alt=""></div>
            </div>

            <div class='container'>

                <div class='row justify-content-center'>
                    <div class='col-xl-8'>
                        <div class="h2 title"><b>Клініка Dental Depo </b></div>
                        <div class='article text color-grey'>
                            <p>Втілення нових технологій та використання у роботі сучасних матеріалів. Робота над удосконаленням професійної майстерності спеціалістів. Розвиток міцних, довірчих відносин з пацієнтами та партнерами - ми надаємо якісні послуги та дотримуємось етичного кодексу.</p>
                        
                        </div>
                        <div class='seo-text-hidden' style="display: none;">
                            <div class='article text color-grey'>
                                <p>Уже 20 років ми успішно працюємо на стоматологічному ринку України. Ми гарантуємо нашим клієнтам якісний сервіс та комфортні умови співпраці 24/7.</p>
                                <p>Компанія DENTAL DEPO виступає організатором навчально-практичних курсів для стоматологів і зубних техніків. Щорічно приймає участь в спеціалізованих виставкових заходах в Україні.</p>
                            </div>
                        </div>
                        <div class="wr-btn-show">
                            <button class="btn-seo btn-show-text"> ПОКАЗАТИ БІЛЬШЕ <i class='icon-arrow'></i></button>
                            <button class="btn-seo btn-show-text" style="display: none;"> Приховати <i class='icon-arrow v-top'></i></button>
                        </div>

                    </div>
                </div>

            

            </div>
        </div>
        <!-- end of SEO-TEXT SECTION -->

    </main>

    <!-- FOOTER -->
    <footer class="footer">
        <?php include 'inc/_footer.php'; ?>
    </footer>
</div>

<!-- POPUPS -->
<?php include 'inc/_popups.php'; ?>
<?php include 'inc/_bottom.php'; ?>
<script src="js/instagram.js"></script>
</body>

</html>