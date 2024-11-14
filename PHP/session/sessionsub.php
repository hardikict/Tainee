<?php 
 include("./seessionmain.php");

 session_start();

 echo "this is favcolor" .$_SESSION["color"]."<br>";
 echo "this is a fav Animal ".$_SESSION["Animal"];
//  session_unset();
//  session_destroy();