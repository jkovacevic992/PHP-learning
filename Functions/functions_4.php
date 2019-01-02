<!DOCTYPE html>
<html>
	<head>
		<title>Functions 3</title>
	</head>
	<body>
	
	
	<?php
	// Write a function to sort an array.
		
	function sortArray($i){
		
		asort($i);
		
		foreach($i as $key => $value){
			echo $value.", ";
		}
		
		
	}
	
	$numbers = array(1,3,5,6,7,9,4,1,453,12,76,34,76,25,31,57,2,565,231,86,53,31,22,66,88,188);
	
	echo sortArray($numbers);
	

	
	?>
	</body>
</html>
