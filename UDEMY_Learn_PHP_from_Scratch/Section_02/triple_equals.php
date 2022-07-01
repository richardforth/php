<?php

/* triple equals 

=== A comparison that takes into consideration the data types eg 10 !== '10'


*/
  

// A surprising result, companing an integer and a string returns "Equal":
$number = 10;
$number2 = '10';

if ($number==$number2) {
  echo "Equal.";
} else {
  echo "Not equal.";
}


echo "<hr>";

if ($number===$number2) {
  echo "Equal.";
} else {
  echo "Not equal.";
}


?>
