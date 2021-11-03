<?php


function multiArray(array $array)
{

   foreach ($array as $data) {
      if (!is_array($data)) {
         echo " The value is $data <br>";
      } else if (is_array($data)) {

         foreach ($data as $dat) {

            if (is_array($dat)) {
               foreach ($dat as $da) {
                  echo " The value is $da <br>";
               }
            } else if (!is_array($dat)) {

               echo " The value is $dat <br>";
            }
         }
      }
   }
   //print_r($data);
}



$arrayPassed = [["Testing", ["child in a child",], [88888], [999]], 9, "One", [8, "Tola", 9.4, [123]], ["Suzan", 99, ["child in a child"]], "Another", ["One", "Two", "Three"]];

multiArray($arrayPassed);


// function multiArray($array)
// {

//    foreach ($array as $arr => $data) {
//       if (gettype($data) != "array") {
//          print_r($data);
//       } else if (is_array($data)) {

//          foreach ($data as $dat) {

//             print_r($dat);
//          }
//       }
//    }
//    //print_r($data);
// }
