<?php 
$json_content = file_get_contents("https://www.freetogame.com/api/games");
$result = json_decode($json_content, true);
?>
<!DOCTYPE html>
<html>
<head>
	<title>ToFri</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">
</head>
<body>
	<header>
		ImFree
		<a style=" z-index: 999; text-decoration: none; font-size: 25px; margin: 10px; " id="demo01" href="#animatedModal">Info</a>
	</header>
	<div id="animatedModal">
		<div class="close-animatedModal" > 
			<img src="img/happy.png">
			<span>X</span>
		</div>

		<div class="modal-content">
			<div id="card-form">
				<p>
					Howdy, this is a personal project that just let the gamers know about the free games around on internet. Every week new free games will be shown right here. So enjoy <br>
					And right down below it is the tecnologies i used for create this page
				</p>
				<div class="tools">
					<p>
						<!-- HTML -->
						<img src="img/html-5.png">
					</p>

					<p>
						<!-- CSS -->
						<img src="img/css.png">
					</p>

					<p>
						<!-- JavaScript -->
						<img src="img/javascript.png">
					</p>

					<p>
						<!-- PHP -->
						<img src="img/php.png">
					</p>
				</div>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="column">
			<?php 
			for ($i=0; $i <= 10 ; $i++) { 
				echo "
				<div class='card'>
				<div>
				<img src=" . $result[$i]['thumbnail'] . ">
				<h4>" . $result[$i]['title'] . " </h4>	
				</div>
				<div class='card-description'>
				<p>" . $result[$i]['short_description'] . "</p>
				</div>
				</div>
				";
			}	
			?>
		</div>

		<div class="column">
			<?php 
			for ($i=11; $i <= 21 ; $i++) { 
				echo "
				<div class='card'>
				<div>
				<img src=" . $result[$i]['thumbnail'] . ">
				<h4>" . $result[$i]['title'] . " </h4>	
				</div>
				<div class='card-description'>
				<p>" . $result[$i]['short_description'] . "</p>
				</div>
				</div>
				";
			}	
			?>
		</div>

		<div class="column">
			<?php 
			for ($i=22; $i <= 32 ; $i++) { 
				echo "
				<div class='card'>
				<div>
				<img src=" . $result[$i]['thumbnail'] . ">
				<h4>" . $result[$i]['title'] . " </h4>	
				</div>
				<div class='card-description'>
				<p>" . $result[$i]['short_description'] . "</p>
				</div>
				</div>
				";
			}	
			?>
		</div>

		<div class="column">
			<?php 
			for ($i=33; $i <= 32 ; $i++) { 
				echo "
				<div class='card'>
				<div>
				<img src=" . $result[$i]['thumbnail'] . ">
				<h4>" . $result[$i]['title'] . " </h4>	
				</div>
				<div class='card-description'>
				<p>" . $result[$i]['short_description'] . "</p>
				</div>
				</div>
				";
			}	
			?>
		</div>



	</div>
	<div class="container body-content">
		<footer>
			<div class="content">
				<a target="_blank" href="https://github.com/HallyssonDev" style="text-decoration: none; color: #F0F0F0">GitHub<i class="fab fa-github"></i></a>
			</div>
			Made by HLS
			<div>
				<span class="themes" onclick="changeTheme()">Tema Escuro<i class="fas fa-moon"></i></span>
			</div>
		</footer>
	</div>
	<script type="text/javascript">

		function changeTheme () {
			document.body.style.backgroundColor = 'black';
		}
	</script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/animatedmodal@1.0.0/animatedModal.min.js"></script>
	<script type="text/javascript">
		$("#demo01").animatedModal();
	</script>
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>