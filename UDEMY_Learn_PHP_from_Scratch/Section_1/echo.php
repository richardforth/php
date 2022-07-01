<?php
  echo 'Hello World!<br />'; // single quotes
  echo "Hello World!<br />"; // double quotes
  echo "Hello World!\n"; // backslash n does not work here
  // but it will work on the CLI, unlike the <br /> tags which are html
  // also shows up in page source  
  echo 'This is data output to the browser';
  echo '<br>Hello World!<br>It\'s a lovely day.';
  print '<br>Hello World!<br>It\'s a lovely day.'; // print is slower than echo
?>
