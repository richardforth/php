<?php

$exp = time() + 86400; // expire after 1 day
$exp_unset = time() - 86400; // expire the cookie
setcookie("name", "Alex", $exp);
setcookie("age", "19", $exp);
echo "<pre>";print_r($_COOKIE); echo "</pre>";



// unset a cookie
echo "<hr>";
setcookie("name", "", $exp_unset);
echo "<pre>";print_r($_COOKIE); echo "</pre>";
?>