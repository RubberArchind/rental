<?php
// including the database connection file
include_once("../classes/crud.php");

$crud = new Crud();

if(isset($_POST['update']))
{
    $id = $crud->escape_string($_POST['id']);

    $nik = $crud->escape_string($_POST['nik']);
    $name = $crud->escape_string($_POST['name']);
    $address = $crud->escape_string($_POST['address']);
    $phone = $crud->escape_string($_POST['phone']);



    // checking empty fields
    if($msg) {
        echo $msg;
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";

    } else {
        //updating the table
        $result = $crud->execute("UPDATE karyawan SET nik='$nik',name='$name',address='$address',phone='$phone' WHERE id=$id");

        //redirectig to the display page. In our case, it is index.php
      header("Location:../../module/content.php?module=employee&msg=success-update");
    }
}
?>
