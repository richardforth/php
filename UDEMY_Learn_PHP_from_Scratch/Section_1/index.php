<!DOCTYPE html>
<html>
   <head>
      <title>My Title</title>
   </head>
  <body>
    <?php
      echo 'Test';

      for($x = 1, $x <= 10; $x++) {
        echo "{$x}";
        if($x != 10) {
          echo ", "; 
        }
      }
  
    ?>
    </body>
</html>
