<?php

declare(strict_types=1);

echo "<h1>Function Of PHP</h1>";
echo '<br>';

// there are tow types of function
//1 built in function
//2 user define function 


// 2. user define function


function user($value)
{
    echo 'Welcome user define function ' . $value;
}

user("PM");
echo '<br>';
user('RM');
echo '<br>';
user('HR');
echo '<br>';

//return value

function sum($x, $y)
{
    $x1 = $x + $y;
    return $x1;
}

echo "sun is 22 + 22 = " . sum(22, 22);
echo '<br>';

function name($name,)
{
    $name4 = $name;
    return $name4;
}

echo "this is my name " . name('hardik');
echo '<br>';
echo "this is my name " . name('kartik');
echo '<br>';
echo "this is my name " . name('divesh');
echo '<br>';


//pass by reference

function add(&$value11)
{
    $value11 += 10;
}
$num = 21;
add($num);
echo $num;
echo '<br>';



// second example reference by argument to update

function text(&$val)
{
    $val += 20;
}
$sum1 = 15;
text($sum1);
echo "This is a addition " . $sum1;
echo '<br>';

//third example reference by argument to update

function top(&$wall)
{
    $wall *= 12;
}
$multi = 4;
top($multi);
echo "this is a multiplication " . $multi;
echo '<br>';


//strict decleration define by start PHP tag

function number(int $a, int $c): int
{
    return $a + $c;
}
echo number(12, 12);


//number of arguments

function myName(...$h)
{
    $k = 0;
    $len = count($h);
    for ($i = 0; $i < $len; $i++) {
        $k += $h[$i];
        echo '<br>';
    }
    return $k;
}
echo myName(20, 21, 3, 3, 1, 20);

echo '<br>';

// 1. built in function Array

// join fun
$str = ["Hello", "Good", "Afternoon", "Everyone"];
echo join($str);
echo '<br>';


//explode fun

$str = "Hello word. thats a noraml day";
print_r(explode(" ", $str));
echo '<br>';


//implode

$str = ['Hello Word!', 'this', 'is a ', 'best', 'of a', 'day'];
echo implode(" ", $str);
echo '<br>';


//pad
$str = "Hello world str_pad";
echo str_pad($str, 40, ".");
echo '<br>';

//repeat

echo str_repeat("PHP<br>", 5);
echo '<br>';

//split

print_r(str_split("Hello Word", 3));
echo '<br>';


//len
echo strlen("Hello ");
echo '<br>';

//rev

echo strrev("Hello World");
echo '<br>';

//sub str
echo substr("Hello__World", 2);
echo '<br>';

//substr count

echo substr_count("Hello world this is a india ", "world");
echo '<br>';


function test1()
{
    for ($i = 0; $i < 5; $i++) {
        echo "hello";
        echo '<br>';
    }
}
test1();


function hello($a,$b){
    $x=$a+$b;
    return $x;
    echo '<br>';

}
echo hello(20,22);


//md5 function use of password 

$str ="hello world";
echo md5($str);
echo '<br>';


//printf function

$number=10;
$str="india";
printf("There are %u milion bycycle %s.",$number,$str);
echo '<br>';
 
//print

print "Simple print function";
echo '<br>';


//rtrim fun

$str ="hello hardik";
echo $str;
echo rtrim($str,'hardik');
echo '<br>';
echo '<br>';


//wordwarp function

$str="Hello how are you that is most deficult";
echo wordwrap($str,10,"<br>\n");
echo '<br>';
echo '<br>';


//pos function use for word position

echo stripos("i Love india this is a best country","this");
echo '<br>';
echo '<br>';


//strcspn function use of specific chereacter find 

echo strcspn("Best contry india ","c");
echo '<br>';
echo '<br>';

//stristr function find the word

echo stristr("this is best town","TOWN");
echo '<br>';
echo '<br>';

//str shuffle
echo str_shuffle("Hello world");