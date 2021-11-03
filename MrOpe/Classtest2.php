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
$lateToWork = -5000;
$earlyToWork = 10000;
$baseSalary = 500000;
$transport = 100000;
$healthInsurance = 60000;
$query = -100000;


if (isset($_POST['x'])){
    $x = $_POST['x'];
    {
        
        echo "Your salary is " . $baseSalary - ($x*$lateToWork) + $earlyToWork + $healthInsurance - ($x*$query) + $transport;
    }
  }


?>