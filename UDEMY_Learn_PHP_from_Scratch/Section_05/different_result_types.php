<?php

$db = new mysqli('localhost','mysqli', 'mysqli_password_goes_here', 'mysqli');

$users = $db->query("
    SELECT email, created, CONCAT(first_name, ' ', last_name) as full_name, first_name, last_name from users
");





// As Associative Array
/* $usersAssoc = $users->fetch_assoc();
echo '<pre>', var_dump($usersAssoc),'</pre>';
echo '<br>', $usersAssoc['email'];
echo '<hr>'; */


// As Object
/* $usersObj = $users->fetch_object();
echo '<pre>', var_dump($usersObj),'</pre>';
echo '<br>', $usersObj->email;
echo '<hr>'; */

/* while ($row = $users->fetch_object()) {
    echo '<pre>', var_dump($row),'</pre>';
} */

/* while ($row = $users->fetch_object()) {
    echo $row->email, '<br>';
} */

// as array
while ($row = $users->fetch_array()) {
    echo '<pre>', var_dump($row),'</pre>';
}


?>