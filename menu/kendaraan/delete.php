<?php
//including the database connection file
include_once("../menu/classes/crud.php");

$crud = new Crud();

//getting id of the data from url
$id = $crud->escape_string($_GET['id']);

//deleting the row from table
//$result = $crud->execute("DELETE FROM users WHERE id=$id");
$result = $crud->delete($id, 'vehicle');

if ($result) {
    //redirecting to the display page (index.php in our case)
    header("location:../module/content.php?module=vehicle&msg=success-delete");
}
?>
