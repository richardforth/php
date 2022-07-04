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


// implode an array into a string - the manual way
$likes_str = null;
foreach ($likes as $key => $like) {
    $likes_str .= $like;
    if ($key != (count($likes) -1)) {
        $likes_str .= ',';
    } 
}

echo "Imploded back to a string the manual way:<br>";
echo "<pre>";
echo $likes_str; 
echo "</pre><br>"


?>