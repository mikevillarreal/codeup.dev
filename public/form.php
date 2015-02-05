<?php
  var_dump($_GET);
  var_dump($_POST);
?>

<html>
<head>
	<title>My First Form</title>
</head>
<body>
	<form method="POST" action="/my_first_form.php">
	    <label for="mailing_list">
    		<input type="checkbox" id="mailing_list" name="mailing_list" value="yes">
    		<label for="mailing_list">Sign me up for the mailing list!</label>
		</label>
	    <p>
	        <label for="username">Username</label>
	        <input id="username" name="username" type="text">
	    </p>
	    <p>
	        <label for="password">Password</label>
	        <input id="password" name="password" type="password">
	    </p>
	    <p>
	    	<label for="survey_question1">Why do you want to program?</label>
	    	<input id="survey_question1" name="reason" type="text">
	    </p>
	    <p>
	        <input type="submit">
	    </p>
	</form>
</body>
</html>