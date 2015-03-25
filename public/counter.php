<?php
function pageController()
{
	$data = array();
	if (empty($_GET['counter'])) {
		$counter = 0;
	} elseif (!empty($_GET['counter'])) {
		$counter = $_GET['counter'];
	}
	$data['counter'] = $counter;
	return $data;
}
	extract(pageController());
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?= var_dump($_GET)?>
	<h1>Welcome to the GET request Counter exercise</h1>

	<!-- h2 shows current counter value -->
	<h2><?=$counter?></h2>
	<!-- Up Link -->
	<a href="?direction=up&counter=<?= $counter+1; ?>">Up</a>


	<!-- Down Link -->

	<h1></h1>
	<a href="?direction=down&counter=<?= $counter-1; ?>">Down</a>


</body>
</html>