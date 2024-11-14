<?php

include('./student.php');
include('./teacher.php');

$name = new student\joiningDetails();// class name use 
$name->joiningDate();//function name 
echo "<br>";
$name = new teacher\joiningDetails();
$name->BirthDate();