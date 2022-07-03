<form action="radio_buttons.php" method="POST">
<p>Name:<br><input type="text" name="name"><br><p/>
<p>Sex:<br> <input type="radio" name="sex" value="Male" /> Male <input type="radio" name="sex" value="Female" />Female</p>
<p>Age:<br><input type="text" name="age"><br></p>
<p>T&C Acceptance:<br><input type="checkbox" name="agree" />I agree with the Terms & Conditions.</p>
<p><input type="submit" value="Register"></p>
</form>

<?php

/* Radio Buttons */
if (isset($_POST['sex'])){
    echo $_POST['sex'];
} else {
    echo "SEX: Please make a selection.";
}

?>