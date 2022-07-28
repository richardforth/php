# first of all never use the mysql module, use PDO or mysqli
this module isnt even available in php 8

```
Package php-mysql-5.4.16-48.el7.x86_64 is obsoleted by php-mysqlnd-8.0.21-2.el7.remi.x86_64 which is already installed
```

# abandoned this code, see section 5:
escaping.php
mysqli_prepared_statements_select.php
index.php

# see also section 4:
PDO/index.php

basically these days you have to go out of your way to make the application vulnerable to SQL injection,
in older versions of PHP it was very easy to create a security hole, however those vulnerable modules have been obsoleted.

The big takeaway is to stick to MySQL PDO or mysqli and always use prepared statements.

# Additionally

## MRES

stands for the original function mysql_real_escape_string, and can be shortenend in later versions to just escape_string():

```php
if (!empty($_POST)) {
    $email = $db->escape_string($_POST['email']);
    $firstName = $db->escape_string($_POST['first_name']);
    $lastName = $db->escape_string($_POST['last_name']);

    $sql = "INSERT INTO users (email, first_name, last_name, created) VALUES ('{$email}', '{$firstName}', '{$lastName}', NOW())";

    $insert = $db->query($sql) or trigger_error("Query Failed! SQL: <br><br>$sql<br><br>Error: ". mysqli_error($db), E_USER_ERROR);
    

}

```


## casts any user unputs that should be integers to integers

```php
$id = (int)$_POST['id'];
```