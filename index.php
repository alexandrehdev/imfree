<?php 
$json_content = file_get_contents("https://www.freetogame.com/api/games");
$result = json_decode($json_content, true);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
	<header>
		ToFri
	</header>
	
	<div class="row">
		<div class="column">
			<?php 
			for ($i=0; $i <= 6 ; $i++) { 
				echo "
				<div class='card'>
				<div>
					<img src=" . $result[$i]['thumbnail'] . ">
					<h4>" . $result[$i]['title'] . " </h4>	
				</div>
				</div>
				";
			}	
			?>
		</div>

		<div class="column">
			<?php 
			for ($i=7; $i <= 13 ; $i++) { 
				echo "
				<div class='card'>
				<div>
					<img src=" . $result[$i]['thumbnail'] . ">
					<h4>" . $result[$i]['title'] . " </h4>	
				</div>
				</div>
				";
			}	
			?>
		</div>

		<div class="column">
			<?php 
			for ($i=14; $i <= 20 ; $i++) { 
				echo "
				<div class='card'>
				<div>
					<img src=" . $result[$i]['thumbnail'] . ">
					<h4>" . $result[$i]['title'] . " </h4>	
				</div>
				</div>
				";
			}	
			?>
		</div>

		<div class="column">
			<?php 
			for ($i=21; $i <= 20 ; $i++) { 
				echo "
				<div class='card'>
				<div>
					<img src=" . $result[$i]['thumbnail'] . ">
					<h4>" . $result[$i]['title'] . " </h4>	
				</div>
				</div>
				";
			}	
			?>
		</div>



	</div>
	<div class="container body-content">
		<footer>
			Made by HLS
		</footer>
	</div>
</body>
</html>