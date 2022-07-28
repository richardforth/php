<?php

include('core/init.inc.php');

if (isset($_POST['message'])){
    add_post($_POST['message']);
}

$posts = fetch_posts();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>My Really Secure GuestBook</title>
    </head>
    <body>
        <div>
        <?php
        
        foreach($posts as $message){
            echo $message;
            echo '<hr>';
        }
        
        
        ?>
        </div>
        <div>
            <form action="" method="post">
                <p>
                    <textarea name="message" rows="10" cols="80"></textarea>
                    
                </p>
                <p>
                    <input type="submit" value="Post">
                </p>
            </form>
        </div>
    </body>
</html>