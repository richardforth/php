<?php
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    if (!empty($name)) {
        $sentence = "$name woke up and started learning PHP web development.";
    } else {
        echo "Please enter a name";
    }
    
}
?>

<html>
    <head>
        <title>Embedded PHP</title>
    </head>
    <body>

        <form action="embedded.php" method="POST">
            Type your name:<br>
            <input type="text" name = "name" value=<?php echo $name ?>><br>
            <input type="submit" value="Submit">
        </form>
    
        <textarea rows="7", cols="25"><?php echo $sentence; ?></textarea>
    </body>
</html>