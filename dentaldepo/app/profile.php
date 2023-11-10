<!DOCTYPE html>
<html lang="uk">
<head>
    <?php include 'inc/_top.php'; ?>
    <title>DENTAL DEPO - My profile</title>

    <?php include 'inc/_noscript-top.php'; ?>
</head>
<body>
<div id="content-block">

  <div id="loader-wrapper"></div>

    <!-- HEADER -->
    <header class="header b-shadow">
        <?php include 'inc/_header-2.php'; ?>
    </header>

    <main>
      
      <div class="section pd-top pd-bottom-lg profile-page">
        <div class="container anime">

          <div class="text-center title-mr-bt">
              
            <h1 class="h1 inline-title" style="position: relative">
                <b class="anime-title-inner"><span class="color-secondary">Мій </span>кабінет</b>
                <b aria-hidden="true">
                    <svg class="title-svg" version="1.1" viewBox="0 0 100 100" width="100%" height="100%" preserveAspectRatio="xMinYMid meet">
                        <text x="0" y="76" stroke-width="1" text-anchor="start">
                           <tspan class="color-secondary">Мій </tspan><tspan>кабінет</tspan>
                        </text>
                    </svg>
                </b>
            </h1>

          </div>

          <div class="row justify-content-center">
              <div class="col-xl-5 col-lg-6 col-md-8">
                  <form class="form-group">
                      <input class="input" type="text" placeholder="Ваше ім’я *" value="John">
                      <input class="input" type="text" placeholder="Ваше прізвище *" value="Doe">
                      <input class="input" type="email" placeholder="Email *" value="john_doe@email.com">
                      <input class="input inputmask" data-inputmask="'mask': '+38 (999)-999-99-99'" data-inputmask-placeholder="x" value="+38 (067) 555 - 73 - 56">
                      <label class="checkbox-entry">
                          <input name="delivery-method" type="checkbox" class="cheked">
                          <span class="inner">Підписатися на розсилку</span>
                      </label>
                      
                      <div class="slide-wrapper">
                        <div class="btn-seo slide-btn" style=""> ЗМІНИТИ ПАРОЛЬ <i class="icon-arrow"></i></div>
                        <div class="slide-content" style="display: none;">
                            <input class="input" type="password" placeholder="Поточний пароль">
                            <input class="input" type="password" placeholder="Новий пароль">
                            <input class="input" type="password" placeholder="Повторіть новий пароль">
                        </div>
                      </div>

                      <button class="btn btn-primary btn-block" type="submit">ЗБЕРЕГТИ ЗМІНИ</button>

                  </form>
              </div>
          </div>

        </div>
      </div>
      

    </main>

    <!-- FOOTER -->
    <footer class="footer">
        <?php include 'inc/_footer.php'; ?>
    </footer>
</div>

<!-- POPUPS -->
<?php include 'inc/_popups.php'; ?>
<?php include 'inc/_bottom.php'; ?>
    

</body>

</html>