<!DOCTYPE html>
<html>
	<head>
		<title>Functions 1</title>
	</head>
	<body>
	
	
	<?php
	//Write a function to calculate the factorial of a number (a non-negative integer). The function accepts the number as an argument.
		function factorial($n){
			
			if($n==0)
			{
				return 1;
			}else{
				return $n * factorial($n-1);
			}
			
		}
		
		echo factorial(5);
		
	
	?>
	</body>
</html>
