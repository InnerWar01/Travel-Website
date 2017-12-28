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
	<title>Hobart</title> 
	<link rel="stylesheet" href="..\css\destinations.css">
	<link rel="stylesheet" href="..\css\nav.css">
	<link rel="stylesheet" href="..\css\footer.css">
</head>

<body>
<div id="iefix">
	<?php require "../nav_bar.php"; ?>
</div>

<div class="container">
	<img class="top_img" src="..\img\Destinations\Hobart\hobart.jpg" alt="Hobart">
	<div class="center">Hobart</div>
</div>

<div id="intro">
	<img id="map" src="..\img\Destinations\Hobart\hobartmap.png" alt="Hobart on map">
	<div id="intro-text">
		<p>
		   Envie de se détendre, de manger un morceau et de flâner sur les marchés du week-end
		   dans l'ambiance conviviale d'un port? Hobart est la destination parfaite pour vous.
		</p>
		<hr>
		<p>
			Perchée sur les hauteurs, Hobart, ville côtière du sud-est de la Tasmanie
			et pleine d’animation, est un mélange unique en son genre de XIXe et XXIe siècles.
			Les anciens entrepôts de la plus grande ville de Tasmanie, vieux de plusieurs siècles,
			ont été reconvertis en cafés, restaurants et petits théâtres donnant sur le port,
			où yachts et bateaux de pêche se succèdent en un ballet incessant. La richesse artistique
			et culturelle, la vie nocturne intense et le rythme de vie paisible d’Hobart ajoutent encore au charme de la ville.
		</p>
	</div>
</div>

<div id="right-text">
	<div id="block-hotel">
		<h3 id="name-block">Hôtels</h3>
		<div class="bloc-right">
			<div class="img">
				<a target="_blank" href="http://www.bestwestern.fr/fr/hotel-Hobart,BEST-WESTERN-Hobart,97434">
					<img src="..\img\Hotels\Hobart\Best Western Hobart.jpg" alt="Best Western Hobart">
				</a>
				<div class="desc">Best Western Hobart</div>
			</div>
		</div>

		<div class="bloc-right">
			<div class="img">
				<a target="_blank" href="http://www.wrestpoint.com.au/">
					<img src="..\img\Hotels\Hobart\Wrest Point.jpg" alt="Wrest Point">
				</a>
				<div class="desc">Wrest Point</div>
			</div>
		</div>

		<div class="bloc-right">
			<div class="img">
				<a target="_blank" href="http://fountainside-hotel-hobart.h-rez.com/index.htm?lbl=ggl-en&gclid=CjwKEAiA9om3BRDpzvihsdGnhTwSJAAkSewLJI6Pc4ivkDMyiaUdilB7rx0ONy8ejgmrQgXZv4tkYxoCjbHw_wcB">
					<img src="..\img\Hotels\Hobart\Fountainside Hotel.jpg" alt="Fountainside Hotel">
				</a>
				<div class="desc">Fountainside Hotel</div>
			</div>
		</div>

		<div class="bloc-right">
			<div class="img">
				<a target="_blank" href="http://oldwoolstore.com.au/">
					<img src="..\img\Hotels\Hobart\The Old Woolstore Apartment Hotel.jpg" alt="The Old Woolstore Apartment Hotel">
				</a>
				<div class="desc">The Old Woolstore Apartment Hotel</div>
			</div>
		</div>

		<div class="bloc-right">
			<div class="img">
				<a target="_blank" href="http://hadleyshotel.com.au/">
					<img src="..\img\Hotels\Hobart\Hadley's Orient Hotel.jpg" alt="Hadley's Orient Hotel">
				</a>
				<div class="desc">Hadley's Orient Hotel</div>
			</div>
		</div>
	</div>

	<div id="info-text">
	<h3>Informations utiles</h3>
		<h4>La Météo</h4>
			<p class="p-info">
			   Le temps est très aléatoire et vous pourrez vivre dans une même journée tempête, 
			   pluie, vent et grand soleil. L’été (décembre à février) est en général très agréable 
			   et idéal pour découvrir tout le pays. En hiver, attendez-vous à un froid coriace et 
			   beaucoup de randos ne sont pas praticables à cause de la neige. Pour ce qui est de 
			   la pluie, en 1 mois sur place (février), nous avons du avoir 3 jours de pluie, rien 
			   de méchant donc. Mais comme dit plus haut, quelle que soit la saison, il vaut mieux être préparé à tout.
			</p>
		<h4>Transport</h4>
			<p class="p-info">
				Pour se rendre en Tasmanie, un premier dilemme se pose entre le ferry ou l’avion. 
				Le ferry est plus long (10 h de traversée environ), beaucoup plus cher, seulement 
				au départ de Melbourne, MAIS (parce qu’il faut bien un bon côté) vous permet 
				d’amener votre voiture ou van avec vous. Il faut donc bien calculer son coup en 
				fonction du temps qu’on veut passer là-bas, du projet qu’on a (faire tout le tour 
				ou juste une partie, bosser ou non, etc.. ) et de l’argent qu’il nous reste. 
				Voici un petit comparatif rapide des deux options.<br>
				<span class="h-info">Ferry</span><br>
				Une seule compagnie : Spirit of Tasmania, départ de Melbourne 2 à 3 fois par jour 
				(le matin pour la traversée jour ou 19 h 30 et 21 h en traversée nuit). 
				Arrivée 10 h plus tard à Devonport, au nord de la Tasmanie.<br>
				<span class="h-info">Avion</span><br>
				Départ de Melbourne, mais aussi toutes les grandes villes australiennes. 
				Arrivée à Hobart pour la plupart des compagnies. 1 h de vol depuis Melbourne.
			</p>
	</div>
