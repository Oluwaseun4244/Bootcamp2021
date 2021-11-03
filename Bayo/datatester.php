<?php


function dataTypeTester($data){
    
    if (gettype($data) == "string"){
        echo "This is a string";
    } else if(gettype($data) == "integer"){
        echo "This is an Integer";
    } else if(gettype($data) == "boolean"){
        echo "This is a Boolean";
    } else if(gettype($data) == "array"){
        echo "This is an Array";
    } else if(is_float($data) == "float "){
        echo "This is a Float";
    }
}

dataTypeTester("Tola");