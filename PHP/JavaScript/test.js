

document.getElementById("demo").innerHTML = "hello";

// alert(33+33);

let a, b, c

a = 10;
b = 22;
c = a + b;

// a = 5; b = 6; c = a + b;
document.getElementById("demo1").innerHTML = c;

function clickfun() {
  document.getElementById("click1").innerHTML = "Hello, Good Morning";
  document.getElementById("click2").innerHTML = "How Are You!";
}
let carName = 'BMW';
document.getElementById("car").innerHTML = carName;

let x = myFunction(4, 3);
document.getElementById("demofun").innerHTML = x;

function myFunction(a, b) {
  return a * b;
}


const person = {
  firstName: "John",
  lastName: "Doe", age: 50,
  eyeColor: "blue"
};
document.getElementById("obj").innerHTML = person.firstName + " age is " + person.age;


const person2 = new Object();
person.firstName = "John";
person.lastName = "Doe";
person.age = 50;
person.eyeColor = "blue";

document.getElementById("obj").innerHTML = person.firstName + " age is " + person.age;


// window.alert(6 + 6);


function displayDate() {
  document.getElementById("date").innerHTML = Date();
}


// AJax Start

function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
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


// JavaScript Loops

const car = ['Audi', 'BMW', 'Volvo', 'Alto'];
let text = "";
for (i = 0; i < car.length; i++) {
  text += car[i] + "<br>";

}
document.getElementById("loop").innerHTML = "for loop <br>" + text;


//for in loop
const animal = { animal: "tiger", car: "Volvo", Fruit: "Apple", Bike: "Honda" };
let text1 = "";
for (const i in animal) {
  text1 += animal[i] + "<br>";

}
document.getElementById("loopfor").innerHTML = "This is For in Loop <br>" + text1;

//For OF loop
const aniamls = ['Tiger', 'Lion', 'Cat', 'Dog'];
let txt = "";
for (let i of aniamls) {
  txt += i + "<br>";
}
document.getElementById("loopforof").innerHTML = "This is For Of Loop: <br>" + txt;

// for of loop iterables

const animl = "Itrebales";
let itreble = "";
for (i of animl) {
  itreble += i + "<br>";
}
document.getElementById("iterables").innerHTML = "This is iterables <br>" + itreble;


// The While Loop

let text02 = "";
let i1 = 0;
while (i1 < 5) {
  text02 += "<br> This is Number Of " + i1;
  i1++;
}
document.getElementById("whileloop").innerHTML = "This is a while loop <br> " + text02;

// Do While Loop

let txt1 = "";  
let h = 5;
do {
  txt1 += "<br> This is Number Of " + h;
  h++;
} while (h < 10);

document.getElementById("dowhileloop").innerHTML = "This is a Do while loop <br> " + txt1;


