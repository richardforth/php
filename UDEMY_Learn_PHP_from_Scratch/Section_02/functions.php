<?php

/* PHP Functions */

function name1($name) {
    echo $name.'<br>';
}

name1('Alex');
name1('Billy');
name1('Josh');

/* using a return value */

function name2($name, $age) {
    return "My name is $name. I am $age years old.";
}

echo "<hr>";
$returnvalue = name2('Dale', 49);
echo $returnvalue;


function add($num1, $num2, $num3) {
    return $num1 + $num2 + $num3;
}
echo "<hr>";
echo add(5, 3, 2);

?>