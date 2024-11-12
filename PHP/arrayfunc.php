<?php declare(strict_types=1);
// Array func
$car = ["BMW","Volvo","Creta"];
echo"This a car ".$car[0]." car best of a car".$cae[1];
echo'<br>';

//array change key case

$arry=["hardik"=>"20","kartik"=>"24","jeo"=>"43"];
print_r(array_change_key_case($arry,CASE_UPPER));
echo'<br>';
echo'<br>';

//column array
$a=[

    ["id"=>01,
    "firstname"=>"hardik",
    "lastname"=>"vankar",
],

    ["id"=>02,
    "firstname"=>"kartik",
    "lastname"=>"varma",
],
];

$last_name=array_column ($a,'last_name');
print_r($last_name);
echo'<br>';

//array combine

$arra=["hardik","kartik","varun","akshar"];
$com=["23","22","53","23"];
$co= array_combine($arra,$com);
print_r($co);
echo'<br>';
echo'<br>';


// array count

$array=["This","is","Best","of","india","is","india"];
$coun=array_count_values($array);
print_r($coun);
echo'<br>';
echo'<br>';

//array diff

$a1=["hardik"=>"20","suryakumar"=>"35","kartik"=>"24","jeo"=>"43"];
$a2=["varun"=>"22","kartik"=>"24","jeo"=>"43"];
$res=array_diff($a1,$a2);
print_r($res);
echo'<br>';

//array diff_key

$a1=["a"=>"yellow","b"=>"green","c"=>"blue"];
$a2=["a"=>"yellow","d"=>"green","c"=>"blue"];
$res= array_diff_key($a1,$a2);
print_r($res);
echo'<br>';
echo'<br>';

//array fill

$a=array_fill(3,6,"green");
print_r($a);
echo'<br>';
echo'<br>';


//array key fill value
$array=["21","22",'23','24'];
$res= array_fill_keys($array,"green");
print_r($res);
echo'<br>';
echo'<br>';

//array flip

$array=["a"=>"yellow","d"=>"green","c"=>"blue"];
$res=array_flip($array);
print_r($res);
echo'<br>';
echo'<br>';

//array filter

function odd($var){
    return ($var & 1);
}
$arr=[1,2,3,4,5,6,7,8,9];
print_r(array_filter($arr,"odd"));
echo'<br>';
echo'<br>';

//array intersect
//in this function only value same 

$a1=["a"=>"yellow","s"=>"green","b"=>"blue","d"=>"white"];
$a2=["a"=>"yellow","d"=>"green","c"=>"blue"];
$res=array_intersect($a1,$a2);
print_r($res);
echo'<br>';
echo'<br>';

// array intersect assoc
//in this a key and value same 
$a1=["a"=>"yellow","b"=>"green","c"=>"blue","d"=>"white"];
$a2=["a"=>"yellow","b"=>"green","c"=>"blue"];
$res= array_intersect_assoc($a1,$a2);
print_r($res);
echo'<br>';
echo'<br>';

//array intersect key
//in this function mathc all keys then return the mathces key

$a1=["a"=>"yellow","b"=>"green","c"=>"blue","d"=>"white"];
$a2=["d"=>"yellow","b"=>"green","c"=>"blue"];
$res=array_intersect_key($a1,$a2);
print_r($res);
echo'<br>';
echo'<br>';



