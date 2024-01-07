<?php


session_start();
include('include/db_connect.php'); 
$user = isset($_SESSION['user']['id']); 

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/setka.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
  <header class="header">
  <?php include('include/nav.php');?>
      <div class="container">
        <div class="header__utp">
          <p class="header__abovetitle green__headertext">FEATURED POST</p>
          <h1 class="header__title Merriweather__700">
            National Geographic Pristine Seas <br />
            recommends the designation of two<br />
            new marine protected areas in<br />
            Uruguay
          </h1>
          <p class="header__subtitle">
            September 22, 2022 ·
            <img class="nav__img" src="img/Frame.svg" alt="#" /><span
              class="green__headertext"
              >Aaron Smith</span
            >
          </p>
          <div class="nav__btn__block">
            <a class="nav__btn" href="#">Read more</a>
          </div>
        </div>
      </div>
    </header>

 


    <section class="project">
      <div class="container">
        <div class="section__title">Popular Travel</div>
        <div class="row justify__content__between align__items__center">
        <?php 
			
      $sql = "SELECT * FROM `places`";
      $res = $mysqli -> query($sql);
      if($res -> num_rows >0){
        while($resPost = $res -> fetch_assoc()){

    
    ?> 
        <div class="col-3 project__item">
            <!-- <a href="#" class="project__border"> -->

        



              <div class="image__container">
                <img
                  class="project__img__popular"
                  src="img/populartravel/<?=$resPost['image']?>"
                  alt="#"
                />

                <!-- <img
                  class="image__shadow"
                  src="img/populartravel/Rectangle 11.png"
                  alt=""
                /> -->

                <!-- <h1 class="text__on__img"><?=$resPost['title']?></h1> -->
              </div>
            
            <!-- </a> -->
          </div>
         
          <?php }}?>
        
        </div>
      </div>
    </section>
    <section class="project">
      <div class="container">
        <div class="section__title">What’s news?</div>
        <div class="row justify__content__between ">
        <?php 
			
      $sql = "SELECT * FROM `whatsnew`";
      $res = $mysqli -> query($sql);
      if($res -> num_rows >0){
        while($resPost = $res -> fetch_assoc()){

    
    ?>
          <div class="col-3 project__item__main">
            <a href="#" class="project__border">
              <img class="project__img" src="img/whatsnewimg/<?=$resPost['image']?>" alt="#" />
            </a>
            <div
              class="col-auto justify__content__between align__items__center"
            >
           
              <a href="#" class="col-auto">
                <ul>
                  <li class="project__inlain">
                    <p>
                      <span class="green__headertext"><?=$resPost['category']?> ·</span>
                      <span class="project__time"><?=$resPost['time']?></span>
                    </p>
                  </li>
                  <li class="project__inlain">
                    <h2 class="project__title">
                    <?=$resPost['title']?>
                    </h2>
                  </li>
                  <li class="project__inlain">
                    <p class="project__txt">
                    <?=$resPost['text']?>
                    </p>
                  </li>
                  <li class="project__inlain">
                    <a class="project__more" href="#">Read more</a>
                  </li>
                </ul>
              </a>
            
            </div>
          </div>
          <?php }}?>
        
        
        </div>
      </div>
    </section>
    <?php 
                if(isset($_SESSION['user']['rights'])=='user' || isset($_SESSION['user']['rights'])=='admin') {
              ?>  
                <div style="display: none" class="nav__btn__block signin">
            <a class="nav__btn" href="aut.php">Sign In</a>
          </div>
          
          <?php } else { ?>
            <div class="nav__btn__block signin">
            <a class="nav__btn" href="aut.php">Sign In</a>
          </div>
            <?php } ?>
    <?php include('include/footer.php');?>
  
  </body>
</html>
