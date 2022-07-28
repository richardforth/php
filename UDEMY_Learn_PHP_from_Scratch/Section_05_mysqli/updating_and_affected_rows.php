<?php

$db = new mysqli('localhost','mysqli', 'mysqli_password_goes_here', 'mysqli');

$updateUser = $db->query("
    UPDATE users SET last_name = 'Smith'
");

echo "{$db->affected_rows} row(s) updated.";

?>