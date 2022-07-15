<?php
ob_start(); // start output buffering
?>

<h4>Hello world!</h4>

<?php
  header('Location: http://www.google.co.uk');
  ob_end_flush(); // end output buffering and flush it from memory
                  // not required but good practice to do so.
?>