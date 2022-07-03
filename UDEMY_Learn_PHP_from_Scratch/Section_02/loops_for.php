<?php

/* I noticed that PHP for loops have a similar structure to C for loops */
/*  - see https://github.com/richardforth/C/blob/main/for_loop.c for comparison */

$somevariable = 10;
for ($i = 1; $i <= $somevariable; $i++) {
    echo "$i<br>";
}

?>