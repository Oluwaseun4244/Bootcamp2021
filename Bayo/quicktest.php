<?php

function compareTriplets($a, $b) {
    $Alice = 0;
    $Bob = 0;
foreach(array_combine($a,$b) as $a1 => $b1){
   echo $a1 . "<br>";
   echo $b1 . "<br>" . "<br>";
   if($a1 > $b1){
       $Alice += 1;
   } else if($a1 < $b1){
       $Bob += 1;
   } else {
   
   $Alice += 0;
   $Bob += 0;
   
   }

}
   $result = [$Alice, $Bob];
   return $result;

}

compareTriplets(["A1","A2","A3","A4","A5"], ["B1","B2","B3","B4","B5"]);
// echo $result;
