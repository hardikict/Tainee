



<!DOCTYPE html>
<html>
    <head>
        <title>
            PHP PRACTICE
        </title>
</head>

<body>
    <h1>PHP PRACTICE</h1>


    <?php 


echo "Hello PHP<br>";
echo"Hello HTML<br>";
echo"Hello CSS</br>";


$color="blue";



echo"My Car color is $color <br>";
echo("My Car color is $COLOR <br>");
echo"My Car color is $coLOr <br>";


//variable rules

//1 start with $ sign
//1 can not start first number but first charecter alphabatic after number 0-1 you can use .
//2 _underscor start a vaeiable name


$a="40";
$b="35";
$name='hardik';

// var_dump($name);   


echo $a+$b ;
echo "<br>";
echo $a*$b;
echo"<br>";
echo $a-$b;
echo '<br>';
echo $a/$b;
echo '<br>';


// Globle Scop
// globle scop can be used for evryware, decler out of function.
//local scop can be used for within function
//static scop can be used for a static keyword decler after variable decleration 

$name2="hardik2";

function test(){
    global $a,$b;
    $b=$a+$b;
    $name1='I-Creative Technilogy';
    echo "Hello $name1";//local variable
    echo '<br>';
}

test();// function call

echo "Hello $name2";
echo '<br>';
echo $b;
echo '<br>';

// STATIC-VARIABLE


function test_1(){
 static $a1 = 0;
 echo $a1;
 $a1++;
}

test_1();
echo '<br>';
test_1();
echo '<br>';

// echo has a no return value while print return value 1(one).
//echo can take multiple argument while print can take a one argument.

//concatination 

echo'Welcome to '.$name.' our company';
echo '<br>';
//php DATA TYPES 

//1 int
//2 float
//3 boolean
//4 array
//5 object
//6 string
//7 null
//8 resource


//array


 $company= array("hardik",'kartik','divesh',"rohit",12,22,'32',02.2, true);
 $company1= ["hardik",'kartik','divesh',"rohit",12,22,'32',02.2, true];

echo count($company1);// count the array value
 echo '<br>';   

 echo $company[0];
 echo '<br>';   
 echo $company[1];
 echo '<br>'; 
 echo $company[2];
 echo '<br>'; 
 echo $company[3];
 echo '<br>'; 
   
 var_dump($company);
 echo '<br>';


 //object

 class math{
    function sum($a,$b){
        // echo 46+34;
        echo $a+$b;
    }
 }

 $mathop = new math();
 $mathop->sum(21,12);
 echo '<br>';

 //word count fun

 echo str_word_count('Hardik');
 echo '<br>';
 echo strlen('Hardik  vankar');
 echo '<br>';

 //modify string

 $h="Hardik";

echo strtoupper($h);
echo '<br>';

echo strtolower($h);
echo '<br>';

echo strrev($h);
echo '<br>';

echo str_replace('Hardik','hardik-11',$h);
echo '<br>';


echo trim($h);//can we use for white space remove.  
echo '<br>';

echo substr($h,2,6);//slicing string
echo "<br>";

//escap characters

// $t="echo can take multiple argument"hello" while print can take a one argument.";
// echo $t;


// constant is a identifire(name) for a simple value cannot be change value during the scrip execution

//array types 

//1 index array
//2 associative array
//3 multidimensional

 
//while loop


$j = 1;
while($i<=10){
    echo $i;
    $i++;
    echo "<br>";
}

// do while loop

  $k=100;
 do{
    echo $k;
    $k++;
    echo "<br>";
 }while($k<=110);


 //for loop

 for($p=51; $p<=60; $p++){
    echo $p;
    echo "<br>";
 }


 //if condition

$pk=1;
 if($pk>23){
    echo'true';
    echo "<br>";
 }
 else
 {
    echo'false';
    echo "<br>";

 }

//SHORT HEND ELSE.. ELSEIF

 $b1=32;

 $b11=$b1<43 ? "Condition true ":'Condition false ';
 echo "<br>";
 
 echo$b11;
 echo "<br>";

 //Switch statment

 $color='black';

switch($color){
    case 'red';
    echo"color is red";
    break;

    case 'black';
    echo 'color is black';
    break;

    case 'blue';
    echo'color is blue';
    break;
}

?>



</body>
</html>