<!DOCTYPE html>
<html lang="en">

<head>
    
    <? include '_top.php';?>
	<title>Fruchte Snack - History shopping</title>

</head>

<body>

    <div id="loader-wrapper"></div>

    <div id="content-block" data-bg="img/pattern-page.jpg">

        <!-- HEADER -->
        <header class='header'>
            <? include '_header-2.php';?>
        </header>
        <div class='margin-header'></div>

        <div class='section default-pg profile-history'>

            <div class="decor-wrapper">
                <div class="decor right animation"><img src="./img/decor-image-04.png" alt=""></div>
                <div class="decor left animation"><img src="./img/decor-image-05.png" alt=""></div>
            </div>

            <div class='container-cs'>

                <div class='text-center title-mr-bt'>
                    <h1 class="decor-title h2">History shopping</h1>
                </div>

                <div class='row justify-content-center'>

                    <div class='col-xl-4 col-lg-6 col-sm-8'>

                        <div class="card-info-wrap text-sm">
                            <div class="item text-midle">Order - #000263</div>
                            <div class='text-midle'>Status - <span class='status-yellow'>Waiting for payment</span></div>
                        </div>

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
                                <span class="left">Total</span>
                                <span class="total-price">230,07 €</span>
                            </div>
                        </div>

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