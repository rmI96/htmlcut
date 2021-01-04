<!DOCTYPE html>
<html lang="en">
<head>
    <? include '_top.php';?>
    <title>Eurobud - Search results</title>  
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

        <div class="section sp-top-sm sp-bottom-xl">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-xl-10">

                        <div class="w-bold h2 md text-center page-title-md">Результати пошуку</div>

                       <div class="row">
                           <div class="col-xl-4 col-lg-3">
                            <div class="search-results-filter">
                                <div class="w-medium color-secondary title">категорії</div>
                                <label class="checkbox-entry">
                                    <input type="checkbox">
                                    <span>Продукція</span>
                                </label>
                                <label class="checkbox-entry">
                                    <input type="checkbox" checked>
                                    <span>Проекти</span>
                                </label>
                                <label class="checkbox-entry">
                                    <input type="checkbox">
                                    <span>Блог</span>
                                </label>
                                <label class="checkbox-entry">
                                    <input type="checkbox">
                                    <span>Корисна інформація</span>
                                </label>
                            </div>
                           </div>
                           <div class="col-xl-8 col-lg-9">
                               <form class="search-results-form">
                                    <button class="icon">
                                        <svg width="18" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="8.18181" cy="8.18196" r="7.18181" transform="rotate(-90 8.18181 8.18196)" stroke-width="2"></circle>
                                            <line x1="13.7227" y1="13.475" x2="19.5408" y2="19.2931" stroke-width="2"></line>
                                        </svg>
                                    </button>
                                    <input type="search" class="input-search" placeholder="Пошук" value="Пінопласт">
                               </form>
                               <div class="search-results-val">Результатів пошуку: <span class="w-medium color-secondary">12</span></div>

                               <div class="thumbnail-search">
                                   <a class="image" href="./news-detail.php">
                                      <img src="./img/image-0088-01.jpg" alt="image"> 
                                   </a>
                                   <a class="title h6 w-medium" href="./news-detail.php">Як обрати марку металочерепиці?</a>
                               </div>

                               <div class="thumbnail-search">
                                   <a class="image" href="./news-detail.php">
                                      <img src="./img/image-0088-02.jpg" alt="image"> 
                                   </a>
                                   <a class="title h6 w-medium" href="./news-detail.php">Порівняти пінопласту ПСБ-С-50 від Євробуд з іншими типами утеплювачів</a>
                               </div>

                               <div class="thumbnail-search">
                                   <a class="image" href="./news-detail.php">
                                      <img src="./img/image-0088-03.jpg" alt="image"> 
                                   </a>
                                   <a class="title h6 w-medium" href="./news-detail.php">Як обрати марку металочерепиці?</a>
                               </div>

                               <ul class="pagination">
                                    <li class="prev deactive"><a href="#" class="arrow-btn left"><i class="arrow"></i></a></li>
                                    <li><a href="#">1</a></li>
                                    <li>...</li>
                                    <li><a href="#">5</a></li>
                                    <li class="active"><a href="#">6</a></li>
                                    <li><a href="#">7</a></li>
                                    <li>...</li>
                                    <li><a href="#">13</a></li>
                                    <li class="next"><a href="#" class="arrow-btn right"><i class="arrow"></i></a></li>
                                </ul>
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