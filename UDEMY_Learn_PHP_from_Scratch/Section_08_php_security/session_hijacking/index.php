<?php

// prevents javasctipt from accessing the cookie and stealing the session ID
ini_set('session.cookie_httponly', true);

session_start(); 

if (isset($_SESSION['last_ip']) === false) {
    // this is useless if you're behind a proxy eg a load balancer
    // as the attacker might come through the same proxy, thus
    // passing this validation check also
    $_SESSION['last_ip'] = $_SERVER['REMOTE_ADDR'];
    // however be aware that $_SERVER["HTTP_X_FORWARDED_FOR"] can be spoofed.
    // If you don't own any trusted proxies, just use REMOTE_ADDR

}

if ($_SESSION['last_ip'] !== $_SERVER['REMOTE_ADDR']) {
    session_unset(); // clear all session variables
    session_destroy(); // log the user out
}


?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>My Title</title>
    </head>
    <body>

    
    </body>
</html>