<!DOCTYPE html>
<html lang="uk">
<head>
    <? include '_top.php';?>
    <title>Eurobud</title>
</head>
<body>
<!-- LOADER -->
<div id="loader-wrapper"></div>

<div id="content-block">
    <!-- HEADER -->
    <header class="header">
        <? include '_header.php';?>
    </header>

    <!-- MAIN CONTENT -->
    <main class="content">
        <div class="spacer-header"></div>

        <div class="main-banner mr-bottom section">
            <div class="swiper-entry swiper-custom banner-slider">
                <div class="slide-images-wrap full-size">
                    <div class="slide-image bg-center" data-bg="img/banner-img-01.jpg"></div>
                    <div class="slide-image bg-center" data-bg="img/banner-img-02.jpg"></div>
                    <div class="slide-image bg-center video" data-autoplay data-src="video/video.mp4" data-bg="img/banner-img-01.jpg"></div>
                </div>

                <div class="swiper-container"
                     data-options='{
                        "effect": "fade",
                        "fadeEffect":{"crossFade":true},
                        "breakpoints": {
                            "991": {"autoHeight": true}
                        }
                     }'
                >
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="slide-item">
                                <div class="container">
                                
                                    <h1 class="title"><strong>Євробуд -</strong> виробник пінопласту, металочерепиці та профнастилу</h1>
                                    <a href="./about-us.php" class="btn btn-primary white">
                                        <span>Детальніше</span>
                                        <span class="anim-border"></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="slide-item">
                                <div class="container">
                                    <div class="title"><strong>Євробуд -</strong> виробник пінопласту, металочерепиці та профнастилу та профнастилу</div>
                                    <a href="./about-us.php" class="btn btn-primary white">
                                        <span>Детальніше</span>
                                        <span class="anim-border"></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="slide-item">
                                <div class="container">
                                    <div class="title"><strong>Євробуд -</strong> виробник пінопласту, металочерепиці</div>
                                    <a href="#./about-us.php" class="btn btn-primary white">
                                        <span>Детальніше</span>
                                        <span class="anim-border"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-pagination style01"></div>
                </div>
            </div>
        </div>

        <div class="section sp-bottom-xl">

            <div class="container">
                <div class="row title-block style01">
                    <div class="col-xl-7">
                        <div class="subtitle">продукція</div>
                        <h2 class="h2 title w-bold">Широкий асортимент товарів</h2>
                    </div>

                    <div class="col-xl-5">
                        <div class="text text-lg w-regular color-secondary">Ми постійно прогресуємо. Оновлюємо наші виробничі лінії, відбираємо виключно якісну іноземну сировину, прискіпливо контролюємо продукт на усіх стадіях виробництва.</div>
                    </div>
                </div>
            </div>

            <div class="container">

                <div class="row row-5">

                    <div class="col-xl-4 col-md-6">
                        <div class="thumbnail-ass">
                            <a href="./products.php" class="image">
                                <img src="img/preloader.jpg" data-i-src="./img/photo-product-01.jpg" alt="">
                            </a>
                            <div class="info">
                                <a class="title h4 w-medium" href="./products.php">Пінопласт</a>
                                <a href="#./products.php" class="btn-3">
                                    <span>ВСІ ТОВАРИ</span>
                                    <span class="arrow"></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6">
                        <div class="thumbnail-ass">
                            <a href="./products.php" class="image">
                                <img src="img/preloader.jpg" data-i-src="./img/photo-product-02.jpg" alt="">
                            </a>
                            <div class="info">
                                <a class="title h4 w-medium" href="./products.php">Металочерепиця</a>
                                <a href="./products.php" class="btn-3">
                                    <span>ВСІ ТОВАРИ</span>
                                    <span class="arrow"></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6">
                        <div class="thumbnail-ass">
                            <a href="./products.php" class="image">
                                <img src="img/preloader.jpg" data-i-src="./img/photo-product-03.jpg" alt="">
                            </a>
                            <div class="info">
                                <a class="title h4 w-medium" href="./products.php">Профнастил</a>
                                <a href="./products.php" class="btn-3">
                                    <span>ВСІ ТОВАРИ</span>
                                    <span class="arrow"></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-12">
                        <div class="product-3">
                            <div class="product-3__left">
                                <a href="./products.php" class="h6 title  w-bold text-uppercase">Аксесуари  для  утеплення</a>
                                <a href="./products.php" class="btn-3">
                                    <span>ВСІ ТОВАРИ</span>
                                    <span class="arrow"></span>
                                </a><br>
                            </div>
                            <div class="product-3__img">
                                <img src="img/preloader.jpg" data-i-src="img/category-06.png" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-12">
                        <div class="product-3">
                            <div class="product-3__left">
                                <a href="./products.php" class="h6 title w-bold text-uppercase">Аксесуари  для даху</a>
                                <a href="./products.php" class="btn-3">
                                    <span>ВСІ ТОВАРИ</span>
                                    <span class="arrow"></span>
                                </a>
                            </div>
                            <div class="product-3__img">
                                <img src="img/preloader.jpg" data-i-src="img/category-07.png" alt="">
                            </div>
                        </div>
                    </div>

                </div>

                
            </div>
            
        </div>

        <div class="section sp-bottom-xl">
            <div class="container">
                <div class="title-block style02">
                    <div class="subtitle">популярнІ продуктИ</div>
                    <h2 class="h2 title w-bold">Досконала якість в кожному м<sup>2</sup></h2>
                </div>

                <div class="swiper-entry swiper-custom style01 animate-item fade slider-wrap-products">
                    <div class="swiper-container"
                         data-options='{
                              "watchSlidesVisibility": true,
                              "slidesPerView":4,
                              "autoHeight":true,
                              "breakpoints": {
                                  "1589": {"slidesPerView": 4},
                                  "1199": {"slidesPerView": 3, "spaceBetween":15},
                                  "991": {"slidesPerView": 2, "spaceBetween":15},
                                  "575": {"slidesPerView": 1, "spaceBetween":15}
                              }
                         }'
                    >
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="product-1">
                                    <div class="promo-label new">новинка</div>
                                    <div class="product-1__top">
                                        <a href="./product-detail.php" class="product-1__img">
                                            <span class="first-img img">
                                                <img src="img/preloader.jpg" data-i-src="img/product-01.jpg" alt="">
                                            </span>
                                            <span class="second-img img">
                                                <img src="img/preloader.jpg" data-i-src="img/product-00234.jpg" alt="">
                                            </span>
                                        </a> 
                                        <div class="hover-buttons">
                                            <div class="btn btn-4">ЗАМОВИТИ</div>

                                            <div class="btn btn-5 compare-button">
                                                <div class="icon">
                                                    <svg width="26" height="21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 1.8858V.3624H9.6375L13 0l3.3624.3624h9.6376L26 1.8858h-3.047V3.991l3.0468 6.0937v.1798c0 2.1001-1.7085 3.8086-3.8085 3.8086-2.1001 0-3.8086-1.7085-3.8086-3.8086v-.1798l3.0469-6.0937V1.8858h-7.6679v7.6171h1.5234v9.1406h4.5703v1.5234H6.1445v-1.5234h4.5703V9.5029h1.5234V1.8858H4.5703V3.991l3.0469 6.0937v.1798c0 2.1001-1.7085 3.8086-3.8086 3.8086-2.1 0-3.8086-1.7085-3.8086-3.8086v-.1798L3.047 3.9911V1.8858H0zm22.1912 3.9884l-1.8144 3.6287h3.6288l-1.8144-3.6287zm0 6.6756c.993 0 1.8396-.6369 2.154-1.5235h-4.3079c.3144.8866 1.161 1.5235 2.1539 1.5235zm-8.4296 6.0937v-7.6172h-1.5234v7.6172h1.5234zM14.2078.3624l-1.2079 1.792L11.792.3624h2.4158zM3.8086 5.8742L1.9942 9.5029h3.6287L3.8086 5.8742zm0 6.6756c.993 0 1.8395-.6369 2.154-1.5235h-4.308c.3144.8866 1.161 1.5235 2.154 1.5235z"/></svg>
                                                </div>
                                                <span class="compare-inner">
                                                    <span class="icon-cm">
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 1L13 13M1 13.0208L13.0208 1" stroke-width="1.6"/>
                                                        </svg>
                                                    </span>
                                                    <span>ДОДАНО</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-1__title">
                                        <a href="./product-detail.php" class="h6 title">Євробуд 25 Eko</a>
                                    </div>
                                    <div class="small-desc">Завдяки новому сучасному обладнанню, прямим поставкам іноземної сировини</div>
                                    <div class="price">від <span>56</span> грн/шт</div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="product-1">
                                    <div class="product-1__top">
                                        <a href="./product-detail.php" class="product-1__img">
                                            <span class="first-img img">
                                                <img src="img/preloader.jpg" data-i-src="img/product-02.jpg" alt="">
                                            </span>
                                            <span class="second-img img">
                                                <img src="img/preloader.jpg" data-i-src="img/product-00234.jpg" alt="">
                                            </span>
                                        </a>
                                        <div class="hover-buttons">
                                            <div class="btn btn-4">ЗАМОВИТИ</div>

                                            <div class="btn btn-5 compare-button">
                                                <div class="icon">
                                                    <svg width="26" height="21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 1.8858V.3624H9.6375L13 0l3.3624.3624h9.6376L26 1.8858h-3.047V3.991l3.0468 6.0937v.1798c0 2.1001-1.7085 3.8086-3.8085 3.8086-2.1001 0-3.8086-1.7085-3.8086-3.8086v-.1798l3.0469-6.0937V1.8858h-7.6679v7.6171h1.5234v9.1406h4.5703v1.5234H6.1445v-1.5234h4.5703V9.5029h1.5234V1.8858H4.5703V3.991l3.0469 6.0937v.1798c0 2.1001-1.7085 3.8086-3.8086 3.8086-2.1 0-3.8086-1.7085-3.8086-3.8086v-.1798L3.047 3.9911V1.8858H0zm22.1912 3.9884l-1.8144 3.6287h3.6288l-1.8144-3.6287zm0 6.6756c.993 0 1.8396-.6369 2.154-1.5235h-4.3079c.3144.8866 1.161 1.5235 2.1539 1.5235zm-8.4296 6.0937v-7.6172h-1.5234v7.6172h1.5234zM14.2078.3624l-1.2079 1.792L11.792.3624h2.4158zM3.8086 5.8742L1.9942 9.5029h3.6287L3.8086 5.8742zm0 6.6756c.993 0 1.8395-.6369 2.154-1.5235h-4.308c.3144.8866 1.161 1.5235 2.154 1.5235z"/></svg>
                                                </div>
                                                <span class="compare-inner">
                                                    <span class="icon-cm">
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 1L13 13M1 13.0208L13.0208 1" stroke-width="1.6"/>
                                                        </svg>
                                                    </span>
                                                    <span>ДОДАНО</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-1__title">
                                        <a href="./product-detail.php" class="h6 title">Євробуд 35 Gold</a>
                                    </div>
                                    <div class="small-desc">Пінопласт виготовлений методом спінювання гранул полістиролу, формування у блоки. Пінопласт виготовлений методом спінювання гранул полістиролу, формування у блоки</div>
                                    <div class="price">від <span>56</span> грн/шт</div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="product-1">
                                    <div class="product-1__top">
                                        <a href="./product-detail.php" class="product-1__img">
                                            <span class="first-img img">
                                                <img src="img/preloader.jpg" data-i-src="img/product-03.jpg" alt="">
                                            </span>
                                            <span class="second-img img">
                                                <img src="img/preloader.jpg" data-i-src="img/product-06.jpg" alt="">
                                            </span>
                                        </a>
                                        <div class="hover-buttons">
                                            <div class="btn btn-4">ЗАМОВИТИ</div>

                                            <div class="btn btn-5 compare-button">
                                                <div class="icon">
                                                    <svg width="26" height="21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 1.8858V.3624H9.6375L13 0l3.3624.3624h9.6376L26 1.8858h-3.047V3.991l3.0468 6.0937v.1798c0 2.1001-1.7085 3.8086-3.8085 3.8086-2.1001 0-3.8086-1.7085-3.8086-3.8086v-.1798l3.0469-6.0937V1.8858h-7.6679v7.6171h1.5234v9.1406h4.5703v1.5234H6.1445v-1.5234h4.5703V9.5029h1.5234V1.8858H4.5703V3.991l3.0469 6.0937v.1798c0 2.1001-1.7085 3.8086-3.8086 3.8086-2.1 0-3.8086-1.7085-3.8086-3.8086v-.1798L3.047 3.9911V1.8858H0zm22.1912 3.9884l-1.8144 3.6287h3.6288l-1.8144-3.6287zm0 6.6756c.993 0 1.8396-.6369 2.154-1.5235h-4.3079c.3144.8866 1.161 1.5235 2.1539 1.5235zm-8.4296 6.0937v-7.6172h-1.5234v7.6172h1.5234zM14.2078.3624l-1.2079 1.792L11.792.3624h2.4158zM3.8086 5.8742L1.9942 9.5029h3.6287L3.8086 5.8742zm0 6.6756c.993 0 1.8395-.6369 2.154-1.5235h-4.308c.3144.8866 1.161 1.5235 2.154 1.5235z"/></svg>
                                                </div>
                                                <span class="compare-inner">
                                                    <span class="icon-cm">
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 1L13 13M1 13.0208L13.0208 1" stroke-width="1.6"/>
                                                        </svg>
                                                    </span>
                                                    <span>ДОДАНО</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-1__title">
                                        <a href="./product-detail.php" class="h6 title">Добрий пінопласт ПСБ-С-25 <br>Platinum</a>
                                    </div>
                                    <div class="small-desc">Металочерепиця невеликого розміру, довжиною в дві хвилі. Металочерепиця невеликого розміру, довжиною в дві хвилі</div>
                                    <div class="price">від <span>56</span> грн/шт</div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="product-1">
                                    <div class="product-1__top">
                                        <a href="./product-detail.php" class="product-1__img">
                                            <span class="first-img img">
                                                <img src="img/preloader.jpg" data-i-src="img/product-04.jpg" alt="">
                                            </span>
                                            <span class="second-img img">
                                                <img src="img/preloader.jpg" data-i-src="img/product-06.jpg" alt="">
                                            </span>
                                        </a>
                                        <div class="hover-buttons">
                                            <div class="btn btn-4">ЗАМОВИТИ</div>

                                            <div class="btn btn-5 compare-button">
                                                <div class="icon">
                                                    <svg width="26" height="21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 1.8858V.3624H9.6375L13 0l3.3624.3624h9.6376L26 1.8858h-3.047V3.991l3.0468 6.0937v.1798c0 2.1001-1.7085 3.8086-3.8085 3.8086-2.1001 0-3.8086-1.7085-3.8086-3.8086v-.1798l3.0469-6.0937V1.8858h-7.6679v7.6171h1.5234v9.1406h4.5703v1.5234H6.1445v-1.5234h4.5703V9.5029h1.5234V1.8858H4.5703V3.991l3.0469 6.0937v.1798c0 2.1001-1.7085 3.8086-3.8086 3.8086-2.1 0-3.8086-1.7085-3.8086-3.8086v-.1798L3.047 3.9911V1.8858H0zm22.1912 3.9884l-1.8144 3.6287h3.6288l-1.8144-3.6287zm0 6.6756c.993 0 1.8396-.6369 2.154-1.5235h-4.3079c.3144.8866 1.161 1.5235 2.1539 1.5235zm-8.4296 6.0937v-7.6172h-1.5234v7.6172h1.5234zM14.2078.3624l-1.2079 1.792L11.792.3624h2.4158zM3.8086 5.8742L1.9942 9.5029h3.6287L3.8086 5.8742zm0 6.6756c.993 0 1.8395-.6369 2.154-1.5235h-4.308c.3144.8866 1.161 1.5235 2.154 1.5235z"/></svg>
                                                </div>
                                                <span class="compare-inner">
                                                    <span class="icon-cm">
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 1L13 13M1 13.0208L13.0208 1" stroke-width="1.6"/>
                                                        </svg>
                                                    </span>
                                                    <span>ДОДАНО</span>
                                                </span>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="product-1__title">
                                        <a href="./product-detail.php" class="h6 title">Металочерепиця «Вікторія»</a>
                                    </div>
                                    <div class="small-desc">Металочерепиця невеликого розміру, довжиною в дві хвилі</div>
                                    <div class="price">від <span>89</span> грн/шт</div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="product-1">
                                    <div class="product-1__top">
                                        <a href="./product-detail.php" class="product-1__img">
                                            <span class="first-img img">
                                                <img src="img/preloader.jpg" data-i-src="img/product-05.jpg" alt="">
                                            </span>
                                            <span class="second-img img">
                                                <img src="img/preloader.jpg" data-i-src="img/product-00234.jpg" alt="">
                                            </span>
                                        </a>
                                        <div class="hover-buttons">
                                            <div class="btn btn-4">ЗАМОВИТИ</div>

                                            <div class="btn btn-5 compare-button">
                                                <div class="icon">
                                                    <svg width="26" height="21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 1.8858V.3624H9.6375L13 0l3.3624.3624h9.6376L26 1.8858h-3.047V3.991l3.0468 6.0937v.1798c0 2.1001-1.7085 3.8086-3.8085 3.8086-2.1001 0-3.8086-1.7085-3.8086-3.8086v-.1798l3.0469-6.0937V1.8858h-7.6679v7.6171h1.5234v9.1406h4.5703v1.5234H6.1445v-1.5234h4.5703V9.5029h1.5234V1.8858H4.5703V3.991l3.0469 6.0937v.1798c0 2.1001-1.7085 3.8086-3.8086 3.8086-2.1 0-3.8086-1.7085-3.8086-3.8086v-.1798L3.047 3.9911V1.8858H0zm22.1912 3.9884l-1.8144 3.6287h3.6288l-1.8144-3.6287zm0 6.6756c.993 0 1.8396-.6369 2.154-1.5235h-4.3079c.3144.8866 1.161 1.5235 2.1539 1.5235zm-8.4296 6.0937v-7.6172h-1.5234v7.6172h1.5234zM14.2078.3624l-1.2079 1.792L11.792.3624h2.4158zM3.8086 5.8742L1.9942 9.5029h3.6287L3.8086 5.8742zm0 6.6756c.993 0 1.8395-.6369 2.154-1.5235h-4.308c.3144.8866 1.161 1.5235 2.154 1.5235z"/></svg>
                                                </div>
                                                <span class="compare-inner">
                                                    <span class="icon-cm">
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 1L13 13M1 13.0208L13.0208 1" stroke-width="1.6"/>
                                                        </svg>
                                                    </span>
                                                    <span>ДОДАНО</span>
                                                </span>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="product-1__title">
                                        <a href="./product-detail.php" class="h6 title">Євробуд 50 Gold</a>
                                    </div>
                                    <div class="small-desc">Завдяки новому сучасному обладнанню, прямим поставкам іноземної сировини </div>
                                    <div class="price">від <span>30</span> грн/шт</div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="product-1">
                                    <div class="promo-label new">новинка</div>
                                    <div class="product-1__top">
                                        <a href="./product-detail.php" class="product-1__img">
                                            <span class="first-img img">
                                                <img src="img/preloader.jpg" data-i-src="img/product-01.jpg" alt="">
                                            </span>
                                            <span class="second-img img">
                                                <img src="img/preloader.jpg" data-i-src="img/product-00234.jpg" alt="">
                                            </span>
                                        </a>
                                        <div class="hover-buttons">
                                            <div class="btn btn-4">ЗАМОВИТИ</div>

                                            <div class="btn btn-5 compare-button">
                                                <div class="icon">
                                                    <svg width="26" height="21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 1.8858V.3624H9.6375L13 0l3.3624.3624h9.6376L26 1.8858h-3.047V3.991l3.0468 6.0937v.1798c0 2.1001-1.7085 3.8086-3.8085 3.8086-2.1001 0-3.8086-1.7085-3.8086-3.8086v-.1798l3.0469-6.0937V1.8858h-7.6679v7.6171h1.5234v9.1406h4.5703v1.5234H6.1445v-1.5234h4.5703V9.5029h1.5234V1.8858H4.5703V3.991l3.0469 6.0937v.1798c0 2.1001-1.7085 3.8086-3.8086 3.8086-2.1 0-3.8086-1.7085-3.8086-3.8086v-.1798L3.047 3.9911V1.8858H0zm22.1912 3.9884l-1.8144 3.6287h3.6288l-1.8144-3.6287zm0 6.6756c.993 0 1.8396-.6369 2.154-1.5235h-4.3079c.3144.8866 1.161 1.5235 2.1539 1.5235zm-8.4296 6.0937v-7.6172h-1.5234v7.6172h1.5234zM14.2078.3624l-1.2079 1.792L11.792.3624h2.4158zM3.8086 5.8742L1.9942 9.5029h3.6287L3.8086 5.8742zm0 6.6756c.993 0 1.8395-.6369 2.154-1.5235h-4.308c.3144.8866 1.161 1.5235 2.154 1.5235z"/></svg>
                                                </div>
                                                <span class="compare-inner">
                                                    <span class="icon-cm">
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 1L13 13M1 13.0208L13.0208 1" stroke-width="1.6"/>
                                                        </svg>
                                                    </span>
                                                    <span>ДОДАНО</span>
                                                </span>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="product-1__title">
                                        <a href="./product-detail.php" class="h6 title">Євробуд 25 Eko</a>
                                    </div>
                                    <div class="small-desc">Завдяки новому сучасному обладнанню, прямим поставкам іноземної сировини</div>
                                    <div class="price">від <span>56</span> грн/шт</div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="product-1">
                                    <div class="product-1__top">
                                        <a href="./product-detail.php" class="product-1__img">
                                            <span class="first-img img">
                                                <img src="img/preloader.jpg" data-i-src="img/product-02.jpg" alt="">
                                            </span>
                                            <span class="second-img img">
                                                <img src="img/preloader.jpg" data-i-src="img/product-00234.jpg" alt="">
                                            </span>
                                        </a>
                                        <div class="hover-buttons">
                                            <div class="btn btn-4">ЗАМОВИТИ</div>

                                            <div class="btn btn-5 compare-button">
                                                <div class="icon">
                                                    <svg width="26" height="21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 1.8858V.3624H9.6375L13 0l3.3624.3624h9.6376L26 1.8858h-3.047V3.991l3.0468 6.0937v.1798c0 2.1001-1.7085 3.8086-3.8085 3.8086-2.1001 0-3.8086-1.7085-3.8086-3.8086v-.1798l3.0469-6.0937V1.8858h-7.6679v7.6171h1.5234v9.1406h4.5703v1.5234H6.1445v-1.5234h4.5703V9.5029h1.5234V1.8858H4.5703V3.991l3.0469 6.0937v.1798c0 2.1001-1.7085 3.8086-3.8086 3.8086-2.1 0-3.8086-1.7085-3.8086-3.8086v-.1798L3.047 3.9911V1.8858H0zm22.1912 3.9884l-1.8144 3.6287h3.6288l-1.8144-3.6287zm0 6.6756c.993 0 1.8396-.6369 2.154-1.5235h-4.3079c.3144.8866 1.161 1.5235 2.1539 1.5235zm-8.4296 6.0937v-7.6172h-1.5234v7.6172h1.5234zM14.2078.3624l-1.2079 1.792L11.792.3624h2.4158zM3.8086 5.8742L1.9942 9.5029h3.6287L3.8086 5.8742zm0 6.6756c.993 0 1.8395-.6369 2.154-1.5235h-4.308c.3144.8866 1.161 1.5235 2.154 1.5235z"/></svg>
                                                </div>
                                                <span class="compare-inner">
                                                    <span class="icon-cm">
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 1L13 13M1 13.0208L13.0208 1" stroke-width="1.6"/>
                                                        </svg>
                                                    </span>
                                                    <span>ДОДАНО</span>
                                                </span>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="product-1__title">
                                        <a href="./product-detail.php" class="h6 title">Євробуд 35 Gold</a>
                                    </div>
                                    <div class="small-desc">Пінопласт виготовлений методом спінювання гранул полістиролу, формування у блоки</div>
                                    <div class="price">від <span>56</span> грн/шт</div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="product-1">
                                    <div class="product-1__top">
                                        <a href="./product-detail.php" class="product-1__img">
                                            <span class="first-img img">
                                                <img src="img/preloader.jpg" data-i-src="img/product-03.jpg" alt="">
                                            </span>
                                            <span class="second-img img">
                                                <img src="img/preloader.jpg" data-i-src="img/product-06.jpg" alt="">
                                            </span>
                                        </a>
                                        <div class="hover-buttons">
                                            <div class="btn btn-4">ЗАМОВИТИ</div>

                                            <div class="btn btn-5 compare-button">
                                                <div class="icon">
                                                    <svg width="26" height="21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 1.8858V.3624H9.6375L13 0l3.3624.3624h9.6376L26 1.8858h-3.047V3.991l3.0468 6.0937v.1798c0 2.1001-1.7085 3.8086-3.8085 3.8086-2.1001 0-3.8086-1.7085-3.8086-3.8086v-.1798l3.0469-6.0937V1.8858h-7.6679v7.6171h1.5234v9.1406h4.5703v1.5234H6.1445v-1.5234h4.5703V9.5029h1.5234V1.8858H4.5703V3.991l3.0469 6.0937v.1798c0 2.1001-1.7085 3.8086-3.8086 3.8086-2.1 0-3.8086-1.7085-3.8086-3.8086v-.1798L3.047 3.9911V1.8858H0zm22.1912 3.9884l-1.8144 3.6287h3.6288l-1.8144-3.6287zm0 6.6756c.993 0 1.8396-.6369 2.154-1.5235h-4.3079c.3144.8866 1.161 1.5235 2.1539 1.5235zm-8.4296 6.0937v-7.6172h-1.5234v7.6172h1.5234zM14.2078.3624l-1.2079 1.792L11.792.3624h2.4158zM3.8086 5.8742L1.9942 9.5029h3.6287L3.8086 5.8742zm0 6.6756c.993 0 1.8395-.6369 2.154-1.5235h-4.308c.3144.8866 1.161 1.5235 2.154 1.5235z"/></svg>
                                                </div>
                                                <span class="compare-inner">
                                                    <span class="icon-cm">
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 1L13 13M1 13.0208L13.0208 1" stroke-width="1.6"/>
                                                        </svg>
                                                    </span>
                                                    <span>ДОДАНО</span>
                                                </span>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="product-1__title">
                                        <a href="./product-detail.php" class="h6 title">Модульна металочерепиця «Сицилія»</a>
                                    </div>
                                    <div class="small-desc">Металочерепиця невеликого розміру, довжиною в дві хвилі</div>
                                    <div class="price">від <span>56</span> грн/шт</div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="product-1">
                                    <div class="product-1__top">
                                        <a href="./product-detail.php" class="product-1__img">
                                            <span class="first-img img">
                                                <img src="img/preloader.jpg" data-i-src="img/product-04.jpg" alt="">
                                            </span>
                                            <span class="second-img img">
                                                <img src="img/preloader.jpg" data-i-src="img/product-06.jpg" alt="">
                                            </span>
                                        </a>
                                        <div class="hover-buttons">
                                            <div class="btn btn-4">ЗАМОВИТИ</div>

                                            <div class="btn btn-5 compare-button">
                                                <div class="icon">
                                                    <svg width="26" height="21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 1.8858V.3624H9.6375L13 0l3.3624.3624h9.6376L26 1.8858h-3.047V3.991l3.0468 6.0937v.1798c0 2.1001-1.7085 3.8086-3.8085 3.8086-2.1001 0-3.8086-1.7085-3.8086-3.8086v-.1798l3.0469-6.0937V1.8858h-7.6679v7.6171h1.5234v9.1406h4.5703v1.5234H6.1445v-1.5234h4.5703V9.5029h1.5234V1.8858H4.5703V3.991l3.0469 6.0937v.1798c0 2.1001-1.7085 3.8086-3.8086 3.8086-2.1 0-3.8086-1.7085-3.8086-3.8086v-.1798L3.047 3.9911V1.8858H0zm22.1912 3.9884l-1.8144 3.6287h3.6288l-1.8144-3.6287zm0 6.6756c.993 0 1.8396-.6369 2.154-1.5235h-4.3079c.3144.8866 1.161 1.5235 2.1539 1.5235zm-8.4296 6.0937v-7.6172h-1.5234v7.6172h1.5234zM14.2078.3624l-1.2079 1.792L11.792.3624h2.4158zM3.8086 5.8742L1.9942 9.5029h3.6287L3.8086 5.8742zm0 6.6756c.993 0 1.8395-.6369 2.154-1.5235h-4.308c.3144.8866 1.161 1.5235 2.154 1.5235z"/></svg>
                                                </div>
                                                <span class="compare-inner">
                                                    <span class="icon-cm">
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 1L13 13M1 13.0208L13.0208 1" stroke-width="1.6"/>
                                                        </svg>
                                                    </span>
                                                    <span>ДОДАНО</span>
                                                </span>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="product-1__title">
                                        <a href="./product-detail.php" class="h6 title">Металочерепиця «Вікторія»</a>
                                    </div>
                                    <div class="small-desc">Металочерепиця невеликого розміру, довжиною в дві хвилі</div>
                                    <div class="price">від <span>89</span> грн/шт</div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="product-1">
                                    <div class="product-1__top">
                                        <a href="./product-detail.php" class="product-1__img">
                                            <span class="first-img img">
                                                <img src="img/preloader.jpg" data-i-src="img/product-05.jpg" alt="">
                                            </span>
                                            <span class="second-img img">
                                                <img src="img/preloader.jpg" data-i-src="img/product-00234.jpg" alt="">
                                            </span>
                                        </a>
                                        <div class="hover-buttons">
                                            <div class="btn btn-4">ЗАМОВИТИ</div>

                                            <div class="btn btn-5 compare-button">
                                                <div class="icon">
                                                    <svg width="26" height="21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 1.8858V.3624H9.6375L13 0l3.3624.3624h9.6376L26 1.8858h-3.047V3.991l3.0468 6.0937v.1798c0 2.1001-1.7085 3.8086-3.8085 3.8086-2.1001 0-3.8086-1.7085-3.8086-3.8086v-.1798l3.0469-6.0937V1.8858h-7.6679v7.6171h1.5234v9.1406h4.5703v1.5234H6.1445v-1.5234h4.5703V9.5029h1.5234V1.8858H4.5703V3.991l3.0469 6.0937v.1798c0 2.1001-1.7085 3.8086-3.8086 3.8086-2.1 0-3.8086-1.7085-3.8086-3.8086v-.1798L3.047 3.9911V1.8858H0zm22.1912 3.9884l-1.8144 3.6287h3.6288l-1.8144-3.6287zm0 6.6756c.993 0 1.8396-.6369 2.154-1.5235h-4.3079c.3144.8866 1.161 1.5235 2.1539 1.5235zm-8.4296 6.0937v-7.6172h-1.5234v7.6172h1.5234zM14.2078.3624l-1.2079 1.792L11.792.3624h2.4158zM3.8086 5.8742L1.9942 9.5029h3.6287L3.8086 5.8742zm0 6.6756c.993 0 1.8395-.6369 2.154-1.5235h-4.308c.3144.8866 1.161 1.5235 2.154 1.5235z"/></svg>
                                                </div>
                                                <span class="compare-inner">
                                                    <span class="icon-cm">
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 1L13 13M1 13.0208L13.0208 1" stroke-width="1.6"/>
                                                        </svg>
                                                    </span>
                                                    <span>ДОДАНО</span>
                                                </span>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="product-1__title">
                                        <a href="./product-detail.php" class="h6 title">Євробуд 50 Gold</a>
                                    </div>
                                    <div class="small-desc">Завдяки новому сучасному обладнанню, прямим поставкам іноземної сировини </div>
                                    <div class="price">від <span>30</span> грн/шт</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-buttons">
                        <div class="swiper-button-prev arrow-btn left">
                            <div class="arrow"></div>
                        </div>
                        <div class="swiper-button-next arrow-btn right">
                            <div class="arrow"></div>
                        </div>
                    </div>

                    <div class="swiper-pagination swiper-pagination-relative style02"></div>
                </div>

                <div class="spacer-xl-60 spacer-md-30"></div>

                <div class="text-center">
                    <a href="#" class="btn btn-primary blue">
                        <span>ПЕРЕГЛЯНУТИ ВСІ ТОВАРИ</span>
                        <span class="anim-border"></span>
                    </a>
                </div>
            </div>
        </div>

        <!-- <div class="section d-lg-block d-none">
            <div class="h-parallax">
                <div class="big-logo" data-bg="img/big-logo.png"
                    data-paroller-factor="1"
                    data-paroller-type="foreground"
                    data-paroller-direction="horizontal"
                ></div>
            </div>
        </div> -->

        <div class="section sp-bottom-xl">
            <div class="container">
                <div class="title-block style02">
                    <div class="subtitle">Чому ми</div>
                    <h2 class="h2 title w-bold">Сучасні концепти, досвід та передові технології</h2>
                </div>

                <div class="swiper-entry swiper-custom style01">
                    <div class="swiper-container animate-item fade"
                         data-options='{
                              "watchSlidesVisibility": true,
                              "slidesPerView":4,
                              "spaceBetween":30,
                              "breakpoints": {
                                  "1399": {"slidesPerView": 3},
                                  "991": {"slidesPerView": 2, "spaceBetween":15},
                                  "575": {"slidesPerView": 1, "autoHeight":true}
                              }
                         }'
                    >
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="benefit">
                                    <div class="benefit__img">
                                        <img src="img/preloader.jpg" data-i-src="img/img-04.jpg" alt="">
                                    </div>
                                    <div class="benefit__bottom">
                                        <div class="h5 title">Якість</div>
                                        <div class="text">Завдяки новому сучасному обладнанню, прямим поставкам іноземної сировини та системі контролю ми можемо гарантувати досконалу якість кожного нашого продукту</div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="benefit">
                                    <div class="benefit__img">
                                        <img src="img/preloader.jpg" data-i-src="img/img-05.jpg" alt="">
                                    </div>
                                    <div class="benefit__bottom">
                                        <div class="h5 title">Надійність</div>
                                        <div class="text">Ми надаємо повний пакет документів на нашу продукцію, а гарантійний термін підтверджено офіційними лабораторними випробуваннями</div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="benefit">
                                    <div class="benefit__img">
                                        <img src="img/preloader.jpg" data-i-src="img/img-06.jpg" alt="">
                                    </div>
                                    <div class="benefit__bottom">
                                        <div class="h5 title">Довговічність</div>
                                        <div class="text">Євробуд – єдиний виробник пінополістиролу в Україні, що підтвердив термін ефективної експлуатації пінопласту без втрати первинних властивостей не менше 50 років</div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="benefit">
                                    <div class="benefit__img">
                                        <img src="img/preloader.jpg" data-i-src="img/img-07.jpg" alt="">
                                    </div>
                                    <div class="benefit__bottom">
                                        <div class="h5 title">Екологічність</div>
                                        <div class="text">Продукція компанії «Євробуд» пройшла незалежну експертну оцінку дотримання вимог екологічних стандартів на усіх етапах життєвого циклу</div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="benefit">
                                    <div class="benefit__img">
                                        <img src="img/preloader.jpg" data-i-src="img/img-04.jpg" alt="">
                                    </div>
                                    <div class="benefit__bottom">
                                        <div class="h5 title">Якість</div>
                                        <div class="text">Завдяки новому сучасному обладнанню, прямим поставкам іноземної сировини та системі контролю ми можемо гарантувати досконалу якість кожного нашого продукту</div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="benefit">
                                    <div class="benefit__img">
                                        <img src="img/preloader.jpg" data-i-src="img/img-05.jpg" alt="">
                                    </div>
                                    <div class="benefit__bottom">
                                        <div class="h5 title">Надійність</div>
                                        <div class="text">Ми надаємо повний пакет документів на нашу продукцію, а гарантійний термін підтверджено офіційними лабораторними випробуваннями</div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="benefit">
                                    <div class="benefit__img">
                                        <img src="img/preloader.jpg" data-i-src="img/img-06.jpg" alt="">
                                    </div>
                                    <div class="benefit__bottom">
                                        <div class="h5 title">Довговічність</div>
                                        <div class="text">Євробуд – єдиний виробник пінополістиролу в Україні, що підтвердив термін ефективної експлуатації пінопласту без втрати первинних властивостей не менше 50 років</div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="benefit">
                                    <div class="benefit__img">
                                        <img src="img/preloader.jpg" data-i-src="img/img-07.jpg" alt="">
                                    </div>
                                    <div class="benefit__bottom">
                                        <div class="h5 title">Екологічність</div>
                                        <div class="text">Продукція компанії «Євробуд» пройшла незалежну експертну оцінку дотримання вимог екологічних стандартів на усіх етапах життєвого циклу</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-buttons">
                        <div class="swiper-button-prev arrow-btn left">
                            <div class="arrow"></div>
                        </div>
                        <div class="swiper-button-next arrow-btn right">
                            <div class="arrow"></div>
                        </div>
                    </div>

                    <div class="swiper-pagination swiper-pagination-relative style02"></div>
                </div>
            </div>
        </div>

        <div class="section sp-bottom-xl">
            <div class="container">
                <div class="row title-block style01">
                    <div class="col-xl-7">
                        <div class="subtitle">ХТО МИ</div>
                        <h2 class="h2 title w-bold">Революційний підхід до утеплення вашого дому</h2>
                    </div>

                    <div class="col-xl-5">
                        <div class="text text-lg w-regular color-secondary">Наша команда щодня невпинно працює над покращенням якості існуючих продуктів та розробкою нових із унікальними властивостями, щоб Ви могли обрати те, що підходить саме Вам.</div>
                    </div>
                </div>

                <div class="row row-45 align-items-center hover-image-container animate-item fade">
                    <div class="col-lg-6">
                        <div class="hover-image-wrapper">
                            <div class="bg active" data-bg='./img/image-0033.jpg'></div>
                            <div class="bg" data-bg='./img/image-0034.jpg'></div>
                            <div class="bg" data-bg='./img/image-0033.jpg'></div>
                            <div class="bg" data-bg='./img/image-0034.jpg'></div>
                            <div class="bg" data-bg='./img/image-0033.jpg'></div>
                            <div class="bg" data-bg='./img/image-0034.jpg'></div>
                        </div>
                    </div>
                    <div class="col-xl-6 ">
                        <div class="hover-image-list text-lg w-regular">
                            <div class="item active">
                                <span class="number">16</span>
                                <span class="color-secondary">років досвіду на ринку України</span>
                            </div>
                            <div class="item">
                                <span class="number">1000</span>
                                <span class="color-secondary">дилерських точок</span>
                            </div>
                            <div class="item">
                                <span class="number">04</span>
                                <span class="color-secondary">млн/м покрівель та огорож виготовлено з нашої металочерепиці та профнастилу</span>
                            </div>
                            <div class="item">
                                <span class="number">40</span>
                                <span class="color-secondary">млн/м домівок утеплено нашим пінопластом</span>
                            </div>
                            <div class="item">
                                <span class="number">150</span>
                                <span class="color-secondary">тис задоволених клієнтів</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section sp-bottom-xl">
            <div class="container">
                <div class="title-block style02">
                    <div class="subtitle">eurobud в роботі</div>
                    <h2 class="h2 title w-bold">Запорука вашого комфорту та затишку</h2>
                </div>

                <div class="swiper-entry swiper-custom style01">
                    <div class="swiper-container animate-item fade"
                         data-options='{
                              "watchSlidesVisibility": true,
                              "slidesPerView":3,
                              "spaceBetween":30,
                              "breakpoints": {
                                  "1399": {"slidesPerView": 3},
                                  "991": {"slidesPerView": 2, "spaceBetween":15},
                                  "575": {"slidesPerView": 1}
                              }
                         }'
                    >
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="video-slide open-video open-popup bg-center" data-video-src="https://www.youtube.com/embed/L7OLY4HCctQ?autoplay=1" data-rel="video-popup" data-bg="img/video-bg-01.jpg">
                                    <div class="play-btn"></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="video-slide open-video open-popup bg-center" data-video-src="https://www.youtube.com/embed/L7OLY4HCctQ?autoplay=1" data-rel="video-popup" data-bg="img/video-bg-02.jpg">
                                    <div class="play-btn"></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="video-slide open-video open-popup bg-center" data-video-src="https://www.youtube.com/embed/L7OLY4HCctQ?autoplay=1" data-rel="video-popup" data-bg="img/video-bg-03.jpg">
                                    <div class="play-btn"></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="video-slide open-video open-popup bg-center" data-video-src="https://www.youtube.com/embed/L7OLY4HCctQ?autoplay=1" data-rel="video-popup" data-bg="img/video-bg-04.jpg">
                                    <div class="play-btn"></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="video-slide open-video open-popup bg-center" data-video-src="https://www.youtube.com/embed/L7OLY4HCctQ?autoplay=1" data-rel="video-popup" data-bg="img/video-bg-01.jpg">
                                    <div class="play-btn"></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="video-slide open-video open-popup bg-center" data-video-src="https://www.youtube.com/embed/L7OLY4HCctQ?autoplay=1" data-rel="video-popup" data-bg="img/video-bg-02.jpg">
                                    <div class="play-btn"></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="video-slide open-video open-popup bg-center" data-video-src="https://www.youtube.com/embed/L7OLY4HCctQ?autoplay=1" data-rel="video-popup" data-bg="img/video-bg-03.jpg">
                                    <div class="play-btn"></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="video-slide open-video open-popup bg-center" data-video-src="https://www.youtube.com/embed/L7OLY4HCctQ?autoplay=1" data-rel="video-popup" data-bg="img/video-bg-04.jpg">
                                    <div class="play-btn"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-buttons">
                        <div class="swiper-button-prev arrow-btn left">
                            <div class="arrow"></div>
                        </div>
                        <div class="swiper-button-next arrow-btn right">
                            <div class="arrow"></div>
                        </div>
                    </div>

                    <div class="swiper-pagination swiper-pagination-relative style02"></div>
                </div>

                <div class="spacer-xl-60 spacer-md-30"></div>

                <div class="text-center">
                    <a href="#" class="btn btn-primary blue">
                        <span>ПЕРЕГЛЯНУТИ ВСІ</span>
                        <span class="anim-border"></span>
                    </a>
                </div>
            </div>
        </div>


        <div class="section sp-bottom-xl">
            <div class="container">
                <div class="container-sm">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="title-block style03">
                                <div class="subtitle">зв’яжіться з нами</div>
                                <h2 class="h2 title w-bold">У вас з’явились запитання </h2>
                                <div class="text">Оберіть нижче тип купівлі та напишіть нам і наші менеджери найближчим часом зв’яжуться з вами</div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="contact-block">
                                <div class="tabs">
                                    <ul class="tabs__caption">
                                        <li class="active">Гуртовий продаж</li>
                                        <li>Роздріб</li>
                                    </ul>

                                    <div class="tabs__content-wrap">
                                        <div class="tabs__content active"></div>
                                        <div class="tabs__content">
                                            <div class="faq-block">
                                                <div class="title h6 w-bold text-center">Популярні запитанння</div>
                                                <div class="acc-item style01">
                                                    <div class="acc-head">
                                                        <div class="caption">Як правильно обрати піноспласт?</div>
                                                        <div class="arrow">
                                                            <svg width="18" height="10" viewBox="0 0 18 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1 1L9.25806 9L17 1" stroke-width="1.3"></path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="acc-body">Пінопласт виготовлений методом спінювання гранул полістиролу, формування у блокиПінопласт виготовлений методом спінювання гранул полістиролу, формування у блокиПінопласт виготовлений методом спінювання гранул полістиролу, формування у блоки</div>
                                                </div>

                                                <div class="acc-item style01">
                                                    <div class="acc-head">
                                                        <div class="caption">Чим утеплити будинок? Що був ефект від утеплення?</div>
                                                        <div class="arrow">
                                                            <svg width="18" height="10" viewBox="0 0 18 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1 1L9.25806 9L17 1" stroke-width="1.3"></path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="acc-body">Пінопласт виготовлений методом спінювання гранул полістиролу, формування у блоки</div>
                                                </div>

                                                <div class="acc-item style01">
                                                    <div class="acc-head">
                                                        <div class="caption">Як правильно обрати піноспласт?</div>
                                                        <div class="arrow">
                                                            <svg width="18" height="10" viewBox="0 0 18 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1 1L9.25806 9L17 1" stroke-width="1.3"></path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="acc-body">Пінопласт виготовлений методом спінювання гранул полістиролу, формування у блоки</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form">
                                        <div class="title h6 w-bold text-center">Напишіть нам і ми зрадістю відповімо на усі ваші запиння</div>
                                        <form class="row row-10 form-group">
                                            <div class="col-lg-12">
                                                <input type="text" class="input" placeholder="Ваше ім’я" required>
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="text" class="input invalid" placeholder="Ваш e-mail" required>
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="text" class="input" placeholder="Ваш телефон" required>
                                            </div>
                                            <div class="col-lg-12">
                                                <textarea class="input" placeholder="Ваше повідомлення"></textarea>
                                                <div class="text-center">
                                                    <div class="btn btn-primary blue open-popup" data-rel="thank-popup">
                                                        <!--<input type="submit">-->
                                                        <span>НАДІСЛАТИ</span>
                                                        <span class="anim-border"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section sp-bottom-xl seo-text-sc">
            <div class="container">
                <div class="container-sm">
                    <div class="seo-block">
                        <div class="title h4 w-medium">Eurobud виробник пінопласту, металочерепиці та профнастилу</div>
                        <div class="text">Компанія «Євробуд» працює на ринку України як виробник пінопласту з 2004 року. Сьогодні ми є одним із лідерів з виробництва пінополістирольних плит в Україні під власною торговою маркою <a href="#">Eurobud</a> та іншими брендами. Нам довіряють виготовлення пінопласту партнери зі світовим ім’ям. «Євробуд» виробляє пінопласт під брендами BauGut – для мережі будівельних гіпермаркетів «Епіцентр», а також Ceresit – для всесвітньо відомого виробника будматеріалів.</div>

                        <div class="acc-item style02">
                            <div class="text acc-body">
                                <p>Компанія «Євробуд» працює на ринку України як виробник пінопласту з 2004 року. Сьогодні ми є одним із лідерів з виробництва пінополістирольних плит в Україні під власною торговою маркою <a href="#">Eurobud</a> та іншими брендами. Нам довіряють виготовлення пінопласту партнери зі світовим ім’ям. «Євробуд» виробляє пінопласт під брендами BauGut – для мережі будівельних гіпермаркетів «Епіцентр», а також Ceresit – для всесвітньо відомого виробника будматеріалів.</p>
                                <p>Компанія «Євробуд» працює на ринку України як виробник пінопласту з 2004 року. Сьогодні ми є одним із лідерів з виробництва пінополістирольних плит в Україні під власною торговою маркою <a href="#">Eurobud</a> та іншими брендами. Нам довіряють виготовлення пінопласту партнери зі світовим ім’ям. «Євробуд» виробляє пінопласт під брендами BauGut – для мережі будівельних гіпермаркетів «Епіцентр», а також Ceresit – для всесвітньо відомого виробника будматеріалів.</p>
                            </div>

                            <div class="read-more acc-head">
                                <span class="first">показати більше</span>
                                <span class="second">сховати</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!-- FOOTER -->
    <footer class="footer">
        <? include '_footer.php';?>
    </footer>

    <div class="wrapper-right-bt">
        <a href="./calculator.php" class="calculator">
            <div class="icon">
                <img src="img/calculator.svg" data-i-src="img/calculator.svg" alt="" class="imgLoaded">
            </div>
            <div class="text">калькулятор</div>
        </a>
    </div>

    <div class="cookie-message">
        <div class="cookie-message__inner">
            <div class="text">Перегляньте нашу <a href="#">Політику</a> щодо файлів cookie, щоб дізнатися більше.</div>
            <div class="btn-close style02"></div>
        </div>
    </div>

</div>

<!-- POPUPS -->
<div class="popup-wrapper">
    <div class="bg-layer"></div>
    <? include '_popups.php';?>
</div>

<? include '_bottom.php';?>
</body>
</html>