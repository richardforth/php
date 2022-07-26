<?php

function upOrDown($url) {
    $cs = curl_init($url);

    curl_setopt($cs, CURLOPT_NOBODY, true);
    curl_setopt($cs, CURLOPT_FOLLOWLOCATION, true);

    curl_exec($cs);

    $status_code = curl_getinfo($cs, CURLINFO_HTTP_CODE);

    // [boolean, status_code]
    $results = array();
    
    $results[0] = ($status_code == 200) ? true : false;
    $results[1] = $status_code;

    return $results;
}

 

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>My Title</title>
        <style>
            html,
            body {
                height: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-flow: column;
            }

            .center {

            }

            .break {
                flex-basis: 100%;
                height: 0px;
            }

            .input {
                height: 100px;
                font-family: sans-serif;  
            }

            .output {
                height: 100px;
                padding-left: 20px;
                padding-right: 20px;
                font-size: 20px;
                font-family: sans-serif;
                display: flex;
                align-items: center;
                justify-content: center;  
            }

            .green {
                color: green;
                background-color: lightgreen;

            }

            .red {
                color: red;
                background-color: pink;
            }
        </style>
    </head>
    <body>
        <div class = "input">
            <form action="" method="post">
                Check website:
                <input type="text" name="url">
                <input type="submit" value="Check">
            </form>
        </div>
        <?php
        
        if (isset($_POST['url']) == true && empty($_POST['url']) == false) {
            $url = trim($_POST['url']);
            if (filter_var($url, FILTER_VALIDATE_URL) == true) {
                $results = upordown($url);
                $up = $results[0];
                $status_code = $results[1];
                if ($up == true) {
                    $message = "$url is up with a status code of $status_code.";
                    echo "<div class=\"output green\">
                         $message
                    </div>";
                } else {
                    $message = "$url is down with a status code of $status_code.";
                    echo "<div class=\"output red\">
                        $message
                    </div>";
                }
            } else {
                $message = 'Invalid URL';
                echo "<div class=\"output red\">
                    $message
                </div>";
            }
        }
        
        ?>
    </body>
</html>

