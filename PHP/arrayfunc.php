<?php

declare(strict_types=1);
// Array func
$car = ["BMW", "Volvo", "Creta"];
echo "This a car " . $car[0] . " car best of a car" . $cae[1];
echo '<br>';

//array change key case

$arry = ["hardik" => "20", "kartik" => "24", "jeo" => "43"];
print_r(array_change_key_case($arry, CASE_UPPER));
echo '<br>';
echo '<br>';

//column array
$a = [

    [
        "id" => 01,
        "firstname" => "hardik",
        "lastname" => "vankar",
    ],

    [
        "id" => 02,
        "firstname" => "kartik",
        "lastname" => "varma",
    ],
];

$last_name = array_column($a, 'last_name');
print_r($last_name);
echo '<br>';

//array combine

$arra = ["hardik", "kartik", "varun", "akshar"];
$com = ["23", "22", "53", "23"];
$co = array_combine($arra, $com);
print_r($co);
echo '<br>';
echo '<br>';


// array count
$array = ["This", "is", "Best", "of", "india", "is", "india"];
$coun = array_count_values($array);
print_r($coun);
echo '<br>';
echo '<br>';

//array diff
$a1 = ["hardik" => "20", "suryakumar" => "35", "kartik" => "24", "jeo" => "43"];
$a2 = ["varun" => "22", "kartik" => "24", "jeo" => "43"];
$res = array_diff($a1, $a2);
print_r($res);
echo '<br>';

//array diff_key
$a1 = ["a" => "yellow", "b" => "green", "c" => "blue"];
$a2 = ["a" => "yellow", "d" => "green", "c" => "blue"];
$res = array_diff_key($a1, $a2);
print_r($res);
echo '<br>';
echo '<br>';

//array fill
$a = array_fill(3, 6, "green");
print_r($a);
echo '<br>';
echo '<br>';


//array key fill value
$array = ["21", "22", '23', '24'];
$res = array_fill_keys($array, "green");
print_r($res);
echo '<br>';
echo '<br>';

//array flip

$array = ["a" => "yellow", "d" => "green", "c" => "blue"];
$res = array_flip($array);
print_r($res);
echo '<br>';
echo '<br>';

//array filter

function odd($var)
{
    return ($var & 1);
}
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
print_r(array_filter($arr, "odd"));
echo '<br>';
echo '<br>';

//array intersect
//in this function only value same 

$a1 = ["a" => "yellow", "s" => "green", "b" => "blue", "d" => "white"];
$a2 = ["a" => "yellow", "d" => "green", "c" => "blue"];
$res = array_intersect($a1, $a2);
print_r($res);
echo '<br>';
echo '<br>';

// array intersect assoc
//in this a key and value same 
$a1 = ["a" => "yellow", "b" => "green", "c" => "blue", "d" => "white"];
$a2 = ["a" => "yellow", "b" => "green", "c" => "blue"];
$res = array_intersect_assoc($a1, $a2);
print_r($res);
echo '<br>';
echo '<br>';

//array intersect key
//in this function mathc all keys then return the mathces key

$a1 = ["a" => "yellow", "b" => "green", "c" => "blue", "d" => "white"];
$a2 = ["d" => "yellow", "b" => "green", "c" => "blue"];
$res = array_intersect_key($a1, $a2);
print_r($res);
echo '<br>';
echo '<br>';

//ukey function

function myFunction($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    return ($a > $b) ? 1 : -1;
}

$a = ["a" => "Sharma", "b" => "pandya", "c" => "varma", "d" => "king"];
$b = ["d" => "sharma", "b" => "pandya", "c" => "varma"];
$result = array_intersect_ukey($a, $b, "myFunction");
print_r($result);
echo '<br>';
echo '<br>';

//key exist function
$array = ["BMW" => "23", "fortuner" => "45"];
if (array_key_exists("fort", $array)) {
    echo "key is exist";
} else {
    echo "key does not exsist";
}
echo '<br>';
echo '<br>';

//array key
$array = ["Creata" => "55", "BMW" => "23", "fortuner" => "45"];
print_r(array_keys($array));
echo '<br>';
echo '<br>';

//array map
function multiplicaton($num)
{
    return ($num * $num);
}
$a = [1, 2, 3, 4, 5, 6, 7, 8];
print_r(array_map("multiplicaton", $a));
echo '<br>';
echo '<br>';

//array merge
$array1 = ["Hello world", "This is india Best "];
$array2 = ["Contry"];
print_r(array_merge($array1, $array2));
echo '<br>';
echo '<br>';

//array merge recursive function
$array1 = ["Creata" => "55", "BMW" => "23", "fortuner" => "45"];
$array2 = ["Volvo" => "50", "BMW" => "23", "fortuner" => "45"];
print_r(array_merge_recursive($array1, $array2));
echo '<br>';
echo '<br>';

