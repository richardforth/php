<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Php Security BAD EXAMPLE</title>
    </head>
    <body>
        <?php

            if (isset($_GET['file'])) {
                echo "<h3>Contents of 'pages/{$_GET['file']}.txt'</h3>";

                include("pages/{$_GET['file']}.txt");
            }

        ?>
    </body>
</html>