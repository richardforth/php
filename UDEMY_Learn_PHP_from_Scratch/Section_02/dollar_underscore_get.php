<form action="dollar_underscore_get.php" method="GET">
    Name<br><input type="text" name="name"><br>
    Age<br><input type="text" name="age"><br><br>
    <input type="submit" value="Submit">
</form>


<?php

/* $_GET */
//  http://localhost/php/UDEMY_Learn_PHP_from_Scratch/Section_02/dollar_underscore_get.php?name=Alex&age=21

// pick up the associative array from the URL
$name = $_GET['name'];
$age = $_GET['age'];

if(isset($name)&&isset($age)) {
    if (!empty($name) &&!empty($age)) {
        echo "I am $name, and I am $age years old.";
    }
} else {
    echo "Please type something.";
}

?>