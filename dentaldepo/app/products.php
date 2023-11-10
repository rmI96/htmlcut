<!DOCTYPE html>
<html lang="uk">
<head>
    <?php include 'inc/_top.php'; ?>
    <title>DENTAL DEPO - Products</title>

    <?php include 'inc/_noscript-top.php'; ?>
</head>
<body>
<div id="content-block">

    <div id="loader-wrapper"></div>

    <!-- HEADER -->
    <header class="header b-shadow">
        <?php include 'inc/_header.php'; ?>
    </header>

    <main>

        <div class='section relative products-page pd-top-mob pd-bottom-xl'>

            <div class='container'>

                <ul class="breadcrumbs">
                    <li><a href="./index.php">Головна</a></li>
                    <li><a href="./categories.php">Товари</a></li>
                    <li><a href="#">Стоматологічні інструменти</a></li>
                </ul>

                <div class='row justify-content-between align-items-center'>
                    <div class='col-lg-6'>
                        <h1 class='h3'><b> Одноразові матеріали, захист, дезінфекція </b></h1>
                    </div>
                    <div class='col-lg-5'>
                        <div class="products-top-filter">
                            <form class='products-search'>
                                <input class="input" type="text" placeholder="Пошук за назвою, або артикулем">
                                <input type="submit" value=''>
                            </form>
                            <select>
                                <option>За рейтингом</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class='row'>
                    <div class='col-xl-3'>
                    
                        <div class="products-filter-wrap">
                            <button class="products-filter-btn">
                                <span class="icon icon-setting"><img src="./img/icons/settings.svg" alt=""></span>
                                <span class="icon icon-close"><img src="./img/icons/close.svg" alt=""></span>
                            </button>
                            <div class="products-filter-scroll">
                                <div class="products-filter active">
                                    <div class="title">Категорії <i class="icon-arrow"></i></div>
                                    <div class="content" style='display: block;'>
                                        <ul class="filter-menu">
                                            <li class="active"><a href="#">Всі інструменти</a></li>
                                            <li><a href="#">Пародонтологічні інструменти</a></li>
                                            <li><a href="#">Системи організації інструментів</a></li>
                                            <li><a href="#">Терапевтичні, ортопедичні інструменти</a></li>
                                            <li><a href="#">Хірургічні інструменти</a></li>
                                            <li><a href="#">Мікрохірургічні інструменти</a></li>
                                            <li><a href="#">Ортодонтичні інструменти</a></li>
                                            <li><a href="#">Діагностичні інструменти</a></li>
                                            <li><a href="#">Ендодонтичні інструменти</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="products-filter active">
                                    <div class="title">Ціна <i class="icon-arrow"></i></div>
                                    <div class="content" style='display: block;'>

                                        <div class="filter-price">
                                            <div class="filter-input">
                                                <div class="item"><span>Від</span><input type="text" id='minCost'></div>
                                                <div class="item"><span>До</span><input type="text" id='maxCost'></div>
                                            </div>
                                            <div id='slider-range' data-min="0" data-max="870" data-start="87" data-end="646"></div>
                                        </div>
                                        
                                    </div>
                                </div>

                                <div class="products-filter active">
                                    <div class="title">Виробник <i class="icon-arrow"></i></div>
                                    <div class="content" style='display: block;'>
                                        <label class="checkbox-entry">
                                            <input type="checkbox" checked>
                                            <span>Akos</span>
                                        </label>
                                        <label class="checkbox-entry">
                                            <input type="checkbox">
                                            <span>Glin</span>
                                        </label>
                                        <label class="checkbox-entry">
                                            <input type="checkbox">
                                            <span>Boxing Hope</span>
                                        </label>
                                        <label class="checkbox-entry">
                                            <input type="checkbox">
                                            <span>Yearsun</span>
                                        </label>
                                        <label class="checkbox-entry">
                                            <input type="checkbox">
                                            <span>MJdent</span>
                                        </label>
                                        <label class="checkbox-entry">
                                            <input type="checkbox">
                                            <span>Greeloy</span>
                                        </label>
                                        <label class="checkbox-entry">
                                            <input type="checkbox">
                                            <span>Precision</span>
                                        </label>
                                        <label class="checkbox-entry">
                                            <input type="checkbox">
                                            <span>Flydent</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="products-filter">
                                    <div class="title">Сертифікація продукції <i class="icon-arrow"></i></div>
                                    <div class="content" style='display: none;'>
                                        content
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class='col-xl-9'>

                        <div class='row products-wrapper'>

                            <div class='col-lg-4 col-sm-6'>
                                <div class="product_thumb">
                                    <div class="product_thumb-image">
                                        <span class="product_thumb-special">Акція</span>
                                        <img class="img" src="img/products/instrument-dlia-tuneliuvannia-typ-Steigmann-TKSTEIG2.png" alt="Інтраоральний сканер Trios4">
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
                                                <span class='add-cart-last'>в кошику</span>
                                                <span class="add-cart-loader">
                                                    <span></span><span></span><span></span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product_thumb-title text-md"><a href="./product-detail.php">Інтраоральний
                                            сканер Trios4</a></div>
                                    <div class="product_thumb-price"><b class="color-default">від</b> <b>6,428.00</b> <span>грн</span>
                                    </div>
                                </div>
                            </div>

                            <div class='col-lg-4 col-sm-6'>
                                <div class="product_thumb">
                                    <div class="product_thumb-image">
                                        <span class="product_thumb-special">Акція</span>
                                        <img class="img" src="img/products/intraoralnyj-skaner-trios4.png" alt="Інтраоральний сканер Trios4">
                                        <a class='link' href="./product-detail2.php"></a>
                                        <div class='product_thumb-amount'>
                                            <div class="thumb-input-number">
                                                <button type="button" class="decrement"></button>
                                                <input value="1" readonly="">
                                                <button type="button" class="increment"></button>
                                            </div>
                                           <button class="btn btn-lg btn-secondary btn-add-cart">
                                                <span class="mob-tx">В кошик</span>
                                                <span class="desctop-tx">Додати в кошик</span>
                                                <span class='add-cart-last'>в кошику</span>
                                                <span class="add-cart-loader">
                                                    <span></span><span></span><span></span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product_thumb-title text-md"><a href="./product-detail2.php">SMARTtorque S619 L турбінний наконечник, зі світлооптикою</a></div>
                                    <div class="product_thumb-price">
                                        <b>288,600.00</b> <span>грн</span>
                                        <div class="old-price">294,600.00 грн</div>
                                    </div>
                                </div>
                            </div>

                            <div class='col-lg-4 col-sm-6'>
                                <div class="product_thumb">
                                    <div class="product_thumb-image">
                                        <span class="product_thumb-special">Акція</span>
                                        <img class="img" src="img/products/SMARTtorque-S1619-L-turbinnyj-nakonechnyk.png" alt="Інтраоральний сканер Trios4">
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
                                                <span class='add-cart-last'>в кошику</span>
                                                <span class="add-cart-loader">
                                                    <span></span><span></span><span></span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product_thumb-title text-md"><a href="./product-detail.php">Інструмент для тунелювання, тип Steigmann, TKSTEIG2</a></div>
                                    <div class="product_thumb-price"><b>10,500.00</b> <span>грн</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class='col-lg-4 col-sm-6'>
                                <div class="product_thumb">
                                    <div class="product_thumb-image">
                                        <span class="product_thumb-special">Акція</span>
                                        <img class="img swiper-lazy swiper-lazy-loaded" src="img/products/intraoralnyj-skaner-trios4.png" alt="Інтраоральний сканер Trios4">
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
                                                <span class='add-cart-last'>в кошику</span>
                                                <span class="add-cart-loader">
                                                    <span></span><span></span><span></span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product_thumb-title text-md"><a href="./product-detail.php">Інтраоральний сканер Trios4</a></div>
                                    <div class="product_thumb-price"><b>6,428.00</b> <span>грн</span>
                                    </div>
                                </div>
                            </div>

                            <div class='col-lg-4 col-sm-6'>
                                <div class="product_thumb">
                                    <div class="product_thumb-image">
                                        <span class="product_thumb-special">Акція</span>
                                        <img class="img" src="img/products/instrument-dlia-tuneliuvannia-typ-Steigmann-TKSTEIG2.png" alt="Інтраоральний сканер Trios4">
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
                                                <span class='add-cart-last'>в кошику</span>
                                                <span class="add-cart-loader">
                                                    <span></span><span></span><span></span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product_thumb-title text-md"><a href="./product-detail.php">Інтраоральний
                                            сканер Trios4</a></div>
                                    <div class="product_thumb-price"><b class="color-default">від</b> <b>6,428.00</b> <span>грн</span>
                                    </div>
                                </div>
                            </div>

                            <div class='col-lg-4 col-sm-6'>
                                <div class="product_thumb">
                                    <div class="product_thumb-image">
                                        <span class="product_thumb-special">Акція</span>
                                        <img class="img" src="img/products/intraoralnyj-skaner-trios4.png" alt="Інтраоральний сканер Trios4">
                                        <a class='link' href="./product-detail2.php"></a>
                                        <div class='product_thumb-amount'>
                                            <div class="thumb-input-number">
                                                <button type="button" class="decrement"></button>
                                                <input value="1" readonly="">
                                                <button type="button" class="increment"></button>
                                            </div>
                                           <button class="btn btn-lg btn-secondary btn-add-cart">
                                                <span class="mob-tx">В кошик</span>
                                                <span class="desctop-tx">Додати в кошик</span>
                                                <span class='add-cart-last'>в кошику</span>
                                                <span class="add-cart-loader">
                                                    <span></span><span></span><span></span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product_thumb-title text-md"><a href="./product-detail2.php">SMARTtorque S619 L турбінний наконечник, зі світлооптикою</a></div>
                                    <div class="product_thumb-price">
                                        <b>288,600.00</b> <span>грн</span>
                                        <div class="old-price">294,600.00 грн</div>
                                    </div>
                                </div>
                            </div>

                            <div class='col-lg-4 col-sm-6'>
                                <div class="product_thumb">
                                    <div class="product_thumb-image">
                                        <span class="product_thumb-special">Акція</span>
                                        <img class="img" src="img/products/SMARTtorque-S1619-L-turbinnyj-nakonechnyk.png" alt="Інтраоральний сканер Trios4">
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
                                                <span class='add-cart-last'>в кошику</span>
                                                <span class="add-cart-loader">
                                                    <span></span><span></span><span></span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product_thumb-title text-md"><a href="./product-detail.php">Інструмент для тунелювання, тип Steigmann, TKSTEIG2</a></div>
                                    <div class="product_thumb-price"><b>10,500.00</b> <span>грн</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class='col-lg-4 col-sm-6'>
                                <div class="product_thumb">
                                    <div class="product_thumb-image">
                                        <span class="product_thumb-special">Акція</span>
                                        <img class="img swiper-lazy swiper-lazy-loaded" src="img/products/intraoralnyj-skaner-trios4.png" alt="Інтраоральний сканер Trios4">
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
                                                <span class='add-cart-last'>в кошику</span>
                                                <span class="add-cart-loader">
                                                    <span></span><span></span><span></span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product_thumb-title text-md"><a href="./product-detail.php">Інтраоральний сканер Trios4</a></div>
                                    <div class="product_thumb-price"><b>6,428.00</b> <span>грн</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class='col-lg-4 col-sm-6'>
                                <div class="product_thumb">
                                    <div class="product_thumb-image">
                                        <span class="product_thumb-special">Акція</span>
                                        <img class="img" src="img/products/instrument-dlia-tuneliuvannia-typ-Steigmann-TKSTEIG2.png" alt="Інтраоральний сканер Trios4">
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
                                                <span class='add-cart-last'>в кошику</span>
                                                <span class="add-cart-loader">
                                                    <span></span><span></span><span></span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product_thumb-title text-md"><a href="./product-detail.php">Інтраоральний
                                            сканер Trios4</a></div>
                                    <div class="product_thumb-price"><b class="color-default">від</b> <b>6,428.00</b> <span>грн</span>
                                    </div>
                                </div>
                            </div>

                            <div class='col-lg-4 col-sm-6'>
                                <div class="product_thumb">
                                    <div class="product_thumb-image">
                                        <span class="product_thumb-special">Акція</span>
                                        <img class="img" src="img/products/intraoralnyj-skaner-trios4.png" alt="Інтраоральний сканер Trios4">
                                        <a class='link' href="./product-detail2.php"></a>
                                        <div class='product_thumb-amount'>
                                            <div class="thumb-input-number">
                                                <button type="button" class="decrement"></button>
                                                <input value="1" readonly="">
                                                <button type="button" class="increment"></button>
                                            </div>
                                           <button class="btn btn-lg btn-secondary btn-add-cart">
                                                <span class="mob-tx">В кошик</span>
                                                <span class="desctop-tx">Додати в кошик</span>
                                                <span class='add-cart-last'>в кошику</span>
                                                <span class="add-cart-loader">
                                                    <span></span><span></span><span></span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product_thumb-title text-md"><a href="./product-detail2.php">SMARTtorque S619 L турбінний наконечник, зі світлооптикою</a></div>
                                    <div class="product_thumb-price">
                                        <b>288,600.00</b> <span>грн</span>
                                        <div class="old-price">294,600.00 грн</div>
                                    </div>
                                </div>
                            </div>

                            <div class='col-lg-4 col-sm-6'>
                                <div class="product_thumb">
                                    <div class="product_thumb-image">
                                        <span class="product_thumb-special">Акція</span>
                                        <img class="img" src="img/products/SMARTtorque-S1619-L-turbinnyj-nakonechnyk.png" alt="Інтраоральний сканер Trios4">
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
                                                <span class='add-cart-last'>в кошику</span>
                                                <span class="add-cart-loader">
                                                    <span></span><span></span><span></span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product_thumb-title text-md"><a href="./product-detail.php">Інструмент для тунелювання, тип Steigmann, TKSTEIG2</a></div>
                                    <div class="product_thumb-price"><b>10,500.00</b> <span>грн</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class='col-lg-4 col-sm-6'>
                                <div class="product_thumb">
                                    <div class="product_thumb-image">
                                        <span class="product_thumb-special">Акція</span>
                                        <img class="img swiper-lazy swiper-lazy-loaded" src="img/products/intraoralnyj-skaner-trios4.png" alt="Інтраоральний сканер Trios4">
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
                                                <span class='add-cart-last'>в кошику</span>
                                                <span class="add-cart-loader">
                                                    <span></span><span></span><span></span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product_thumb-title text-md"><a href="./product-detail.php">Інтраоральний сканер Trios4</a></div>
                                    <div class="product_thumb-price"><b>6,428.00</b> <span>грн</span>
                                    </div>
                                </div>
                            </div>



                        </div>
                        
                        <ul class="pagination">
                            <li class="prev deactive"><a href="#"><i class="arr"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>...</li>
                            <li><a href="#">35</a></li>
                            <li class="next"><a href="#"><i class="arr"></i></a></li>
                        </ul>

                    </div>
                </div>
                
            </div>
        </div>

        <!-- SEO-TEXT SECTION -->
        <div class='section pd-bottom-lg seo-text'>
            
            <div class="decor-wrapper">
                <div class="decor zInx pos4"><img src="./img/decor-04.svg" alt=""></div>
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