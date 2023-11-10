<!DOCTYPE html>
<html lang="en">
<head>
    <? include '_top.php';?>
    <title>Eurobud - Profile</title>
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
                                            <span>Контактна інформація</span>
                                            <i class="icon-arrow"></i>
                                        </div>
                                        <ul>
                                            <li class="active"><a href="./profile.php">Контактна інформація</a></li>
                                            <li><a href="./catalog.php">Каталог</a></li>
                                            <li><a href="./order-history.php">Історія замовлень</a></li>
                                        </ul>
                                    </div>
                                    
                                    <a href="./order.php" class="btn btn-block btn-profile-basket">
                                        <span class="icon">
                                            <svg width="26" height="26" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20.5856 18.4141c-1.7876 0-3.2418 1.4543-3.2418 3.2419 0 1.7875 1.4543 3.2419 3.2418 3.2419 1.7876 0 3.2419-1.4544 3.2419-3.2419 0-1.7876-1.4543-3.2419-3.2419-3.2419zm0 4.5386c-.7151 0-1.2967-.5816-1.2967-1.2967 0-.7152.5816-1.2968 1.2967-1.2968.7152 0 1.2968.5816 1.2968 1.2968 0 .7151-.5816 1.2967-1.2968 1.2967zM25.7933 5.8837a.9712.9712 0 00-.7657-.3732H6.0034L5.128 1.8481a.973.973 0 00-.946-.7465H.9726C.4354 1.1016 0 1.5369 0 2.074s.4354.9726.9726.9726h2.4418l3.1608 13.2256a.9726.9726 0 00.946.7466H22.661a.9723.9723 0 00.944-.7385l2.3667-9.5636a.9744.9744 0 00-.1784-.8331zm-3.8932 9.1902H8.2889L6.4683 7.4557h17.3166l-1.8848 7.6182zM8.82 18.4141c-1.7876 0-3.2419 1.4543-3.2419 3.2419 0 1.7875 1.4544 3.2419 3.242 3.2419 1.7875 0 3.2418-1.4544 3.2418-3.2419 0-1.7876-1.4543-3.2419-3.2419-3.2419zm0 4.5386c-.7151 0-1.2967-.5816-1.2967-1.2967 0-.7152.5816-1.2968 1.2967-1.2968.7152 0 1.2968.5816 1.2968 1.2968 0 .7151-.5816 1.2967-1.2968 1.2967z"/></svg>
                                            <span class="number">5</span>
                                        </span>
                                        <span>1 890 000 грн</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <form class="form-group">

                                    <div class="form-group-row">
                                        <div class="label h6 w-regular">Відповідальна особа</div>
                                        <div class="row row-10">
                                            <div class="col-lg-6">
                                                <input class="input" type="text" placeholder="*Ім’я">
                                            </div>
                                            <div class="col-lg-6">
                                                <input class="input" type="text" placeholder="*Прізвище">
                                            </div>
                                            <div class="col-lg-6">
                                                <input class="input" type="text" placeholder="*E-mail">
                                            </div>
                                            <div class="col-lg-6">
                                                <input class="input" type="text" placeholder="*Номер телефону">
                                            </div>
                                            <div class="col-lg-12">
                                                <input class="input" type="text" placeholder="*Посада">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group-row">
                                        <div class="label h6 w-regular">Дані компанії</div>
                                        <div class="row row-10">
                                            <div class="col-lg-12">
                                                <input class="input" type="text" placeholder="*Юридична адреса">
                                            </div>
                                            <div class="col-lg-6">
                                                <input class="input" type="text" placeholder="*Юридична адреса">
                                            </div>
                                            <div class="col-lg-6">
                                                <input class="input" type="text" placeholder="*Фізична адреса">
                                            </div>
                                            <div class="col-lg-6">
                                                <input class="input" type="text" placeholder="*ЄДРН">
                                            </div>
                                            <div class="col-lg-6">
                                                <input class="input" type="text" placeholder="*Податковий номер">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group-row">
                                        <div class="label h6 w-regular">Адреса доставки</div>
                                        <div class="row row-10">
                                            <div class="col-lg-6">
                                                <input class="input" type="text" placeholder="*Область">
                                            </div>
                                            <div class="col-lg-6">
                                                <input class="input" type="text" placeholder="*Місто">
                                            </div>
                                            <div class="col-lg-10">
                                                <input class="input" type="text" placeholder="*Вулиця">
                                            </div>
                                            <div class="col-lg-2">
                                                <input class="input" type="text" placeholder="*№">
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="label h6 w-regular">Зміна паролю</div>
                                        <div class="row row-10">
                                            <div class="col-lg-12">
                                                <input class="input" type="text" placeholder="*Введіть старий пароль">
                                            </div>
                                            <div class="col-lg-6">
                                                <input class="input" type="password" placeholder="*Введіть новий">
                                            </div>
                                            <div class="col-lg-6">
                                                <input class="input" type="password" placeholder="*Повторінь новий пароль">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="text-center">
                                        <button class="btn btn-primary blue mr-10">
                                            <span>ЗБЕРЕГТИ ЗМІНИ</span>
                                            <span class="anim-border"></span>
                                        </button>
                                    </div>

                                </form>
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