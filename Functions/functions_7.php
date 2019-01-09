<!DOCTYPE html>
<html>
	<head>
		<title>Functions 7</title>
	</head>
	<body>
		<?php 
			//A function that counts all the vowels in a string.
			
		function count_vowels($i){
			
			$str = strtolower($i);
			return substr_count($str, 'a')+ substr_count($str, 'e') + substr_count($str, 'i') + substr_count($str, 'o') + substr_count($str, 'u');
		}	
		
		$my_string = "This is a string where I will try to COUNT all the VOWELS.";
		echo $my_string . "</br> This string has " . count_vowels($my_string) . " vowels.";
		
		?>
	</body>
</html>
