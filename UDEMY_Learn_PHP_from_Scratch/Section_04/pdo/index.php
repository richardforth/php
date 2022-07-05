<?php

/* MariaDb 10.4 - application database user needed for this exercise */
// create user 'pdo'@'localhost' identified by 'pdo_user_password_goes_here';

/* Prepared database and table needed to work with in this exercise */
/*

create database pdo;

create database if not exists pdo;
use pdo;
create table if not exists users (
     id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
     email VARCHAR(255),
     first_name VARCHAR(255),
     last_name VARCHAR(255),
     created TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

insert into users(email, first_name, last_name) values('bart@simpsons.com','Bart','Simpson');
insert into users(email, first_name, last_name) values('lisa@simpsons.com','Lisa','Simpson');
insert into users(email, first_name, last_name) values('homer@simpsons.com','Homer','Simpson');
insert into users(email, first_name, last_name) values('marge@simpsons.com','Marge','Simpson');


*/


/* Manual testing the data

MariaDB [pdo]> select * from pdo.users;
+----+--------------------+------------+-----------+---------------------+
| id | email              | first_name | last_name | created             |
+----+--------------------+------------+-----------+---------------------+
|  1 | bart@simpsons.com  | Bart       | Simpson   | 2022-07-05 16:32:04 |
|  2 | lisa@simpsons.com  | Lisa       | Simpson   | 2022-07-05 16:32:04 |
|  3 | homer@simpsons.com | Homer      | Simpson   | 2022-07-05 16:32:05 |
|  4 | marge@simpsons.com | Marge      | Simpson   | 2022-07-05 16:32:05 |
+----+--------------------+------------+-----------+---------------------+
4 rows in set (0.000 sec)

*/

/*  Don't forget to grant the user permissions on the database ! */
// grant all privileges on pdo.* to pdo@localhost;


/* PDO Documentetion: */
// php.net/manual/en/pdo.drivers.php

/* Check for available PDO drivers */
//echo "<pre>"; var_dump(PDO::getAvailableDrivers()); echo "</pre>"

/* Connecting to and retreiving the data */

// --  optional, set error reporting on just to test there were no errors connecting
ini_set('display_errors', 'On');

try {
    $db = new PDO('mysql:host=localhost;dbname=pdo','pdo','pdo_user_password_goes_here');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Site is down.");
    /*echo "<pre>";
    print_r($e->getMessage());
    echo "</pre>";*/ 
}

/* try {
    $db->query("INVALID");
} catch(PDOException $e) {
    die("Something went wrong.");
} */

//throw new PDOException("We're in guys!");
$users = $db->query("
    SELECT * FROM users
");

/* these two are equivalent*/
//echo "<pre>", print_r($users->fetch()), "</pre>";
//echo "<pre>", print_r($users->fetch(PDO::FETCH_BOTH)), "</pre>";

//echo "<pre>", print_r($users->fetch(PDO::FETCH_ASSOC)), "</pre>";
//echo "<pre>", print_r($users->fetch(PDO::FETCH_NUM)), "</pre>";

/* these two are equivalent*/
//echo "<pre>", print_r($users->fetch(PDO::FETCH_OBJ)), "</pre>";
//echo "<pre>", print_r($users->fetchObject()), "</pre>";

/* Pull back just the email */
//echo "<pre>", var_dump($users->fetchObject()->email), "</pre>";
//echo "<pre>", var_dump($users->fetch(PDO::FETCH_ASSOC)['email']), "</pre>";

//$users = $users->fetch(PDO::FETCH_ASSOC);
//echo $users['email'];

//echo "<pre>", var_dump($users->fetchObject()), "</pre>";
//echo "<pre>", var_dump($users->fetchAll()), "</pre>";
//echo "<pre>", var_dump($users->fetchAll(PDO::FETCH_ASSOC)), "</pre>";

// Loop over the object
//while ($user = $users->fetchObject()) {
//   echo $user->email, '<br>';
//}
/*
bart@simpsons.com
lisa@simpsons.com
homer@simpsons.com
marge@simpsons.com
*/

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PDO</title>
    </head>
    <body>
        <?php while ($user = $users->fetchObject()): ?>
            <div class="user">
                <h4><?php echo $user->first_name; ?></h4>
                <p><?php echo $user->email; ?></p>
            </div>
        <?php endwhile; ?>
    </body>
</html>