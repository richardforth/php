<?php
// causes an error if nothing is submitted to the page
echo $_POST['something'];
?>

<form action="" method="post">
    Type something:
    <input type="text" name ="something">
    <input type="submit" value ="Submit">
</form>