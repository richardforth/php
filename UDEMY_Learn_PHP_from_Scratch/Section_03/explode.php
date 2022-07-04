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

?>