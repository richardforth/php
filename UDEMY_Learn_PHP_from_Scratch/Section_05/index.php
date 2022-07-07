<?php

/* mysqli integration */


/*

DB Prep:

create database mysqli;
create user 'mysqli'@'localhost' identified by 'mysqli_password_goes_here';
grant all privileges on mysqli.* to mysqli@localhost;
insert into users(email, first_name, last_name) values('bart@simpsons.com','Bart','Simpson');
insert into users(email, first_name, last_name) values('lisa@simpsons.com','Lisa','Simpson');
insert into users(email, first_name, last_name) values('homer@simpsons.com','Homer','Simpson');
insert into users(email, first_name, last_name) values('marge@simpsons.com','Marge','Simpson');


 * /

/*  Connect to the database using mysqli */
// 1. DB Host
// 2. username 
// 3. password
// 4. database_name
$db = new mysqli('localhost','mysqli', 'mysqli_password_goes_here', 'mysqli');

/* good idea to save the below into a new file and include it on every page that needs the database connection */
if ($db->connect_errno !== 0) {
    die("We are currently down, please try again soon.");
}

// eg: require_once 'db.php';

//echo '<pre>', var_dump($db), '</pre>';
/*
$user = $db->query("SELECT * FROM users WHERE id = 1");
echo '<pre>', var_dump($user), '</pre>';
echo "<hr>";
$user = $user->fetch_assoc();
echo '<pre>', var_dump($user), '</pre>';
echo "<hr>";
echo $user["email"];
echo "<hr>";
$user = $db->query("SELECT * FROM users WHERE id = 2");
$user = $user->fetch_assoc();
echo $user["email"];
echo "<hr>";
$user = $db->query("SELECT * FROM users WHERE id = 3");
$user = $user->fetch_assoc();
echo $user["email"];
echo "<hr>";
$user = $db->query("SELECT * FROM users WHERE id = 4");
$user = $user->fetch_assoc();
echo $user["email"];
echo "<hr>";
*/
//$users = $db->query("SELECT * FROM users");
$users = $db->query("SELECT email, created, CONCAT(first_name, ' ', last_name) as full_name FROM users");
//while ($row = $users->fetch_assoc()) {
//   echo "<pre>", print_r($row), "</pre>";
//}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>MYSQLI</title>
    </head>
    <body>
        <?php while ($row = $users->fetch_object()): ?>
            <p><?php echo $row->full_name; ?>, <?php echo $row->email; ?>, <?php echo $row->created; ?></p>
        <?php endwhile; ?>
    </body>
</html>