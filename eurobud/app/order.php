<!DOCTYPE html>
<html lang="en">
<head>
    <? include '_top.php';?>
    <title>Eurobud - Order</title>
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

                <h1 class="page-title-md text-center h2 md w-bold">Оформлення замовлення</h1>

                <div class="row justify-content-center">
                    <div class="col-xl-10">

                        <div class="row row-25">
                            <div class="col-lg-6">
                                <form class="form-group order-delivery-form-wr">

                                    <div class="form-group-row">
                                        <div class="label color-secondary w-medium h6">Особисті дані:</div>
                                        <div class="row row-10">
                                            <div class="col-lg-6">
                                                <input type="text" class="input" value="Анатолій">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="text" class="input" value="Бражінський">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="text" class="input" value="Anatoliy@gmail.com">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="text" class="input" value="+38 067 888 99 00">
                                            </div>
                                            <div class="col-lg-12">
                                                <input type="text" class="input" value="ТОзВ «ЕПІЦЕНТР»">
                                            </div>
                                            <div class="col-lg-12">
                                                <textarea class="input" placeholder="Коментар"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group-row">
                                        <div class="label color-secondary w-medium h6">Форма доставки:</div>

                                        <div class="order-delivery-rd">
                                            <label class="checkbox-entry w-regular color-secondary">
                                                <input name="radio1" type="radio">
                                                <span>Самовивіз</span>
                                            </label>
                                            <label class="checkbox-entry w-regular color-secondary">
                                                <input class="order-delivery-input" name="radio1" type="radio" checked>
                                                <span>Адресна доставка*</span>
                                                <i class="order-delivery-des">Якщо це більше 50м3, та обов’язковий заїзд для фури</i>
                                            </label>
                                        </div>
                                        <div class="order-delivery-form">
                                            <div class="row row-10">
                                                <div class="col-lg-6">
                                                    <input type="text" class="input" placeholder="*Область">
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" class="input" placeholder="*Місто">
                                                </div>
                                                <div class="col-lg-9">
                                                    <input type="text" class="input" placeholder="*Вулиця">
                                                </div>
                                                <div class="col-lg-3">
                                                    <input type="text" class="input" placeholder="*№">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="mr-bottom-10">
                                        <div class="label color-secondary w-medium h6">Форма оплати:</div>
                                        <select class="select">
                                            <option>Розр. рахунок фірми</option>
                                            <option> option 1</option>
                                            <option> option 2</option>
                                            <option> option 3</option>
                                        </select>
                                    </div>

                                    <div class="text-center">
                                        <button class="btn btn-primary blue">
                                            <span>ОФОРМИТИ ЗАМОВЛЕННЯ</span>
                                            <span class="anim-border"></span>
                                        </button>
                                    </div>
                                    
                                </form>
                            </div>
                            <div class="col-lg-6">
                            
                                <div class="color-secondary text-sm w-medium mr-bottom-15 text-uppercase">Ваше замовлення</div>
                                
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