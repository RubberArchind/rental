<?php
$module = empty($_GET['module']) ? 'home' : $_GET['module'];
switch ($module){

  case "home" :
  include '../login/index.php';
  break;

  case "error" :
    include '../login/index.php';
  break;

  case "dash" :
 include '../dashboard/index.php';
  break;

  case "employee" :
  include '../menu/karyawan/index.php';
  break;

  case "add-employee" :
  include '../menu/karyawan/add.html';
  break;

  case "edit-employee" :
  include '../menu/karyawan/edit.php';
  break;

  case "delete-employee" :
  include '../menu/karyawan/delete.php';
  break;

  case "vehicle" :
  include '../menu/kendaraan/index.php';
  break;

  case "add-vehicle" :
  include '../menu/kendaraan/add.php';
  break;

  case "edit-vehicle" :
  include '../menu/kendaraan/edit.php';
  break;

  case "delete-vehicle" :
  include '../menu/kendaraan/delete.php';
  break;

  case "customer" :
  include '../menu/pelanggan/index.php';
  break;

  case "add-customer" :
  include '../menu/pelanggan/add.php';
  break;

  case "edit-customer" :
  include '../menu/pelanggan/edit.php';
  break;

  case "driver" :
  include '../menu/driver/index.php';
  break;

  case "add-driver" :
  include '../menu/driver/add.php';
  break;

  case "edit-driver" :
  include '../menu/driver/edit.php';
  break;

  case "delete-driver" :
  include '../menu/driver/delete.php';
  break;
}

$moduleerr = empty($_GET['err']) ? '' : $_GET['err'];
switch ($moduleerr){

  case "captcha" :
  echo '
  <!DOCTYPE html>
  <html lang="en">
  <head>
  <link rel="stylesheet" href="../login/css/style.css">
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
    <link rel="stylesheet" href="../login/css/style.css">
    </head>
    <!-- start popup -->
        <div id="close">
            <div class="container-popup">
                <form action="#" method="post" class="popup-form">
                    <h3>Username or Password Wrong!
                    </h3>
                </form>
                <a class="close" href="#close">x</a>
            </div>
        </div>
    <!-- end popup -->
    ';
    break;
}

/*
$msg = empty($_GET['msg']) ? '' : $_GET['msg'];
switch ($msg){

  case "success-add" :
  echo '
  <!DOCTYPE html>
  <html lang="en">
  <head>
  <link rel="stylesheet" href="../login/css/style.css">
  </head>
  <!-- start popup -->
      <div id="close">
          <div class="container-popup">
              <form action="#" method="post" class="popup-form">
                  <h4>Add data success!
                  </h4>
              </form>
              <a class="close" href="#close">x</a>
          </div>
      </div>
  <!-- end popup -->
  ';
  break;

  case "success-delete" :
  echo '
  <!DOCTYPE html>
  <html lang="en">
  <head>
  <link rel="stylesheet" href="../login/css/style.css">
  </head>
  <!-- start popup -->
      <div id="close">
          <div class="container-popup">
              <form action="#" method="post" class="popup-form">
                  <h4>Delete data success!
                  </h4>
              </form>
            <a class="close" href="#close">x</a>
          </div>
      </div>
  <!-- end popup -->
  ';
  break;

  case "success-update" :
  echo '
  <!DOCTYPE html>
  <html lang="en">
  <head>
  <link rel="stylesheet" href="../login/css/style.css">
  </head>
  <!-- start popup -->
      <div id="close">
          <div class="container-popup">
              <form action="#" method="post" class="popup-form">
                  <h4>Update data success!
                  </h4>
              </form>
              <a class="close" href="#close">x</a>
          </div>
      </div>
  <!-- end popup -->
  ';
  break;
}
*/
 ?>
