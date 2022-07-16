# php 8.1 still allows this to happen!

This is really bad practice!

```
http://localhost/path/to/file_includes_bad/index.php?page=../../../../../../../../../../../../../../../etc/passwd
```

will return a copy of /etc/passwd to the browser!

Which means that you can also access other sensitive files!

Not only that, as the instructor point out, this functionality opens up an attack vector such as being able to upload their own arbitrary php code such as a php shell, and then executing that arbitrary php code - possibly leading to an elevation of privileges and from application level compromise, to lead eventually to a root level compromise of the server, access to database credentials etc (which is why you should never use myql root credentials in a web application - always create one database and one user for that database so that if an application is compromised, its access is limited to only one database, its still not good, but its better than exposing multiple databases especially on a shared hosting server where you have multiple web applications running and accessing multiple different databases).
