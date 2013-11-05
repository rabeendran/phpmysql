<?php
/*** mysql hostname ***/
$hostname = 'localhost';
/*** mysql username ***/
$username = 'todo';
/*** mysql password ***/
$password = 'todo123';


$dbh = new PDO("mysql:host=$hostname", $username, $password);
/*** echo a message saying we have connected ***/
echo 'Connected to database<br />';

?>