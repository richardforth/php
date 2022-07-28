<?php
// causes an error on page refresh if nothing is submitted to the page
if (isset($_POST['something'], $_POST['something_else'])) {
    $something = $_POST['something'];
    $something_else = $_POST['something_else'];

    echo $something, ' ',  $something_else;
}
// this is still probably good practice 

// tested the broken version of the page in php 8.0 and it doesnt throw any errors
// course work was for php version 5.4
?>

<form action="" method="post">
    Type something:
    <input type="text" name ="something">
    <input type="text" name ="something_else">
    <input type="submit" value ="Submit">
</form>