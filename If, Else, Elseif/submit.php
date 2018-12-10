<!DOCTYPE html>
<html>
	<head>
		<title>Submit</title>
	</head>
	<body>
		<?php
	
	if($_POST["input_text"]>0){
	
		echo $_POST["input_text"]. " is positive.</br>";
	
	
	}elseif($_POST["input_text"]<0){
		echo $_POST["input_text"]. " is negative.</br>";
	}else{
		
		echo $_POST["input_text"]. " is neither positive nor negative.</br>";
	}
	?>
	<form action="user_input_practice.php" method="POST">
	<input type="submit" name="return" value="Return">
	
	
	</form>
	
	<?php
	
	
	$vowels = "";
	$input = strtolower($_POST["input1"]);
	
	if($input == "a" 
	|| $input == "e"
	|| $input == "i"
	|| $input == "o"
	|| $input == "u"
	|| $input == "y"){
		
		$vowels = true;
	}else{
		
		$vowels = false;
	}
	if($vowels){
		echo $_POST["input1"] . " is a vowel.";
		
	}else{
		echo $_POST["input1"] . " is a consonant.";
	}
	
	
	?>
	
	</body>
</html>
