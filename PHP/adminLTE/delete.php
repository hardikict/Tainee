<?php 
include("db_connect.php");


// Delete Data 
if(isset($_GET['id'])){
    $id = $_GET['id'];
   
     $sql = "DELETE FROM `emp_details` WHERE id = $id";
     $result = mysqli_query($conn, $sql);

    if($result){
        echo "Success! Your Data Deleted.";
        header('location:listData.php');

    }else{
        echo "Error! Your Data Not Deleted";
    }
}



?>