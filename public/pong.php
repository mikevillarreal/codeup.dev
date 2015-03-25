<?php
function pageController()
{
	$data = array();

	
	if (empty($_GET['counter'])) {
		$data['counter'] = 0;		
		$data['message'] = "WELCOME TO PING PONG!";
	} else {
		if ($_GET['result']=='hit') {
			$data['counter'] = $_GET['counter'];
			$data['message'] = "PONG";
		} 
		if ($_GET['result']=='miss') {
			$data['counter']= 0;
			$data['message'] = "GAME OVER";
		}
	}

	
	return $data;
}
	extract(pageController());
?>


<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<style type="text/css">
			body{
				background-image: url("images/slap_bg_left.jpg");
				background-size: 100%;
			}
			
		</style>
	</head>
	<body>

		<h1><?=$message?></h1>
		<h2><?=$counter?></h2>

		<a href="ping.php?result=hit&counter=<?= $counter + 1; ?>" onclick="playSound('/sound/hand_slap_around_face.mp3');" >Hit</a>
		<a href="ping.php?result=miss">Miss</a>


		<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	</body>
</html>