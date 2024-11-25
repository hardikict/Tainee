<?php 
//Restriction
// session_start();
// if(isset($_SESSION['login']) || $_SESSION['id'] == ''){
//     header("Location:login.php");
//     die();
// }
  

include "db_connect";
include "heder.php";
include "sideMenu.php";

session_start();
if(!isset($_SESSION['userName'])){
   header("Location:login.php");
   // die;
}

   $userName = $_SESSION['userName'];
   

?>  



<p>Username is: <?php echo $userName; ?></p>


<?php

include "footer.php"; 
 ?>