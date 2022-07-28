<?php
if (isset($_GET['image']) && file_exists("images/{$_GET['image']}")) {
    unlink("images/{$_GET['image']}");
}
?>