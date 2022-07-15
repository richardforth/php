<h4>Hello world!</h4>

<?php
// having output before the header redirect was supposed to break in php 5.4,
// producing a "Cannot modify headers" error message,  but when I tested this
// in php 8.0.12 this is actually working for me.
header('Location: http://www.google.co.uk');
?>