<?php

$adjectives = ['Ugly', 'Fat', 'Skinny', 'Nice', 'Tired', 'Tiny', 'Evil', 'Hot', 'Fluffy', 'Lovely'];
$nouns = ['World', 'Computer', 'Food', 'Bird', 'Table', 'Chair', 'Instructors', 'Students'];

$randomAdjetive = array_rand($adjectives);
$randomNouns = array_rand($nouns);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Server Name Generator</title>
	<link href='http://fonts.googleapis.com/css?family=Coda:400,800' rel='stylesheet' type='text/css'>	<style type="text/css">
		#evilEyes {
			left: auto;
			right: auto;
		}
		body {
			background-color: black;
			color: white;
			text-align: center;
		}
		h1 {
	
			font-size: 40px;
			font-family: 'Coda', cursive;			
		}
		h2 {
			font-size: 35px;
			font-family: 'Coda', cursive;
		}
		button {
			font-size: 30px;
		}

	</style>
</head>
<body>
	<div id= 'evilEyes'><img src="images/evil_eyes.jpg"></div>
	<div>
		<h1>My Server Names is</h1>
	</div>
	<div>
		<h2>
			<?php 
				echo $adjectives[$randomAdjetive] . ' ' . $nouns[$randomNouns];
			?>
		</h2>
		<button onClick="document.location.reload(true)">Give me a new Name!</button>
	</div>

</body>
</html>