<?php

$today = date('l'); // the day of the week today, eg "Wednesday"

$offer = match($today) {

    'Monday'                => '20% off chocolates',
    'Saturday', 'Sunday'    => '20% off mints',
    default                 =>  '10% off your entire order'

}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>php8 match expression</title>
    </head>
    <body>
        <h1>The Candy Store</h1>
        <p>
            Offers on  <?= $today ?>:
        </p>
        <p>
             <?= $offer ?>
        </p>
    </body>
</html>