# Composer Installation CentOS 7

```bash
yum -y install composer
```

https://operavps.com/how-to-install-laravel-on-centos-7/

## requires php 8.0

https://www.tecmint.com/install-php-8-on-centos/


## process

cd to the folder where you want to install laravel

```
git clone https://github.com/laravel/laravel.git
```

```
cd laravel
composer install
```


# MySQL database setup for this laravel coursework project

```
create database auth;
use auth;
create table if not exists users(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(50),
    username VARCHAR(20),
    password VARCHAR(60),
    password_temp VARCHAR(60),
    code VARCHAR(60),
    active INT,
    created_at DATETIME,
    updated_at DATETIME
);
```

# testng

```
MariaDB [auth]> show columns from users;
+---------------+-------------+------+-----+---------+----------------+
| Field         | Type        | Null | Key | Default | Extra          |
+---------------+-------------+------+-----+---------+----------------+
| id            | int(11)     | NO   | PRI | NULL    | auto_increment |
| email         | varchar(50) | YES  |     | NULL    |                |
| username      | varchar(20) | YES  |     | NULL    |                |
| password      | varchar(60) | YES  |     | NULL    |                |
| password_temp | varchar(60) | YES  |     | NULL    |                |
| code          | varchar(60) | YES  |     | NULL    |                |
| active        | int(11)     | YES  |     | NULL    |                |
| created_at    | datetime    | YES  |     | NULL    |                |
| updated_at    | datetime    | YES  |     | NULL    |                |
+---------------+-------------+------+-----+---------+----------------+
9 rows in set (0.025 sec)

MariaDB [auth]> 
```