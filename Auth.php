// <?php
	
// 	class Auth
// 	{
// 		require_once 'Log.php';

// 		public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';

// 	}

// 	Auth::attempt($username, $password), Auth::check(), Auth::user(), and Auth::logout()


// ?>

<?
require_once 'Log.php';
class Auth
{
	public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';
	static function attempt($username, $password)
	{
		if(password_verify('password', self::$password) && $username == 'guest')
		{
			$_SESSION['LOGGED_IN_USER'] = $username;
		}
		else 
		{
			Log::error("User {$username} failed to login.");
		}
	}
	static function user()
	{
		return $_SESSION['LOGGED_IN_USER'];
	}
	static function logout()
	{
		$_SESSION = array();
		if(ini_get("session.use_cookies")) 
		{
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]);
    	}
    	session_destroy();
	}
	static function check()
	{
		return !empty($_SESSION['LOGGED_IN_USER']) ? true : false;
	}
}
?>