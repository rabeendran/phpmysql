<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
Ein Mail wurde gesendet!	
<body>
<?php
$empfaenger = "rajeevan@bluewin.ch";
$betreff = "PHP ist toll 2";
$text = "Hallo Jaime!
         Wenn du diese Nachricht empfängst
         läuft mein SSMTp und PHP Script :-)";
mail($empfaenger, $betreff, $text);
?>
	</body>
</html>