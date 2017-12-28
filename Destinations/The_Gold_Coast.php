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
	<title>The Gold Coast</title> 
	<link rel="stylesheet" href="..\css\destinations.css">
	<link rel="stylesheet" href="..\css\nav.css">
	<link rel="stylesheet" href="..\css\footer.css">
</head>

<body>
<div id="iefix">
	<?php require "../nav_bar.php"; ?>
</div>

<div class="container">
	<img class="top_img" src="..\img\Destinations\The_Gold_Coast\Gold Coast.jpg" alt="Gold Coast">
	<div class="center">The Gold Coast</div>
</div>

<div id="intro">
	<img id="map" src="..\img\Destinations\The_Gold_Coast\Gold_Coastmap.png" alt="Gold Coast on map">
	<div id="intro-text">
		<p>
		  Avec ses gratte-ciel scintillants, la Côte d'or en Australie est une ville moderne 
		  bordée de superbes plages, dont la plus célèbre est Surfers Paradise.
		</p>
		<hr>
		<p>
			Ne manquez pas la Gold Coast, où des immeubles modernes s'élèvent autour de superbes 
			plages de surf telles que Surfers Paradise. Laissez-vous séduire par la vie nocturne, 
			les parcs à thème internationaux et les boutiques de créateur, admirez la côte à partir 
			d'un avion Spitfire et encouragez les participants à la compétition de natation Coollangatta 
			Ocean Swim. Découvrez l'opulent Palazzo Versace ou gagnez l'intérieur des terres pour une 
			randonnée dans la forêt tropicale ou un séjour en spa.
		</p>
	</div>
</div>

<div id="right-text">
	<div id="block-hotel">
		<h3 id="name-block">Hôtels</h3>
		<div class="bloc-right">
			<div class="img">
				<a target="_blank" href="http://www.hiltonsurfersparadise.com.au/residence">
					<img src="..\img\Hotels\The_Gold_Coast\Hilton Surfers Paradise Residences.jpg" alt="Hilton Surfers Paradise Residences">
				</a>
				<div class="desc">Hilton Surfers Paradise Residences</div>
			</div>
		</div>

		<div class="bloc-right">
			<div class="img">
				<a target="_blank" href="https://www.qtgoldcoast.com.au/hotel-rooms/">
					<img src="..\img\Hotels\The_Gold_Coast\QT Gold Coast.jpg" alt="QT Gold Coast">
				</a>
				<div class="desc">QT Gold Coast</div>
			</div>
		</div>

		<div class="bloc-right">
			<div class="img">
				<a target="_blank" href="http://www.crowneplazasurfersparadise.com.au/">
					<img src="..\img\Hotels\The_Gold_Coast\Crowne Plaza Surfers Paradise.jpg" alt="Crowne Plaza Surfers Paradise ">
				</a>
				<div class="desc">Crowne Plaza Surfers Paradise </div>
			</div>
		</div>

		<div class="bloc-right">
			<div class="img">
				<a target="_blank" href="http://www.royalwoods.com.au/">
					<img src="..\img\Hotels\The_Gold_Coast\Royal Woods Resort.jpg" alt="Royal Woods Resort">
				</a>
				<div class="desc">Royal Woods Resort</div>
			</div>
		</div>

		<div class="bloc-right">
			<div class="img">
				<a target="_blank" href="http://seaworldresort.com.au/">
					<img src="..\img\Hotels\The_Gold_Coast\Sea World Resort & Water Park.jpg" alt="Sea World Resort & Water Park">
				</a>
				<div class="desc">Sea World Resort & Water Park</div>
			</div>
		</div>
	</div>

	<div id="info-text">
	<h3>Informations utiles</h3>
		<h4>Les parcs d’attraction</h4>
			<p class="p-info">
				Pour visiter les parcs d’attraction, il vous faudra payer l’entrée : AU$74 à Wet’n’Wild, 
				AU$89 à Sea World et Warner Bros Movie World, ou si vous comptez visiter les 3, 
				optez pour un "Holiday Ticket" à AU$99 (7 jours) ou à AU$104 (21 jours) qui 
				vous donnera des entrées illimitées dans tous ces parcs (une seule entrée pour Wet'n'Wild) ! 
				De leur côte, Dreamworld et White Water World facturent AU$85 la journée. Vous pouvez 
				également opter pour un pass illimité ("Season Pass") valables dans les deux parcs à partir de AU$99 !
			</p>
		<h4>Le transport</h4>
			<p class="p-info">
				<span class="h-info">Transports en commun</span><br>
				Depuis Brisbane, vous pouvez également rejoindre la Gold Coast par transports en 
				commun : prenez le train depuis Central ou Roma St jusqu’à Nerang, et de là le
				bus 745 jusqu’à Surfers Paradise. Un trajet de près de 2H qui vous coûtera entre 
				AU$8,12 et AU$9,55 avec une go card selon l’heure à laquelle vous voyagez.<br>
				<span class="h-info">Avion</span><br>
				La Gold Coast dispose aussi de son propre aéroport. Au niveau domestique, 
				ce dernier assure des vols directs vers Sydney, Melbourne, Hobart, Perth, 
				Adelaide et Cairns grâce à JetStar, Virgin et Tiger Airways. À l’échelle 
				internationale, Air New Zealand et Air Asia s’ajoutent à la liste des compagnies 
				pour permettre des vols directs jusqu’à la Nouvelle-Zélande et Kuala Lumpur 
				(et de là, la France). Depuis l’aéroport, attrapez le bus 702 jusqu’à Surfers 
				Paradise. Comptez 45 minutes de trajet, facturé entre AU$4,02 et AU$6,90 selon l’heure et le billet.
			</p>
		<h4>Déplacer sur place</h4>
			<p class="p-info">
				Pour vous déplacer sur place, pensez à la très pratique Gold Coast Tourist Shuttle. 
				Cette navette dessert toutes les attractions de la région et propose des pass trajets 
				illimités à partir de AU$79 pour 3 jours, ou AU$149 pour 10 jours.
			</p>
	</div>
