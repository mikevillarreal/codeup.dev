<?php
session_start();

var_dump(session_id());


function endSession()
{
    // Unset all of the session variables.
    $_SESSION = array();

    // If it's desired to kill the session, also delete the session cookie.
    // Note: This will destroy the session, and not just the session data!
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

    // Finally, destroy the session.
    session_destroy();
}

if (empty($_SESSION['LOGGED_IN_USER'])){
	header('Location: login.php');
} else {

	endSession();
}



?>


<h1>You have successfully logged out :)</h1>

<a href="login.php">Log In</a>