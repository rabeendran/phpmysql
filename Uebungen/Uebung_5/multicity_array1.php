

<?php
$multiCity = array(
		array('City', 'Country', 'Continent'),
		array('Tokyo', 'Japan', 'Asia'),
		array('Mexico City','Mexico', 'North America'),
		array('New York City', 'USA', 'North America'),
		array('Mumbai', 'India', 'Asia'),
		array('Seoul', 'Korea', 'Asia'),
		array('Shanghai', 'China', 'Asia'),
		array('Lagos', 'Nigeria', 'Africa'),
		array('Buenos Aires', 'Argentina', 'South America'),
		array('Cairo', 'Egypt', 'Africa'),
		array('London', 'UK','Europe')
);
?>
<html>
<head>
<title>Multi-dimensional Array</title>
<style type="text/css">
td,th {
	width: 8em;
	border: 1px solid black;
	padding-left: 4px;
}

th {
	text-align: center;
}

table {
	border-collapse: collapse;
	border: 1px solid black;
}
</style>
</head>
<body>
	<h2>
		Auflistung Array<br />
	</h2>
	<table>
		<thead>
			<tr>


				<?php
				//Erste Zeile wird ausgeben	
				foreach ($multiCity[0] as $value) { 
    	echo "<th>" . $value . "</th>";
    }
    ?>
			</tr>
		</thead>



			
		<?php
			// Ab erste Zeile im td wird alles ausgeben
		for ($i = 1; $i < count($multiCity); $i++) {
     	echo "<tr>";
     	foreach ($multiCity[$i] as $value) { //Iteration übers Array
	echo "<td>" . $value . "</td>";
}
echo "</tr>";
     }
    ?>
</table>

	<h2>
		Auflistung der St&auml;dte in Asien<br />
	</h2>

	<table>
		<thead>
			<tr>

				<?php
				foreach ($multiCity[0] as $value) {
    	echo "<th>" . $value . "</th>";
    }
    ?>
			</tr>
		</thead>
		<?php
		foreach ($multiCity as $multiArray) {
		if (strcmp($multiArray[2],"Asia") == 0) { // strcmp - Note that this comparison is case sensitive.  ab spalte 2
    	echo "<tr>";
    	foreach ($multiArray as $value) {
    		echo "<td>" . $value . "</td>";
    	}
    	echo "</tr>";
    	}
    }
    ?>
	</table>


	<h2>
		Auflistung der Kontinente, sowie die Zahl der L&auml;nder darin (im
		Array)<br />
	</h2>


				
<table>
		<thead>
			<tr>

				<?php
				foreach ($multiCity[0] as $value) {
    	echo "<th>" . $value . "</th>";
    }
    ?>
			</tr>
		</thead>
		<?php

    ?>
	</table>



	<h2>
		Auflistung nach L&auml;nder A-Z <br />
	</h2>


<table>
		<thead>
			<tr>


				<?php

				//Erste Zeile wird ausgeben	
				foreach ($multiCity[0] as $value) { 

    	echo "<th>" . $value . "</th>";
    }
    ?>
			</tr>
		</thead>



			
		<?php

			// Ab erste Zeile im td wird alles ausgeben
		for ($i = 1; $i < count($multiCity); $i++) {
     	echo "<tr>";
     	foreach ($multiCity[$i] as $value) { //Iteration übers Array
	echo "<td>" . $value . "</td>";
}
echo "</tr>";
 	
    }
    ?>
</table>




</body>
</html>

