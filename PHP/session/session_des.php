<?php
session_start();

include("./seessionsub.php");

 session_unset();
 session_destroy();
 echo"session destroy";
