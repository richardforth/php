<?php

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

/* FETCH_ALL and looping with foreach*/
//echo "<pre>", var_dump($users->fetchAll(PDO::FETCH_ASSOC)), "</pre>";
/* $users = $users->fetchAll(PDO::FETCH_ASSOC);
foreach ($users as $user) {
    echo $user['email'], '<br>';
} */

$users = $users->fetchAll(PDO::FETCH_OBJ);

foreach ($users as $user) {
    echo $user->email, '<br>';
}

// kill the page here if neccessary to end processing
die();

?>

<!--
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PDO</title>
    </head>
    <body>
        <?php //while ($user = $users->fetchObject()): ?>
            <div class="user">
                <h4><?php //echo $user->first_name; ?></h4>
                <p><?php //echo $user->email; ?></p>
            </div>
        <?php //endwhile; ?>
    </body>
</html>
        -->


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
