<!DOCTYPE html>
<html lang="en">
<head>
    <? include '_top.php';?>
    <title>Eurobud - 404</title>
</head>
<body>
<!-- LOADER -->
<div id="loader-wrapper"></div>

<div id="content-block">
    <!-- HEADER -->
    <header class="header without-banner">
        <? include '_header.php';?>
    </header>

    <!-- MAIN CONTENT -->
    <main class="content">
        <div class="spacer-header"></div>

        <div class="not-found-page text-center">
          <div class="container">
            <div class="not-found-page-svg">
                <svg xmlns="http://www.w3.org/2000/svg" width="350" height="155" viewBox="0 0 350 142">
                  <text x="0" y="142"><tspan>404</tspan></text>
                </svg>
            </div>
            <div class="h4 w-medium not-found-page-title">Нажаль , такої сторінки не існує</div>
            <div class="not-found-page-des">Вибачте, але сторінка, яку ви шукали неіснує. Пропонуємо перейти на головну сторінку</div>
            <div>
              <a href="./index.php" class="btn btn-primary blue">
                <span>НА ГОЛОВНУ</span>
                <span class="anim-border"></span>
              </a>
            </div>
            
          </div>
        </div>

    </main>

    <!-- FOOTER -->
    <footer class="footer">
        <? include '_footer.php';?>
    </footer>

    <div class="wrapper-right-bt">
        <a href="./compare.php" class="compare-btn">
            <span class="number">1</span>
            <span class="icon">
                <img src="./img/icon-compare.svg" alt="">
            </span>
        </a>
        <a href="./calculator.php" class="calculator">
            <div class="icon">
                <img src="img/calculator.svg" data-i-src="img/calculator.svg" alt="" class="imgLoaded">
            </div>
            <div class="text">калькулято</div>
        </a>
    </div>

    <!-- <div class="cookie-message">
        <div class="cookie-message__inner">
            <div class="text">Перегляньте нашу <a href="#">Політику</a> щодо файлів cookie, щоб дізнатися більше.</div>
            <div class="btn-close style02"></div>
        </div>
    </div> -->

</div>

<!-- POPUPS -->
<div class="popup-wrapper">
    <div class="bg-layer"></div>
    <? include '_popups.php';?>
</div>

<? include '_bottom.php';?>
</body>
</html>