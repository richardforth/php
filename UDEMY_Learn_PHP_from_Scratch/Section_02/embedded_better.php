<?php

if (!isset($_POST['name'])){
    $name = "kyle";
} else {
    $name = $_POST['name'];
}

if ($name=="alex")
{
    echo "Hi Alex.";
} 
else{
?>

You're not Alex? Please type your name: <br />
<form action="embedded_better.php" method="POST">
    <input type="text" name="name" value =<?php echo $name; ?>>
    <input type="submit" value="Submit">
</form>
<?php
}
?>