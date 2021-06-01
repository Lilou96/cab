
<style>
body {
 
  background-image: url(image/adn.png);
}
header {
text-align: center;
 margin: 15px;
 }
 img:hover { 
 	transform: scale(1.1);
  }
 div.a{
 	position: absolute;
 	right: 200px;
 }

  div.d{
 	position: relative;
 	display: inline-block;
 	right : 300px;
 	top: 0px;
 }

 div.d-c{
 	display: none;
 	position: absolute;
 	background-color: transparent;
 	min-width: 160px;
 	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
 }

 .d:hover .d-c{
 	display: block;
 }

 div.t{
 margin: 200px;
 }

header {
			size: 1250px;
			height: 320px;
				background-color: white, gray;
				background-size: 1250px 320px;
				position: relative;
}

 #insta {
 	text-align: right;
 	margin-top: 10px;
 	position: relative;
 	right: 0px;
 	top: 0px;
 }


</style>
<?php 
	require_once("fonction.php");
?>


<!DOCTYPE html>
<html>
<head>
	<title> Cabinet médical </title>
	<meta charset="utf-8">
</head>
<body>

	<header>
	<div class="d"><a href="index.php?page=0"><img src="image/logo4.png" width="100" height="100"> </a> <div class="d-c"> <p> Gestion du cabinet médical </p>
		</div> 
		</div>

	
	<div class="d"><a href="index.php?page=1"> <img src="image/hopital1.png"
		width="110" height="110"> </a> <div class="d-c"> <p> Cabinet médical </p>
		</div> 
		</div>


	<div class="d"><a href="index.php?page=2"> <img src="image/medecin1.png"
		width="80" height="80"> </a> <div class="d-c"> <p> Médecin </p>
		</div> 
		</div>

	<div class="d"><a href="index.php?page=3"> <img src="image/medicament1.png"
		width="100" height="100"> </a> <div class="d-c"> <p> Médicament </p>
		</div> 
		</div>

	<div class="d"><a href="index.php?page=4"> <img src="image/patient1.png"
		width="100" height="100"> </a> <div class="d-c"> <p> Patient </p>
		</div> 
		</div>

	<div class="d"><a href="index.php?page=5"> <img src="image/maladie1.png"
		width="100" height="100"> </a> <div class="d-c"> <p> Maladie </p>
		</div> 
		</div>
		
		</header>
		<center>
		<?php
		if (isset($_GET['page']))
		{
			$page = $_GET['page'];
		}
		else {
			$page = 0;
		}
		switch ($page)
		 {
		 	case 0 : require_once("index.php"); break;
			case 1 : require_once("rdv.php"); break;
			case 2 : require_once("medecin.php"); break;
			case 3 : require_once("medicament.php"); break;
			case 4 : require_once("patient.php"); break;
			case 5 : require_once("maladie.php"); break;
		}
		?>
	<hr/>
	</center>
	<footer data-steller-background-ratio="5">

		<div class="a"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22260.43842557668!2d4.808342419628151!3d45.78011171276474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4eb1eb2c579ef%3A0xad42a6e9b6b1d4ad!2sLa%20Croix-Rousse%2C%2069004%20Lyon!5e0!3m2!1sfr!2sfr!4v1582815608811!5m2!1sfr!2sfr" width="500" height="500" frameborder="1" style="border:0;" allowfullscreen=""></iframe> </div>

	<div class="b">
	<div class="t"><h3>Tel : 0606060606</h3></div>
	<div class="t"><h3>adresse : 103 Grande Rue de la Croix-Rousse 69004 Lyon</h3></div>
		
	</div>

			
	</footer>

</body>
</html>