//multi sort
$array = ["car", "apple", "lichi", "banana", "mengo"];
// $array=[1,2,3,6,3,4];
echo array_multisort($array);
print_r($array);
echo '<br>';
echo '<br>';

//array pad
$array = ["blue", "green"];
print_r(array_pad($array, 5, "blue"));
echo '<br>';
echo '<br>';

// pop function use of  delete the last element

$array = ["blue", "green", "black", "white"];
echo array_pop($array);
print_r($array);
echo '<br>';
echo '<br>';

//push function use for add element to the start 
$array = ["green", "yellow"];
array_push($array, "black", "white");
print_r($array);
echo '<br>';
echo '<br>';

//array product
$array = [20, 2, 2];
echo array_product($array);
echo '<br>';
echo '<br>';

//array rand function to use of randomly key return 

$rand = ["red", "blue", "green", "yellow"];
$random = array_rand($rand, 3);
echo $rand[$random[0]];
echo '<br>';
echo $rand[$random[1]];
echo '<br>';
echo $rand[$random[2]];
echo '<br>';
echo '<br>';

//array reduce function return to string using a userdefine function

function myReduce($a, $b)
{
    return $a . "-" . $b;
}
$array = ["Hourse", "cat", "dog"];
print_r(array_reduce($array, "myReduce"));
echo '<br>';
echo '<br>';

//replece function
$array1 = ["car", "dog"];
$array2 = ["lichi", "mengo"];
print_r(array_replace($array1, $array2));
echo '<br>';
echo '<br>';

//replase recurciv use for a there are same key to the second array to first array replase
$array1 = ["a" => 'yellow', "b" => 'green', "c" => "black"];
$array2 = ["e" => 'red', "b" => 'green', "c" => "black"];
print_r(array_replace_recursive($array1, $array2));
echo '<br>';
echo '<br>';

//array revers function used for a array revers using 
$array = ["Car" => "BMW", "animal" => "Dog", "Birds" => "perote"];
print_r(array_reverse($array));
echo '<br>';
echo '<br>';

//array search used for return to search value and return its key
$array1 = ["a" => 'yellow', "b" => 'green', "c" => "black"];
print_r(array_search("green", $array1));
echo '<br>';
echo '<br>';

//shift function used for remove element from first
$array = ["Car" => "BMW", "Animal" => "Dog", "Birds" => "perote"];
echo array_shift($array);
print_r($array);
echo '<br>';
echo '<br>';

//unshift array inserted to the start element
$array = ["Car" => "BMW", "Animal" => "Dog", "Birds" => "perote"];
array_unshift($array, "green", "white");
print_r($array);
echo '<br>';
echo '<br>';

//slice function 
$array = ["car", "Animal", "Birds", "home"];
print_r(array_slice($array, 2));
echo '<br>';
echo '<br>';

//sum array function
$array = [3, 52, 10];
print_r(array_sum($array));
echo '<br>';
echo '<br>';

//splice function
$array1 = ["car", "home", "perote"];
$array2 = ["Animal", "BMW"];
array_splice($array1, 0, 2, $array2);
print_r($array1);
echo '<br>';
echo '<br>';

//udiff function used for check value and retur the same value using user define function
function myUserdeff($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    return ($a > $b) ? 1 : -1;
}
$a = ["a" => "BMW", "b" => "fox", "c" => "perote"];
$b = ["a" => "volvo", "b" => "Dog", "c" => "perote"];
$result = array_udiff($a, $b, "myUserdeff");
print_r($result);
echo '<br>';
echo '<br>';

//udiff assoc this function is  check for key and value 
function myUserdef($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    return ($a > $b) ? 1 : -1;
}

$a = ["a" => "BMW", "b" => "Dog", "c" => "perote"];
$b = ["a" => "volvo", "b" => "Dog", "c" => "perote"];
$result = array_udiff_assoc($a, $b, "myUserdef");
print_r($result);
echo '<br>';
echo '<br>';

//udiff uassoc
function assocKey($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    return ($a > $b) ? 1 : -1;
}
function assocValue($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    return ($a > $b) ? 1 : -1;
}
$a = ["a" => "BMW", "u" => "Dog", "c" => "perote"];
$b = ["a" => "volvo", "b" => "Dog", "c" => "perote"];
$result = array_udiff_uassoc($a, $b, "assocKey", "assocValue");
print_r($result);
echo '<br>';
echo '<br>';

//uintersect function only check for value 
function userInter($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    return ($a > $b) ? 1 : -1;
}
$a = ["a" => "car", "u" => "Dog", "c" => "perote"];
$b = ["a" => "car", "b" => "blue", "c" => "perote"];
$result = array_uintersect($a, $b, "userInter");
print_r($result);
echo '<br>';
echo '<br>';

