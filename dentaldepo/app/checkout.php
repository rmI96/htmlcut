<!DOCTYPE html>
<html lang="uk">
<head>
    <?php include 'inc/_top.php'; ?>
    <title>DENTAL DEPO - Checkout</title>

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

        <div class='section pd-top-p pd-bottom-lg'>

            <div class='container anime'>

                <h1 class="h1" style="position: relative">
                    <b class="anime-title-inner"><span class="color-secondary">Оформлення</span> замовлення</b>
                    <b aria-hidden="true">
                        <svg class="title-svg" version="1.1" viewBox="0 0 100 100" width="100%" height="100%" preserveAspectRatio="xMinYMid meet">
                            <text x="0" y="76" stroke-width="1" text-anchor="start">
                                <tspan class="color-secondary">Оформлення</tspan> <tspan>замовлення</tspan> 
                            </text>
                        </svg>
                    </b>
                </h1>

                <div  class="checkout-inner">
                    <div class="row row-50 ">
                        <div class="col-xl-6">
                            <form class="form-group">
                                <div class="title h5"><b>Контактні дані</b></div>
                                <div class="row row-10">
                                    <div class="col-lg-6"><input class="input" type="text" placeholder="Ваше ім’я"></div>
                                    <div class="col-lg-6"><input class="input" type="text" placeholder="Ваше прізвище"></div>
                                    <div class="col-lg-6"><input class="input inputmask" data-inputmask="'mask': '+38 (999)-999-99-99'" data-inputmask-placeholder="x" placeholder="+38 (xxx)-xxx-xx-xx"></div>
                                    <div class="col-lg-6"><input class="input" type="text" placeholder="Ваш email"></div>
                                </div>
                                <div class="title h5 mr-top-m"><b>Спосіб доставки</b></div>

                                <label class="checkbox-entry">
                                    <input class="select-radio" type="radio" name="radio-01" checked>
                                    <span>Нова пошта</span>
                                </label>
                                <label class="checkbox-entry">
                                    <input class="select-radio1" type="radio" name="radio-01">
                                    <span>Самовивіз</span>
                                </label>
                                
                                <div class="new-post-block">
                                    <div class="row row-10">
                                        <div class="col-lg-6">
                                            <select>
                                                <option>Оберіть місто</option>
                                                <option>option 1</option>
                                                <option>option 2</option>
                                                <option>option 3</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <select>
                                                <option>Оберіть відділення</option>
                                                <option>option 1</option>
                                                <option>option 2</option>
                                                <option>option 3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="title h5 mr-top-m"><b>Спосіб оплати</b></div>

                                <label class="checkbox-entry">
                                    <input type="radio" name="radio-02" checked>
                                    <span>Готівка</span>
                                </label>
                                <label class="checkbox-entry">
                                    <input type="radio" name="radio-02" checked>
                                    <span>LiqPay</span>
                                </label>

                            </form>
                            
                            
                        </div>
                        <div class="col-xl-6">
                            <div class="title h5 checkout-q-wrap">
                                <b>Ваше замовлення</b>
                                <span class="text-sm"><a class="simple-link02 js-open-card" href="#">редагувати кошик</a> <span class="article qvi"> 2 товари</span></span>
                            </div>

                            <div class="checkout-product">
                                <a class="image" href="./product-detail.php">
                                    <img src="./img/products/intraoralnyj-skaner-trios4.png" alt="">
                                </a>
                                <div class="info-wrap">
                                    <div class="info">
                                        <a class="name" href="./product-detail.php">
                                            Інтраоральний сканер Trios4
                                        </a>
                                        <p>1x 6,428.00 грн</p>
                                    </div>
                                    <div class="thumb-input-number">
                                        <button type="button" class="decrement"></button>
                                        <input value="1" readonly="">
                                        <button type="button" class="increment"></button>
                                    </div>
                                    <div class="price"><b>12,856.00</b><span> грн</span></div>
                                </div>
                            </div>

                            <div class="checkout-product">
                                <a class="image" href="./product-detail.php">
                                    <img src="./img/products/SMARTtorque-S1619-L-turbinnyj-nakonechnyk.png" alt="">
                                </a>
                                <div class="info-wrap">
                                    <div class="info">
                                        <a class="name" href="./product-detail.php">
                                            SMARTtorque S619 L турбінний наконечник, зі світлооптикою
                                        </a>
                                        <p>1x 288,600.00 грн</p>
                                    </div>
                                    <div class="thumb-input-number">
                                        <button type="button" class="decrement"></button>
                                        <input value="1" readonly="">
                                        <button type="button" class="increment"></button>
                                    </div>
                                    <div class="price"><b>288,600.0</b><span> грн</span></div>
                                </div>

                            </div>

                            <div class="checkout-informer">
                                <div class="content">
                                    <div class="text-xs">До оплати</div>
                                    <div class="price"><b>311,956.00</b><span> грн</span></div>
                                </div>
                                <a class="btn btn-primary" href='./confirmed-order.php'>
                                    <span class="btn-text">підтвердити замовлення</span>
                                    <span class="arr"></span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                
            </div>

        </div>

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