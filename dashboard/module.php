<?php
$module = empty($_GET['module']) ? 'home' : $_GET['module'];
switch ($module){

  case "dashboard" :
  include 'index.php';
  break;


}
?>
