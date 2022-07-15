<?php

// php 5.4 Unexpected $end 
// php 8 gives Parse error: Unclosed '{' 
if (isset($_GET['name'])) {
    $name = $_GET['name'];
    switch($name) {
        case 'alex':
            echo "Alex";
        break;
        case 'billy':
            echo 'Billy';
        break;
    }
} else {
    if (isset($_GET['age'])) {
        $age = $_GET['age'];
        echo 'You are ', $age, ' years old?';
        if ($age < 18) {
            $underage = true;
        }
    } // added missing curly brace
}
?>