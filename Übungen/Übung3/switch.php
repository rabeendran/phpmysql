<?php

$note = 4;
var_dump($note);

switch ($note) {
	case 1:
		echo "nicht bewertet";
		break;
	case 2:
		echo "sehr schlecht";
		break;
	case 3:
		echo "schlecht";
		break;
	case 4:
		echo "genügend";
		break;
	case 5:
		echo "gut";
		break;
	case 6:
		echo "sehr gut";
		break;
	default:
		echo "nicht bewertbar";
		break;
}


?>