<?php

/* Formatting numbers */

$num = 25123;
echo 'I have &pound;', $num;
echo "<hr>";
echo 'I have &pound;', number_format($num);
echo "<hr>";
$num = 25123567;
echo 'I have &pound;', number_format($num);
echo "<hr>";
$num = 25123567.123456;
echo 'I have &pound;', number_format($num,2);
echo "<hr>";
echo 'I have &pound;', number_format($num,2, '.', ",");
echo "<hr>";
echo 'I have &pound;', number_format($num,2, '_', "-");
echo "<hr>";
?>