<?php
    
   $hostname = "localhost"; 
   $username = "root"; 
   $password = "admin123"; 
   $dbname   = "employee";
    

   $conn = new mysqli($hostname, $username, $password, $dbname); 
    
   
   if ($con->connect_error) { 
       die("Connection failed: " . $con->connect_error); 
   }
   ?>