<html>
<head>
    <title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("../classes/crud.php");
include_once("../classes/validation.php");

$crud = new Crud();
$validation = new Validation();

if(isset($_POST['Submit'])) {
    $nik = $crud->escape_string($_POST['nik']);
    $name = $crud->escape_string($_POST['name']);
    $address = $crud->escape_string($_POST['address']);
    $phone = $crud->escape_string($_POST['phone']);

    $msg = $validation->check_empty($_POST, array('nik', 'name', 'address', 'phone'));

    // checking empty fields
    if($msg != null) {
        echo $msg;
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    }

    else {
        // if all the fields are filled (not empty)

        //insert data to database
        $result = $crud->execute("INSERT INTO karyawan(nik,name,address,phone) VALUES('$nik','$name','$address','$phone')");

        //display success message

        header('location:../../module/content.php?module=employee&msg=success-add');
    }
}
?>
</body>
</html>
