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

