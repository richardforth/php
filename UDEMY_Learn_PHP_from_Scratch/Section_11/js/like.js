function like_add(article_id) {
   $.post('ajax/like_add.php', {article_id:article_id}, function(data) {
        if (data == 'success') {
            // do something
        } else {
            alert(data);
        }
   });
}

function like_get() {

}