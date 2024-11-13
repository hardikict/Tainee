<?php

include('./student.php');
include('./teacher.php');

$name = new student\joiningDetails();
$name->joiningDate();
echo "<br>";
$name = new teacher\joiningDetails();
$name->BirthDate();