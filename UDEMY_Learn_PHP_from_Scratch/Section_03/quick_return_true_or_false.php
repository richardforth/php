<?php

function equals_one($val) {
    return $val === 1;
}

echo var_dump(equals_one(1)).'<br>'; // true
echo var_dump(equals_one(57)).'<br>'; // false

?>