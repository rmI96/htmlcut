<!DOCTYPE html>
<html lang="en">
<head>
    <? include '_top.php';?>
    <title>Eurobud - Order history detail</title>
</head>
<body>
<!-- LOADER -->
<div id="loader-wrapper"></div>

<div id="content-block">
    <!-- HEADER -->
    <header class="header without-banner">
        <? include '_header-02.php';?>
    </header>

    <!-- MAIN CONTENT -->
    <main class="content">
        <div class="spacer-header"></div>

        <div class="section sp-top-bc sp-bottom-xl">
            <div class="container">
                <a class="breadcrumbs-back" href="#">
                    <i class="icon-arrow"></i>
                    <span>назад</span>
                </a>


                <div class="row justify-content-center">
                    <div class="col-xl-9">

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="profile-right-nav">

                                    <div class="profile-menu">
                                        <div class="profile-menu-title">
                                            <span>Історія замовлень</span>
                                            <i class="icon-arrow"></i>
                                        </div>
                                        <ul>
                                            <li><a href="./profile.php">Контактна інформація</a></li>
                                            <li><a href="./catalog.php">Каталог</a></li>
                                            <li class="active"><a href="./order-history.php">Історія замовлень</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-7">

                                <div class="profile-top-info text-sm">
                                    <span class="left-in color-blue w-medium">№ 345678901</span>
                                    <span class="w-regular">25.05.2020   14:49</span>
                                    <span class="right-in color-green w-medium">виконано</span>
                                </div>
                                
                                <div class="tbumb-pr-history-wrap">
                                
                                    <div class="tbumb-pr-history">
                                        <a href="./product-detail.php" class="image">
                                            <img src="./img/category-01.png" alt="image">
                                        </a>
                                        <div class="info">
                                            <a href="./product-detail.php" class="name color-secondary w-medium">Добрий пінопласт ПСБ-С-25</a>
                                            <div class="des text-sm w-regular">
                                                Товщина <span    class="color-secondary">10см</span>; Розмір плит   <span class="color-secondary">0.5м</span>; Тип <span class="color-secondary">фрезований</span>
                                            </div>
                                            <div class="info-bottom">
                                                <span class="w-medium text-sm">389 грн/м<sub>2</sub> x 489 м<sub>2</sub></span>
                                                <span class="w-medium color-blue price-in">190 221 грн</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tbumb-pr-history">
                                        <a href="./product-detail.php" class="image">
                                            <img src="./img/category-01.png" alt="image">
                                        </a>
                                        <div class="info">
                                            <a href="./product-detail.php" class="name color-secondary w-medium">Добрий пінопласт ПСБ-С-25</a>
                                            <div class="des text-sm w-regular">
                                                Товщина <span class="color-secondary">10см</span>; Розмір плит   <span class="color-secondary">0.5м</span>; Тип <span class="color-secondary">фрезований</span>
                                            </div>
                                            <div class="info-bottom">
                                                <span class="w-medium text-sm">389 грн/м<sub>2</sub> x 489 м<sub>2</sub></span>
                                                <span class="w-medium color-blue price-in">190 221 грн</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="profile-price-info">
                                    <span class="label color-secondary w-regular">Загальна сума:</span>
                                    <span class="h5 color-blue w-medium">191 171 грн</span>
                                </div>

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
            <div class="text">калькулято</div>
        </a>
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