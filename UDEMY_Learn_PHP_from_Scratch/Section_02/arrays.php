<?php

$names = array('Alex','Billy','Dale');
echo $names;
echo "<hr>";
print_r($names);
echo "<hr>";
echo $names[2];
echo "<hr>";
echo $names[1];
echo "<hr>";
echo $names[0];
echo "<hr>";
/*

 I've made this bit more of a natural language
 as the original course work used $names as a variable
 name, but in truth we are returning the ages of the
 names rather than the names so echoing $ageOf['Billy']
 becomes self-documenting code. the result is 16.

 We dont need any extra commentary telling future me, or
 team member that we are returning the age of Billy, as
 the code already tells us this naturally.

*/
$ageOf = array('Alex'=>21,'Billy'=>16,'Dale'=>49);
print_r($ageOf);
echo "<hr>";
echo "Billy is {$ageOf['Billy']} years old.";
echo "<hr>";
$name = $names[1];
echo "$name is {$ageOf[$name]} years old.";
echo "<hr>";
for ($i = 0; $i <= count($names) -1; $i++) {
  $name = $names[$i];
  echo "$name is {$ageOf[$name]} year's old.<br>";
}
echo "<hr>";
$ageOf['Josh']=18;
print_r($ageOf);
array_push($names, 'Josh');
echo "<hr>";
for ($i = 0; $i <= count($names) -1; $i++) {
  $name = $names[$i];
  echo "$name is {$ageOf[$name]} year's old.<br>";
}
echo "<hr>";
echo '<pre>';
print_r($names);
echo '</pre>';
echo "<hr>";
echo '<pre>';
print_r($ageOf);
echo '</pre>';
echo "<hr>";
echo '<pre>';
var_dump($names);
echo '</pre>';
echo "<hr>";
echo '<pre>';
var_dump($ageOf);
echo '</pre>';
echo "<hr>";
$GLOBALS['level'] = array(
  1 => array("name"=>"Level 1",
              "desc"=>"This is the first level"),
  2 => array("name"=>"Level 2",
            "desc"=>"You've made it to level 2!"),
  3 => array("name"=>"Level 3",
              "desc"=>"The last level")

);
echo '<pre>';
print_r($GLOBALS['level']);
echo '</pre>';
echo "<hr>";
echo '<pre>';
var_dump($GLOBALS['level']);
echo '</pre>';
echo "<hr>";

// Add Level 4 the HARD way
$GLOBALS['level'][4]  = array(
  'name' => 'Level 4',
  'desc' => 'Bonus Level 4'
);

// Add Level 5 the easier way
$GLOBALS['level'][5]['name'] = "Level 5";
$GLOBALS['level'][5]['desc'] = "Bonus Level 5";

echo '<pre>';
print_r($GLOBALS['level']);
echo '</pre>';
echo "<hr>";
echo '<pre>';
var_dump($GLOBALS['level']);
echo '</pre>';
echo "<hr>";

function level_data($level, $data) {
  if (array_key_exists($level, $GLOBALS['level']) === true) {
    return $GLOBALS['level'][$level][$data];
  } else {
    return "false";
  }
}
echo level_data(1, 'desc');
echo "<hr>";
echo level_data(2, 'desc');
echo "<hr>";
echo level_data(3, 'desc');
echo "<hr>";
echo level_data(4, 'desc');
echo "<hr>";
echo level_data(5, 'desc');
echo "<hr>";
echo level_data(6, 'desc');
echo "<hr>";
