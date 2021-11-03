<!DOCTYPE html>
<html lang="en">
<head>

<style>
h3 {
    color: blue;
    border: 1px solid black;
    background-color: #72b3b3;
    margin: 0px 586px;
}


</style>
  <title>Document</title>
</head>
<body style="text-align: center;">

<h3>Tax Calculator</h3><br>
<form action="" method="POST">
<input type="text" placeholder="Enter name here" name="username" id="" required> <br><br>
<input type="number" placeholder="Pay rate"  name="payRate" id=""><br><br>
<input type="number" placeholder="Hours worked" name="hoursWorked" id="" required><br><br>
<button type="submit"> submit</button>

</form>
  
</body>
</html>




<?php

if (isset($_POST["username"]) && isset($_POST["payRate"]) && isset($_POST["hoursWorked"])){
  $username = $_POST['username'];
  $payRate = $_POST['payRate'];
  $hoursWorked = $_POST['hoursWorked'];
  $defaultrate = 20;
  if($payRate < 0){

      $amountEarned = ($defaultrate * $hoursWorked);
  }else{

      $amountEarned = ($payRate * $hoursWorked);
  }

  
  $lowIncomeTax = (0.015 * $amountEarned);
  $averageIncomeTax = (0.032 * $amountEarned);
  $highIncomeTax = (0.05 * $amountEarned);
  $lowIncomeNetpay = ($amountEarned - $lowIncomeTax);
  $averageIncomeNetpay = ($amountEarned - $averageIncomeTax);
  $highIncomeNetpay = ($amountEarned - $highIncomeTax);
    if ($amountEarned <= 1000) {
        echo $username . " worked for " . $hoursWorked . "hours," . " and earned " . "$" . $amountEarned . " Grosspay. " . 
        $username . " was taxed 1.5% for a net pay total of " . "$". $lowIncomeNetpay . " because he is a Low income earner.";
      }
      else if ($amountEarned > 1000 && $amountEarned < 5000){
        echo $username . " worked for " . $hoursWorked . "hours," . " and earned " . "$" . $amountEarned . " Grosspay. " . 
        $username . " was taxed 3.2% for a net pay total of " . "$".  $averageIncomeNetpay . " because he is an Average income earner.";
      }
      else if ($amountEarned > 5000){
        echo $username . " worked for " . $hoursWorked . "hours," . " and earned ". "$" . $amountEarned . " Grosspay. " . 
        $username . " was taxed 0.5% for a net pay total of ". "$" . $highIncomeNetpay . " because he is an High income earner.";
      }
}

?>
