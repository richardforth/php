<?php

ini_set('display_errors', 'On');

$db = new mysqli('localhost','mysqli', 'mysqli_password_goes_here', 'mysqli');

$sql = "SELECT email, first_name, last_name FROM users WHERE first_name = ?";

$prepared = $db->prepare($sql);

$prepared->bind_param('s', $_GET['first_name']);

$prepared->execute();

//echo '<pre>', var_dump($prepared),'</pre>';

$prepared->bind_result($email, $firstName, $lastNname);

$prepared->fetch();

echo '<pre>', var_dump($prepared),'</pre>';

echo '<hr>';

echo $email;
echo $firstName;
echo $lastName;
?>