<?php

require ('sqlconnection.php');
 $id= $_POST['id'];
 $inhalt= $_POST['inhalt'];
 $dbName="todo";


 try {
$dbh = new PDO("mysql:host=$hostname;dbname=$dbName", $username, $password);
/*** echo a message saying we have connected ***/

/*** set the PDO error mode to exception ***/
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
/*** sql to UPDATE an existing record ***/
$sql = "UPDATE main SET inhalt = '".$inhalt."' WHERE id = '".$id."'";
/*** we use PDO::exec because no results are returned ***/
$dbh->exec($sql);
/*** echo a message to say the UPDATE succeeded ***/
echo 'Records UPDATED successfully<br />';
}
catch(PDOException $e)
{
/*** echo the sql statement and error message ***/
echo 'UPDATE Failed: '. $sql . '<br />' . $e->getMessage();
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