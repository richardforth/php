<?php
echo "String:<br>";
$likes =  'eating,drinking,the gym,pizza';
echo "<pre>";
echo $likes;
echo "</pre><br>";

$likes = explode(',', $likes);

echo "Exploded string into array:<br><br>";

echo "<pre>";
print_r($likes);
echo "</pre>";


// implode an array into a string
$likes = implode(',', $likes);

echo "Imploded back to a string:<br>";
$likes =  'eating,drinking,the gym,pizza';
echo "<pre>";
echo $likes;
echo "</pre><br>"

?>