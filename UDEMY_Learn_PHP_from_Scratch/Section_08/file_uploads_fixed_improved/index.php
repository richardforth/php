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

            if (stristr($uploaded_content,'<?php'))
            {
                echo "This file contains arbitrary php code and is not allowed.<br>";
            } else {
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
                if (isset($_FILES['upload']['name']) && isset($flag_OK)){
                    // also fix the main template from displaying a view image link for disallowed file types
                    if (in_array($ext, $allowed_exts)) {
                        echo '<a href="files/', $_FILES['upload']['name'], '">View image</a>';
                    } else {
                        echo "Files of type ", $ext, " are either not permitted, or contain arbirary code.<br>";
                    }
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