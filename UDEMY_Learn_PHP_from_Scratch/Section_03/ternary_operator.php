<?php

/* Ternary operator - inline IF statement */

$name = "Richard";

echo ($name  == "Richard") ? "Hi Richard!" : "Go away!";

echo "<hr>";

// This is the same as
if ($name == "Richard") {
    echo "Hi Richard!";
} else {
    echo "Go away!";
}


?>