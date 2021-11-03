<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>THIS IS JUST A TEST</h3>

    <form action="" method="POST">
        <input type="number" name="length" >
        <input type="number" name="breadth">
        <button name="calculate">Calculate</button>
    </form>
</body>

</html>


<?php
// $a = 10;
// $b = 0;

// while ($b < $a){
//     echo $b . "<br>";
//     $b += 2;
// } 
function rectangle($l,$b){
    return $l * $b;
}


if(isset($_POST["calculate"])){
    $length2 = 8;
    $length = $_POST["length"];
    $breadth = $_POST["breadth"];

    echo rectangle($length, $breadth);

    
}





?>