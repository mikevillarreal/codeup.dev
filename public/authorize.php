<?php
session_start();

var_dump(session_id());

if (empty($_SESSION['LOGGED_IN_USER'])){
	header('Location: login.php');
} else {
	$message = "Hello " . $_SESSION['LOGGED_IN_USER'];
}


?>



<!DOCTYPE <html>
<head>
	<title>Authorized Page</title>
</head>
<body>
	<h1>Authorized Access!!!</h1>
	<h2><?=$message;?></h2>

	<a href="logout.php">Log out</a>
</body>
</html>