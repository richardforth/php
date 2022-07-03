<?php

/* foreach loops (construct) iterate over a collection of itmes, for example an array of names */

$names = array('Alex', 'Billy','Dale');

/* originally the tutor used $value, but $value does not self-document */
foreach($names as $name) {
    echo "$name<br>";
}
echo "<hr>";



/* previously we saw us looping through a kind of dict array structure type by modifying the array */
/* now we can loop trhough that struct without modifying! (see arrays.php for what we did previously)*/

$ageOf = array('Alex'=>21,'Billy'=>16,'Dale'=>49);

/* key and value works here because its similar to a dict type */
foreach($ageOf as $key => $value) {
   echo "$key is $value years old.<br>";
}

echo "<hr>";


/* But as you know I like self-documenting code */
/* lets swap $key for $name */
/* lets swap $value for $age */
foreach($ageOf as $name => $age) {
    echo "$name is $age years old.<br>";
 }
// now we can see much more clearly what's going on.

?>