</div>
	
<div class="section">
	<h2>Mount Wellington</h2>
	<img class="text-image" src="..\img\Destinations\Hobart\hobartwellington.jpg" alt="Mt. Wellington">
	<p class="section-text">
		Le mont Wellington est considéré par les habitants de la ville comme un parc récréatif
		depuis le milieu du 19e siècle, époque de construction de huttes destinées aux randonneurs
		à des points stratégiques. Des vestiges de ces huttes sont encore visibles à l'heure actuelle
		et certaines d'entre elles construites au tout début du 20e siècle sont toujours utilisées.
		Lors de sa visite à Hobart en 1836, au cours d'un voyage autour du monde sur le HMS Beagle,
		le naturaliste Charles Darwin a atteint le sommet de la montagne. Aujourd'hui, le site offre
		toutes sortes d'activités de plein air, du vélo de montagne à l'escalade.
	</p>
</div>

<div class="section">
	<h2>Jardins botaniques royaux de Tasmanie</h2>
	<img class="text-image" src="..\img\Destinations\Hobart\hobartjardins.jpg" alt="Jardins botaniques royaux de Tasmanie">
	<p class="section-text">
		En visite à Hobart, ne manquez pas les jardins botaniques royaux de Tasmanie et leur cadre
		luxuriant situé à l'intersection des deux axes routiers Tasman et Domain Highways. Entrez
		dans cet écrin de végétation de 14 hectares et explorez la seule serre au monde de plantes
		subantarctiques. Admirez la flore tasmanienne réunie dans une vaste collection, mais aussi
		le jardin japonais et le potager. 
	</p>
</div>

<div class="section">
	<h2>Constitution Dock</h2>
	<img class="text-image" src="..\img\Destinations\Hobart\hobartdock.jpg" alt="Constitution Dock">
	<p class="section-text">
		Baladez-vous parmi les édifices historiques, prenez un repas dans l'un des restaurants en
		front de mer ou achetez une collation dans l'un des stands de fruits de mer frais sur le quai Constitution Dock de Hobart.
		Prenez votre temps pour explorer cette zone empreinte d'histoire qui mêle l'ancien au moderne.
		Admirez les entrepôts en grès qui bordent le quai. De style georgien, ils ont été construits dans les années 1830.
		Ces bâtiments étaient autrefois utilisés pour stocker de la laine, des céréales et de l'huile de baleine.
		Ils ont ensuite été transformés en bureaux, en galeries et en restaurants. Au nord, vous trouverez le Gasworks Village,
		où vous pourrez flâner dans les galeries et les boutiques d'artisanat, ou même goûter du whisky à la distillerie.
	</p>
</div>

<div class="section">
	<h2>Chocolaterie Cadbury</h2>
	<img class="text-image" src="..\img\Destinations\Hobart\hobartchocolaterie.jpg" alt="Chocolaterie Cadbury">
	<p class="section-text">
		La chocolaterie Cadbury, située à Claremont, était le fournisseur en chocolat des forces armées
		australiennes au cours de la Seconde guerre mondiale. La chocolaterie, construite sur une péninsule
		qui avance sur le fleuve Derwent River, tournait alors 24 h/24 pour fabriquer suffisamment de rations
		de chocolat aux soldats et aux civils. Il s'agit encore aujourd'hui de la plus grande chocolaterie
		d'Australie et la majeure partie du lait utilisé dans la production provient des vaches tasmaniennes. 
	</p>
</div>

<div class="section">
	<h2>MONA - Musée d'art nouveau et ancien</h2>
	<img class="text-image" src="..\img\Destinations\Hobart\hobartmona.jpg" alt="Musée d'art nouveau et ancien">
	<p class="section-text">
		Prévoyez une journée pour pouvoir admirer la vaste collection ainsi que la magnifique architecture
		du plus grand musée d'art privé d'Australie. MONA signifie Museum of Old and New Art et les galeries
		de ce musée présentent des œuvres d'art moderne émouvantes et parfois provocantes, ainsi que des objets anciens et des antiquités.
		Laissez votre esprit enfantin ressortir et partez à la découverte de ce lieu organisé tel un labyrinthe avec des étages en mezzanine.
		Il s'agit d'un « Disneyland subversif pour adultes » comme le définit son fondateur et collectionneur principal, né à Hobart, David Walsh.
		Ses projets pour le musée étaient non conformistes, voire révolutionnaires, mais le MONA est l'un des musées dont on parle le plus dans le monde entier.
	</p>
</div>

<?php require "../footer.php"; ?>

</body>
</html>