<?php
session_start();

var_dump(session_id());

var_dump($_POST);


if ( (isset($_POST['user']) && $_POST['user'] =='guest')  && (isset($_POST['pass']) && $_POST['pass'] == 'password')) {
	$_SESSION['LOGGED_IN_USER'] = $_POST['user'];
	header('Location: authorize.php');
} elseif (empty($_POST)) {
	$message = 'Please Login';
} else {
	$message = 'Forgot password?  too bad';
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Example</title>
</head>
<body>

    <form method="POST" action="login.php">
        <label>Username</label>
        <input type="text" name="user"><br>
        <label>Password</label>
        <input type="password" name="pass"><br>
        <input type="submit">
    </form>

    <?=$message;?>
</body>
</html>