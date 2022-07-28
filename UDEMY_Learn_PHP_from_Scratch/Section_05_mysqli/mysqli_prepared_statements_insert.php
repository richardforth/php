<?php

ini_set('display_errors', 'On');

$db = new mysqli('localhost','mysqli', 'mysqli_password_goes_here', 'mysqli');

if (!empty($_POST)) {
    $email = $_POST['email'];
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];

    $sql = "INSERT INTO users (email, first_name, last_name, created) VALUES (?, ?, ?, NOW())";

    $prepared = $db->prepare($sql);

    /* $prepared->bind_param('s', $email);
    $prepared->bind_param('s', $firstName);
    $prepared->bind_param('s', $lastName); */

    // alternative binding
    $prepared->bind_param('sss', $email, $firstName, $lastName);

    $prepared->execute();

}


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>MySQLI Escaping</title>
    </head>
    <body>
    <form action="escaping.php" method="POST">
    <p>First Name:<br><input type="text" name="first_name"><br></p>
    <p>Last Name:<br><input type="text" name="last_name"><br></p>
    <p>Email:<br><input type="text" name="email"><br></p>
    <p><input type="submit" value="Submit"></p>
    </form>
    
    </body>
</html>

