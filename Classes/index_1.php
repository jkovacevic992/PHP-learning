<!DOCTYPE html>
<html>
	<head>
		<title>Index Classes 1</title>
	</head>
	<body>
		<?php include("classes_1.php");?>
		
		<?php
			$josip = new person();
			$ivan = new person();
			
			$josip->set_name("Josip");
			$josip->set_surname("Kovačević");
			$ivan->set_name("Ivan");
			$ivan->set_surname("Kopić");
			
			function roll_dice(){
				
				return rand(1,6);
				
			}
			echo "Hello, my name is ". $josip->get_name()." ".$josip->get_surname().".</br>";
			
			
			
			echo "This is my friend, his name is ". $ivan->get_name()." ".$ivan->get_surname().".</br>"."We will now roll a dice.</br>";
			
			echo $josip->get_name(). " rolled a ".roll_dice().".</br>";
			
			echo $ivan->get_name(). " rolled a ".roll_dice().".</br>";
		?>
	</body>
</html>
