<?php

// adds a new post to the guestbook
function add_post($message) {
    global $db;
    $message = $db->escape_string($message);
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