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
    <link rel="stylesheet" href="css/aut.css" />
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
        
    <section class="form">
        <div class="container">
            <div class="row justify__content__center form__shadow">
         
                <div class="col-5 form__block">
                <?php
	
  $sql = "SELECT * FROM `user` WHERE `id`='$user'";
  $res = $mysqli -> query($sql);

  if($res -> num_rows > 0) {
      while($resArticle = $res -> fetch_assoc()) {

  ?>  
                <h2 class="article__name"><?=  $resArticle['name'] ?></h2>
                <h2 class="article__login"><?=  $resArticle['login'] ?></h2>

                        <img class="article__logo" src="uploads_images/<?=  $resArticle['image'] ?>" alt="">
                        <h2 class="article__info"><?=  $resArticle['email'] ?></h2>
                        <h2 class="article__info"><?=  $resArticle['phone'] ?></h2>
                        

                        <?php } } ?>   
                </div>
               
                <div class="col-5 form__image-aut"></div>
            </div>
        </div>
    </section>
    
   
      </div>
    </header>



    <?php include('include/footer.php');?>
  
  </body>
</html>
