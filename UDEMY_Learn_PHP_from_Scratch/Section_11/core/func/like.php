<?php

    
    function article_exists($article_id) {
        global $db;
        $article_id = (int)$article_id;
        $query = $db->query("SELECT COUNT(*) FROM `articles` WHERE `article_id` = $article_id") or die($db->error);
        $result= $query->fetch_array();
        // the following ternary expression is the same as the if statement below
        return ($result[0] == 1) ? true : false;
        /* if ($result[0] == 1){
            return true;
        } else {
            return false;
        }; */
    } 

    function previously_liked($article_id) {
        global $db;
        $article_id = (int)$article_id;
        $query = $db->query("SELECT COUNT(`like_id`) FROM `likes` WHERE `user_id` = ".$_SESSION['user_id']." AND `article_id` = $article_id") or die($db->error);
        $result= $query->fetch_array();
        return ($result[0] == 1) ? true : false;

    }

    function like_count($article_id) {
        global $db;
        $article_id = (int)$article_id;
        $query = $db->query("SELECT `article_likes` FROM `articles` WHERE `article_id` = $article_id") or die($db->error);
        $result= $query->fetch_array();
        return (int)$result[0];
    }

    function add_like($article_id) {
        global $db;
        $article_id = (int)$article_id;
        $query = $db->query("UPDATE `articles` SET `article_likes` = `article_likes` + 1 WHERE `article_id` =$article_id") or die($db->error);
        $query = $db->query("INSERT INTO  `likes` (`user_id`,`article_id`) VALUES(".$_SESSION['user_id'].", $article_id )") or die($db->error);
    }

?>