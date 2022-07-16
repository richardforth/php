<?php
    // this code moves the file from temporary uploads storage to the final intended destination
    if (isset($_FILES['upload'])) {
        // check the file extension against a whitelist before allowing access
        $allowed_exts = array('jpg', 'jpeg', 'png', 'gif');
        $ext = strtolower(substr($_FILES['upload']['name'], 
            strrpos($_FILES['upload']['name'], '.') + 1));

        if (in_array($ext, $allowed_exts)) {
            $uploaded = fopen($_FILES['upload']['tmp_name'], "rb");
            $uploaded_content = stream_get_contents($uploaded);

            if (!stristr($uploaded_content,'<?php')) {
                $flag_OK = true;
                move_uploaded_file($_FILES['upload']['tmp_name'], "files/{$_FILES['upload']['name']}");
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Php Security FIXED EXAMPLE</title>
    </head>
    <body>
        <div>
            <?php
                if (isset($flag_OK)) {
                        echo '<a href="files/', $_FILES['upload']['name'], '">View image</a>';
                    } else {
                        echo "The file could not be uploaded as it did not pass security checks.<br>";
                    }

            ?>
        </div>
        <div>
            <form action="" method="post" enctype="multipart/form-data">
                <p>
                    <input type="file" name="upload">
                    <input type="submit" name ="Upload">
                </p>
            </form>
        </div>
    </body>
</html>