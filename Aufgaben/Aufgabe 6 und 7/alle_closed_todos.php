<!DOCTYPE html>
<html>
<head>
		<title>Rajeevan TODO-LIST</title>
		<meta charset="utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" media="all" />

	
</head>
<table style="border: solid 1px black; width: 800px;">
<tr><th>ID</th><th>Datum</th><th>Anrede</th><th>Vorname</th><th>Name</th><th>Thema</th><th>Inhalt</th><th>Erledigt</th></tr>


<?php

require ('sqlconnection.php');

$dbname="todo";

/*** extend the RecursiveIteratorIterator ***/
class TableRows extends RecursiveIteratorIterator{
function __construct($it){
/*** here we use the parent class and use LEAVES_ONLY to ***/
parent::__construct($it, self::LEAVES_ONLY);
}
/*** use the current method to wrap up our <td>s ***/
function current(){
return '<td style="width: 150px; border: 1px solid black;">'.parent::current().'</td>';
}
/*** use the beginChildren method to begin a table row ***/
function beginChildren(){
echo '<tr>';
}
/*** use the endChildren method to close a table row ***/
function endChildren() {
echo '</tr>'."\n";
}
} // end class

try {
	
$dbh = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $dbh->prepare('SELECT * FROM main Where erledigt="Ja"');
/*** exceute the query ***/
$stmt->execute();
/* by setting the FETCH mode we can set
*the resulting arrays to numerical or associative
*/
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
/*** the result should be an instance of PDOStatement ***/
/*** IteratorIterator converts it and after that you can do any iterator operation with it ***/
/*** The iterator will fetch the results for us. ***/
foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v)
{
echo $v;
}
$dsn = null;
}
catch (PDOException $e)
{
print "Error!: " . $e->getMessage() . '<br />';
}
?>


<body >
	</table>
<form action="index.html">
<p>
<input type="submit" name="zurück " value="Zurück">
</p>
</form>
</body>
</html>


