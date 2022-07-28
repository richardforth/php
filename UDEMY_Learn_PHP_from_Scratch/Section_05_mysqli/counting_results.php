<?php

$db = new mysqli('localhost','mysqli', 'mysqli_password_goes_here', 'mysqli');

$users = $db->query("
    SELECT email, created, CONCAT(first_name, ' ', last_name) as full_name, first_name, last_name from users
");

// another way
$count = $db->query("
    SELECT COUNT(*) as count from users
");

$count = $count->fetch_object();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>MySQLi Counting Results</title>
    </head>
    <body>
        <p>We currently have <?php echo $users->num_rows; ?> registered users.</p> <!-- using num_rows property -->
        <p>We currently have <?php echo $count->count; ?> registered users.</p> <!-- using select count  -->
        <?php while ($user = $users->fetch_object()): ?>
            <h3><?php echo $user->full_name; ?></h3>
            <p><?php echo $user->email; ?></p>
        <?php endwhile; ?>
    </body>
</html>