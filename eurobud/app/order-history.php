<!DOCTYPE html>
<html lang="en">
<head>
    <? include '_top.php';?>
    <title>Eurobud - Order history</title>
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

        <div class="section sp-top sp-bottom-xl">
            <div class="container">

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
                            <div class="col-lg-8">
                                <div class="profile-tabel-wrap w-medium text-sm">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th>№ Замовлення</th>
                                                <th>Дата</th>
                                                <th>Сумма</th>
                                                <th>Статус</th>
                                            </tr>
                                            <tr>
                                                <td><a class="btn btn-7 w-medium text-sm" href="./profile-history-detail.php">№ 345678901</a></td>
                                                <td><span class="w-regular"> 25.05.2020   14:49</span></td>
                                                <td><span class="color-secondary">1710 грн</span></td>
                                                <td><span class="color-yelow">обробляється</span></td>
                                            </tr>
                                            <tr>
                                                <td><a class="btn btn-7 w-medium text-sm" href="./profile-history-detail.php">№ 345678901</a></td>
                                                <td><span class="w-regular"> 25.05.2020   14:49</span></td>
                                                <td><span class="color-secondary">1710 грн</span></td>
                                                <td><span class="color-green">виконано</span></td>
                                            </tr>
                                            <tr>
                                                <td><a class="btn btn-7 w-medium text-sm" href="./profile-history-detail.php">№ 345678901</a></td>
                                                <td><span class="w-regular"> 25.05.2020   14:49</span></td>
                                                <td><span class="color-secondary">1710 грн</span></td>
                                                <td><span class="color-red">обробляється</span></td>
                                            </tr>
                                        </tbody>
                                    </table>

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