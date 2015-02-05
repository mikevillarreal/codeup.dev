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
	<form method="POST" action="/my_first_form.php">
		<label for="mailing_list">
			<input type="checkbox" id="mailing_list" name="mailing_list" value="yes">
			<label for="mailing_list">Sign me up & Get Great Offers!</label>
		</label>
		<p>
	        <input type="submit">
	    </p>
	</form>
	<form method="POST" action="/my_first_form.php">
		<p>What operating systems have you used?</p>
			<label><input type="checkbox" id="option1" name="option[]" value="linux">Linux</label>
			<label><input type="checkbox" id="option2" name="option[]" value="mac">Mac</label>
		<p><label><input type="checkbox" id="option3" name="option[]" value="windows">Windows</label></p>
		
		<label for="favorite_fruit">Favorite Fruit</label>
		<select id="favorite_fruit" name="favorite_fruit">
			<!-- <option disable selected>Select One</option> -->
			<option value="apple">Apple</option>
			<option value="bannanas">Bannanas</option>
			<option selected>Orange</option>
			<option value="uvas">Uvas</option>
			<option value="mango">Mango</option>
		</select>

		<p><input type="submit"></p>
		
	</form>
	<form>
		<label for="favorite_fruit">What's your favorite Fruit</label>
		<select id="favorite_fruit" name"favorite_fruit []" multiple>
			<option value="apples">Apples</option>
			<option value="oranges">Oranges</option>
			<option value="mangos">Mangos</option>
		</select>
	</form>
	<form method="POST" action="/my_first_form.php">
		<label for="select_testing">Select Testing</label>
		<select id="select_testing" name"select_testing">
			<option value="yes">YES</option>
			<option selected>NO</option>
		</select>
		<p><input type="submit"></p>
	</form>
</body>
</html>