<?php
// including the database connection file
include_once("../menu/classes/crud.php");

$crud = new Crud();

//getting id from url
$id = $crud->escape_string($_GET['id']);

//selecting data associated with this particular id
$result = $crud->getData("SELECT * FROM karyawan WHERE id=$id");

foreach ($result as $res) {
    $nik = $res['nik'];
    $name = $res['name'];
    $address = $res['address'];
    $phone = $res['phone'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Edit</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../menu/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../menu/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../menu/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../menu/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../menu/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../menu/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../menu/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../menu/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../menu/css/util.css">
	<link rel="stylesheet" type="text/css" href="../menu/css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">

		<div class="wrap-contact100">
			<form method="post" action="../menu/karyawan/editaction.php" class="contact100-form validate-form">
				<span class="contact100-form-title">
					Edit Data
				</span>

				<div class="wrap-input100 validate-input" data-validate="NIK is required">
					<input class="input100" type="text" maxlength="16" onkeypress="return hanyaAngka(event, false)" name="nik" placeholder="NIK (Angka 16 digit)" value="<?php echo $nik;?>">
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Name is required">
					<input class="input100" type="text" name="name" placeholder="Nama" value="<?php echo $name;?>">
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Address is required">
					<input class="input100" type="text" name="address" placeholder="Alamat" value="<?php echo $address;?>">
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Phone Number is required">
					<input class="input100" type="text" maxlength="13" name="phone" onkeypress="return hanyaAngka(event, false)" placeholder="No. Telp" value="<?php echo $phone;?>">
          <input type="hidden" name="id" value=<?php echo $_GET['id'];?>
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>

				<!--
				<div class="contact100-form-checkbox">
					<input class="input-checkbox100" id="ckb1" type="checkbox" name="copy-mail">
					<label class="label-checkbox100" for="ckb1">
						Send copy to my-email
					</label>
				</div>
-->
				<div class="container-contact100-form-btn">
          <input type='button'value='Back'onClick='top.location="../module/content.php?module=employee"'class="contact100-form-btn btn-danger ">
					&emsp;&emsp;&emsp;&emsp;
					<button class="contact100-form-btn btn-success" name="update">
						Update
					</button>
				</div>
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="../menu/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../menu/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../menu/vendor/bootstrap/js/popper.js"></script>
	<script src="../menu/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../menu/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../menu/vendor/daterangepicker/moment.min.js"></script>
	<script src="../menu/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../menu/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="../menu/js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="../menu/js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script language="javascript">
    function hanyaAngka(e, decimal) {
    var key;
    var keychar;
     if (window.event) {
         key = window.event.keyCode;
     } else
     if (e) {
         key = e.which;
     } else return true;

    keychar = String.fromCharCode(key);
    if ((key==null) || (key==0) || (key==8) ||  (key==9) || (key==13) || (key==27) ) {
        return true;
    } else
    if ((("0123456789").indexOf(keychar) > -1)) {
        return true;
    } else
    if (decimal && (keychar == ".")) {
        return true;
    } else return false;
    }
</script>

</body>
</html>
