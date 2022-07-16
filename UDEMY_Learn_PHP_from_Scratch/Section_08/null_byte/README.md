# php 8+ appears not to allow null byte to work

### Null byte injection has been fixed in PHP 5.3.4

https://bugs.php.net/bug.php?id=39863


```
http://localhost/path/to/null_byte/index.php?file=../../../../../../../../../../../../../../../etc/passwd%00
```

will return a copy of /etc/passwd to the browser!

Which means that you can also access other sensitive files!

Not only that, as the instructor point out, this functionality opens up an attack vector such as being able to upload their own arbitrary php code such as a php shell, and then executing that arbitrary php code - possibly leading to an elevation of privileges and from application level compromise, to lead eventually to a root level compromise of the server, access to database credentials etc (which is why you should never use myql root credentials in a web application - always create one database and one user for that database so that if an application is compromised, its access is limited to only one database, its still not good, but its better than exposing multiple databases especially on a shared hosting server where you have multiple web applications running and accessing multiple different databases).

The fix for this is the same as in file_includes_fixed:

```php
            $allow_list = scandir('pages');
            //print_r($allow_list);
            // remove . and .. from the array for extra special security sauce
            foreach($allow_list as $index => $file) {
                if ($file === "." || $file === "..") {
                    unset($allow_list[$index]);
                }
            }
            $allow_list = array_values($allow_list); // re-index the array
            //echo '<hr>';
            //print_r($allow_list);


            if (isset($_GET['file'])  && in_array($_GET['file'], $allow_list)) {
                include("pages/{$_GET['file']}.txt");
            } else {
                echo "404 - Page Not Found";
            }

```