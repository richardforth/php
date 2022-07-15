<?php
ob_start(); // start output buffering
?>

<h4>Hello world!</h4>

<?php
  header('Location: http://www.google.co.uk');
  ob_end_flush(); // end output buffering and flush it from memory
                  // not required but good practice to do so.

  // this example was from a pretty old course runnign php 5.4
  // it doenst seem to be required in php 8.0+
?>