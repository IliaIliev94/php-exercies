<?php
function simpleFunction(){
    echo 'Hello World';
}

function sayHello($name = 'World'){
    echo "Hello $name<br>";
}
//sayHello('Ilia');

function addNumbers($num1, $num2){
    return $num1 + $num2;
}
//echo addNumbers(5, 5);

//By Referance

$myNum = 10;

function addFive($num){
    $num += 5;
}
function addTen(&$num){
    $num += 10;
}
addFive($myNum);

echo "Value: $myNum<br>";

addTen($myNum);

echo "Value: $myNum<br>";
?>