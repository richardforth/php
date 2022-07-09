# Background

The history behind the json file format and need to convert it to a format I could use in PHP to ultimately populate a MySQL table, was that I had an "local intranet page" powered by Python Flask, and it stored its data in a json file, I want to rebuild that project using php and mysql so I needed a way to convert the json data to a php array or object and then use the properties as a basis for a mysql query to get that data into a table format that can be pulled back later on - it worked quite well.

# Not complete

This GitHub folder is not a complete working project but serves as a reminder for how I did what i did, there are obvious missing elements sush as a lack of a db.php file which contained the PHP-PDO databse connection, and of course a lack of any credentials or lack or a database name. For any seasoned PHP developer these things are trivial to fill in the gaps on.

The main purpose of this is a reminder of the table structure, the json structure and how I got it from one format to another successfully.
