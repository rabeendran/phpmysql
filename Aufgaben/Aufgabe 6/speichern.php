<?php

//aufbau der datenbankverbindung
require ('sqlconnection.php');

$dbname="todo";

try {
	
$dbh = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);

//verbindung zur db herstellen

//übergabe der variablen
$anrede= $_POST['anrede'];
$vorname= $_POST['vorname'];
$name= $_POST['name'];
$thema= $_POST['thema'];
$inhalt= $_POST['inhalt'];
$erledigt=$_POST['erledigt'];

 

//sql-befehl zum eintragen der daten in die tabelle
$sql = ("INSERT INTO main (anrede, vorname, name, thema, inhalt, erledigt) 
VALUES 
	('$anrede', '$vorname', '$name', '$thema', '$inhalt', '$erledigt')");	  
///nun erfolgt der eintrag in die tabelle

$dbh->exec($sql);
/*** echo a message to say the database was created ***/
echo 'Recored created successfully<br />';
}
catch(PDOException $e)
{
/*** echo the sql statement and error message ***/
echo $sql . '<br />' . $e->getMessage();
}
?>

<html>
<head>
		<title>Rajeevan TODO-LIST</title>
		<meta charset="utf-8" />
</head>
<body >
<form action="index.html">
<p>
<input type="submit" name="zurück " value="Zurück">
</p>
</form>
</body>
</html>