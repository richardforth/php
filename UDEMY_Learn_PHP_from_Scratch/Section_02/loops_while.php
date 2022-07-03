<?php

/* while loop to count down from 10 to 0 */
$num = 10;


while ($num>=0) {
    echo $num.'<br>';
    $num--;
}


/* Another way to write a while loop is with while endwhile */
/* Here we count down from 30 to 0 */
$num = 30;

while ($num>=0):
    echo $num.'<br>';
    $num--;
endwhile


?>