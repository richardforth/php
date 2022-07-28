<?php

function upOrDown($url) {
    $cs = curl_init($url);

    curl_setopt($cs, CURLOPT_NOBODY, true);
    curl_setopt($cs, CURLOPT_FOLLOWLOCATION, true);

    curl_exec($cs);

    $status_code = curl_getinfo($cs, CURLINFO_HTTP_CODE);
    echo $status_code.'<br>';
    return ($status_code == 200) ? true : false;
}

if (isset($_POST['url']) == true && empty($_POST['url']) == false) {
    $url = trim($_POST['url']);
    if (filter_var($url, FILTER_VALIDATE_URL) == true) {
        if (upordown($url) == true) {
            echo "$url is Up";
        } else {
            echo "$url is down";
        }
    } else {
        echo 'Invalid URL';
    }
} 

?>

<form action="" method="post">
    Check website:
    <input type="text" name="url">
    <input type="submit" value="Check">
</form>