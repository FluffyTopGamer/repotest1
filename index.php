<!DOCTYPE html>
<head>Mijn tite van mijn website.</head>
<body>
	<?php

	$naam = 'Danny';
	$leeftijd = '17';
	$lengte = '1.89';
	$woonplaats = 'Zoetermeer';
	$leeftijd2 = 35;
	

	echo " <br>Naam: " .$naam. "";
	echo " <br>Leeftijd: " .$leeftijd. "";
	echo " <br>Lengte: " .$lengte. "m";
	
	
	
	echo " <br>Ik ben " .$naam. ", ik ben " .$leeftijd. ' jaar' . " oud en ben " .$lengte. 'm lang';
	
	echo sprintf('<br>Ik ben %s, ik ben %s jaar oud en ben %s m lang en ik woon in %s <br>', $naam, $leeftijd, $lengte, $woonplaats);
	

	echo "<br><br>";

	
	echo gettype($leeftijd2);

	$leeftijd2 = (string) $leeftijd;
	echo gettype($leeftijd2);

	(string) $leeftijd;
	echo gettype($leeftijd);

	
	echo "<br><br>";


	$mijn_array = array($naam, $leeftijd, $lengte);

	print_r($mijn_array);







	?>




	




</body>
</html>