//uintersect assoc check for key and value using user define function
function uInter($k, $j)
{
    if ($k === $j) {
        return 0;
    }
    return ($k > $j) ? 1 : -1;
}

$k = ["a" => "car", "u" => "Dog", "c" => "perote", "h" => "Animal"];
$j = ["l" => "car", "b" => "blue", "c" => "perote"];
$result = array_uintersect_assoc($k, $j, "uInter");
print_r($result);
echo '<br>';
echo '<br>';

//uintersect uassoc function check for key and value using a sepret function

function uassocKey($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    return ($a > $b) ? 1 : -1;
}
function uassocValue($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    return ($a > $b) ? 1 : -1;
}
$a = ["a" => "car", "u" => "Dog", "c" => "perote", "h" => "Animal"];
$b = ["l" => "car", "u" => "Dog", "c" => "perote", "h" => "Animal"];
$result = array_uintersect_uassoc($a, $b, "uassocKey", "uassocValue");
print_r($result);
echo '<br>';
echo '<br>';

//array unique duplicate value remove
$array = ["dark", "blue", "dark", "yellow", "primery", "blue"];
print_r(array_unique($array));
echo '<br>';
echo '<br>';

//array value retrun all value but not return key key only intiger return
$array = ["color" => "red", "age" => "22", "car" => "volvo"];
print_r(array_values($array));
echo '<br>';
echo '<br>';

//array walk function
function myWalk($key, $value)
{
    echo "The $key has the $value <br>";
}
$array = ["car" => "volvo", "color" => "blue", "Animal" => "Dog"];
array_walk($array, "myWalk");
echo '<br>';
echo '<br>';

// array walk recursive
function recursiveWalk($key, $value)
{
    echo "This $key has a $value <br>";
}
$array1 = ["car" => "volvo", "color" => "blue", "Animal" => "Dog"];
$array2 = [$array1, "home" => "3bhk", "suzuki" => "Alto"];
array_walk_recursive($array2, "recursiveWalk");
echo '<br>';
echo '<br>';

//arsort is a desending order to perform this function
$age = ["piter" => "22", "jio" => "25", "vodaphon" => "23", "Artel" => "42"];
arsort($age);
foreach ($age as $key => $value) {
    echo "This name $key is age $value <br>";
}
echo '<br>';
echo '<br>';


//asort is assending order
$age = ["hardik" => "20", "varun" => "32", "king" => "43", "varma" => "33"];
asort($age);
foreach ($age as $key => $value) {
    echo "This name $key is a Age $value <br>";
}
echo '<br>';

//compect arry function
$firstname = "varma";
$lastname = "tilak";
$age = "32";

$name = ["firstname", "lastname", "age"];
$result = compact($name, "$age");
print_r($result);
echo '<br>';
echo '<br>';

//count array function return the number of array
$color = ["red", "blue", "green", "dark"];
print_r(count($color));
echo '<br>';
echo '<br>';

//each function show the current value and key
// $col=["red","blue","green","dark"];
// print_r(each($col));

//end function show the last element
$color = ["red", "blue", "green", "dark"];
print_r(current($color));
echo '<br>';
print_r(end($color));
echo '<br>';

//in array function search array 
$color = ["gold", "red", "blue", "green", "dark"];
if (in_array("green", $color)) {
    echo "Match success";
} else {
    echo "Match not success";
}
echo '<br>';
echo '<br>';

//key function return the array key 
$color = ["gold", "red", "blue", "green", "dark"];
echo "this is color key is " . key($color);
echo '<br>';
echo '<br>';

//krsort show the decending value

$age = ["hardik" => "20", "varun" => "32", "king" => "43", "varma" => "33"];
krsort($age);
foreach ($age as $k => $value) {
    echo "key=" . $k . ",value=" . $value;
    echo '<br>';
}
echo '<br>';

//list function used for listing of array
$color = ["gold", "red", "blue", "green", "dark"];
list($a, $b, $c) = $color;
echo "this is a color $a, $b and $c";

//rsort function to show the decending order
$color = ["gold", "red", "blue", "green", "dark"];
rsort($color);

$clenth = count($color);
for ($a = 0; $a < $clenth; $a++) {
    echo $color[$a];
    echo '<br>';
}
echo '<br>';
echo '<br>';

//shuffle function use of randam 
$color = ["gold", "red", "blue", "green", "dark"];
shuffle($color);
print_r($color);
echo '<br>';

//size of array function 
$color = ["gold", "red", "blue", "green", "dark"];
print_r(sizeof($color));
echo '<br>';
echo '<br>';

//sort function
$color = ["gold", "red", "blue", "green", "dark"];
sort($color);
print_r($color);
echo '<br>';


