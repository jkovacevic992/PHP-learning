<!DOCTYPE html>
<html>
	<head>
		<title>If, Else, Elseif</title>
	</head>
	<body>
	
	<?php
	$first_num= rand(1,100);
	$second_num= rand(1,100);
	
	if($first_num > $second_num){
	
	echo "$first_num is larger than $second_num";
	
	}elseif($first_num < $second_num){
		
		echo "$first_num is smaller than $second_num";
	}else{
		
		echo "$first_num and $second_num are the same";
		
	}
	?>
	

	<form action="submit.php" method="POST">
	<input type="text" name = "input_text"/>
	<input type="submit" name = "submit_button"/>
	</form>
	
	
	
	</body>
</html>