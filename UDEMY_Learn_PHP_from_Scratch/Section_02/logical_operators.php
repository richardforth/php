<?php

/*

 Logical operators


! NOT
&& AND
|| OR



*/


// && AND Operator

$num = 50;

if ($num>=1 && $num <=100) {
  echo "Number is fine";
} else {
  echo "Number must be betweem 1 and 100, inclusive.";

}


echo "<hr>";

// || OR Oerator

$name = 'Josh';

if ($name=='Alex' || $name=='Billy' || $name =='Josh') {
  echo 'Hello there!';
} else {
  echo 'Go away.';
}


?>
