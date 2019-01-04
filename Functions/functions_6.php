<!DOCTYPE html>
<html>
	<head>
		<title>Functions 6</title>
	</head>
	<body>
		<?php 
			//Write a PHP function that checks whether a passed string is a palindrome or not?
			
			
			function is_palindrome($i){
				
				if($i == strrev($i)){
					echo "The word ". $i." is a palindrome</br>";
				}else{
					echo "The word ". $i. " is not a palindrome</br>";
				}
				
				
				
			}
			is_palindrome("anavolimilovana");
			is_palindrome("someword");
		?>
	</body>
</html>
