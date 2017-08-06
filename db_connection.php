<?php 

//DB Name
$dbName = "myDB.db";

//DB Connection
$db = new SQLite3($dbName);

//Create New Table into DB
$query = "CREATE TABLE IF NOT EXISTS users(name string, age INT, email string)";
$db->exec($query);
?>
