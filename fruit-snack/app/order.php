<!DOCTYPE html>
<html lang="en">

<head>
    
    <? include '_top.php';?>
	<title>Fruchte Snack - Order</title>

</head>

<body>

    <div id="loader-wrapper"></div>

    <div id="content-block" data-bg="img/pattern-page.jpg">

        <!-- HEADER -->
        <header class='header'>
            <? include '_header.php';?>
        </header>
        <div class='margin-header'></div>

        <div class='section default-pg'>

            <div class="decor-wrapper">
                <div class="decor right animation"><img src="./img/decor-image-04.png" alt=""></div>
                <div class="decor left animation"><img src="./img/decor-image-05.png" alt=""></div>
            </div>

            <div class='container-cs'>

                <div class='text-center title-mr-bt'>
                    <h1 class="decor-title h2">Checkout</h1>
                </div>

                <div class='row'>
                    <div class='col-xl-4 col-lg-6 offset-xl-2'>
                        <form class="row form">
                            <div class='col-sm-6 label'><div class='h6 color-dark'>Contact information</div></div>
                            <div class='col-sm-6 col-auto text-right'>
                                <span class='text-md'> Already have account</span> <button class="btn btn-link open-popup" data-rel="login">Log in</button>
                            <div class="spacer-ds-10"></div>
                            </div>
                            <div class='col-lg-6'><input type="text" placeholder="* First name"></div>
                            <div class='col-lg-6'><input type="text" placeholder="* Last name"></div>
                            <div class='col-lg-12'><input type="text" placeholder="* E-mail"></div>
                            <div class='col-lg-12 label mr-top'><div class='h6 color-dark'>Shipping address</div></div>
                            <div class="col-lg-12">
                                <select>
                                    <option>* Country</option>
                                    <option>Country 1</option>
                                    <option>Country 2</option>
                                    <option>Country 3</option>
                                </select>
                            </div>
                            <div class='col-lg-6'><input type="text" placeholder="* Street address"></div>
                            <div class='col-lg-6'><input type="text" placeholder="* Apartment, suite, unit "></div>
                            <div class='col-lg-12'><input type="text" placeholder="* Town / City"></div>
                            <div class='col-lg-12'><input type="text" placeholder="* Postcode / ZIP"></div>
                            <div class='col-lg-12'><input type="text" placeholder="* Phone "></div>
                            <div class='col-lg-12 label mr-top'><div class='h6 color-dark'>Shopping method</div></div>
                            <div class="col-lg-12">
                                <div class="checkbox-entry-wrap">
                                    <label class="checkbox-entry">
                                        <input name="delivery-method-1" value='val1' type="radio" checked class="cheked">
                                        <span class="inner">USPS Priority Mail International <span class='min'>6 to 10 business days </span></span>
                                        <span class="price">38.32 €</span>
                                    </label>
                                    <label class="checkbox-entry">
                                        <input name="delivery-method-1" value='val2' type="radio" class="cheked">
                                        <span class="inner">UPS Worldwide Expedited® <span class='min'>2 business days</span></span>
                                        <span class="price">93.32 €</span>
                                    </label>
                                </div>
                            </div>
                            <div class='col-lg-12 label mr-top'><div class='h6 color-dark'>Payment</div></div>
                            <div class="col-lg-12">
                                <div class="checkbox-entry-wrap">
                                        <label class="checkbox-entry">
                                            <input name="delivery-method-2" value='val3' type="radio" checked class="cheked">
                                            <span class="inner">Credit card</span>
                                            <span class="icon-wrapper"><span class="icon"><img src="./img/visa.svg" alt=""></span><span class="icon"><img src="./img/mastercard.svg" alt=""></span></span>
                                        </label>
                                        <label class="checkbox-entry">
                                            <input name="delivery-method-2" value='val4' type="radio" class="cheked">
                                            <span class="inner">
                                                <span class="icon">
                                                    <img src="./img/paypal.svg" alt="">
                                                </span>
                                            </span>
                                        </label>
                                </div>
                            </div>
                            <div class='col-lg-12 label mr-top'><div class='h6 color-dark'>Additional information</div></div>
                            <div class="col-lg-12">
                                <textarea placeholder="Order Notes (Optional)"></textarea>
                                <div class="spacer-sm-10"></div>
                            </div>
                        </form>
                    </div>
                    <div class='col-xl-3 col-lg-5 col-sm-12 offset-lg-1'>

                        <div class="row align-items-center">
                            <div class="col-6"><div class='h6 color-dark'>Your order</div></div>
                            <div class="col-6 text-right"><button class="btn btn-link-3 open-popup" data-rel="shopping-cart">Change order</button></div>
                        </div>
                        <div class="spacer-lg-10"></div>

                        <div class="product-cart-card" data-price="16.79">
                            <a href="./product-detail.php" class="image">
                                <img src="./img/product-image-01.png" alt="">
                            </a>
                            <div class="info">
                                <a class="name" href="./product-detail.php">Apple 100%</a>
                                <div class="price">16,79 € x 1</div>
                            </div>
                            <div class="price-total">16,79 €</div>
                        </div>
    
                        <div class="product-cart-card" data-price="16.79">
                            <a href="./product-detail.php" class="image">
                                <img src="./img/product-image-02.png" alt="">
                            </a>
                            <div class="info">
                                <a class="name" href="./product-detail.php">Apple Vanilla</a>
                                <div class="price">16,79 € x 10</div>
                            </div>
                            <div class="price-total">179,70 €</div>
                        </div>
    
                        <div class="product-cart-card" data-price="16.79">
                            <a href="./product-detail.php" class="image">
                                <img src="./img/product-image-03.png" alt="">
                            </a>
                            <div class="info">
                                <a class="name" href="./product-detail.php">Zimt Deschmack</a>
                                <div class="price">16,79 € x 2</div>
                            </div>
                            <div class="price-total">33,58 €</div>
                        </div>
                        
                        <div class="card-info-wrap">
                            <div class="item">
                                <span class="left">Subtotal:</span>
                                <span class="price">230,07 €</span>
                            </div>
                            <div class="item">
                                <span class="left">Shipping:</span>
                                <span class="price">free</span>
                            </div>
                        </div>
                        <div class="card-info-wrap">
                            <div class="item">
                                <span class="left">Total</span>
                                <span class="total-price">230,07 €</span>
                            </div>
                        </div>

                        <div class="text text-sm">
                            <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our<br> <a href="./privacy-policy.php">privacy policy</a>.</p>
                        </div>
                        <div class="spacer-lg-20"></div>
                        <a class="btn btn-block btn-primary" href="./finished-order.php">Place order</a>

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