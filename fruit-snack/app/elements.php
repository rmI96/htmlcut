<!DOCTYPE html>
<html lang="en">

<head>
    
    <? include '_top.php';?>
	<title>Elements</title>

</head>

<body>

    <div id="content-block" data-bg="img/pattern-page.jpg">

        <!-- HEADER -->
        <header class='header'>
            <? include '_header.php';?>
        </header>


    <section class='section'>

        <div class='container'>
            <h2>Typography</h2>
            <div class='spacer-lg-60'></div>
            <h1>Development company 88</h1>
            <h2>Development company 72</h2>
            <h3>Development company </h3>
            <h4>Development company 33</h4>
            <h5>Development company 22</h5>
            <h6>Development company 18</h6>
            <div class='spacer-lg-60'></div>
            <b> text 18px</b>
            <div class='text'>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur sint voluptates nesciunt qui quod laboriosam ex quisquam tenetur nemo, ullam explicabo doloremque adipisci dolores eaque delectus itaque deleniti assumenda nostrum.</p>
            </div>
            <b>text-sm 16px</b>
            <div class='text-sm'>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, veniam est quas cupiditate maxime eius recusandae amet quisquam necessitatibus, dolore adipisci minima animi! Blanditiis vero rem accusantium quibusdam deleniti ducimus.</p>
            </div>
            <b> text-lg 20px</b>
            <div class='text-lg'>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, veniam est quas cupiditate maxime eius recusandae amet quisquam necessitatibus, dolore adipisci minima animi! Blanditiis vero rem accusantium quibusdam deleniti ducimus.</p>
            </div>
            <b> color-light</b>
            <div class='text color-light' style='background-color: #111; padding: 30px;'>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae harum perspiciatis doloribus cum iste, distinctio nesciunt quibusdam temporibus officia. Facere harum ut perferendis id repudiandae fugit placeat mollitia natus quod.</p>
            </div>
            <b> color-light-2 </b>
            <div class='text color-light-2' style='background-color: #111; padding: 30px;'>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae harum perspiciatis doloribus cum iste, distinctio nesciunt quibusdam temporibus officia. Facere harum ut perferendis id repudiandae fugit placeat mollitia natus quod.</p>
            </div>
            <div class='spacer-lg-60'></div>
            <div class='text'>
                <h5>How do we use your personal information? </h5>
                <p><a href="#"> Lorem ipsum dolor</a> sit amet <b> consectetur adipisicing</b> elit. Et, veniam est quas cupiditate maxime eius recusandae amet quisquam necessitatibus, dolore adipisci minima animi! Blanditiis vero rem accusantium quibusdam deleniti ducimus.</p>
                <ul>
                    <li>Cookies” are data files that are placed on your device or computer and often include an anonymous unique identifier. For more information about cookies, and how to disable cookies</li>
                    <li>“Log files” track actions occurring on the Site, and collect data including your IP address, browser type, Internet service provider, referring/exit pages, and date/time stamps. </li>
                    <li>“Web beacons”, “tags”, and “pixels” are electronic files used to record information about how you browse the Site. </li>
                </ul>
                <ol>
                    <li>Use Case 1 : Create Jira issue when Opportunity Stage is changed to Closed Won.</li>
                    <li>Use Case 2: Create Jira Issue when Account of Business type is created.</li>
                    <li>Use Case 1: When Comment to Case is added – comment to related Jira ticket should be added.</li>
                    <li>Use Case 3: When Note is added to Lead, comment should be added to a related Jira Ticket.</li>
                    <li>Use Case 4: When Attachment is added to Opportunity, the same attachment should be added.</li>
                </ol>
                <blockquote>
                    We use only natural apples and production process is 100% biological which keeps all nutrients of the apples. 3 apples are dehidratated and assembled into a convenient size pack which you can take with you everywhere you go 
                </blockquote>
            </div>
            <div class='spacer-lg-60'></div>

            <h2>Title</h2>
            <div class='spacer-lg-60'></div>

            <div class='title-wrapper'>
                <div class='bg-title'>Bg Title</div>
                <div class='decor-title h1'>Decor title</div>
            </div>
            <div class='spacer-lg-60'></div>
            <div class='sub-title'>we love what we do</div>

            <div class='spacer-lg-60'></div>
            <h2>buttons</h2>
            <div class='spacer-lg-60'></div>
            
            <div class='row'>
                <div class='col-lg-4'>
                    <button class='btn btn-primary btn-add-cart'>
                        <span>view more</span><span class='arr'></span>
                        <span class='add-cart-last'>in cart</span>
                        <span class="add-cart-loader">
                            <span></span><span></span><span></span>
                        </span>
                    </button>
                    <div class='spacer-lg-30'></div>
                    <button class="btn btn-primary btn-add-cart">
                        <span class="icon"><img src="./img/shopping-cart-light.svg" alt=""></span> <span>ADD TO CARD</span>
                        <span class='add-cart-last'>in cart</span>
                        <span class="add-cart-loader">
                            <span></span><span></span><span></span>
                        </span>
                    </button>
                    <div class='spacer-lg-30'></div>
                    <button class='btn btn-block btn-primary'><span>view more</span> <span class='arr'></span></button>
                    <div class='spacer-lg-30'></div>
                    <button class='btn btn-close'></button>
                    <div class='spacer-lg-30'></div>
                    <a class='btn btn-secondary' href="./shop.php">shop</a>
                    <div class='spacer-lg-30'></div>
                    <button class="btn btn-stle-2">CONTINUE SHOPPING</button>
                    <div class='spacer-lg-30'></div>
                    <button class="btn btn-block btn-stle-2">CONTINUE SHOPPING</button>
                </div>
            </div>

            

            <div class='spacer-lg-60'></div>
            <h2>Form</h2>
            <div class='spacer-lg-60'></div>
            <form class='form row'>
                <div class='col-lg-6'>
                    <input type="text" placeholder="* Your Name">
                </div>
                <div class='col-lg-6'>
                    <input type="text" placeholder="* Your E-mail">
                </div>
                <!-- <div class="col-lg-6">
                    <div class="input-wrapper-material">
                        <label>* Your Name</label>
                        <input class="input-material" name="name" type="text">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="input-wrapper-material">
                        <label>* Your E-mail</label>
                        <input class="input-material" name="name" type="text">
                    </div>
                </div> -->
                <div class='col-lg-12'><textarea placeholder="* Message"></textarea></div>
                <div class='col-lg-12'>
                    <div class="spacer-lg-50"></div>
                    <div class="text-center">
                        <button class="btn btn-primary open-popup" data-rel="thanks-popup">
                            send message
                            <span class="arr"></span>
                            <input type="submit">
                        </button>
                </div>
                </div>
            </form>


            <div class='spacer-lg-60'></div>
            <h2>Slider</h2>
            <div class='spacer-lg-60'></div>


            <div class="swiper-entry style-default">
                <div class="swiper-container" 
                    data-options='{"slidesPerView":2, "loop": true, "breakpoints": {"1370": {"slidesPerView": 4},"1199": {"slidesPerView": 3},"991": {"slidesPerView": 2},"767": {"slidesPerView": 1}}}'
                >
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" style="height: 180px; background: #EEE;">Slide 1</div>
                        <div class="swiper-slide" style="height: 180px; background: #EEE;">Slide 2</div>
                        <div class="swiper-slide" style="height: 180px; background: #EEE;">Slide 3</div>
                        <div class="swiper-slide" style="height: 180px; background: #EEE;">Slide 4</div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="swiper-button-prev">
                    <span class='icon'><img src="./img/arrow-left.svg" alt=""></span>
                </div>
                <div class="swiper-button-next">
                    <span class='icon'><img src="./img/arrow-right.svg" alt=""></span>
                </div>
            </div>


            <div class='spacer-lg-60'></div>
            <h2>product thumbs</h2>
            <div class='spacer-lg-60'></div>

            <div class="quantity-product">
                <button class="dec"></button>
                <input type="text" readonly value="1" step="1" min="1" max="99">
                <button class="add"></button>
            </div>

            <div class='spacer-lg-60'></div>
            <div class='row'>
                <div class='col-lg-5'>
                    <div class='product-thumbs'>
                        <div class='status'>sale</div>
                        <div class='image'>
                            <img class='product-img' src="./img/preloader.jpg" data-src='./img/product-image-01.png' alt="">
                            <div class='product-amount'>
                                <div class="quantity-product">
                                    <button class="dec"></button>
                                    <input type="text" readonly value="1" step="1" min="1" max="99">
                                    <button class="add"></button>
                                </div>
                                <button class='btn btn-primary'><span class='icon'><img src="./img/shopping-cart-light.svg" alt=""></span> <span>ADD TO CARD</span></button>
                            </div>
                        </div>
                        <a href='./product-inner.php' class='name h5'>Apple Vanilla </a>
                        <div class='grad text-sm'>Apple, Honey, Vanilla, Almonds</div>
                        <div class='text-center'>
                            <span class='price h5'>29,95 €</span>
                            <span class='old-price'>18,98 €</span>
                        </div>
                        
                    </div>
                </div>
            </div>


            <div class='spacer-lg-60'></div>
            <h2>popup</h2>
            <div class='spacer-lg-60'></div>
            <button class='btn btn-primary open-popup' data-rel="reset-password">reset password</button>
            <div class='spacer-lg-30'></div>
            <button class='btn btn-primary open-popup' data-rel="thanks-popup">Thanks</button>
            <div class='spacer-lg-30'></div>
            <button class='btn btn-primary open-popup' data-rel="singin">singin</button>
            <div class='spacer-lg-30'></div>
            <button class='btn btn-primary open-popup' data-rel="login">login</button>
            
        </div>

