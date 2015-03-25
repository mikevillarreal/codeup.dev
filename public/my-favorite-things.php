<?php


function pageController()
{
    // Initialize an empty data array.
    $data = array();

$myFavoriteFood = ['Tortas', 'Tacos', 'Tostadas', 'Tamales', 'Tortillas', 'Tripas', '& a DietCoke'];

$data['myFavoriteFood'] = $myFavoriteFood;

  // Return the completed data array.
    return $data;    
}

// Call the pageController function and extract all the returned array as local variables.
extract(pageController());


?>

<!DOCTYPE html>
<html>
<head>
	<title>My Favoite Food</title>
	<style type="text/css">
	#container{
		width: 300px;
		height: 300px;
		background-color: black; 
		border-radius: 3%;
		color: yellow;
		padding: 20px;
		margin-right: auto;
		margin-left: auto;
	}
	body {
		background-image: url('images/food_bg.jpg');
		background-size: 100%;
	}
	</style>

</head>
<body>
	<div id= 'container'>
		
		<div>
			<h1>Vitamin "T"</h1>
		</div>
		<div>
			<ol>
				<?foreach ($myFavoriteFood as $myFood):?>
				
				<li><?=$myFood;?></li>
				<?endforeach?>
			</ol>
		</div>
	</div>
</body>
</html>