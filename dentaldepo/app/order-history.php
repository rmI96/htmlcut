<!DOCTYPE html>
<html lang="uk">
<head>
    <?php include 'inc/_top.php'; ?>
    <title>DENTAL DEPO - Order history</title>

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
      
      <div class="section pd-top pd-bottom-lg">
        <div class="container anime">

          <div class="text-center title-mr-bt">
              
            <h1 class="h1 inline-title" style="position: relative">
                <b class="anime-title-inner"><span class="color-secondary">Історія </span> покупок</b>
                <b aria-hidden="true">
                    <svg class="title-svg" version="1.1" viewBox="0 0 100 100" width="100%" height="100%" preserveAspectRatio="xMinYMid meet">
                        <text x="0" y="76" stroke-width="1" text-anchor="start">
                           <tspan class="color-secondary">Історія </tspan><tspan>покупок</tspan>
                        </text>
                    </svg>
                </b>
            </h1>

          </div>

          <div class="row justify-content-center">
              <div class="col-xl-8 col-lg-10">
                  <div class="profile-history-table">
                    <div class="article text-md">
                      <table>
                        <tbody>
                          <tr>
                              <th><b>Замовлення</b></th>
                              <th><b>Дата</b></th>
                              <th><b>Товари</b></th>
                              <th><b>Сума</b></th>
                              <th><b>Статус</b></th>
                          </tr>
                          <tr>
                              <td><a href="./order-detail.php">#000263</a></td>
                              <td>10:45 02.06.2019</td>
                              <td>3</td>
                              <td>14 750 грн</td>
                              <td><span class="status-yellow">Чекаємо оплати</span></td>
                          </tr>
                          <tr>
                              <td><a href="./order-detail.php">#000263</a></td>
                              <td>10:45 02.06.2019</td>
                              <td>3</td>
                              <td>14 750 грн</td>
                              <td><span class="status-green">Виконано</span></td>
                          </tr>
                          <tr>
                              <td><a href="./order-detail.php">#000263</a></td>
                              <td>10:45 02.06.2019</td>
                              <td>3</td>
                              <td>14 750 грн</td>
                              <td><span class="status-red">Скасовано</span></td>
                          </tr>
                          <tr>
                              <td><a href="./order-detail.php">#000263</a></td>
                              <td>10:45 02.06.2019</td>
                              <td>3</td>
                              <td>14 750 грн</td>
                              <td><span class="status-yellow">Чекаємо оплати</span></td>
                          </tr>
                          <tr>
                              <td><a href="./order-detail.php">#000263</a></td>
                              <td>10:45 02.06.2019</td>
                              <td>3</td>
                              <td>14 750 грн</td>
                              <td><span class="status-green">Виконано</span></td>
                          </tr>
                          <tr>
                              <td><a href="./order-detail.php">#000263</a></td>
                              <td>10:45 02.06.2019</td>
                              <td>3</td>
                              <td>14 750 грн</td>
                              <td><span class="status-red">Скасовано</span></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
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