<form action="checkboxes.php" method="GET">
    <p><input type="checkbox" name="agree" />I agree with the Terms & Conditions.</p>
    <p><input type="submit" value="Register"></p>
</form>

<?php

/* Checkboxes */

// checked  agree = on
//  - http://localhost/php/UDEMY_Learn_PHP_from_Scratch/Section_02/checkboxes.php?agree=on

// unchecked agree is not set
// - http://localhost/php/UDEMY_Learn_PHP_from_Scratch/Section_02/checkboxes.php?

if(isset($_GET['agree'])) {
    echo "<br>Set!";
} else {
    echo "<br>Not Set!";
}

?>