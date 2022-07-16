# Example of uploading and executing aribrary php code through not validating file uploads

In this example the desired effect of the program is to allow users to upload images to a site, and then view them.

## Bad Actor

However, a bad actor can upload a php file called phpinfo.php with the following code:

```php
<?php phpinfo(); ?>
```

And click "View image" to execute the arbitrary php code!

### Whats fixed

We added a whiletist of allowed file extensions
We checked the uploaded file for the extension and checked it against the whitelist
We only moved the file into place if the foel extension is valid.
I also fixed the main template from showing a view link for invalid file types and instead display an error message.

## what if the file is called 'sneaky.jpg' but contains arbitrary php code?

The file does get uploaded and moved into place but the webserver doesnt necessarily know what to do with it with the "View image" link (I tried), however that said it's technically still vulnerable to inclusion attack, and I've validated this vulnerability using the file_includes_bad code:

```
http://localhost/path/to/file_includes_bad/index.php?page=../../file_uploads_fixed/files/sneaky.jpg
```

Does indeed display a phpinfo page!

## whats fixed

Before moving the file into place, we inspect the file and look for open php tags to attempt to validate the file isnt masquerading as something else but really is php code. This could be expanded to check for other strings too.

```php 
            $uploaded = fopen($_FILES['upload']['tmp_name'], "rb");
            $uploaded_content = stream_get_contents($uploaded);

            if (stristr($uploaded_content,'<?php'))
            {
                echo "This file contains arbitrary php code and is not allowed.<br>";
            } else {
                $flag_OK = true;
                move_uploaded_file($_FILES['upload']['tmp_name'], "files/{$_FILES['upload']['name']}");
            }
```

We then set a flag variabe $flag_OK = true, and use this in the main template to decide whether or not to show a view link or an expanded error message:

```
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
```

This logic could be improved further to give error messages based on contextual logic such as:
 - is an invalid extension only
 - is a valid extention but contains arbitrary code  

 We could even clean up some of the duplicated validation code now that we have a flag variable set, which I have done.

 But this is just an example to learn PHP security principles.