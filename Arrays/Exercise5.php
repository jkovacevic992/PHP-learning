<!DOCTYPE html>
<html>
	<head>
		<title>Exercise 4</title>
	</head>
	<body>
		<?php
		/*
		Write a PHP script which decodes the following JSON string. Go to the editor
		Sample JSON code :
		{"Title": "The Cuckoos Calling",
		"Author": "Robert Galbraith",
		"Detail": {
		"Publisher": "Little Brown"
		}}
		Expected Output :
		Title : The Cuckoos Calling
		Author : Robert Galbraith
		Publisher : Little Brown
		*/
		
		function display($value,$key){
		echo "$key : $value </br>";
		}
		$json = '{"Title": "The Cuckoos Calling",
		"Author": "Robert Galbraith",
		"Detail": {
		"Publisher": "Little Brown"
		}}';
		
		$json1 = json_decode($json,true);
		array_walk_recursive($json1, 'display');
		
		
		?>
	</body>
</html>
