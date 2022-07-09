<?php

$db = new mysqli('localhost','mysqli', 'mysqli_password_goes_here', 'mysqli');

$usersQuery = $db->query("
    SELECT email, created, CONCAT(first_name, ' ', last_name) as full_name, first_name, last_name from users
");

$users = $usersQuery->fetch_object()->email;

// https://www.php.net/manual/en/mysqli-result.free.php
$usersQuery->free();

// close the db connection
$db->close();

?>