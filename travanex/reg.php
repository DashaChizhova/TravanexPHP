<?php
session_start();
include('include/db_connect.php');
	

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
                    <h2 class="form__title">Welcome!</h2>
                    <p class="form__subtitle">Register to make full use of our resource.</p>

                    <form enctype="multipart/form-data" method="post" action="include/reg.php">
                    <div><input class="form__input" type="text" name="login" placeholder="Login" id=""></div>
                        <div><input class="form__input" type="text" name="name" placeholder="Name" id=""></div>
                        <div><input class="form__input" type="tel" name="phone" placeholder="Phone" id=""></div>
                        <div><input class="form__input" type="email" name="email" placeholder="Email" id=""></div>
                        <div><input class="form__input" type="password" name="password" placeholder="Password" id=""></div>
                        <div><input class="form__input" type="password" name="repeat_password" placeholder="Repeat at password" id=""></div>
                        <div><input  type="file" name="avatar" placeholder="Your photo" id=""></div>
                        <div><input type="text" name="rights" value="user" style="display: none;" id=""></div>
                        <input class="form__btn" type="submit" value="Send">
                    </form>
                    <?php 
                        if(isset( $_SESSION['message'])){
                        echo '<p class="form__polit">' . $_SESSION['message'] . '</p>';
                        }
                        unset( $_SESSION['message']);
		            ?>
                    <!-- <p class="form__subtitle" style="color:white">Don't have an account? <a class="form__subtitle" >Sign Up</a></p> -->

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
