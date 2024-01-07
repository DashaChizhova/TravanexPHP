
      <nav class="nav">
        <div class="container">
          <div class="row justify__content__between align__items__center">
            <div class="col-auto">
              <ul>
                <li class="nav__item">
                  <a href="index.php" class="nav__img"
                    ><img src="img/logo.svg" alt="logo"
                  /></a>
                </li>
                <li class="nav__item">
                  <a href="#" class="nav__link">Explore</a>
                </li>
                <li class="nav__item">
                  <a href="#" class="nav__link">Destination Work</a>
                </li>
                <li class="nav__item">
                  <a href="#" class="nav__link">Pricing</a>
                </li>
                <li class="nav__item">
                  <a href="#" class="nav__link">Travel guide</a>
                </li>
              </ul>
            </div>
            <div class="col-auto">
              <ul>
              <?php 
                if(isset($_SESSION['user']['rights'])=='user' || isset($_SESSION['user']['rights'])=='admin') {
              ?>  
               <li class="nav__item"><a href="lk.php" class="nav__sign"><img style=" height: 27px; vertical-align: middle;" src="img/icons8-человек-64.png" alt=""></a></li>
               <li class="nav__item"><a href="include/logout.php" class="nav__sign">Exit</a></li>
               <?php } else { ?>
                <li class="nav__item">
                  <a href="#" class="nav__img"
                    ><img src="img/weather.svg" alt="#"
                  /></a>
                  <a href="#" class="nav__sign">Jakarta, 31 °C</a>
                </li>
                <li class="nav__item">
                  <a href="#" class="nav__img"
                    ><img src="img/search.svg" alt="#"
                  /></a>
                </li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    