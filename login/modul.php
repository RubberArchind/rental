<?php
$module = empty($_GET['module']) ? 'home' : $_GET['module'];
switch ($module){

  case "home" :
  include 'index.php';
  break;

  case "error" :
    include 'index.php';
  break;

}

switch ($_GET['err']){

  case "captcha" :
  echo '
  <!DOCTYPE html>
  <html lang="en">
  <head>
  <link rel="stylesheet" href="css/style.css">
  </head>
  <!-- start popup -->
      <div id="close">
          <div class="container-popup">
              <form action="#" method="post" class="popup-form">
                  <h3>Please Verify Captcha!</h3>
                  <br>
              </form>
              <a class="close" href="#close">x</a>
          </div>
      </div>
  <!-- end popup -->
  ';
  break;

  case "empty" :

    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <link rel="stylesheet" href="css/style.css">
    </head>
    <!-- start popup -->
        <div id="close">
            <div class="container-popup">
                <form action="#" method="post" class="popup-form">
                    <h3>Username or Password Invalid!
                    </h3>
                </form>
                <a class="close" href="#close">x</a>
            </div>
        </div>
    <!-- end popup -->
    ';
    break;
}



 ?>
