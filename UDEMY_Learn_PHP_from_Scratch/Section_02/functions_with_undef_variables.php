<?php

/* functions with undefined variables */

// Previous function
function previous_add_func($num1, $num2, $num3) {
    return $num1 + $num2 + $num3;
}

echo previous_add_func(5, 3, 2);
echo "<hr>";

// function that handles undefined variables
function add() {
    $total = 0;
    foreach(func_get_args() as $arg) {
        $total += (int)$arg;
    }
    return $total;
     
}

echo add(5, 3, 2);
echo "<br>";
echo add(5, 3, 2,20, 43, 27);
echo "<br>";
echo add(5, 3, 2,20, 43, 27, 300, 546, 244);


/* Grabbing an initial parameter, and then any additional arguments after that */
function append($initial){
    $result = func_get_arg(0);
    foreach(func_get_args() as $key => $value) {
        if ($key >= 1) {
            $result .= ' ' . $value;
        }
    }
    return $result;
}
echo "<hr>";
echo append('Richard');
echo "<hr>";
echo append('Richard', 'Forth');
echo "<hr>";
echo append('Richard', 'Alan', 'Forth');

?>