</div>

	<div class="section">
		<h2>Le golf sur Gold Coast</h2>
		<img class="text-image" src="..\img\Destinations\The_Gold_Coast\Le golf sur Gold Coast.jpg" alt="Le golf sur Gold Coast">
		<p class="section-text">
			Des parcours de golf tout aussi magnifiques qu'exigeants vous attendent sur la Gold Coast. 
			Optez pour le parcours privé de Palmer Gold Coast, creusé dans 65 hectares de forêt naturelle, 
			celui du RACV Royal Pines Resort, où se tient le championnat PGA d'Australie, ou encore 
			celui de l'Intercontinental, qui vous donne accès aux parcours The Palms et The Pines de 
			Sanctuary Cove. Vous pouvez également opter pour le parcours public de Parkwood International, 
			avec ses 18 trous répartis dans le bush, ou celui de Links, situé sur Hope Island à seulement 
			20 minutes de route de la Gold 
		</p>
	</div>
	
<div class="section">
	<h2>Parc à thème de la Gold Coast</h2>
	<img class="text-image" src="..\img\Destinations\The_Gold_Coast\Parc à thème de la Gold Coast.jpg" alt="Parc à thème de la Gold Coast">
	<p class="section-text">
		La Gold Coast est la capitale australienne des parcs à thème, avec un vaste choix 
		d'activités pour tous les âges. Des manèges les plus hauts et les plus rapides du 
		monde aux parcs présentant la faune et la flore d'Australie, vous trouverez forcément 
		votre bonheur sur la Gold Coast. Rencontrez vos personnages de film et vos super héros 
		préférés ou nagez avec les dauphins et les requins. Explorez la canopée de la forêt 
		pluviale ou trouvez des géodes formées à l'époque où les dinosaures peuplaient la Terre. 
		Caressez un koala, donnez à manger aux kangourous et faites la connaissance des oiseaux 
		indigènes colorés. Des activités couvertes, allant des attractions futuristes aux musées, 
		sont également proposées.
	</p>
</div>

<div class="section">
	<h2>Le surf sur la Gold Coast</h2>
	<img class="text-image" src="..\img\Destinations\The_Gold_Coast\Le surf sur la Gold Coast.jpg" alt="Le surf sur la Gold Coast">
	<p class="section-text">
		Avec ses 70 km de plages baignées de soleil et ses quatre point break épiques, 
		il est facile de comprendre pourquoi la ville la plus renommée de la Côte d'or (Gold Coast) 
		est appelée « Surfer's Paradise ».Tout en étant une destination internationale reconnue pour 
		ses festivités, la Gold Coast est l'endroit d'Australie où les vagues sont les meilleures 
		et les plus régulières pour le surf, et elle héberge de nombreuses compétitions internationales 
		de surf. Ses 35 plages sont surveillées toute l'année par des maîtres-nageurs professionnels, 
		et les vagues conviennent aux surfeurs de tous niveaux d’expérience.
	</p>
</div>

<div class="section">
	<h2>Grande Marche de l'arrière-pays de la Côte d'or</h2>
	<img class="text-image" src="..\img\Destinations\The_Gold_Coast\Grande Marche de l'arrière-pays de la Côte d'or.jpg" alt="Grande Marche de l'arrière-pays de la Côte d'or">
	<p class="section-text">
		54 km / 4 jours / randonnées à la journée Faîtes des randonnées spectaculaires à la journée, 
		en traversant la forêt vierge et luxuriante du Gondwana ou en longeant les flancs d'un ancien volcan érodé,. 
		Ces sentiers de randonnées longs de 54 km traversent un paysage préservé depuis des millions d'années, 
		et reliant les plateaux de Lamington et Springook classés au Patrimoine mondial aux rochers d'Egg Rock 
		et Turtle Rock dans la pittoresque vallée de Numinbah. Admirez le volcan de Tweed, dont la dernière 
		éruption date d'environ 25 millions d'années, et les puissants cours d'eaux et chutes d'eau qui 
		continuent de l'éroder aujourd'hui. Explorez Woonoongoora, appelée « Reine des montagnes » par le peuple 
		local des Yugambeh. Découvrez leurs légendes ancestrales sur la création des rivières et des vallées. 
		Campez dans la forêt vierge à Green Mountains, Woonoongoora ou au campement « The Settlement », 
		ou bien sur le terrain de camping privé de Binna Burra. La meilleure période de l'année 
		pour faire cette marche est entre mars et octobre, quand les températures sont plus douces.
	</p>
</div>

<div class="section">
	<h2>Currumbin Wildlife Sanctuary</h2>
	<img class="text-image" src="..\img\Destinations\The_Gold_Coast\Currumbin Wildlife Sanctuary.jpg" alt="Currumbin Wildlife Sanctuary">
	<p class="section-text">
		Grand parc avec tous les animaux de l'Australie qu'on peut approcher de près, 
		notamment les kangourous qu'on peut nourrir. Un petit train fait le tour du parc 
		et vous dépose dans les différentes zones. 20$ pour faire une photo avec un koala 
		dans les bras. Plusieurs espaces de jeux pour les enfants. Un spectacle de danse aborigène 
		l'après-midi. D'autres spectacles tout au long de la journée. 
	</p>
</div>

<?php require "../footer.php"; ?>

</body>
</html>