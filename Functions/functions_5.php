<!DOCTYPE html>
<html>
	<head>
		<title>Functions 5</title>
	</head>
	<body>
	
	
	<?php
	// Write a PHP function that checks if a string is all lowercase.
		
	function is_lowercase($i){
		
		if(ctype_lower($i)==true){
			echo "Your string is all lowercase."."</br>";
		}
		else{
			echo "Your string is not all lowercase."."</br>";
		};
		
		
	}
	
	$j = "This is a STRING with soME CApital Letters";
	$k = "thisisastringwithnocapitalletters";
	
	is_lowercase($j);
	is_lowercase($k);

	
	
	
	
	

	
	?>
	</body>
</html>
