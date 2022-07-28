<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Php Security BAD EXAMPLE</title>
    </head>
    <body>
        <?php

            if (isset($_GET['page'])) {
                include("pages/{$_GET['page']}");
            }

        ?>
    </body>
</html>