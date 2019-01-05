<!DOCTYPE html>
<html>
	<head>
		<title>Classes 1</title>
	</head>
	<body>
		<?php 
		
		class person {
			
			var $name;
			var $surname;
			
			
			function set_name($new_name){
				$this->name=$new_name;
				
			}
			
			function get_name(){
				return $this->name;
				
			}
			
			function set_surname($new_surname){
				$this->surname=$new_surname;
				
			}
			
			function get_surname(){
				return $this->surname;
				
			}
			
			
		}


		?>
	</body>
</html>
