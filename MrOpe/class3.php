
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <div>
        <form action="" method="POST">
            <input type="number" name="x">
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>


<?php


if (isset($_POST['x'])){
    $x = $_POST['x'];
    if ($x > 0 && $x <= 30){

    $cars = ["Volvo", "Benz", "Jeep", "Honda", "Suzuki"];

        foreach($cars as $car) {
            echo  $car . "<br>";
        }
    }
}

?>