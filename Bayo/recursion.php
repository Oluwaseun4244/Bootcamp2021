<?php


function multiArray(array $expectedArray)
{
   foreach ($expectedArray as $child) {
      if (is_array($child)) {
         multiArray($child);
      } else if (!is_array($child)) {
         echo " The value is $child <br>";
      }
   }
}





$arrayPassed = [["Testing", ["child in a child", ["Please", ["I DEY BEG YOU"]]], [88888], [999]], 9, "One", [8, "Tola", 9.4, [123]], ["Suzan", 99, ["child in a child"]], "Another", ["One", "Two", "Three"]];

multiArray($arrayPassed);


