<?php

// adds a new post to the guestbook
function add_post($message) {
    global $db;
    $message = htmlentities($db->escape_string($message), ENT_COMPAT, 'UTF-8');
    $db->query("insert into posts (post_body) values ('{$message}')");
}

// fetches all posts from the database
function fetch_posts() {
    global $db;
    $result = $db->query("SELECT post_body from posts");

    $posts = array();
    while ($row = $result->fetch_array()) {
        $posts[] = $row['post_body'];
    }
    return $posts;

}

?>