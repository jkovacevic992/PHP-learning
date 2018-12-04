<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="style.css">
		<title>Variables and Constants</title>
	</head>
	<body>
		
		
		<?php
		$name="Josip";
		$this_year=date("Y");
		$my_age=($this_year-1992);
		$city="Osijek";
		define("CONSTANT", "Hello, I'm a constant.");
		echo "The year is " . $this_year .".";
		?>
		
		<h1><?php echo "My name is " . $name . " and I'm " . $my_age . ".". "<br />";?></h1>
		<h2><?php echo "This is a constant: "?></h2>
		<h2 class="constant"><?php echo CONSTANT;?></h2>
	</body>
</html>
