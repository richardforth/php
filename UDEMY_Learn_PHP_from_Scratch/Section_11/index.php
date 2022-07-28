<?php
    ini_set('display_errors','on');
    include 'core/init.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Like Button</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <?php
    $articles = get_articles();
    $count = count($articles);
    
    //echo '<pre>', print_r($articles, true),'</pre>';

    if ($count == 0) {
        echo "Sorry there are no articles in the database.";
    } else {
        echo "There were ({$count}) articles retreived from the database.";
        echo '<ul>';
        foreach($articles as $article) {
            echo '<li><p>', $article['article_title'], '</p><p><a class="like" href="#" onclick="like_add(', $article['article_id'] ,');">Like</a> <span id="article_',  $article['article_id'],'_likes">', $article['article_likes'], '</span> like this</p></li>';
        }
        echo '</ul>';
    }
    ?>
    <script type = "text/javascript" src="js/jquery.js"></script>
    <script type = "text/javascript" src="js/like.js"></script>
</body>
</html>