<form action="dollar_underscore_post.php" method="POST">
    Please enter your password: <br><input type="password" name="password"><br>
    <input type="submit" value="Submit">
</form>

<?php

/* $_POST */

/* POST request variables are hidden from URL */
$password = 'password';

if (isset($_POST['password'])&&!empty($_POST['password'])) {
    $password_post = $_POST['password'];
    if ($password_post==$password) {
        echo "Correct";
    } else {
        echo "Incorrect";
    }
} else {
    echo "Please enter a password to continue...";
}



?>