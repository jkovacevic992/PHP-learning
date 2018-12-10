<!DOCTYPE html>
<html>
	<head>
		<title>Submit</title>
	</head>
	<body>
		<?php
	
	if($_POST["input_text"]>0){
	
		echo $_POST["input_text"]. " is positive.";
	
	
	}elseif($_POST["input_text"]<0){
		echo $_POST["input_text"]. " is negative.";
	}else{
		
		echo $_POST["input_text"]. " is neither positive nor negative.";
	}
	?>
	<form action="positive_or_negative.php" method="POST">
	<input type="submit" name="return" value="Return">
	
	
	</form>
	
	</body>
</html>
