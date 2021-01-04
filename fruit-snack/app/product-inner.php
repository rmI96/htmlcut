<!DOCTYPE html>
<html lang="en">

<head>
    
    <? include '_top.php';?>
	<title>Fruchte Snack - Product detail</title>

</head>

<body>

    <div id="loader-wrapper"></div>

    <div id="content-block" data-bg="img/pattern-page.jpg">

        <!-- HEADER -->
        <header class='header'>
            <? include '_header.php';?>
        </header>
        <div class='margin-header'></div>

        <div class='section pd-bottom-md product-detail'>

            <div class="decor-wrapper">
                <div class="decor right animation"><img src="./img/decor-image-04.png" alt=""></div>
            </div>

            <div class='container-cs'>
                <ul class="breadcrumbs">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="shop.php">shop </a></li>
                    <li><a href="#">apple vanila</a></li>
                </ul>
            </div>

            
            <div class='product-detail-inner'>
                <div class='container-cs'>

                <div class='row justify-content-center'>
                    <div class='col-xl-7'>

                            <div class='product-detail-row'>
                                <div class='product-image'>
                                    <img src="./img/preloader.jpg" data-src="./img/product-image-02.png" alt="">
                                </div>
                                <div class='product-info'>
                                    <h1 class='name h4'>Apple Vanilla</h1>
                                    <div class="text text-sm text-2">
                                        <p>Vanilla is good for your health it can reduce cholesterol levels, it has healing properties being reach in antioxidants and can stimulate body's natural regrowth; it's great for hair and can help with anxiety.</p>
                                        <p><u>INGREDIENTS:</u> <b>Apple, Honey, Vanilla, Almonds</b></p>
                                        <p><u>NET WEIGHT:</u> <b>40g</b></p>
                                        <p>It's good for your heart – research has shown that vanilla can reduce cholesterol levels.</p>
                                    </div>
                                    <div class="amount">
                                        <div class="quantity-product">
                                            <button class="dec"></button>
                                            <input type="text" readonly="" value="1" data-step="1" data-min="1" data-max="99">
                                            <button class="add"></button>
                                        </div>
                                        <div class="price-wrapper">
                                            <div class="price h5"><span> 29,95</span> €</div>
                                            <div class="old-price"><span> 18,98</span> €</div>
                                        </div>
                                    </div>
                                    <button class="btn btn-block btn-primary btn-add-cart">
                                        <span class="icon"><img src="./img/shopping-cart-light.svg" alt=""></span> <span>ADD TO CARD</span>
                                        <span class="add-cart-last">in cart</span>
                                        <span class="add-cart-loader">
                                            <span></span><span></span><span></span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                
                    </div>
                </div>


                </div>

                <div class="product-btn-prev">
                    <span class="circle" style="background: rgb(234, 194, 139);"></span>
                    <div class="icon-product"><img src="./img/product-image-03.png" alt=""></div>
                    <a href='./product-inner.php' class="icon-arr"><img src="./img/arrow-left-light.svg" alt=""></a>
                </div>

                <div class="product-btn-next">
                    <span class="circle" style="background: rgb(71, 141, 17);"></span>
                    <div class="icon-product"><img src="./img/product-image-03.png" alt=""></div>
                    <a href='./product-inner.php' class="icon-arr"><img src="./img/arrow-right-light.svg" alt=""></a>
                </div>

            </div>


        </div>

        <div class='section pd-bottom'>
            <div class="decor-wrapper def">
                <div class="decor left animation"><img src="./img/decor-image-05.png" alt=""></div>
            </div>

            <div class='container-cs'>
                <div class='row justify-content-center'>
                    <div class='col-xl-7'>
                        <div class='text'>
                            <h5>Specially for you</h5>
                            <ul>
                                <li>We use only natural apples and production process is 100% biological which keeps all nutrients of the apples.</li>
                                <li>3 apples are dehidratated and assembled into a convenient size pack which you can take with you everywhere you go</li>
                                <li>Suitable for people with vegans people </li>
                            </ul>
                            <h5>Benefits and healthy facts</h5>
                            <p>Dehidratated apples provide a source of essential nutrients for your health and contribute to healthy diet. Vitamins form group B support your metabolism and nourish your liver, skin and hair</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class='section pd-bottom our-product-sc'>
            
            <div class="decor-wrapper">
                <div class="decor right animation"><img src="./img/decor-image-04.png" alt=""></div>
                <div class="decor left animation"><img src="./img/decor-image-05.png" alt=""></div>
            </div>

            <div class='container-cs'>

                <div class='text-center title-mr-bt'>
                    <div class="title-wrapper">
                        <div class="bg-title animation"><span>Benefits</span></div>
                        <div class="decor-title h2">Other Product</div>
                    </div>
                    <div class="sub-title">we create delicious for you</div>
                </div>

                <div class="swiper-entry style-default">
                    <div class="swiper-container" 
                        data-options='{"slidesPerView":4, "spaceBetween": 30, "loop": true, "breakpoints": {"1199": {"slidesPerView": 3},"991": {"slidesPerView": 2},"768": {"slidesPerView": 2, "spaceBetween": 0},"575": {"slidesPerView": 1, "autoHeight": true}}}'
                    >
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">

                                <div class='product-thumbs'>
                                    <div class='product-top'>
                                        <div class='image'>
                                            <img class='product-img' src="./img/preloader.jpg" data-src='./img/product-image-02.png' alt="">
                                            <div class='product-amount'>
                                                <div class="quantity-product">
                                                    <button class="dec"></button>
                                                    <input type="text" readonly value="1" data-step="1" data-min="1" data-max="99">
                                                    <button class="add"></button>
                                                </div>
                                                <button class="btn btn-primary btn-add-cart">
                                                    <span class="icon"><img src="./img/shopping-cart-light.svg" alt=""></span> <span>ADD TO CARD</span>
                                                    <span class='add-cart-last'>in cart</span>
                                                    <span class="add-cart-loader">
                                                        <span></span><span></span><span></span>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                        <a href='./product-inner.php' class='name h5'>Apple Vanilla</a>
                                        <div class='grad text-sm'>Apple, Honey, Vanilla, Almonds</div>
                                    </div>
                                    <div class='product-bottom text-center'>
                                        <div class='price h5'><span>29,95</span> €</div>
                                    </div>
                                    
                                </div>

                            </div>

                            <div class="swiper-slide">

                                <div class='product-thumbs'>
                                    <div class='product-top'>
                                        <div class='image'>
                                            <img class='product-img' src="./img/preloader.jpg" data-src='./img/product-image-01.png' alt="">
                                            <div class='product-amount'>
                                                <div class="quantity-product">
                                                    <button class="dec"></button>
                                                    <input type="text" readonly value="1" data-step="1" data-min="1" data-max="99">
                                                    <button class="add"></button>
                                                </div>
                                                <button class="btn btn-primary btn-add-cart">
                                                    <span class="icon"><img src="./img/shopping-cart-light.svg" alt=""></span> <span>ADD TO CARD</span>
                                                    <span class='add-cart-last'>in cart</span>
                                                    <span class="add-cart-loader">
                                                        <span></span><span></span><span></span>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                        <a href='./product-inner.php' class='name h5'>Apple Vanilla</a>
                                        <div class='grad text-sm'>Apple, Honey, Vanilla, Almonds, Honey, Vanilla, Almonds</div>
                                    </div>
                                    <div class='text-center product-bottom'>
                                        <div class='price h5'><span>16,79</span> €</div>
                                    </div>
                                </div>

                            </div>

                            <div class="swiper-slide">

                                <div class='product-thumbs'>

                                    <div class='product-top'>
                                        <div class='image'>
                                            <img class='product-img' src="./img/preloader.jpg" data-src='./img/product-image-03.png' alt="">
                                            <div class='product-amount'>
                                                <div class="quantity-product">
                                                    <button class="dec"></button>
                                                    <input type="text" readonly value="1" data-step="1" data-min="1" data-max="99">
                                                    <button class="add"></button>
                                                </div>
                                                <button class="btn btn-primary btn-add-cart">
                                                    <span class="icon"><img src="./img/shopping-cart-light.svg" alt=""></span> <span>ADD TO CARD</span>
                                                    <span class='add-cart-last'>in cart</span>
                                                    <span class="add-cart-loader">
                                                        <span></span><span></span><span></span>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                        <a href='./product-inner.php' class='name h5'>Apple Zimt Deschmack</a>
                                        <div class='grad text-sm'>Apple, Honey, Vanilla, Almonds</div>
                                    </div>
                                    <div class='text-center product-bottom'>
                                        <div class='price h5'><span>16,79</span> €</div>
                                    </div>
                                </div>

                            </div>

                            <div class="swiper-slide">

                                <div class='product-thumbs'>

                                    <div class='product-top'>
                                        <div class='status'>sale</div>
                                        <div class='image'>
                                            <img class='product-img' src="./img/preloader.jpg" data-src='./img/product-image-01.png' alt="">
                                            <div class='product-amount'>
                                                <div class="quantity-product">
                                                    <button class="dec"></button>
                                                    <input type="text" readonly value="1" data-step="1" data-min="1" data-max="99">
                                                    <button class="add"></button>
                                                </div>
                                                <button class="btn btn-primary btn-add-cart">
                                                    <span class="icon"><img src="./img/shopping-cart-light.svg" alt=""></span> <span>ADD TO CARD</span>
                                                    <span class='add-cart-last'>in cart</span>
                                                    <span class="add-cart-loader">
                                                        <span></span><span></span><span></span>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                        <a href='./product-inner.php' class='name h5'>Apple Vanilla </a>
                                        <div class='grad text-sm'>Apple, Honey, Vanilla, Almonds</div>
                                    </div>
                                    <div class='text-center product-bottom'>
                                        <div class='price h5'><span> 29,95</span> €</div>
                                        <div class='old-price'><span> 18,98</span> €</div>
                                    </div>
                                    
                                </div>

                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

            </div>
        </div>

        <!-- FOOTER -->
        <footer class='footer'>
            <? include '_footer.php';?>
        </footer>

    </div>

    <? include '_bottom.php';?>


</body>
</html>