<?php


/* connect to the database */
require_once("db.php");

/* convert json file into a PHP array */
$tasks = json_decode(file_get_contents("tasks.json"), true);

/* or an object... */
$taskObject = json_decode(json_encode($tasks));

/* check what we have with pre tags */
echo "<pre>",  print_r($tasks), "</pre>";
echo "<pre>",  print_r($taskObject), "</pre>";

/* sanity check in a for loop - optional */
foreach ($tasks['tasks'] as $item) {
    echo $item['title'], '<br>';
    echo $item['description'], '<br>';
    echo $item['notes'], '<br>';
    echo $item['status'], '<br>';
    echo '---', '<br>';
};

/* import the data to the database, note that status is in a separate relational lookup table */
/* ONCE IMPORTED, COMMENT THIS SECTION OUT TO PREVENT DUPLICATE ROWS IN THE TABLE! */

// or kill the script here...
die("This data has already been imported once.");

$import = $db->prepare("
    insert into tasks 
    (title, description, notes, status)
    values (:title, :description, :notes, (SELECT id FROM task_status WHERE status = :status));
");

foreach ($tasks['tasks'] as $item) {
    $import = $import-> execute([
        'title' => $item['title'],
        'description' => $item['description'],
        'notes' => $item['notes'],
        'status' => $item['status']
    ]);
}


/* sql to pull back records in mysql manually for checking */
// select t.id, t.description, t.notes, s.status, t.created from tasks t left join task_status s on t.status = s.id;


?>
