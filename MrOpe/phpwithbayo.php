<?php

// echo "hello world";

// $adekoya = "adekoya";
// $floatadebayo = 9.02;
// $intadebayo = 9;
// $booleanadebayo = true;


// echo $adekoya . "<br> ". 
//     $floatadebayo . "<br> ". 
//     $intadebayo . "<br>". 
//     $booleanadebayo . "<br>";

//     $typetest = gettype($intadebayo);
//     echo $typetest;


// $firstarray = [];
// $firstarray = [];
// $firstarray = [];
// $firstarray = [];
// $firstarray = [];

// $firstarray[] =  "firsts";
// $firstarray[] =  "first2";
// $firstarray[] =  "firsts3";
// $firstarray[] =  "firsts3";


// var_dump($firstarray[2]);

// echo $firstarray[2];


//array that has all the data types

// $firstarray = ["String", 8, true, 100.3];
// $firstarray2 = [["String", 8, true, 100.3], ["This", "is", "the", "second", "array"]] ;


//THE BELOW CODE ACTUALLY WORKED

// $array1 = ["Testme", ["Please"], ["String", 8, true, 100.3], ["This", "is", "the", "second", "array"], 9, 0];

// for ($i = 0; $i < count($array1); $i++) {

//     if (gettype($array1[$i]) == "array") {

//         for ($j = 0; $j < count (($array1[$i])); $j++) {

//             echo $array1[$i][$j] . "<br>";
//         }
//     }
// }

//THE ABOVE CODE ACTUALLY WORKED



$arrToBeLooped = [
    [
        "name" => "Tola",
        "age" => 10,
        "phone" => 1234,
        "class" => 9,
        "food" => "beans"
    ],
    [
        "name" => "Tobi",
        "age" => 11,
        "phone" => 12345,
        "class" => 10,
        "food" => "rice"
    ],
    [
        "name" => "Tolu",
        "age" => 12,
        "phone" => 123456,
        "class" => 11,
        "food" => "noodles"
    ],
    [
        "index" =>"Tola",
        "Banjo"
    ]
];

// $arrToBeLooped = json_decode($js, true);

foreach ($arrToBeLooped as $propOrIndex1 => $eachArray) {
    
    echo "The array " . $propOrIndex1 + 1 . "<br>";
    // echo $eachArray;

    foreach ($eachArray as $propOrIndex2 => $value) {
        // if ($eachArray === 2){
        //     $prop[$eachArray]["age"] = 99;
        // }
        
        print_r(ucfirst($propOrIndex2) . ":" . $value . "<br>") ;
    }
};
