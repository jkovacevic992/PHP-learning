<!DOCTYPE html>
<html>
	<head>
		<title>For Loop</title>
	</head>
	<body>
	<p>Create a script to construct the following pattern, using nested for loop. Go to the editor</p>

	<p>*<br>* *<br>* * *<br>* * * *<br>* * * * *<br> </p> 
	 
	<?php
	for($i=1; $i<=6; $i++){
		
		
		for($j=1;$j<$i; $j++){
			echo "*";
			
			if($j <= $i){
				echo " ";
			}
			
			
		}
		echo "<br>";
	
	
	}
	
	
	?>
	</body>
</html>