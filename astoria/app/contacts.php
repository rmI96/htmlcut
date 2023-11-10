<!DOCTYPE html>
<html lang="uk">

<head>
    
    <? include '_top.php';?>
	<title>Astoria - Benefits</title>

</head>

<body>

    <div id="loader-wrapper"></div>

    <div id="content-block">

        <!-- HEADER -->
        <header class='header'>
            <? include '_header.php';?>
        </header>

        <div class='spacer-header'></div>

        <div class='full-container'>

        <section class='contacts-p'>
            <div class='animation anime-slide-left'>
                <div class="map-wrapper">
                    <div class="map-block" id="map-canvas" data-lat="49.8436895" data-lng="24.0236142" data-zoom="18" data-set-marker="./img/marker.svg"></div>
                    <div class="addresses-block">
                        <a data-lat="49.8436008" data-lng="24.0238059" data-marker="./img/marker-map.png" data-string="<div class='map-informer-content'><p> вул. Городоцька, 15, Львів</p></div></div>"></a>
                    </div>
                    <form action="/" class="map-form build-route">
                        <input type="text" placeholder="Ваше місце розташування" name="user-location" id="your_location" class="animation simple-animation">
                        <input type="hidden" id='location_department'   value='вул. Городоцька, 15, Львів'>
                    </form>
                </div>
            </div>
            
            <div class='spacer-lg-80 spacer-sm-0'></div>
            <div class='spacer-lg-50'></div>
            <div class='row'>
                <div class='col-xl-3 col-lg-4 offset-xl-1 animation fade-in-bottom'>
                    <div class='spacer-lg-80 spacer-sm-0'></div>
                    <h3 class='h3'>Наші контакти</h3>
                    <div class='spacer-lg-50 spacer-sm-30'></div>
                    <div class='contacts-info'>
                        <div class='title'>Адреса:</div>
                        <span>вул. Городоцька, 15, Львів</span>
                    </div>
                    <div class='contacts-info'>
                        <div class='title'>Телефон:</div>
                        <a href="tel:+380322422701">+38 032 242 27 01</a>
                        <a href="tel:+380322422701">+38 032 242 27 01</a>
                    </div>
                    <div class='contacts-info'>
                        <div class='title'>E-mail:</div>
                        <a href="mailto:reception@astoriahotel.ua">reception@astoriahotel.ua</a>
                    </div>
                </div>
                <div class='col-xl-7 col-lg-8'>
                    <div class='contacts-form animation anime-slide-left'>
                        <h3 class='h3 text-center'>Напишіть нам</h3>
                        <div class='spacer-lg-40 spacer-sm-30'></div>
                        <form class="form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <select>
                                        <option value="Оберіть департамент">Оберіть департамент</option>
                                        <option value="Маркетинг">Маркетинг</option>
                                        <option value="Постачання">Постачання</option>
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Тема повідомлення">
                                </div>
                                <div class="col-lg-6"><input type="text" placeholder="Ваш e-mail"></div>
                                <div class="col-lg-6"><input type="text" placeholder="Ваш e-mail"></div>
                                <div class="col-lg-12"><textarea placeholder="Ваш коментар"></textarea></div>
                                <div class="col-lg-12"><div class='btn btn-type-sev btn-block'>надіслати<input type="submit" value=" " onclick="_functions.thanksPopup();"></div></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

            <section class='events-s our-team'>
                <div class='spacer-lg-80 spacer-sm-0'></div> 
                <div class='spacer-lg-80 spacer-sm-50'></div> 

                <div class="decor-events">
                    <div class="bg-an animation anime-slide-bottom delay-02-3"></div>
                </div>

                <div class='text-center'>
                    <h2 class="h2 title-mn animation fade-in-animation">Наша команда</h2>
                </div>

                <div class='spacer-lg-60 spacer-sm-30'></div>

                <div class="swiper-entry sw-custom">
                    <div class="swiper-button-prev animation fade-in-bottom delay-02-4">
                        <span class="arrow"></span>
                        <span class="halfCircle leftSide"></span>
                        <span class="halfCircle rightSide"></span>
                    </div>
                    <div class="swiper-button-next animation fade-in-bottom delay-02-4">
                        <span class="arrow"></span>
                        <span class="halfCircle leftSide"></span>
                        <span class="halfCircle rightSide"></span>
                    </div>

                    <div class='row justify-content-center'>
                        <div class='col-xl-10'>
                            <div class="swiper-container" 
                                data-options='{"loop": true, "slidesPerView": 3, "spaceBetween": 60, "breakpoints": {"1368": {"spaceBetween": 15},"767": {"slidesPerView": 2, "spaceBetween": 15},"480": {"slidesPerView": 1}}
                                }'>
                                
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class='events-item animation anime-slide-left delay-a'>
                                            <div class='image'>
                                                <div class='bg' data-bg='./img/image-032.jpg'></div>
                                            </div>
                                            <div class='date'>Гендиректор</div>
                                            <div class='title'>Марко Ващенко</div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class='events-item animation anime-slide-left delay-a'>
                                            <div class='image'>
                                                <div class='bg' data-bg='./img/image-0042.jpg'></div>
                                            </div>
                                            <div class='date'>Адмістратор</div>
                                            <div class='title'>Анастасія Жидецька</div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class='events-item animation anime-slide-left delay-a'>
                                            <div class='image'>
                                                <div class='bg' data-bg='./img/image-0992.jpg'></div>
                                            </div>
                                            <div class='date'>Арт-директор</div>
                                            <div class='title'>Каміла Драгомірецька</div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class='events-item animation anime-slide-left delay-a'>
                                            <div class='image'>
                                                <div class='bg' data-bg='./img/image-032.jpg'></div>
                                            </div>
                                            <div class='date'>Гендиректор</div>
                                            <div class='title'>Марко Ващенко</div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class='events-item animation anime-slide-left delay-a'>
                                            <div class='image'>
                                                <div class='bg' data-bg='./img/image-0042.jpg'></div>
                                            </div>
                                            <div class='date'>Адмістратор</div>
                                            <div class='title'>Анастасія Жидецька</div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class='events-item animation anime-slide-left delay-a'>
                                            <div class='image'>
                                                <div class='bg' data-bg='./img/image-0992.jpg'></div>
                                            </div>
                                            <div class='date'>Арт-директор</div>
                                            <div class='title'>Каміла Драгомірецька</div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="swiper-pagination swiper-pagination-relative"></div>
                        </div>
                    </div>
                </div>
                <div class='spacer-lg-80 spacer-sm-30'></div> 
                <div class='spacer-lg-50 spacer-sm-0'></div>
            </section>
            
            <div class='spacer-lg-50'></div>
            <div class="spacer-lg-80 spacer-sm-0"></div>
        
            <!-- FOOTER -->
            <footer class='footer'>
                <? include '_footer.php';?>
            </footer>

        </div>

    </div>

    <? include '_bottom.php';?>

    <!-- INSTAGRAM -->

    <script src="./libs/instagram/instagram.js"></script>

    <!-- MAP -->

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSpyVZJi7gcsxY8Iocm3tcJdGwNsqU5pU&libraries=places&sensor=true&v=3"></script>
    <script src="./js/infobox.js"></script>
    <script src="./js/map.js"></script>


</body>
</html>