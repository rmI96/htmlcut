<!DOCTYPE html>
<html lang="en">

<head>
    
    <? include '_top.php';?>
	<title>Fruchte Snack - Profile</title>

</head>

<body>

    <div id="loader-wrapper"></div>

    <div id="content-block" data-bg="img/pattern-page.jpg">

        <!-- HEADER -->
        <header class='header'>
            <? include '_header-2.php';?>
        </header>

        <div class='height-wrapper-flex'>
        
        
            <div class='margin-header'></div>

            <div class='section default-pg'>

                <div class="decor-wrapper">
                    <div class="decor right animation"><img src="./img/decor-image-04.png" alt=""></div>
                    <div class="decor left animation"><img src="./img/decor-image-05.png" alt=""></div>
                </div>

                <div class='container-cs'>

                    <div class='text-center title-mr-bt'>
                        <h1 class="decor-title h2">My profile</h1>
                    </div>

                    <div class='row justify-content-center'>
                        <div class='col-xl-5 col-lg-6 col-md-8'>
                            <form class="form">
                                <input type="text" placeholder="Ваше ім’я *" value="John">
                                <input type="text" placeholder="Ваше прізвище *" value="Doe">
                                <input type="email" placeholder="Email *" value="john_doe@email.com">
                                <input type="tel" placeholder="Номер телефону *" value="+38 (067) 555 - 73 - 56">
                                <div class="spacer-lg-15"></div>
                                <label class="checkbox-entry">
                                    <input name="delivery-method" type="checkbox" class="cheked">
                                    <span class="inner">Subscribe to newsletter</span>
                                </label>
                                <div class="spacer-lg-15"></div>
                                <div class='slide-toggle-wrap'>
                                    <div class="btn btn-seo slide-toggle-btn">CHANGE YOUR PASSWORD</div>
                                    <div class='slide-toggle-inner' style='display: none'>
                                        <input type="password" placeholder="Current password *">
                                        <input type="password" placeholder="New password *">
                                        <input type="password" placeholder="Repeat the new password *">
                                    </div>
                                </div>
                                <div class="spacer-lg-15"></div>
                                <div class="btn btn-block btn-primary">
                                    save changes
                                    <input type="submit">
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                
            </div>

            <!-- FOOTER -->
            <footer class='footer'>
                <? include '_footer.php';?>
            </footer>

        </div>

    </div>

    <? include '_bottom.php';?>


</body>
</html>