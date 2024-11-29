<?php

//create class and object

class mathOpretion
{
    function sum($a, $b)
    {
        echo $a + $b;
    }
    function multi($a, $b)
    {
        echo $a * $b;
    }
    function sub($a, $b)
    {
        echo $a - $b;
    }
    function division($a, $b)
    {
        echo $a / $b;
    }
}

$math = new mathOpretion();
$math->sum(20, 20);
echo "<br>";
$math->sum(30, 20);
echo "<br>";
$math->sum(50, 20);
echo "<br>";
$math->multi(23, 31);
echo "<br>";
$math->sub(22, 23);
echo "<br>";
$math->division(32, 2);
echo "<br>";


//propertiec

class propertic
{
    public $name = "hardik"; //propertiec
    function getname()
    {
        echo $this->name;
    }
    function updname($name)
    {
        $this->name = $name;
    }
}
$pro = new propertic();
$pro->updname("varun");
echo "<br>";
$pro->getname();
echo "<br>";

//constructor
class constructorDemo
{
    public $name = "hardik1";
    function __construct()
    {
        echo $this->name;
    }
    // function displyaName(){
    //     echo $this->name;
    // }
}

$constr = new constructorDemo("hardik Display");
echo "<br>";
// $constr->displyaName();

// inheritance

class Auth
{
    function login($userType)
    {
        echo "$userType Logged in successfully ";
    }
}
class student extends Auth
{
    function getname()
    {
        echo "student login";
    }
}
class teacher extends Auth {}

$log = new Auth();
$log->login("student");
echo "<br>";
$log->login("Teacher");
echo "<br>";
// $log = new student();
// $log->getname();

//Access modifiers
// there are three types of access mofifires public private protected
class teacher1
{
    private function paper()
    {
        return "important";
    }
    public function exam()
    {
        if ($this->paper() == "important") {
            echo "Do somthing";
            echo "<br>";
        } else {
            echo "do else";
            echo "<br>";
        }
    }
    protected function markStudent()
    {
        echo "Student marks";
        echo "<br>";
    }
}
class managment extends teacher1
{
    function review()
    {
        $this->markStudent();
    }
}

$paper = new teacher1();
$paper->exam();

$manag = new managment();
$manag->review();

//constant create or call
class constentDemo
{
    const city = "HIMMATNAGR ";
    function getcityName()
    {
        // echo self::city;
        echo "<br>";
        // echo constentDemo::city;
    }
}
echo constentDemo::city;
echo "<br>";
$city = new constentDemo();
$city->getcityName();
echo "<br>";

//static method
class staticMethod
{
    static public $contryName = "india";
    static function getName()
    {
        echo "Hello everyone";
    }
}
staticMethod::getName();
echo "<br>";
echo staticMethod::$contryName;
echo "<br>";

//Abstract class
//abstract class is only define for parent class and impliment for childe class
abstract class productFeaturs
{
    abstract function Details();
    abstract function Image();
    abstract function Owner();
}

class updProduct extends productFeaturs
{
    function Details()
    {
        echo "product Details";
    }
    function Image()
    {
        echo "Product Image";
    }
    function Owner()
    {
        echo "Product Owner";
    }
}

$product = new updProduct();
$product->Details();
echo "<br>";
$product->Image();
echo "<br>";
$product->Owner();
echo "<br>";

//interface in only use of methode not use for propertiec can not start interface key in function create 
// can not create function implimention for parent class 

interface productMain
{
    public function productName();
    public function productImage();
    public function productOwner();
}
class uploadProduct implements productMain
{
    function productName()
    {
        echo "product name car";
    }
    function productImage()
    {
        echo "product image";
    }
    function productOwner()
    {
        echo "product owner name varma";
    }
}
$product = new uploadProduct();
$product->productName();
echo "<br>";
$product->productImage();
echo "<br>";
$product->productOwner();
echo "<br>";
echo "<br>";

// Traits use of a multiple parents class used in one childe class using use keyword

trait companyMain1
{
    function compnyTotalemp()
    {
        echo 100;
    }
}
trait companyMain2
{
    function compnyTotaloffice()
    {
        echo 21;
    }
}
trait companyMain3
{
    function compnyStaff()
    {
        echo 56;
    }
}
class company
{
    use companyMain1;
    use companyMain2;
    use companyMain3;

}

$com = new company();
$com->compnyTotalemp();
echo "<br>";
$com = new company();
$com->compnyTotaloffice();
echo "<br>";
$com = new company();
$com->compnyStaff();
echo "<br>";
echo "<br>";

//itreble
function test(iterable $myIterable)
{
    foreach ($myIterable as $item) {
        echo $item;
    }
}
$arr = ["a", "b", "c"];
test($arr);
echo "<br>";
echo "<br>";

//static property

class stati{
    public static $temp="Hello static property";
}
echo stati::$temp;
echo "<br>";
echo "<br>";


//destructor
class fruit{
    public $name;
    public $salary;


    function __construct($name,$salary){
        $this->name=$name;
        $this->salary=$salary;

    }
    function __destruct(){
        echo "The furits is {$this->name}";
    }
}
$app = new fruit("apple",20.000);


