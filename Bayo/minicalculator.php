<?php

function add($param1, $param2){
    echo "addition result = " . $param1 + $param2 . "<br>";
}
function subtract($param1, $param2){
    echo "subtraction result = " . $param1 - $param2 . "<br>";
}
function multiply($param1, $param2){
   echo "multiply result = " .  $param1 * $param2 . "<br>";
}
function division($param1, $param2){
    echo "division result = " . $param1 / $param2 . "<br>";
}
function modulus($param1, $param2){
    echo "modulus result = " . $param1 % $param2 . "<br>";
}

add(5,5);
subtract(5,5);
multiply(9,5);
division(5,5);
modulus(10,5);