</section>

        <div class='section pd-bottom'>
            <div class='container-xl'>
                <div class='text-center title-mr-bt'>
                    <div class="title-wrapper">
                        <div class="bg-title">Healthy</div>
                        <div class="decor-title h1">More than just a fruit - real desert</div>
                    </div>
                    <div class="sub-title">A variety of flavors</div>
                    <div class='desc-section text'>
                        <p>Healthy eating can be diverse, delicious and funwe prepared specially for you 4 tastes: green natural, red natural, apple vanilla, apple cinamon</p>
                    </div>
                </div>
    
            </div>

            <div class="swiper-entry style-default desert-slides">
                <div class="swiper-container" 
                    data-options='{"slidesPerView":1, "loop": true, "breakpoints": {"1370": {"slidesPerView": 4},"1199": {"slidesPerView": 3},"991": {"slidesPerView": 2},"767": {"slidesPerView": 1}}}'
                >
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" data-color='#eac28b' data-image='./img/product-image-02.png'>

                            <div class='real-desert-item'>

                                <div class='container-xl'>
                                    <div class='row align-items-center justify-content-center'>
                                        <div class='col-lg-4 pr-xl-5'>
                                            <div class='image'>
                                                <img src="./img/product-sl-cr-01.png" alt="">
                                            </div>
                                        </div>
                                        <div class='col-lg-4 pl-xl-5'>
                                            <div class='text text-sm'>
                                                <h4>Apple Vanilla</h4>
                                                <p>Vanilla is good for your health it can reduce cholesterol levels, it has healing properties being reach in antioxidants and can stimulate body's natural regrowth; it's great for hair and can help with anxiety.</p>
                                                <p>It's good for your heart – research has shown that vanilla can reduce cholesterol levels.</p>
                                            </div>

                                            <button class="btn btn-primary"><span>where buy?</span> <span class="arr"></span></button>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="swiper-slide" data-color='#478d11' data-image='./img/product-image-01.png'>

                            <div class='real-desert-item'>

                                <div class='container-xl'>
                                    <div class='row align-items-center justify-content-center'>
                                        <div class='col-lg-4 pr-xl-5'>
                                            <div class='image'>
                                                <img src="./img/product-sl-cr-01.png" alt="">
                                            </div>
                                        </div>
                                        <div class='col-lg-4 pl-xl-5'>
                                            <div class='text text-sm'>
                                                <h4>Apple Vanilla</h4>
                                                <p>Vanilla is good for your health it can reduce cholesterol levels, it has healing properties being reach in antioxidants and can stimulate body's natural regrowth; it's great for hair and can help with anxiety.</p>
                                                <p>It's good for your heart – research has shown that vanilla can reduce cholesterol levels.</p>
                                            </div>
                                            <button class="btn btn-primary"><span>where buy?</span> <span class="arr"></span></button>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="swiper-slide" data-color='#eac28b' data-image='./img/product-image-03.png'>

                            <div class='real-desert-item'>

                                <div class='container-xl'>
                                    <div class='row align-items-center justify-content-center'>
                                        <div class='col-lg-4 pr-xl-5'>
                                            <div class='image'>
                                                <img src="./img/product-sl-cr-01.png" alt="">
                                            </div>
                                        </div>
                                        <div class='col-lg-4 pl-xl-5'>
                                            <div class='text text-sm'>
                                                <h4>Apple Vanilla</h4>
                                                <p>Vanilla is good for your health it can reduce cholesterol levels, it has healing properties being reach in antioxidants and can stimulate body's natural regrowth; it's great for hair and can help with anxiety.</p>
                                                <p>It's good for your heart – research has shown that vanilla can reduce cholesterol levels.</p>
                                            </div>
                                            <button class="btn btn-primary"><span>where buy?</span> <span class="arr"></span></button>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="swiper-slide" data-color='#eac28b' data-image='./img/product-image-03.png'>

                            <div class='real-desert-item'>

                                <div class='container-xl'>
                                    <div class='row align-items-center justify-content-center'>
                                        <div class='col-lg-4 pr-xl-5'>
                                            <div class='image'>
                                                <img src="./img/product-sl-cr-01.png" alt="">
                                            </div>
                                        </div>
                                        <div class='col-lg-4 pl-xl-5'>
                                            <div class='text text-sm'>
                                                <h4>Apple Vanilla</h4>
                                                <p>Vanilla is good for your health it can reduce cholesterol levels, it has healing properties being reach in antioxidants and can stimulate body's natural regrowth; it's great for hair and can help with anxiety.</p>
                                                <p>It's good for your heart – research has shown that vanilla can reduce cholesterol levels.</p>
                                            </div>
                                            <button class="btn btn-primary"><span>where buy?</span> <span class="arr"></span></button>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <div class='desert-btn-prev'>
                    <span class='circle'></span>
                    <div class='icon-pr'><img src="./img/product-image-02.png" alt=""></div>
                    <div class="swiper-button-prev">
                        <span class='icon'><img src="./img/arrow-left-light.svg" alt=""></span>
                    </div>
                </div>

                <div class='desert-btn-next'>
                    <span class='circle'></span>
                    <div class='icon-pr'><img src="./img/product-image-02.png" alt=""></div>
                    <div class="swiper-button-next">
                        <span class='icon'><img src="./img/arrow-right-light.svg" alt=""></span>
                    </div>
                </div>
                
            </div>
            
            

        </div>

        <div class='section pd-bottom contacts-sc'>
            <div class='container-xl'>

                <div class='text-center title-mr-bt'>
                    <div class="title-wrapper">
                        <div class="bg-title">Our company</div>
                        <div class="decor-title h1">Contact us</div>
                    </div>
                    <div class="sub-title">we love what we do</div>
                </div>

                <div class='row justify-content-center'>
                    <div class='col-lg-4'>
                        <div class='contacts-info'>
                            <div class='circle'>
                                <span class='icon'><img src="./img/preloader.jpg" data-src='./img/pin.svg' alt=""></span>
                            </div>
                            <div class='info'>
                                <div class='h6 title'>Address:</div>
                                <p>DE 63088 Hunfeld. Am Zaun3.</p>
                            </div>
                        </div>
                        <div class='contacts-info'>
                            <div class='circle'>
                                <span class='icon'><img src="./img/preloader.jpg" data-src='./img/email.svg' alt=""></span>
                            </div>
                            <div class='info'>
                                <div class='h6 title'>E-mail:</div>
                                <a href="mailto:info@fruchtesnack.de">info@fruchtesnack.de</a>
                            </div>
                        </div>
                        <div class='contacts-info'>
                            <div class='circle'>
                                <span class='icon'><img src="./img/preloader.jpg" data-src='./img/smartphone.svg' alt=""></span>
                            </div>
                            <div class='info'>
                                <div class='h6 title'>Telephone:</div>
                                <a href="tel:+4917657838917">+4917657838917</a>
                            </div>
                        </div>
                    </div>
                    <div class='col-lg-4'>
                        <form class='form row'>
                            <div class='col-lg-6'>
                                <input type="text" placeholder="* Your Name">
                            </div>
                            <div class='col-lg-6'>
                                <input type="text" placeholder="* Your E-mail">
                            </div>
                            <div class='col-lg-12'><textarea placeholder="* Message"></textarea></div>
                            <div class='col-lg-12'>
                                <div class='spacer-lg-15'></div>
                                <div class="text-right">
                                    <button class="btn btn-primary open-popup" data-rel="thanks-popup">
                                        send message
                                        <span class="arr"></span>
                                        <input type="submit">
                                    </button>
                            </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <div class='section pd-bottom-md'>
            <div class='row justify-content-center'>
                <div class='col-lg-6'>
                    <div class='text text-sm'>
                        <h5>Snack Fruits</h5>
                        <p>Dehidratated apples provide a source of essential nutrients for your health and contribute to healthy diet Rich in fiber and fiber facilitates your digestion process Vitamins form group B support your metabolism and nourish your liver, skin and hair Reach in minerals especially iron which help creation of new red cells</p>
                    </div>

                    <div class='wrapper-hidden' style='display: none' data-show="1">
                        <div class='spacer-lg-20'></div>
                        <div class='text text-sm'>
                            <p>Dehidratated apples provide a source of essential nutrients for your health and contribute to healthy diet Rich in fiber and fiber facilitates your digestion process Vitamins form group B support your metabolism and nourish your liver, skin and hair Reach in minerals especially iron which help creation of new red cells</p>
                        </div>
                    </div>
                    <div class='spacer-lg-25'></div>
                    <div class="wr-btn-show">
                        <button class="btn btn-seo btn-show-text" data-show="1">view more</button>
                        <button class="btn btn-seo less btn-show-text" style="display: none;" data-show="1">view less</button>
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