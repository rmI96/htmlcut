<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'inc/_top.php';?>
    <title>DENTAL DEPO :: ELEMENTS</title>

    <?php include 'inc/_noscript-top.php';?>
</head>
<body>
<div id="content-block">

    <div id="loader-wrapper"></div>

    <!-- HEADER -->
    <header class="header">
        <?php include 'inc/_header.php';?>
    </header>

    <!-- TYPOGRAPHY -->
    <div class="container">
        <h1>Heading <b>H1</b> </h1>
        <h2>Heading <b>H2</b> </h2>
        <h3>Heading <b>H3</b> </h3>
        <h4>Heading <b>H4</b> </h4>
        <h5>Heading <b>H5</b> </h5>
        <h6>Heading <b>H6</b> </h6>
        <div class="spacer spacer-xs"></div>
        <div class="h1 plus-title"><b>Plus title</b></div>
        <div class="h2 plus-title"><b>Plus title</b></div>
        <div class="spacer spacer-xs"></div>
        <div class="subtitle">Subtitle</div>
        <div class="spacer spacer-xs"></div>
        <div class="row">
            <div class="col-sm-4">
                <div class="article text-sm"><b>text-sm</b> <a href="#">Lorem ipsum.</a> dolor sit amet, consectetur adipiscing elit. In et dapibus nibh. Nam purus metus, vestibulum sed risus in, blandit accumsan ligula. In hac habitasse platea dictumst. Nulla facilisi. Praesent non ipsum id ex sagittis lacinia et a justo. Nulla at ex maximus, blandit ante et, pretium odio. Sed pretium eu dui eu faucibus.</div>
            </div>
            <div class="col-sm-4">
                <div class="article text"><b>text</b> <a href="#">Lorem ipsum</a> dolor sit amet, consectetur adipiscing elit. In et dapibus nibh. Nam purus metus, vestibulum sed risus in, blandit accumsan ligula. In hac habitasse platea dictumst. Nulla facilisi. Praesent non ipsum id ex sagittis lacinia et a justo. Nulla at ex maximus, blandit ante et, pretium odio. Sed pretium eu dui eu faucibus.</div>
            </div>
            <div class="col-sm-4">
                <div class="article text-lg"><b>text-lg</b> <a href="#">Lorem ipsum</a> dolor sit amet, consectetur adipiscing elit. In et dapibus nibh. Nam purus metus, vestibulum sed risus in, blandit accumsan ligula. In hac habitasse platea dictumst. Nulla facilisi. Praesent non ipsum id ex sagittis lacinia et a justo. Nulla at ex maximus, blandit ante et, pretium odio. Sed pretium eu dui eu faucibus.</div>
            </div>
        </div>
        <div class="spacer spacer-xs"></div>
        <div class="row">
            <div class="col-sm-4">
                <div class="article text-xl color-white" style="background: #000;"><b>text-xl</b> <a href="#">Lorem ipsum</a> dolor sit amet, consectetur adipiscing elit. In et dapibus nibh. Nam purus metus, vestibulum sed risus in, blandit accumsan ligula. In hac habitasse platea dictumst. Nulla facilisi. Praesent non ipsum id ex sagittis lacinia et a justo. Nulla at ex maximus, blandit ante et, pretium odio. Sed pretium eu dui eu faucibus.</div>
            </div>
            <div class="col-sm-4">
                <div class="article text color-grey"><a href="#">Lorem ipsum</a> dolor sit amet, consectetur adipiscing elit. In et dapibus nibh. Nam purus metus, vestibulum sed risus in, blandit accumsan ligula. In hac habitasse platea dictumst. Nulla facilisi. Praesent non ipsum id ex sagittis lacinia et a justo. Nulla at ex maximus, blandit ante et, pretium odio. Sed pretium eu dui eu faucibus.</div>
            </div>
            <div class="col-sm-4">
                <div class="article text color-secondary"><a href="#">Lorem ipsum</a> dolor sit amet, consectetur adipiscing elit. In et dapibus nibh. Nam purus metus, vestibulum sed risus in, blandit accumsan ligula. In hac habitasse platea dictumst. Nulla facilisi. Praesent non ipsum id ex sagittis lacinia et a justo. Nulla at ex maximus, blandit ante et, pretium odio. Sed pretium eu dui eu faucibus.</div>
            </div>
        </div>
        <div class="spacer spacer-xs"></div>
        <div class="article text text-xs-center text-sm-right text-md-left text-lg-center text-xl-right"><a href="#">Lorem ipsum</a> dolor sit amet, consectetur adipiscing elit. In et dapibus nibh. Nam purus
            metus, vestibulum sed risus in, blandit accumsan ligula. In hac habitasse platea dictumst. Nulla facilisi. Praesent
            non ipsum id ex sagittis lacinia et a justo. Nulla at ex maximus, blandit ante et, pretium odio. Sed pretium eu dui
            eu faucibus.</div>
    </div>

    <!-- BUTTONS -->
    <div class="container">
        <div class="spacer-xs"></div>

        <p>Arr</p>
        <div class="arr"></div>

        <div class="spacer-xs"></div>

        <div class="row">
            <div class="col-sm-4">
                Primary<br/><br/>
                <button class="btn btn-primary">
                    <span class="btn-text">Перейти в магазин</span>
                    <span class="arr"></span>
                </button><br/><br/>

                <button class="btn btn-md btn-primary btn-add-cart">
                    <span>Button</span>
                    <span class='add-cart-last'>in cart</span>
                    <span class="add-cart-loader">
                        <span></span><span></span><span></span>
                    </span>
                </button>

            </div>
            <div class="col-sm-3">
                Secondary<br/><br/>
                <button class="btn btn-sm btn-secondary">Button</button><br/><br/>
                <button class="btn btn-md btn-secondary">Button</button><br/><br/>
                <button class="btn btn-lg btn-secondary">Button</button><br/><br/>
            </div>
            <div class="col-sm-3">
                Optional<br/><br/>
                <button class="btn btn-sm btn-optional">Button</button><br/><br/>
                <button class="btn btn-md btn-optional">Button</button><br/><br/>
                <button class="btn btn-lg btn-optional">Button</button><br/><br/>
            </div>
        </div>
        <div class="spacer-xs"></div>
        <button class="btn btn-md btn-primary btn-block">Button</button><br />
        <div class="spacer-xs"></div>
        <button class="btn btn-close"></button>
    </div>

    <div class="spacer-xs"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <a href="#" class="simple-link">Simple link<i class="arr"></i></a>
            </div>
            <div class="col-lg-6"></div>
        </div>
    </div>

    <div class="spacer-xs"></div>


    <div class='container'>
        <div class="thumb-input-number">
            <button type="button" class="decrement"></button>
            <input value="1" readonly="">
            <button type="button" class="increment"></button>
        </div>
    </div>

    <div class="spacer-xs"></div>

     <!-- product thumb -->

    <div class='container'>
        <div class='row'>
            <div class='col-lg-3'>
                <div class="product_thumb">
                    <div class="product_thumb-image">
                        <span class="product_thumb-special">Акція</span>
                        <img class="img swiper-lazy swiper-lazy-loaded" src="img/products/intraoralnyj-skaner-trios4.png" alt="Інтраоральний сканер Trios4">
                        <a class='link' href="#"></a>
                        <div class='product_thumb-amount'>
                            <div class="thumb-input-number">
                                <button type="button" class="decrement"></button>
                                <input value="1" readonly="">
                                <button type="button" class="increment"></button>
                            </div>
                            <button class="btn btn-lg btn-secondary">Додати в кошик</button>
                        </div>
                    </div>
                    <div class="product_thumb-title text-md"><a href="#">Інтраоральний
                            сканер Trios4</a></div>
                    <div class="product_thumb-price"><b>6,428.00</b> <span>грн</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="spacer-xs"></div>

    <!-- FORM ELEMENTS -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <input class="input" placeholder="Placeholder" />
                    <input class="input invalid" placeholder="Placeholder" value="Text" />
                    <textarea class="input" placeholder="Placeholder"></textarea>
                </div>
            </div>
        </div>
    </div>

    <div class="spaser-sm"></div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <ul class="socials">
                    <li>
                        <a href="#">
                            <img src="img/icons/icon-facebook.svg" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/icons/icon-instagram.svg" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- SWIPER CUSTOM -->
    <div class="swiper-entry">
        <div class="swiper-buttons-wrap pos-left-center">
            <div class="swiper-button-prev style-1">
                <div class="arr"></div>
            </div>
            <div class="swiper-button-next style-1">
                <div class="arr"></div>
            </div>
        </div>

        <div class="swiper-container"
             data-options='{"slidesPerView":2, "breakpoints": {"1370": {"slidesPerView": 4},"1199": {"slidesPerView": 3},"991": {"slidesPerView": 2},"767": {"slidesPerView": 1}}}'
        >
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="height: 180px; background: rgba(250,250,250,1);">Slide 1</div>
                <div class="swiper-slide" style="height: 180px; background: #EEE;">Slide 2</div>
                <div class="swiper-slide" style="height: 180px; background: #EEE;">Slide 3</div>
                <div class="swiper-slide" style="height: 180px; background: #EEE;">Slide 4</div>
            </div>
            <div class="swiper-pagination swiper-pagination-relative style-buttons-left"></div>
        </div>
    </div>
    <br/>
    <div class="swiper-entry bg-grey">
        <div class="swiper-buttons-wrap pos-right-top">
            <div class="swiper-button-prev style-2">
                <div class="arr"></div>
            </div>
            <div class="swiper-button-next style-2">
                <div class="arr"></div>
            </div>
        </div>

        <div class="swiper-container"
             data-options='{"slidesPerView":2, "breakpoints": {"1370": {"slidesPerView": 4},"1199": {"slidesPerView": 3},"991": {"slidesPerView": 2},"767": {"slidesPerView": 1}}}'
        >
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="height: 180px; background: #EEE;">Slide 1</div>
                <div class="swiper-slide" style="height: 180px; background: #EEE;">Slide 2</div>
                <div class="swiper-slide" style="height: 180px; background: #EEE;">Slide 3</div>
                <div class="swiper-slide" style="height: 180px; background: #EEE;">Slide 4</div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <br/>
    <div class="swiper-entry">
        <div class="swiper-button-prev style-no-borders pos-on-sides">
            <div class="arr"></div>
        </div>
        <div class="swiper-button-next style-no-borders pos-on-sides">
            <div class="arr"></div>
        </div>
        <div class="swiper-container" style="margin: 0 50px;"
             data-options='{"slidesPerView":2, "breakpoints": {"1370": {"slidesPerView": 4},"1199": {"slidesPerView": 3},"991": {"slidesPerView": 2},"767": {"slidesPerView": 1}}}' >
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="height: 180px; background: #EEE;">Slide 1</div>
                <div class="swiper-slide" style="height: 180px; background: #EEE;">Slide 2</div>
                <div class="swiper-slide" style="height: 180px; background: #EEE;">Slide 3</div>
                <div class="swiper-slide" style="height: 180px; background: #EEE;">Slide 4</div>
            </div>
            <div class="swiper-pagination swiper-pagination-relative"></div>
        </div>
    </div>

    <!-- SPACERS -->
    <?php include 'inc/_spacers.php';?>

    <!-- FOOTER -->
    <footer class="footer">
        <?php include 'inc/_footer.php';?>
    </footer>
</div>

<!-- POPUPS -->
<?php include 'inc/_popups.php';?>
<?php include 'inc/_bottom.php';?>
</body>

</html>