<?php

function get_articles() {
    
    $db = new mysqli('localhost','lb_user', 'lb_password_goes_here', 'likebutton');

    $articles = array();

    //this bit re-engineered for mysqli as course code was too old
    $query = $db->query("SELECT `article_id`, `article_title`, `article_likes` FROM `articles`") or die($db->error);

    while ($row = $query->fetch_assoc()) {
        $articles[] = array(
            'article_id' => $row['article_id'],
            'article_title' => $row['article_title'],
            'article_likes' => $row['article_likes']
        );
    }
    //echo '<pre>', print_r($articles, true),'</pre>';
    return $articles;


}

?>