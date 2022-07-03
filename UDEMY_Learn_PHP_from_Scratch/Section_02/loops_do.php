<?php

/* do while loops check the condition at the end of the statement 

Example:

do {


} while ();


...in this way the block will always run the first time.

*/

$num = 1;

// Traditional while loop will not execute the first loop
// As it evaluates at eth beginning of each loop
while ($num!=1) {
    echo "This (while loop)";
}


// Do loops runs the block at least once becaus ethe evaluation
// happens at the end of the block
do {
    echo 'That (do loop)';
} while ($num !=1);

// expected ouput: That (do loop)

?>