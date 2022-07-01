<?php


/*


+ Addition
- Subtraction
/ division
* multiplication


++ increment
-- decrement

% modulus


*/


// Dont forget that BODMAS applies:
// Brackets, Orders, Division. Multiplication, Addition and Subtraction

$num1 = 10;
$num2 = 2;

// this example results in 11 (an unexpected result)
$result  = $num1 + $num2 / $num2;
echo $result;

echo "<hr>";

// this example results in 6 (the expected result)
$result  = ($num1 + $num2) / $num2;
echo $result;


?>
