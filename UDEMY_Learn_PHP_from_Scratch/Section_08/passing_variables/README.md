# Do not trust any variables passed to your application from the user

The view_image.php file could contain code to display an image and then a button to delete the image with a get request variable

However, like the other templating examples, its possible to manipulate the URL variables to delete another file entirely, and possibly destroy the site (or server)!.

Have a look at the following files:

delete_img.php
delete_img_fixed.php

The fix was to add validation using the scandir fuction to limit the scope of what can be deleted.

You might also want to add extra validation such as checking in the database if the user owns the image before deleting it.