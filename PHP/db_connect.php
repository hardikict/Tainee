<?php 


$servername="localhost";
$username="root";
$password="";
$dbname="";


//ceate connection
$conn= new mysqli($servername,$username,$password,$dbname);


//connection check
if($conn){
    echo"connection success";
}else{
    echo "your connection faild ".die();
}




?>