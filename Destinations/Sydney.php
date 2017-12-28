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
	<title>Sydney</title> 
	<link rel="stylesheet" href="..\css\destinations.css">
	<link rel="stylesheet" href="..\css\nav.css">
	<link rel="stylesheet" href="..\css\footer.css">
</head>

<body>
<div id="iefix">
	<?php require "../nav_bar.php"; ?>
</div>

<div class="container">
	<img class="top_img" src="..\img\Destinations\Sydney\sydney.jpg" alt="Sydney">
	<div class="center">Sydney</div>
</div>

<div id="intro">
	<img id="map" src="..\img\Destinations\Sydney\sydneymap.png" alt="Sydney on map">
	<div id="intro-text">
		<p>
		   Le magnifique Opéra prend des allures de bateau en origami, 
		   voguant paisiblement au gré des flots dans le port. 
		   Flânez dans les petites rues pavées du charmant quartier de The Rocks, 
		   puis rejoignez Circular Quay pour assister à un spectacle de rue avant 
		   d'aller visiter le Musée d'art contemporain. 
		   Le panorama depuis l'observatoire de la Sydney Tower Eye est 
		   impressionnant : profitez-en pour découvrir la configuration de la ville depuis tout là-haut.
		</p>
		<hr>
		<p>
			Sydney est un mélange de l'Australie d'hier et d'aujourd'hui. 
			Il faut dire que la ville ne manque pas d’atouts pour s’attirer 
			les faveurs des touristes et des Australiens : une météo très agréable, 
			une ville moderne aux infrastructures développées, 
			un mode de vie définitivement tourné vers l’extérieur, 
			une population multiculturelle, une nature omniprésente et luxuriante, 
			des plages facilement accessibles et paradisiaques, 
			des monuments emblématiques - l’Opéra de Sydney et le Harbour Bridge - 
			et une baie parmi les plus fabuleuses au monde !
		</p>
	</div>
</div>

<div id="right-text">
	<div id="block-hotel">
		<h3 id="name-block">Hôtels</h3>
		<div class="bloc-right">
			<div class="img">
				<a target="_blank" href="http://adgehotel.com.au/">
					<img src="..\img\Hotels\Sydney\adge.jpg" alt="ADGE">
				</a>
				<div class="desc">ADGE</div>
			</div>
		</div>

		<div class="bloc-right">
			<div class="img">
				<a target="_blank" href="http://www.primushotelsydney.com/">
					<img src="..\img\Hotels\Sydney\hotel primus.jpg" alt="Primus hotel">
				</a>
				<div class="desc">Primus hotel</div>
			</div>
		</div>

		<div class="bloc-right">
			<div class="img">
				<a target="_blank" href="http://cambridgehotel.com.au/">
					<img src="..\img\Hotels\Sydney\cambridgehotel.jpg" alt="Cambridge hotel">
				</a>
				<div class="desc">Cambridge hotel</div>
			</div>
		</div>

		<div class="bloc-right">
			<div class="img">
				<a target="_blank" href="http://sydney.park.hyatt.com/en/hotel/home.html">
					<img src="..\img\Hotels\Sydney\park-Hyatt.jpg" alt=Park-Hyatt-Sydney">
				</a>
				<div class="desc">Park-Hyatt-Sydney</div>
			</div>
		</div>

		<div class="bloc-right">
			<div class="img">
				<a target="_blank" href="http://www.icsydney.com.au/">
					<img src="..\img\Hotels\Sydney\interContinental.jpg" alt="InterContinental Sydney">
				</a>
				<div class="desc">InterContinental Sydney</div>
			</div>
		</div>
	</div>

	<div id="info-text">
	<h3>Informations utiles</h3>
		<h4>Opera House</h4>
			<p class="p-info">
				<span class="h-info">Les horaires</span><br>
				 Visites guidées tous les jours de 9h à 17h,(sauf le vendredi de Pâques et le jour de Noël).
				 Départs toutes les 1/2 heures.
				 Durée de la visite : environ 1 heure.<br>
				<span class="h-info">Les tarifs</span><br>
				 Comptez env. 35 AUD/Adulte et 24,50 AUD/Enfant.
				 En réservant vos tickets sur internet vous bénéficiez d'une remise de 25%.
			</p>
		<h4>Sydney Tower</h4>
			<p class="p-info">
				<span class="h-info">La tour</span><br>
				Le billet d'entrée comprend l'Oztreck, un voyage à travers l'histoire, la culture et 
				la diversité géographique de ce vaste continent. 
				La Sydney Tower dispose également d'un 
				restaurant et d'un buffet (niv.1&2) et d'un café (niv.3).<br>
				<span class="h-info">Les tarifs</span><br>
				 SydneyTower (panorama + Oztreck) : comptez env. 25 AUD/adulte et 15 AUD/enfant.
				 Skywalk : comptez env. entre 109 et 139 AUD/personne.
				 (Les amateurs de sensations fortes seront une fois de plus sollicités avec le 
				 SydneySkywalk, une "promenade" aérienne d'1 heure et demie à 360 mètres de hauteur!)
			</p>
		<h4>Harbour Bridge</h4>
			<p class="p-info">
				<span class="h-info">Les horaires</span><br>
				Pylon Lookout : ouvert tous les jours de 10h à 17h. (sauf le jour de Noël).
				BridgeClimb : ouvert tous les jours.
				Durée : 3h et demie.<br>
				<span class="h-info">Les tarifs</span><br>
				Pylon Lookout : comptez env. 9 AUD/Adulte et 3,50 AUD/Enfant
				BridgeClimb : les tarifs varient en fonction du jour et du tour choisi ; comptez entre 170 et 300 AUD/pers.
			</p>
	</div>
</div>
	
<div class="section">
	<h2>Opera House</h2>
	<img class="text-image" src="..\img\Destinations\Sydney\Opera House.jpg" alt="Opera House">
	<p class="section-text">
		Avec son emplacement exceptionnel sur une des plus belles baies du monde et son 
		architecture si particulière en forme de coquillages, l'Opéra de Sydney reste encore aujourd'hui 
		l'une des images emblématiques de l'Australie. La réalisation de cet édifice grandiose 
		fut pourtant bien compliquée. L'Opéra ouvre finalement ses portes en 1973 et aura coûté au total 107 millions de dollars !
        Vous auriez tort de vous contenter d'un simple arrêt sur les marches du parvis. 
        Profitez des larges promenades aménagées tout autour du bâtiment pour vous offrir de très beaux points 
        de vue sur la baie, et surtout visitez l'intérieur !Et si votre bourse vous le permet, le "must" est 
        encore de se réserver une place et ainsi profiter d'une soirée dans l'un des opéras les plus célèbres de la planète.
	</p>
</div>

<div class="section">
	<h2>Sydney Tower</h2>
	<img class="text-image" src="..\img\Destinations\Sydney\Sydney Tower.jpg" alt="Sydney Tower">
	<p class="section-text">
		Impossible de manquer la Sydney Tower, elle se voit de presque n'importe où. 
        Avec ses 305 mètres de haut, c'est d'ailleurs la deuxième plus grande tour d'observation de 
        l'hémisphère sud (après celle d'Auckland en Nouvelle-Zélande).Achevée en 1981, c'est l'attraction touristique par excellence ! 
        La magie opère toujours et la vue à 360° est spectaculaire. 40 secondes seulement par ascenseur vous permettront 
        d'atteindre l'étage panoramique. Vous apprécierez alors à sa juste mesure toute l'étendue de la baie, la City, 
        les différents quartiers de Sydney et par beau temps les Blue Mountains à l'ouest.
	</p>
