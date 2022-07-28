<?php
    // this code moves the file from temporary uploads storage to the final intended destination
    if (isset($_FILES['upload'])) {
        move_uploaded_file($_FILES['upload']['tmp_name'], "files/{$_FILES['upload']['name']}");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Php Security BAD EXAMPLE</title>
    </head>
    <body>
        <div>
            <?php
                if (isset($_FILES['upload']['name'])){
                    echo '<a href="files/', $_FILES['upload']['name'], '">View image</a>';
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