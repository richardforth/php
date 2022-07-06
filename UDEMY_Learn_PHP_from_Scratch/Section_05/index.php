<?php

/* mysqli integration */


/*

DB Prep:

create database mysqli;
create user 'mysqli'@'localhost' identified by 'mysqli_password_goes_here';
grant all privileges on mysqli.* to mysqli@localhost;
insert into users(email, first_name, last_name) values('bart@simpsons.com','Bart','Simpson');
insert into users(email, first_name, last_name) values('lisa@simpsons.com','Lisa','Simpson');
insert into users(email, first_name, last_name) values('homer@simpsons.com','Homer','Simpson');
insert into users(email, first_name, last_name) values('marge@simpsons.com','Marge','Simpson');


 * /

/*  Connect to the database using mysqli */
// 1. DB Host
// 2. username 
// 3. password
// 4. database_name
$db = new mysqli('localhost','mysqli', 'mysqli_password_goes_here', 'mysqli');

echo '<pre>', var_dump($db), '</pre>';

?>