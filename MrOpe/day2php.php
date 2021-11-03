<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div>
        <form action="" method="POST">
            <h3>C of a circle</h3>
            <input type="number" name="radius"> <br><br>
            <!-- <input type="number" name="height"> <br><br> -->
            <button>Get result of circle</button>
        </form>

    </div>
</body>

</html>


<?php

function circumference($r)
{
    return (2 * 3.14 * $r);
}


if (isset($_POST["radius"])) {
    $radius = $_POST["radius"];

    $result = circumference($radius);

    echo $result;
}

?>

