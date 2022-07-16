<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Php Security FIXED EXAMPLE</title>
    </head>
    <body>
        <?php

            $allow_list = scandir('pages');
            //print_r($allow_list);
            // remove . and .. from the array for extra special security sauce
            foreach($allow_list as $index => $file) {
                if ($file === "." || $file === "..") {
                    unset($allow_list[$index]);
                }
            }
            $allow_list = array_values($allow_list); // re-index the array
            //echo '<hr>';
            //print_r($allow_list);


            if (isset($_GET['page'])  && in_array($_GET['page'], $allow_list)) {
                include("pages/{$_GET['page']}");
            } else {
                echo "404 - Page Not Found";
            }

        ?>
    </body>
</html>