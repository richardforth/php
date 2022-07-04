<?php

$string1 = "Blue car";
$keywords1 = explode(' ', $string1);


echo "String 1:";
echo "<pre>";
echo $string1;
echo "</pre><br>";

echo "Keywords 1 (exploded):";
echo "<pre>";
echo print_r($keywords1);
echo "</pre><br>";


// Explode doesnt work well with string with multiple spaces (aka whitespace)
$string2 = "  Red     car    ";
$keywords2 = explode(' ', $string2);


echo "String 2:";
echo "<pre>";
echo $string2;
echo "</pre><br>";

echo "Keywords 2 (exploded):";
echo "<pre>";
echo print_r($keywords2);
echo "</pre><br>";


// Lets try a better way
$keywords3 = trim($string2);
$keywords3 = preg_split('/[\s]+/', $keywords3);

echo "Keywords 3 (manually split on whitespace):";
echo "<pre>";
echo print_r($keywords3);
echo "</pre><br>";


?>