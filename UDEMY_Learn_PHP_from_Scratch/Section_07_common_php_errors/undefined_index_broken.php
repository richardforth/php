<?php
// causes an error on page refresh if nothing is submitted to the page
echo $_POST['something'];

// tested in php 8.0 and it doesnt throw any errors
// course work was for php version 5.4
?>

<form action="" method="post">
    Type something:
    <input type="text" name ="something">
    <input type="submit" value ="Submit">
</form>