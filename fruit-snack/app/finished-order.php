<!DOCTYPE html>
<html lang="en">

<head>
    
    <? include '_top.php';?>
	<title>Fruchte Snack - Finished order</title>

</head>

<body>

    <div id="loader-wrapper"></div>

    <div id="content-block" data-bg="img/pattern-page.jpg">

        <!-- HEADER -->
        <header class='header'>
            <? include '_header.php';?>
        </header>

    <div class='height-wrapper-flex'>
    
        <div class='margin-header'></div>

        <div class='section finished-order-pg height-wrapper-content'>

            <div class="decor-wrapper">
                <div class="decor right animation"><img src="./img/decor-image-04.png" alt=""></div>
                <div class="decor left animation"><img src="./img/decor-image-05.png" alt=""></div>
            </div>

            <div class='container-cs'>
                <div class='text-center'>
                    <h1 class="decor-title h2">Checkout</h1>
                    <div class='text text-sm text-regular'>Your order information has been emailed <b>mk@gmail.com</b></div>
                </div>

                <div class='row justify-content-center'>
                    <div class='col-xl-6 col-lg-10'>
                        <div class='finished-order-inner'>
                            <div class='text-center mr-bottom'>
                                <div class='text-sm top-text'>№ 034048903</div>
                                <div class='h5'>Details of your order</div>
                            </div>
                            <div class='info-item'><span class='left'>Subtotal:</span><span class='price'>230,07 €</span></div>
                            <div class='info-item'><span class='left'>Shipping:</span><span class='price'>free</span></div>
                            <div class='info-item grey'><span class='left'>Total</span><span class='total-price'>230,07 €</span></div>
                            <a href="./index.php" class="btn btn-block btn-primary"><span>back to home</span> <span class="arr"></span></a>
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