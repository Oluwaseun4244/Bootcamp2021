<?php


function threeparam(int $integer, float $Float, string $String){
    $converTedFloat = intval($Float);

    $result = ($integer + $converTedFloat)/1000 . " " . $String;
    echo $result;
}

threeparam(5000, 5000.7, "Happy");


?>
