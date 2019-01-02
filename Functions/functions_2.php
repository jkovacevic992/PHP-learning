<!DOCTYPE html>
<html>
	<head>
		<title>Functions 2</title>
	</head>
	<body>
	
	
	<?php
	//Write a function to check a number is prime or not.
		function primeNumber($n){
			
			for($i=2; $i<$n; $i++){
				
				if($n % $i == 0){
					return 0;
					
				}
				
			}
			
			return 1;
					
		}
		
		$j= primeNumber(83);
		
		if($j==0){
			echo "It is not a prime number";
		}else{
			echo "It is a prime number";
		}
		
		
		
		
	
	?>
	</body>
</html>
