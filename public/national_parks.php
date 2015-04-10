<?php

require_once ('../park_logins.php');
require_once ('../db_connect.php');

// echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

// Retrieve records from the database
$sql='SELECT * FROM national_parks LIMIT 4';
$parks=$dbc->query($sql)->fetchAll(PDO::FETCH_ASSOC);


if (!empty($_POST['park_name']) && !empty($_POST['description']) &&
		!empty($_POST['location']) && !empty($_POST['established']) &&
		!empty($_POST['area'])) {
	
	$query = "INSERT INTO national_parks (name, description, location, date_established, area_in_acres) 
              VALUES (:name, :description, :location, :date_established, :area_in_acres)";

$stmt = $dbc->prepare($query);

    $stmt->bindValue(':name', $_POST['park_name'], PDO::PARAM_STR);
    $stmt->bindValue(':description', $_POST['description'], PDO::PARAM_STR);
    $stmt->bindValue(':location', $_POST['location'], PDO::PARAM_STR);
    $stmt->bindValue(':date_established', $_POST['established'], PDO::PARAM_STR);
    $stmt->bindValue(':area_in_acres', $_POST['area'], PDO::PARAM_STR);
    $stmt->execute();
}


?>
<!DOCTYPE html>
<html>
	<head>
		<style type="text/css">
			h1{
				text-align: center;
			}
			#container{
				width: 800px;
				height: 480px;
				border: 1px solid;
				margin-right: auto;
				margin-left: auto;
			}
			#table_div{
				width: 800px;
				height: 340px;
				border: 1px solid;
				margin-right: auto;
				margin-left: auto;
			}
			#form_div{
				width: 800px;
				height: 130px;
				border: 1px solid;
				margin-right: auto;
				margin-left: auto;
			}




		</style>
		<title>National Parks</title>
	</head>
	<body>
		<h1>NATIONAL PARKS</h1>
		<div id='container'>
			<div id='table_div'>
				<table border=1>
					<tr>
						<th>Park Name</th>
						<th>Description</th>
						<th>Location</th>
						<th>Since</th>
						<th>Area</th>
					</tr>
				<?php foreach($parks as $park): ?>
					<tr>
						<td><?=$park['name']?></td>
						<td><?=$park['description']?></td>
						<td><?=$park['location']?></td>
						<td><?=$park['date_established']?></td>
						<td><?=$park['area_in_acres']?></td>
					</tr>
				<?php endforeach; ?>
				</table>
			</div>	
			<div id='form_div'>
				<form method="POST" action='national_parks.php'>
				  Park name: <input type="text" name="park_name"><br>
				  Description: <input type="text" name="description"><br>
				  Location: <input type="text" name="location"><br>
				  Date Established: <input type="date" name="established"><br>
				  Area in Acres: <input type="text" name="area"><br>
				  <input type="submit" value="Add New Park">
				</form>
			</div>
		</div>
	</body>
</html>
