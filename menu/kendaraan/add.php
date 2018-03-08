<?php
//including the database connection file
include_once("../menu/classes/crud.php");
include_once("../menu/classes/validation.php");

$crud = new Crud();
$validation = new Validation();

if(isset($_POST['Submit'])) {
    $no 	= $crud->escape_string($_POST['plat']);
    $years  = $crud->escape_string($_POST['years']);
    $charge = $crud->escape_string($_POST['charge']);
    $status = $crud->escape_string($_POST['status']);

    $msg = $validation->check_empty($_POST, array('plat', 'years', 'charge', 'status'));

    // checking empty fields
    if($msg != null) {
        echo $msg;
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    }

    else {
        // if all the fields are filled (not empty)

        //insert data to database
        $result = $crud->execute("INSERT INTO vehicle(plat,years,charge,status) VALUES('$no','$years','$charge','$status')");

        //display success message

        header('location:../module/content.php?module=vehicle&msg=success-add');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../menu/images/icons/favicon.ico"/>
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
			<form method="post" action="" class="contact100-form validate-form">
				<span class="contact100-form-title">
					Add Data Kendaraan
				</span>

				<div class="wrap-input100 validate-input" data-validate="Cannot be empty!">
					<input class="input100" type="text"  name="plat" placeholder="Tanda Nomor Kendaraan / No.Plat">
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Cannto be empty!">
					<input class="input100" type="text" name="years" maxlength="4" onkeypress="return hanyaAngka(event, false)" placeholder="Tahun Pembuatan">
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Cannot be empty!">
					<input class="input100" type="text" name="charge" placeholder="Harga sewa per hari">
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Cannot be empty!">
					<!--<input class="input100" type="text" name="status" placeholder="Status Kendaraan (tersedia/tidak)">-->
					<select name="status" class="input100" tabindex="1">
                                    <option value="" disable selected hidden>Status</option>
                                    <option value="Ada">Ada</option>
                                    <option value="Kosong">Kosong</option>
                                </select>

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
          <input type='button'value='Back'onClick='top.location="../module/content.php?module=vehicle"'class="contact100-form-btn btn-danger ">
					&emsp;&emsp;&emsp;&emsp;
					<button class="contact100-form-btn btn-success" name="Submit">
						Submit
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
