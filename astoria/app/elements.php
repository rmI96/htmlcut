<!DOCTYPE html>
<html lang="uk">

<head>
    
    <? include '_top.php';?>
	<title>Astoria</title>

</head>

<body>

    <div id="loader-wrapper"></div>

    <div id="content-block">

        <!-- HEADER -->
        <header class="header">
            <? include '_header.php';?>
        </header>

        <div class='container '>
            <h1>TYPOGRAPHY</h1>
            <div class="spacer-lg-50"></div>
            <h1>AS з 1914 року</h1>
            <h2>Якість з 1914 року</h2>
            <h3>Якість з 1914 року</h3>
            <h4>Якість з 1914 року</h4>
            <h5>Якість з 1914 року</h5>
            <h6>Якість з 1914 року</h6>

            <div class='spacer-lg-50'></div>

            <div class='text color-secondary'>
                <h5>Персонально твій!</h5>
                <p><b> Lorem</b> ipsum dolor sit amet <a href="#"> consectetur</a> adipisicing elit. Quisquam corrupti temporibus quod facilis fuga aperiam, reiciendis in quia praesentium fugiat modi. Perferendis pariatur hic officiis necessitatibus saepe repellendus debitis neque.</p>

                <ul>
                    <li>Після еволюції мого становлення я з нещодавньої виставки вибрала чотири полотна, які мені зовсім не подобалися. Їх перемалювала так, як мені кортіло. </li>
                    <li>Мені здається, що ми всі завжди натхненні, просто нашу музу вбиває невиправдано заклопотана буденність. Тобто правильне питання не як надихнутися, а як відчути музу у собі. Як же? Побути на природі: ти йдеш додому, бачиш багряний захід сонця, який розмальовує небо, і думаєш, який гарний світ.  </li>
                </ul>

                <ol>
                    <li>При малюванні варто розуміти: ти не можеш контролювати весь процес. Моя техніка передбачає приблизно 20% вільної роботи фарби. Буває, що наносиш певну символіку, а матеріал сам ще </li>
                    <li>Після еволюції мого становлення я з нещодавньої виставки вибрала чотири полотна, які мені зовсім не подобалися. Їх перемалювала так, як мені кортіло. У результаті вийшли нові гарні роботи</li>
                </ol>
                <blockquote>
                        Що може бути більш приємним, ніж усамітнитись на одинці із своїми 
                        думками, заглянути в свою душу. 
                </blockquote>
            </div>

            <div class="text-center">
                <h2 class="h2 title-mn">Відгуки наших клієнтів</h2>
            </div>

            <div class='spacer-lg-50'></div>

            <h1>button</h1>
            <div class='spacer-lg-50'></div>

            <button class="btn btn-primary"><span class="point"></span> детальніше про astoria</button>
            <div class='spacer-lg-50'></div>

            <div style='background-color: #111; padding: 50px;'>
                <button class="btn btn-type-two">переглянути відгук
                    <div class="anim-border">
                        <span class="halfCircle leftSide"></span>
                        <span class="halfCircle rightSide"></span>
                    </div>
                </button>
                <div class='spacer-lg-50'></div>
                <button class="btn btn-type-five">

                </button>
            </div>
            <div class='spacer-lg-50'></div>
            <button class="btn btn-type-three">
                <span class="arrow"></span>
                <span class="halfCircle leftSide"></span>
                <span class="halfCircle rightSide"></span>
            </button>
            <div class='spacer-lg-50'></div>

            <button class="btn btn-type-four">показати більше <i class="icon-arrow"></i></button>
            <div class='spacer-lg-50'></div>
            <button class="btn btn-secondary">забронювати номер</button>
            <div class='spacer-lg-50'></div>

            <div class='spacer-lg-50'></div>

            <h1>form elements</h1>
            <div class='spacer-lg-50'></div>
            <form class='form'>
                <div class="row">
                    <div class="col-lg-6">
                        <select>
                            <option>Оберіть департамент</option>
                            <option>Маркетинг</option>
                            <option>Постачання</option>
                        </select>
                    </div>
                    <div class="col-lg-6">
                        <input type="text" placeholder="Тема повідомлення">
                    </div>
                    <div class="col-lg-6"><input type="text" placeholder="Ваш e-mail"></div>
                    <div class="col-lg-6"><input type="text" placeholder="Ваш e-mail"></div>
                    <div class="col-lg-12"><textarea placeholder="Ваш коментар"></textarea></div>
                    <div class="col-lg-12"><input class="btn-secondary" type="submit" value='надіслати'></div>
                </div>
            </form>
        </div>

        



        <!-- FOOTER -->
        <footer class="footer">
            <? include '_footer.php';?>
        </footer>

    </div>

    <? include '_bottom.php';?>


</body>
</html>