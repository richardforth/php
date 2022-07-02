<?php

$database = array(
  'Alex'=>array('age'=>21,'location'=>'Peterborough'),
  'Billy'=>array('age'=>37,'location'=>'Manchester'),
  'Dale'=>array('age'=>19,'location'=>'London')
);


// Print information about Dale
echo "Dale is {$database['Dale']['age']} years old and hails all the way from {$database['Dale']['location']}.";

echo "<hr>";

echo "Inspecting the multi-dimensional array:<br><br>";
echo "<pre>";
print_r($database);
echo "<pre>";
echo "<hr>";
echo "Because the array has names and indices, its not possible to simply iterate over it without knowing the names.<br>";
echo "Lets try first...<br>";
echo $database[1];
echo "<hr>";
echo "It returned nothing as expected, lets modify the array to make it iterable, however the con now is that we cannot<br>";
echo "easily pull back the records for an individual, unless we know the record ID";
$database = array(
  array('name'=>'Alex','age'=>21,'location'=>'Peterborough'),
  array('name'=>'Billy','age'=>37,'location'=>'Manchester'),
  array('name'=>'Dale','age'=>19,'location'=>'London')
);
echo "<hr>";
echo "Lets try now...<br>";
echo $database[1];
echo "<br>That worked! now we can iterate over the whole array without having to know individual names ahead of time, using a loop:<br>";
for ($i = 0; $i <= count($database) -1; $i++) {
   echo " - {$database[$i]['name']} is {$database[$i]['age']} years old and hails from {$database[$i]['location']}.<br>";
} 
echo "<hr>";
echo "Let's inspect the updated array format...<br><br>";
echo "<pre>";
print_r($database);
echo "<pre>";

// Print information about Dale from the new array (requires us to search until a match is found)

for ($i = 0; $i <= count($database) -1; $i++) {
  if ($database[$i]['name'] == 'Dale') {
    echo "Dale is {$database[$i]['age']} years old and hails all the way from {$database[$i]['location']}.";
  }
}

echo "<hr>";
echo "Lets try appending a record....<br>";
array_push($database, array('name'=>'Josh','age'=>18,'location'=>'Didsbury'));

echo "Let's inspect the updated array...<br><br>";
echo "<pre>";
print_r($database);
echo "<pre>";
//wibble testing vscode
