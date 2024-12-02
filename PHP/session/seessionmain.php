<?php 

//session is a high security store a server side information like a login details .
session_start();
$_SESSION["color"]=" blue";
$_SESSION["Animal"]=" Tiger";
echo "session are set";
echo "<br>";

