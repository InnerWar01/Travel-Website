<?php
	session_start([
    'cookie_lifetime' => 86400,
    'read_and_close'  => true,]);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta http-equiv="Content-Type" content="text/html"; charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php require "path.php";?>css\home_page.css">
	<link rel="stylesheet" href="<?php require "path.php";?>css\nav.css">
	<link rel="stylesheet" href="<?php require "path.php";?>css\footer.css">
</head>

<body>
<div id="iefix">
	<?php require "nav_bar.php"; ?>
</div>

<div align="center">
  <div class="contener_slideshow">
    <div class="contener_slide">
	
	<?php
	  $bg = array('img\Accueil\Image1.jpg', 'img\Accueil\Image2.jpg', 'img\Accueil\Image3.jpg', 'img\Accueil\Image4.jpg', 
					'img\Accueil\Image5.jpg', 'img\Accueil\Image6.jpg', 'img\Accueil\Image7.jpg', 'img\Accueil\Image8.jpg' ); // array of filenames
	  $j = 1;
	 
	  for ($j = 1; $j <= 3; $j++)
	  {
		  $i = rand(0, count($bg)-1); // generate random number size of the array
		  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
		  echo "<div class='slid_" . $j . "'><img class='slide' src='" . $selectedBg . "'></div>";
	  }
	?>
	
    </div>
  </div>
</div>
<br><br>

<div id="intro">
	<img id="map" src="img\Accueil\australia_map.png" alt="Australia on map">
	<div id="intro-text">
	<h1>Plongez au coeur de l'Australie</h1>
		<p>
			L’Australie est une île dont la population vit principalement le long des côtes.
			Les côtes australiennes comptent de nombreuses plages et récifs très prisés par les surfeurs et les plongeurs,
			comme la Grande Barrière de Corail, Bondi Beach ou encore Surfers Paradise. Le centre de l’Australie est majoritairement
			désertique avec très peu d’eau.
			Le célèbre Ayers Rock ou Urulu se trouvant dans cette région et est une attraction touristique populaire.
			Les Alpes australiennes se trouvent du côté sud-est de l’Australie. La plus haute montagne, le Mont Kosciusko,
			est un endroit formidable pour faire des randonnées en été ou pour skier en hiver.
			Dans le nord de l’Australie, on peut trouver des forêts tropicales et un climat plus chaud, dû au fait qu’on se
			trouve plus proche des tropiques. La forêt tropicale de Daintree est célèbre pour sa beauté et ses circuits de randonnée.
		</p>
	</div>
</div>


<div id="block-villes">
	<h3 class="name-block">Découvrez les villes</h3>
	<div class="bloc-center">
		<div class="img">
			<a target="_blank" href="<?php require "path.php";?>destinations\Adelaide.php">
				<img src="img\Destinations\Adelaide\adelaide.jpg" alt="Adelaide">
			</a>
			<div class="desc">Adelaide</div>
		</div>
	</div>

	<div class="bloc-center">
		<div class="img">
			<a target="_blank" href="<?php require "path.php";?>destinations\Alice_Springs.php">
				<img src="img\Destinations\Alice_Springs\Alice Springs.jpg" alt="Alice Springs">
			</a>
			<div class="desc">Alice Springs</div>
		</div>
	</div>

	<div class="bloc-center">
		<div class="img">
			<a target="_blank" href="<?php require "path.php";?>destinations\Brisbane.php">
				<img src="img\Destinations\Brisbane\brisbane.jpg" alt="Brisbane">
			</a>
			<div class="desc">Brisbane</div>
		</div>
	</div>

	<div class="bloc-center">
		<div class="img">
			<a target="_blank" href="<?php require "path.php";?>destinations\Cairns.php">
				<img src="img\Destinations\Cairns\cairns.jpg" alt="Cairns">
			</a>
			<div class="desc">Cairns</div>
		</div>
	</div>

	<div class="bloc-center">
		<div class="img">
			<a target="_blank" href="<?php require "path.php";?>destinations\Darwin.php">
				<img src="img\Destinations\Darwin\darwin.jpg" alt="Darwin">
			</a>
			<div class="desc">Darwin</div>
		</div>
	</div>
	
	<div class="bloc-center">
		<div class="img">
			<a target="_blank" href="<?php require "path.php";?>destinations\Hobart.php">
				<img src="img\Destinations\Hobart\hobart.jpg" alt="Hobart">
			</a>
			<div class="desc">Hobart</div>
		</div>
	</div>
	
	<div class="bloc-center">
		<div class="img">
			<a target="_blank" href="<?php require "path.php";?>destinations\Melbourne.php">
				<img src="img\Destinations\Melbourne\Melbourne.jpg" alt="Melbourne">
			</a>
			<div class="desc">Melbourne</div>
		</div>
	</div>
	
	<div class="bloc-center">
		<div class="img">
			<a target="_blank" href="<?php require "path.php";?>destinations\Perth.php">
				<img src="img\Destinations\Perth\perth.jpg" alt="Perth">
			</a>
			<div class="desc">Perth</div>
		</div>
	</div>
	
	<div class="bloc-center">
		<div class="img">
			<a target="_blank" href="<?php require "path.php";?>destinations\Sydney.php">
				<img src="img\Destinations\Sydney\sydney.jpg" alt="Sydney">
			</a>
			<div class="desc">Sydney</div>
		</div>
	</div>
	
	<div class="bloc-center">
		<div class="img">
			<a target="_blank" href="<?php require "path.php";?>destinations\The_Gold_Coast.php">
				<img src="img\Destinations\The_Gold_Coast\Gold Coast.jpg" alt="The Gold Coast">
			</a>
			<div class="desc">The Gold Coast</div>
		</div>
	</div>
</div>

<div id="block-circuits">
	<h3 class="name-block">Découvrez les circuits</h3>
	<div class="bloc-center">
		<div class="img">
			<a target="_blank" href="<?php require "path.php";?>circuits\circuit1.php">
				<img src="img\Circuits\Circuit1\intro.jpg" alt="Circuit 1">
			</a>
			<div class="desc">Trois semaine à partir de Melbourne, Victoria</div>
		</div>
	</div>

	<div class="bloc-center">
		<div class="img">
			<a target="_blank" href="<?php require "path.php";?>circuits\circuit2.php">
				<img src="img\Circuits\Circuit2\intro.jpg" alt="Circuit 2">
			</a>
			<div class="desc">Train de légende avec l'Indian Pacific</div>
		</div>
	</div>
</div>



<?php require "footer.php"; ?>


  </body>
</html>
