<?php
//cookies less security store a informetion browser 
setcookie("color","blue",time()+(86400));

if (isset($_COOKIE["color"])){
    echo "The current cookies set ".$_COOKIE["color"];
}else{
    echo "cookies not set";
}   