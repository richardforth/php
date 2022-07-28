<?php
    
    // this code does validation, then moves the file from temporary uploads storage to the final intended destination
    if (isset($_FILES['upload'])) {
        // create and empty errors array to be used as a flag later
        // and to display errors to the user.
        $errors = array();

        // check the file extension against a whitelist before allowing access
        $allowed_exts = array('jpg', 'jpeg', 'png', 'gif');
        $ext = strtolower(substr($_FILES['upload']['name'], 
            strrpos($_FILES['upload']['name'], '.') + 1));

        if (!in_array($ext, $allowed_exts)) {
            $errors[] = "You can only upload images";
        } else {
            // check the file contents for arbitrary php code
            $uploaded = fopen($_FILES['upload']['tmp_name'], "rb");
            $uploaded_content = stream_get_contents($uploaded);

            if (stristr($uploaded_content,'<?php')) {
                $errors[] = "Files cannot contain arbitrary code.";
            }
        }

        if ($_FILES['upload']['size'] > 1048576) {
            $errors[] = "Files must be less than 1MB in size.";
        }

        // do the final validation down here by checking if the errors array is empty
        if (empty($errors)) {
            move_uploaded_file($_FILES['upload']['tmp_name'], "files/{$_FILES['upload']['name']}");
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
                if (isset($errors)) {
                    if(empty($errors)) {
                        echo '<a href="files/', $_FILES['upload']['name'], '">View image</a>';
                    } else {
                        foreach ($errors as $error) {
                            echo "{$error}<br>";
                        }
                    }
                    
                } else {
                    echo "Please choose an image file to upload:<br>";
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