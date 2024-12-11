

document.getElementById("demo").innerHTML="hello";

// alert(33+33);

let a,b,c

a= 10;
b=22;
c= a+b;

// a = 5; b = 6; c = a + b;
document.getElementById("demo1").innerHTML= c;

function clickfun(){
    document.getElementById("click1").innerHTML= "Hello, Good Morning";
    document.getElementById("click2").innerHTML= "How Are You!";
}
let carName = 'BMW';
document.getElementById("car").innerHTML= carName;

let x = myFunction(4, 3);
document.getElementById("demofun").innerHTML = x;

function myFunction(a, b) {
  return a * b;
}


const person={
    firstName:"John",
     lastName:"Doe", age:50,
      eyeColor:"blue"
};
document.getElementById("obj").innerHTML = person.firstName +" age is " + person.age;


const person2 = new Object();
person.firstName = "John";
person.lastName = "Doe";
person.age = 50;
person.eyeColor = "blue"; 

document.getElementById("obj").innerHTML = person.firstName +" age is " + person.age;


// window.alert(6 + 6);


function displayDate() {
    document.getElementById("date").innerHTML = Date();
  }


  // AJax Start

  function loadDoc() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("demo").innerHTML =
        this.responseText;
      }
    };
    xhttp.open("GET", "demo.txt", true);
    xhttp.send();
  }

  // $(document).ready(function(){

  // });
