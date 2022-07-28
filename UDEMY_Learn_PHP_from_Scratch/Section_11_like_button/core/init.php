<?php
session_start();

include 'db/connect.php';
include 'func/articles.php';
include 'func/like.php';


/* Forge User ID */
$_SESSION['user_id'] = '1';

?>