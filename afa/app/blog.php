<!DOCTYPE html>
<html lang="en">

<head>

    <? include 'inc/_top.php';?>
	<title>AFA - Блог</title>

</head>

<body>
    <div id="loader-wrapper"></div>
    <div id="content-block">

        <!-- HEADER -->
        <header class='header'>
            <? include 'inc/_header.php';?>
        </header>
        <div class="breadcrumbs">
            <div class="container-cs">
                <ul class="breadcrumbs-inner">
                   <li><a href="./index.php">Головна</a> <i class="icon-arrow"></i></li>
                    <li><a href="./blog.php">Блог</a> <i class="icon-arrow"></i></li>
                </ul>
            </div>
        </div>
        <div class="section sp-pt-60">
            <div class="container-cs md">
                <div class="row justify-content-end">
                    <div class="col-lg-8">
                        <div class="simple-content h4">
                            <p>Інформаційне середовище AFA – відео, статті, новини та івенти компанії – ви знайдете на цій сторінці</p>
                            <p>Давайте знайомитись, спілкуватись, обмінюватись думками</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section sp-pt-160 sp-pt-xl-80 sp-pt-sm-60">
            <div class="container-cs md">
                <div class="sp-mb-40 sp-mb-lg-24">
                    <ul class="blog-categories">
                        <li><a href="#" title="інвестиціїї">інвестиціїї</a></li>
                        <li><a href="#" title="Бізнес">Бізнес</a></li>
                        <li class="active"><a href="#" title="довіра">довіра</a></li>
                        <li><a href="#" title="кредит">кредит</a></li>
                        <li><a href="#" title="простими словами">простими словами</a></li>
                        <li><a href="#" title="власний досвід">власний досвід</a></li>
                        <li><a href="#" title="Фонд">Фонд</a></li>
                        <li><a href="#" title="Команда">Команда</a></li>
                        <li><a href="#" title="Ідеї">Ідеї</a></li>
                        <li><a href="#" title="Гроші">Гроші</a></li>
                        <li><a href="#" title="мистецтво">мистецтво</a></li>
                        <li><a href="#" title="законодавство">законодавство</a></li>
                    </ul>
                </div>
                <div class="blog-filters">
                    <div class="item">
                        <div class="dropdown">
                            <div class="dropdown-layer"></div>
                            <div class="dropdown-inner">Автор</div>
                            <ul class="dropdown-list">
                                <li>
                                    <label class="checkbox-entry">
                                        <input type="checkbox"><span></span>
                                        Костянтин Костянтинопольський
                                    </label>
                                </li>
                                <li>
                                    <label class="checkbox-entry">
                                        <input type="checkbox"><span></span>
                                        Юрій Прус
                                    </label>
                                </li>
                                <li>
                                    <label class="checkbox-entry">
                                        <input type="checkbox"><span></span>
                                        Оксана Баланівська
                                    </label>
                                </li>
                                <li>
                                    <label class="checkbox-entry">
                                        <input type="checkbox"><span></span>
                                        Ганна Павлюк
                                    </label>
                                </li>
                                <li>
                                    <label class="checkbox-entry">
                                        <input type="checkbox"><span></span>
                                        Наталія Коновал
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="select-choice_wrapper">
                            <select class="select-choice" data-options='{"itemSelectText": "", "searchEnabled":false}'>
                                <option placeholder>Медіа</option>
                                <option>
                                    option 1
                                </option>
                                <option>
                                    option 2
                                </option>
                                <option>
                                    option 3
                                </option>
                                <option>
                                    option 4
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="item">
                        <div class="select-choice_wrapper">
                            <select class="select-choice" data-options='{"itemSelectText": "", "searchEnabled":false}'>
                                <option>Останні</option>
                                <option>
                                    option 2
                                </option>
                                <option>
                                    option 3
                                </option>
                                <option>
                                    option 4
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="item">
                        <div class="btn-wrapper-hover">
                            <button class="btn btn-secondary btn-block"><span class="icon"><svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19 6.41 17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41Z" fill="#FF0000"/></svg></span> <span class="text-in">скинути</span></button>
                            <button class="btn btn-secondary full green btn-block"><span class="icon"><svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 16.2 4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2Z" fill="#009688"/></svg></span> <span class="text-in">done</span></button>
                        </div>
                    </div>
                </div>
                <div class="sp-mb-15 text-lg">Знайдено 10 матеріалів:</div>
                <div class="sp-mb-60 sp-mb-xl-40">
                    <div class="badge-wrapper blog-selected">
                        <div class="badge">кредит <button class="btn btn-close"></button></div>
                        <div class="badge">точка зору <button class="btn btn-close"></button></div>
                        <div class="badge">законодавство <button class="btn btn-close"></button></div>
                    </div>
                </div>
                <div class="thumbnail_2-wrapper sp-mb-80 sp-mb-lg-60">
                    <div class="thumbnail_2">
                        <a class="image" href="./content-page.php">
                            <div class="bg" style="background-image: url('./img/image-news-01.jpg')"></div>
                        </a>
                        <div class="content">
                            <div class="info info-mob">20.05.21 | <a href="#" class="btn btn-link blue sm">Юрій Прус</a></div>
                            <div class="thumbnail_2-head">
                                <span class="icon"><img src="./img/icon-logo-039.png" alt="icon"></span>
                                <div class="thumbnail_2-head-content">
                                    <div class="info info-des">20.05.21 | <a href="#" class="btn btn-link blue sm">Юрій Прус</a></div>
                                    <a href="./content-page.php" class="title h4 fw-500 btn btn-link blue">Що зміниться на ринку землі з 1 липня 2021 року</a>
                                </div>
                            </div>
                            <div class="text text-in">
                                Р2Р розшифровується як «peer-to-peer» або «person-to-person», що в перекладі означає «від рівного до рівного» або «від людини до людини». Тобто, P2P кредит — це рівноправна позика, яка працює в форматі «від людини до людини». P2P платформи є альтернативою фінансовим компаніям і інвесторам. Р2Р кредитування — це механізм запозичення грошей між фізичними особами в рамках спеціальних онлайн-майданчиків. Онлайн-платформи акумулюють...
                            </div>
                            <div class="tegs">
                                <a href="#" class="btn btn-link md blue">#Кредит</a>
                                <a href="#" class="btn btn-link md blue">#Простими словами</a>
                                <a href="#" class="btn btn-link md blue">#власний досвід</a>
                            </div>
                        </div>
                    </div>
                    <div class="thumbnail_2">
                        <a class="image" href="./content-page.php">
                            <div class="bg" style="background-image: url('./img/image-news-02.jpg')"></div>
                        </a>
                        <div class="content">
                            <div class="info info-mob">20.05.21 | <a href="#" class="btn btn-link blue sm">Оксана Баланівська</a></div>
                            <div class="thumbnail_2-head">
                                <span class="icon"><img src="./img/icon-logo-039.png" alt="icon"></span>
                                <div class="thumbnail_2-head-content">
                                    <div class="info info-des">20.05.21 | <a href="#" class="btn btn-link blue sm">Оксана Баланівська</a></div>
                                    <a href="./content-page.php" class="title h4 fw-500 btn btn-link blue">Накопичувати vs інвестувати: куди варто вкладати мінімальні гроші?</a>
                                </div>
                            </div>
                            <div class="text text-in">
                                Р2Р розшифровується як «peer-to-peer» або «person-to-person», що в перекладі означає «від рівного до рівного» або «від людини до людини». Тобто, P2P кредит — це рівноправна позика, яка...                        </div>
                            <div class="tegs">
                                <a href="#" class="btn btn-link md blue">#Кредит</a>
                                <a href="#" class="btn btn-link md blue">#Простими словами</a>
                                <a href="#" class="btn btn-link md blue">#власний досвід</a>
                            </div>
                        </div>
                    </div>
                    <div class="thumbnail_2 text-in-offset-1">
                        <a class="image" href="./content-page.php">
                            <div class="bg" style="background-image: url('./img/image-news-01.jpg')"></div>
                        </a>
                        <div class="content">
                            <div class="info info-mob">20.05.21 | <a href="#" class="btn btn-link blue sm">Юрій Прус</a></div>
                            <div class="thumbnail_2-head">
                                <div class="thumbnail_2-head-content">
                                    <div class="info info-des">15.10.21 | 15:00 |БЦ «Парус»</div>
                                    <a href="./content-page.php" class="title h4 fw-500 btn btn-link blue">Що зміниться на ринку землі з 1 липня 2021 року</a>
                                </div>
                            </div>
                            <div class="text text-in">
                                Р2Р розшифровується як «peer-to-peer» або «person-to-person», що в перекладі означає «від рівного до рівного» або «від людини до людини». Тобто, P2P кредит — це рівноправна позика, яка працює в форматі «від людини до людини». P2P платформи є альтернативою фінансовим компаніям і інвесторам. Р2Р кредитування — це механізм запозичення грошей між фізичними особами в рамках спеціальних онлайн-майданчиків. Онлайн-платформи акумулюють...
                            </div>
                            <div class="tegs">
                                <a href="#" class="btn btn-link md blue">#Кредит</a>
                                <a href="#" class="btn btn-link md blue">#Простими словами</a>
                                <a href="#" class="btn btn-link md blue">#власний досвід</a>
                            </div>
                        </div>
                    </div>
                    <div class="thumbnail_2 text-in-offset-2">
                        <a class="image" href="./content-page.php">
                            <div class="bg" style="background-image: url('./img/image-news-01.jpg')"></div>
                        </a>
                        <div class="content">
                            <div class="info info-mob">20.05.21 | <a href="#" class="btn btn-link blue sm">Юрій Прус</a></div>
                            <div class="thumbnail_2-head">
                                <span class="icon"><img src="./img/icon-logo-039.png" alt="icon"></span>
                                <div class="thumbnail_2-head-content">
                                    <div class="info info-des">20.05.21 | <a href="#" class="btn btn-link blue sm">Юрій Прус</a></div>
                                    <a href="./content-page.php" class="title h4 fw-500 btn btn-link blue">Що зміниться на ринку землі з 1 липня 2021 року</a>
                                </div>
                            </div>
                            <div class="text text-in">
                                Р2Р розшифровується як «peer-to-peer» або «person-to-person», що в перекладі означає «від рівного до рівного» або «від людини до людини». Тобто, P2P кредит — це рівноправна позика, яка працює в форматі «від людини до людини». P2P платформи є альтернативою фінансовим компаніям і інвесторам. Р2Р кредитування — це механізм запозичення грошей між фізичними особами в рамках спеціальних онлайн-майданчиків. Онлайн-платформи акумулюють...
                            </div>
                            <div class="tegs">
                                <a href="#" class="btn btn-link md blue">#Кредит</a>
                                <a href="#" class="btn btn-link md blue">#Простими словами</a>
                                <a href="#" class="btn btn-link md blue">#власний досвід</a>
                            </div>
                        </div>
                    </div>
                    <div class="thumbnail_2 text-in-offset-3">
                        <a class="image" href="./content-page.php">
                            <div class="bg" style="background-image: url('./img/image-news-01.jpg')"></div>
                        </a>
                        <div class="content">
                            <div class="info info-mob">20.05.21 | <a href="#" class="btn btn-link blue sm">Юрій Прус</a></div>
                            <div class="thumbnail_2-head">
                                <div class="thumbnail_2-head-content">
                                    <div class="info info-des">15.10.21 | 15:00 |БЦ «Парус»</div>
                                    <a href="./content-page.php" class="title h4 fw-500 btn btn-link blue">Що зміниться на ринку землі з 1 липня 2021 року</a>
                                </div>
                            </div>
                            <div class="text text-in">
                                Р2Р розшифровується як «peer-to-peer» або «person-to-person», що в перекладі означає «від рівного до рівного» або «від людини до людини». Тобто, P2P кредит — це рівноправна позика, яка працює в форматі «від людини до людини». P2P платформи є альтернативою фінансовим компаніям і інвесторам. Р2Р кредитування — це механізм запозичення грошей між фізичними особами в рамках спеціальних онлайн-майданчиків. Онлайн-платформи акумулюють...
                            </div>
                            <div class="tegs">
                                <a href="#" class="btn btn-link md blue">#Кредит</a>
                                <a href="#" class="btn btn-link md blue">#Простими словами</a>
                                <a href="#" class="btn btn-link md blue">#власний досвід</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center sp-mb-80 sp-mb-lg-60">
                    <button class="btn btn-primary xl btn-sm-block">Завантажити ще</button>
                </div>
                <ul class="pagination">
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li>
                        ...
                    </li>
                    <li><a href="#">8</a></li>
                </ul>
            </div>
        </div>
        <div class="section sp-pt-160 sp-pb-240 sp-pt-md-100 sp-pb-md-160 sp-pt-sm-80">
            <div class="container-cs md">
                <div class="sp-mb-20">Отримуйте унікальний контент, авторські матеріали, запрошення на закриті івенти</div>
                <div class="subscribe-wrapper">
                    <input class="input" type="text" placeholder="E-mail">
                    <button class="btn btn-primary">Підписатися</button>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <footer class='footer'>
            <? include 'inc/_footer.php';?>
        </footer>

    </div>

    <? include 'inc/_bottom.php';?>

</body>
</html>
