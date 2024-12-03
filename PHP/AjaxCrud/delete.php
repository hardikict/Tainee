<?php

include('db_connect.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    delete_data($conn, $id);
}
// delete data query
function delete_data($conn, $id)
{
    $sql = "DELETE FROM `AjaxCrud` WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Success! Recodrd deleted')</script>";
        header("location:listdata.php");
    } else {
        echo "<script>alert('Error! Recodrd Not deleted')</script>";
    }
}


?>

<script src="script.js"></script>


