<?php

require ('sqlconnection.php');
 $id= $_POST['id'];
 $dbName="todo";

try {
	$dbh = new PDO("mysql:host=$hostname;dbname=$dbName", $username, $password);
/*** echo a message saying we have connected ***/

/*** set the PDO error mode to exception ***/
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
/*** our sql statement ***/
$sql = "DELETE FROM main WHERE id = '".$id."'";
/*** we use PDO::exec because no results are returned ***/
$dbh->exec($sql);
/*** echo a message to say all is well ***/
echo 'Record Deleted successfully<br />';
}
catch(PDOException $e)
{
/*** echo the sql statement and error message ***/
echo 'Unable to Delete Record<br />'.$sql . '<br />' . $e->getMessage();
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


