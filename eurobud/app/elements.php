<!DOCTYPE html>
<html lang="pl">
<head>
    <? include '_top.php';?>
    <title>Elements</title>

    <style type="text/css">
        .el-block {
            margin: 50px 0;
        }
        .el-title {
            font-family: 'Cormorant Garamond', serif;
            font-size: 30px;
            color: #2B2B2B;
            font-weight: 700;
            margin-bottom: 20px;
            border-bottom: 2px solid #2B2B2B;
            line-height: 1.5;
        }
    </style>
</head>
<body>
<!-- LOADER -->
<div id="loader-wrapper"></div>

<div id="content-block">
    <!-- HEADER -->
    <header class="header">
        <? include '_header.php';?>
    </header>



    <!-- MAIN CONTENT -->
    <main class="content elements-page">
        <div class="spacer-header"></div>


        <div class="container" style="max-width: 900px">
            <div class="el-block">
                <div class="el-title">Buttons</div>

                <div style="background-color: #000000; padding: 15px">
                    <a href="#" class="btn btn-primary white">
                        <span>primary</span>
                        <span class="anim-border"></span>
                    </a>
                </div>

                <div class="spacer-xl-10"></div>
                <div class="spacer-xl-10"></div>

                <a href="#" class="btn btn-primary blue">
                    <span>primary</span>
                    <span class="anim-border"></span>
                </a>

                <div class="spacer-xl-10"></div>

                <button class="btn btn-secondary"><span>secondary</span></button>

                <div class="spacer-xl-10"></div>

                <div class="arrow-btn left">
                    <div class="arrow"></div>
                </div>
                <div class="arrow-btn right">
                    <div class="arrow"></div>
                </div>

                <div class="spacer-xl-10"></div>

                <a href="#" class="btn-3">
                    <span>ВСІ ТОВАРИ</span>
                    <span class="arrow"></span>
                </a>

                <div class="spacer-xl-10"></div>

                <div class="social-list">
                    <a href="https://www.youtube.com/" class="social-link" target="_blank" rel="nofollow">
                        <svg width="22" height="22" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 110 76.419998">
                            <path d="m 55,6.5 c 0.23,0 22.92,0 37.9,1.08 l 0.66,0.06 c 2,0.18 4.16,0.39 6.28,2.58 v 0 0 c 1,1 2.14,4.54 2.53,7.07 a 156,156 0 0 1 1,16.71 v 8.24 a 156.82,156.82 0 0 1 -1,16.72 c -0.37,2.47 -1.54,6.06 -2.52,7 v 0 0 c -2.11,2.18 -4.32,2.39 -6.27,2.58 l -0.68,0.07 c -14.72,1 -36.89,1.1 -37.89,1.1 -1.15,0 -28,-0.27 -36.57,-1 -0.51,-0.08 -1,-0.15 -1.58,-0.21 -2.28,-0.27 -4.87,-0.58 -6.73,-2.51 v 0 0 c -1,-1 -2.14,-4.53 -2.52,-7.05 a 156,156 0 0 1 -1,-16.71 v -8.16 a 156.79,156.79 0 0 1 1,-16.71 C 8,14.81 9.16,11.27 10.14,10.29 v 0 0 C 12.26,8.1 14.47,7.9 16.42,7.71 L 17.08,7.65 C 32.08,6.58 54.75,6.57 54.97,6.57 H 55 m 0,-6.5 v 0 c 0,0 -23.09,0 -38.48,1.1 C 14.37,1.42 9.69,1.44 5.52,5.76 2.23,9.06 1.15,16.55 1.15,16.55 A 162.25,162.25 0 0 0 0,34.07 v 8.24 A 162.19,162.19 0 0 0 1.1,59.9 c 0,0 1.07,7.49 4.37,10.78 4.19,4.32 9.68,4.19 12.13,4.65 8.8,0.83 37.4,1.09 37.4,1.09 0,0 23.11,0 38.51,-1.13 2.15,-0.25 6.84,-0.28 11,-4.6 3.29,-3.29 4.37,-10.78 4.37,-10.78 A 162.26,162.26 0 0 0 110,42.32 v -8.24 a 162.27,162.27 0 0 0 -1.1,-17.59 c 0,0 -1.07,-7.49 -4.37,-10.79 C 100.35,1.38 95.66,1.35 93.53,1.11 78.11,0 55,0 55,0 Z"></path>
                            <polygon transform="translate(-9,-25.79)" points="82.12,64 54.13,47.61 54.13,80.39"></polygon>
                        </svg>
                    </a>
                    <a href="https://www.facebook.com/" class="social-link" target="_blank" rel="nofollow">
                        <svg width="8" height="16" viewBox="0 0 8 16" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 5.5V3.5C5 2.948 5.448 2.5 6 2.5H7V0H5C3.343 0 2 1.343 2 3V5.5H0V8H2V16H5V8H7L8 5.5H5Z"></path>
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/" class="social-link" target="_blank" rel="nofollow">
                        <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 0H5C2.239 0 0 2.239 0 5V11C0 13.761 2.239 16 5 16H11C13.761 16 16 13.761 16 11V5C16 2.239 13.761 0 11 0ZM14.5 11C14.5 12.93 12.93 14.5 11 14.5H5C3.07 14.5 1.5 12.93 1.5 11V5C1.5 3.07 3.07 1.5 5 1.5H11C12.93 1.5 14.5 3.07 14.5 5V11Z"></path>
                            <path d="M8 4C5.791 4 4 5.791 4 8C4 10.209 5.791 12 8 12C10.209 12 12 10.209 12 8C12 5.791 10.209 4 8 4ZM8 10.5C6.622 10.5 5.5 9.378 5.5 8C5.5 6.621 6.622 5.5 8 5.5C9.378 5.5 10.5 6.621 10.5 8C10.5 9.378 9.378 10.5 8 10.5Z"></path>
                            <path d="M11.8 4.6C12.2418 4.6 12.6 4.24183 12.6 3.8C12.6 3.35817 12.2418 3 11.8 3C11.3582 3 11 3.35817 11 3.8C11 4.24183 11.3582 4.6 11.8 4.6Z"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="el-block">
                <div class="el-title">Form</div>

                <div class="form">
                    <form>
                        <input type="text" class="input" placeholder="Ваше ім’я" required>

                        <input type="text" class="input half-width invalid" placeholder="Ваш e-mail" required>

                        <input type="text" class="input half-width" placeholder="Ваш телефон" required>

                        <textarea class="input" placeholder="Ваше повідомлення"></textarea>

                        <div class="text-center">
                            <div class="btn btn-primary blue">
                                <input type="submit">
                                <span>НАДІСЛАТИ</span>
                                <span class="anim-border"></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="el-block">
                <div class="el-title">Swiper</div>
                <div class="swiper-entry swiper-custom">
                    <div class="swiper-container"
                         data-options='{"watchSlidesVisibility":true}'
                    >
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" style="height: 180px; background: #2B2B2B;">Slide 1</div>
                            <div class="swiper-slide" style="height: 180px; background: #2B2B2B;">Slide 2</div>
                            <div class="swiper-slide" style="height: 180px; background: #2B2B2B;">Slide 3</div>
                            <div class="swiper-slide" style="height: 180px; background: #2B2B2B;">Slide 4</div>
                        </div>
                        <div class="swiper-pagination style01"></div>
                    </div>

                    <div class="swiper-button-prev style01"></div>
                    <div class="swiper-button-next style01"></div>
                </div>

                <div class="spacer-xl-10"></div>

                <div class="swiper-entry swiper-custom">
                    <div class="swiper-container"
                         data-options='{"watchSlidesVisibility":true}'
                    >
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" style="height: 180px; background: #FFFFFF;">Slide 1</div>
                            <div class="swiper-slide" style="height: 180px; background: #FFFFFF;">Slide 2</div>
                            <div class="swiper-slide" style="height: 180px; background: #FFFFFF;">Slide 3</div>
                            <div class="swiper-slide" style="height: 180px; background: #FFFFFF;">Slide 4</div>
                        </div>
                        <div class="swiper-pagination style02"></div>
                    </div>

                    <div class="swiper-button-prev style02"></div>
                    <div class="swiper-button-next style02"></div>
                </div>
            </div>

            <div class="el-block">
                <div class="el-title">Typography</div>

                <div class="subtitle">subtitle</div>

                <div class="text">
                    <h1>Heading 1 <b>74px</b></h1>
                    <h2>Heading 2 <b>60px</b></h2>
                    <h3>Heading 3 <b>38px</b></h3>
                    <h4>Heading 4 <b>28px</b></h4>
                    <h5>Heading 5 <b>22px</b></h5>
                    <h6>Heading 6 <b>18px</b></h6>

                    <p>Lorem ipsum dolor sit amet, consectetur <a href="#">adipisicing</a> elit. Ab atque commodi eligendi et eum eveniet expedita fuga iste nulla rem soluta, tempora tempore. Dolorum ex exercitationem expedita facilis porro quam?</p>

                    <img src="img/preloader.jpg" data-i-src="img/banner-img-01.jpg" alt="">

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab atque commodi eligendi et eum eveniet expedita fuga iste nulla rem soluta, tempora tempore. Dolorum ex exercitationem expedita facilis porro quam?</p>

                    <iframe src="https://www.youtube.com/embed/668nUCeBHyY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab atque commodi eligendi et eum eveniet expedita fuga iste nulla rem soluta, tempora tempore. Dolorum ex exercitationem expedita facilis porro quam?</p>
                    <ul>
                        <li>List item one
                            <ul>
                                <li>List item one</li>
                                <li>List item two</li>
                                <li>List item three</li>
                                <li>List item four</li>
                            </ul>
                        </li>
                        <li>List item two</li>
                        <li>List item three</li>
                        <li>List item four</li>
                    </ul>
                    <ol>
                        <li>List item one
                            <ol>
                                <li>List item one</li>
                                <li>List item two</li>
                                <li>List item three</li>
                                <li>List item four</li>
                            </ol>
                        </li>
                        <li>List item two</li>
                        <li>List item three</li>
                        <li>List item four</li>
                    </ol>

                    <p><strong>Strong tag</strong> <i>Italic tag</i></p>

                    <blockquote>A startup company or startup is a company or temporary organization designed to search for a repeatable and scalable business model.</blockquote>

                    <table>
                        <thead>
                        <tr>
                            <th>Employee</th>
                            <th>Salary</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><a href="#">John Doe</a></td>
                            <td>$1</td>
                            <td>Because that's all Steve Jobs needed for a salary.</td>
                        </tr>
                        <tr>
                            <td><a href="#">Jane Doe</a></td>
                            <td>$100K</td>
                            <td>For all the blogging she does.</td>
                        </tr>
                        <tr>
                            <td><a href="#">Fred Bloggs</a></td>
                            <td>$100M</td>
                            <td>Pictures are worth a thousand words, right? So Jane x 1,000.</td>
                        </tr>
                        <tr>
                            <td><a href="#">Jane Bloggs</a></td>
                            <td>$100B</td>
                            <td>With hair like that?! Enough said...</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="el-block">
                <div class="el-title">Accordeon</div>
                <div class="acc-item style01">
                    <div class="acc-head">
                        <div class="caption">Як правильно обрати піноспласт?</div>
                        <div class="arrow">
                            <svg width="18" height="10" viewBox="0 0 18 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L9.25806 9L17 1" stroke-width="1.3"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="acc-body">Пінопласт виготовлений методом спінювання гранул полістиролу, формування у блокиПінопласт виготовлений методом спінювання гранул полістиролу, формування у блокиПінопласт виготовлений методом спінювання гранул полістиролу, формування у блоки</div>
                </div>
                <div class="acc-item style01">
                    <div class="acc-head">
                        <div class="caption">Чим утеплити будинок? Що був ефект від утеплення?</div>
                        <div class="arrow">
                            <svg width="18" height="10" viewBox="0 0 18 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L9.25806 9L17 1" stroke-width="1.3"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="acc-body">Пінопласт виготовлений методом спінювання гранул полістиролу, формування у блоки</div>
                </div>
                <div class="acc-item style01">
                    <div class="acc-head">
                        <div class="caption">Як правильно обрати піноспласт?</div>
                        <div class="arrow">
                            <svg width="18" height="10" viewBox="0 0 18 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L9.25806 9L17 1" stroke-width="1.3"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="acc-body">Пінопласт виготовлений методом спінювання гранул полістиролу, формування у блоки</div>
                </div>
            </div>
        </div>
    </main>

    <!-- FOOTER -->
    <footer class="footer">
        <? include '_footer.php';?>
    </footer>
</div>

<? include '_bottom.php';?>
</body>
</html>