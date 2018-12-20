<!DOCTYPE html>
<html>
	<head>
		<title>Foreach</title>
	</head>
	<body>
		<?php 
	
	$friends = array("John", "Mary", "Mark", "Simon", "Garfunkel", "Stipe", "Ivan", "Carl");
	
	foreach ($friends as $value) {
		
		
		$invert = strrev($value);
		echo "<h1>$invert is my friend.</h1> ";
		
	}
	
	
	$numbers = array(1,2,3,4,5,6,7,8,9,23,564,12,454,7,67,34,31,54,88,34,12,453,76,63,14,85,41,31,6);
	$sum = 0;
	foreach ($numbers as $key){
		
	$sum+=$key;
	
		
		
	}
	echo $sum;



		?>
	</body>
</html>
