<?php
include_once('include/user.class.php');
session_start();

//loggedIn
if (isset($_POST['submit'])) {
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $secret = '6LfCbUgUAAAAAEMR9yXEWtgzb12NTdPb2hMN0aBK';
    $response = file_get_contents($url.'?secret='.$secret.'&response='.$_POST['g-recaptcha-response'].'&remoteip='.$_SERVER['REMOTE_ADDR']);
    $data = json_decode($response);

if ($data->success==true) {

  $_SESSION['username'] = $_POST['username'];
  $_SESSION['password'] = $_POST['password'];
  $username = $_SESSION['username'];
  $password= $_SESSION['password'];
  $user = new User();
  $user->login($username, $password);

} else {
		header('location: ../module/content.php?module=error&err=captcha');

}
}






//echo $username . "<br>";
//echo $password . "<br>";
?>
<form method = "post" action = "modul.php?module=home">
<input type="hidden" name="logout" value="">

<button type="submit">Logout</button>
</form>
