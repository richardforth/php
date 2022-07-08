<?php

$db = new mysqli('localhost','mysqli', 'mysqli_password_goes_here', 'mysqli');

// this is a fast way of counting millions of rows of data quickly, it requires two queries
$count = $db->query("
    SELECT SQL_CALC_FOUND_ROWS id from users
");
$countResult = $db->query("
    SELECT FOUND_ROWS() as count
");

var_dump($countResult->fetch_object());