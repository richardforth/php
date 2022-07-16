<?php

// first of all never use the mysql module, use PDO or mysqli
// this module isnt even available in php 8
// "Package php-mysql-5.4.16-48.el7.x86_64 is obsoleted by php-mysqlnd-8.0.21-2.el7.remi.x86_64 which is already installed"
mysql_connect('127.0.0.1','example_user','example_pass');
// Fatal error: Uncaught Error: Call to undefined function mysql_connect() 
mysql_select_db('user_system');

// abandoned this code, see section 5:
// escaping.php
// mysqli_prepared_statements_select.php
// index.php
// see also section 4:
// PDO/index.php

// basically these days you have to go out of your way to make the application vulnerable to SQL injection,
// in older versions of PHP it was very easy to create a security hole, however those vulnerable modules have been obsoleted.

?>