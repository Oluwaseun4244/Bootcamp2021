<?php

function calculator($a, $b, $userOperator)
{
    $operator = ["+", "-", "/", "*", "%"];

    if (in_array($userOperator, $operator)) {
        $ourA = (float) $a; //converts the argument a to float
        $ourB = (float) $b; //converts the argument a to float
        $ourResult = 0;

        if ($userOperator == "+") {
            $ourResult =  $ourA + $ourB;

            return $ourResult;
        } elseif ($userOperator == "-") {

            $ourResult =  $ourA - $ourB;

            return $ourResult;
        } elseif ($userOperator == "/") {
            $ourResult =  $ourA / $ourB;

            return $ourResult;
        } elseif ($userOperator == "*") {

            $ourResult =  $ourA * $ourB;

            return $ourResult;
        }
    } else {
        echo "You are doing nonsense";
    }
}

echo calculator("9", 7, "*");