</div>

<div class="section">
	<h2>Harbour Bridge</h2>
	<img class="text-image" src="..\img\Destinations\Sydney\Harbour Bridge.jpg" alt="Harbour Bridge">
	<p class="section-text">
		Après l'Opéra, le pont est le 2ème symbole de la ville. 
		Appelé affectueusement le "vieux cintre" par les Sydneysiders, 
		le Sydney Harbour Bridge fut achevé en 1932 et coûta près de 20 millions de dollars.
        Il existe plusieurs manières d'apprécier la traversée : la voiture d'abord, qui permet 
        d'atteindre rapidement la rive nord de la baie. Les cyclistes pourront quant à eux profiter 
        de la piste aménagée sur le côté ouest et les piétons de la promenade sur le côté est. 
        L'accès aux escaliers se situe dans les Rocks depuis Argyle Street.
        Si la vue, déjà spectaculaire, ne vous suffit pas, montez les 200 marches situées 
        dans la tour sud-est et profitez du Pylon Lookout (payant).
        Les plus téméraires pourront tenter l'aventure du BridgeClimb, une escalade en groupe 
        de 3 heures et demie en compagnie d'un guide expérimenté.
	</p>
</div>

<div class="section">
	<h2>Queen Victoria Building de Sydney</h2>
	<img class="text-image" src="..\img\Destinations\Sydney\Queen Victoria Building de Sydney.jpg" alt="Queen Victoria Building de Sydney">
	<p class="section-text">
		"Le plus beau centre commercial du monde !". C'est en ces termes que le couturier 
		français Pierre Cardin aurait qualifié l'imposant bâtiment à l'architecture victorienne 
		et byzantine situé en plein coeur du centre des affaires (CBD). Construit par George McRae et achevé en 1898, 
		cet ambitieux projet permit d'employer nombre de chômeurs pendant la sombre période de Récession. 
        On y trouvait des bureaux, des cafés, quelques commerçants et même une salle de concert.
        Le bâtiment connut au fil des années de nombreuses détériorations et il fut question en 1959 de le démolir. 
        Après une sérieuse rénovation, l'édifice ouvrit à nouveau en 1986.
        Recouvrant un bloc entier, le Queen Victoria Building est aujourd'hui un vaste centre commercial 
        qui propose sur 4 étages, de nombreuses boutiques et des lieux de restauration.
        Un passage aménagé permet de rejoindre la gare de Town Hall d'un côté et de l'autre le grand magasin Myers.
	</p>
</div>

<div class="section">
	<h2>Le Quartier The Rocks</h2>
	<img class="text-image" src="..\img\Destinations\Sydney\Le quartier de The Rocks.jpg" alt="Le Quartier de The Rocks">
	<p class="section-text">
		L'histoire pénale de Sydney survit à The Rocks, un fouillis de rues pavées et de culs-de-sacs 
		à cinq minutes à peine de Circular Quay. Vous n'avez qu'à vous éloigner un peu du front de mer 
		pour trouver les alignements de maisons identiques, les cottages de grès et certains 
		des plus vieux pubs de Sydney. Ce quartier historique attire à la fois les visiteurs 
		et les gens du coin avec ses musées et ses galeries d'art, l'animation de ses marchés 
		du weekend et ses hôtels avec vue sur la baie. Le passé et le présent se mêlent de la 
		plus heureuse façon aux Rocks, théâtre à la fois des tours aux fantômes et de certaines 
		des festivités les plus animées de Sydney.
</div>

<?php require "../footer.php"; ?>

</body>
</html>