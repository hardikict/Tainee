<?php
include "heder.php";
include "sideMenu.php";
include "function.php";
include "footer.php";


$delete = new employee();
if (isset($_GET['id'])) 
{
    $id = $_GET['id'];    
    $sql = $delete->deleteData($id);

    if($sql){
        echo "<script>alert('Record Deleted Successfully')</script>";
        // header("location:listdataoop.php");
    }else{
        echo "<script>alert('Record Has been Not Deleted')</script>";

    }
}

?>