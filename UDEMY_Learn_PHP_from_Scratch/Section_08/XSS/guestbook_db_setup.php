<?php

$instructions1 = "create database guestbook;\ncreate user 'gb_user'@'localhost' identified by 'gb_password_goes_here';";
$instructions2 = "grant all privileges on guestbook.* to 'gb_user'@'localhost';";

// never put root credentials in a php script, it gives too much access  to people who can see this file

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); // Set MySQLi to throw exceptions


try {
    // order is host, username, password, database
    //$db = new mysqli('localhost','gb_user', 'gb_password_goes_here', 'guestbook');
} catch (mysqli_sql_exception $e) {
    echo "Please have your local DBA create a database and a user<br>";
    echo "<pre>". $instructions1 ."</pre>";
    echo "Then, grant privileges to that database to the new user";
    echo "<pre>". $instructions2 ."</pre>";
    echo "<hr>";
    echo "Then edit this script with the new credentials and run it again.";
}

if (isset($db)) {
    echo "[OK] Database Connection established";
    // create table users
    echo "<br>Creating table 'users'...";
        $sql = "create table if not exists users (
        id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        email VARCHAR(255),
        password VARCHAR(255)
    )";
    $prepared = $db->prepare($sql);
    $prepared->execute();
    echo "DONE.";
    // create table posts
    echo "<br>Creating table 'posts'...";
        $sql = "create table if not exists posts (
        post_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        post_body VARCHAR(255)
    )";
    $prepared = $db->prepare($sql);
    $prepared->execute();
    echo "DONE.";
    // insert some dummy post data
    echo "<br>Creating dummy post content...";
    $sql = "insert into posts (post_body) values ('What a a lovely wedding')";
    $prepared = $db->prepare($sql);
    $prepared->execute();
    $sql = "insert into posts (post_body) values ('Pizza was a-mazing, will buy again, oops sorry wrong site')";
    $prepared = $db->prepare($sql);
    $prepared->execute();
    echo "DONE.";
} else {
    echo "This script has already been run";
}

?>