# Example of uploading and executing aribrary php code through not validating file uploads

In this example the desired effect of the program is to allow users to upload images to a site, and then view them.

## Bad Actor

However, a bad actor can upload a php file called phpinfo.php with the following code:

```php
<?php phpinfo(); ?>
```

And click "View image" to execute the arbitrary php code!