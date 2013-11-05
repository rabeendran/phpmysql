<?php

require ('sqlconnection.php');

 $dbName="todo";

try {
$dbh = new PDO("mysql:host=$hostname;dbname=$dbName", $username, $password);
/*** echo a message saying we have connected ***/


/*** set the PDO error mode to exception ***/
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "CREATE TABLE main (
id int(50) NOT NULL AUTO_INCREMENT,
datum TIMESTAMP NOT NULL,
anrede char (200) NOT NULL,
vorname char (200) NOT NULL,
name char (200) NOT NULL,
thema char(20) NOT NULL,
inhalt char(200) NOT NULL,
erledigt char (60) NOT NULL,
PRIMARY KEY (id)
)";
/*** we use PDO::exec because no results are returned ***/
$dbh->exec($sql);
/*** echo a message to say the database was created ***/
echo 'Table created successfully<br />';
}
catch(PDOException $e)
{
/*** echo the sql statement and error message ***/
echo $sql . '<br />' . $e->getMessage();
}
?>