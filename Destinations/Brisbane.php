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
	<title>Brisbane</title> 
	<link rel="stylesheet" href="..\css\destinations.css">
	<link rel="stylesheet" href="..\css\nav.css">
	<link rel="stylesheet" href="..\css\footer.css">
</head>

<body>
<div id="iefix">
	<?php require "../nav_bar.php"; ?>
</div>

<div class="container">
	<img class="top_img" src="..\img\Destinations\Brisbane\Brisbane.jpg" alt="Brisbane">
	<div class="center">Brisbane</div>
</div>

<div id="intro">
	<img id="map" src="..\img\Destinations\Brisbane\brisbanemap.png" alt="Brisbane on map">
	<div id="intro-text">
		<p>
		   Faites-vous bronzer sur le sable doré de Surfers Paradise, 
		   faites de la plongée à travers les trésors en technicolor de la Grande barrière 
		   de corail ou bien faites un tour en 4x4 sur l’île Fraser.
		</p>
		<hr>
		<p>
			Au départ de Brisbane, visitez l'île de Moreton Island, Surfers Paradise et Noosa 
			sur la Sunshine Coast. Partez vers l'outback du Queensland ou vers le nord en direction 
			de l'île de Fraser Island, site classé au patrimoine mondial de l'UNESCO, des attractions 
			naturelles du Bundaberg, et de Mackay, aux portes de l'idyllique archipel des Whitsundays. 
			Dans le nord tropical du Queensland, Townsville, Cairns, Port Douglas et Mission Beach ponctuent 
			la côte le long de la grande barrière de corail, jusqu'à la forêt tropicale de Daintree.
		</p>
	</div>
</div>

<div id="right-text">
	<div id="block-hotel">
		<h3 id="name-block">Hôtels</h3>
		<div class="bloc-right">
			<div class="img">
				<a target="_blank" href="http://www.thepointbrisbane.com.au/">
					<img src="..\img\Hotels\Brisbane\The Point Brisbane.jpg" alt="The Point Brisbane">
				</a>
				<div class="desc">The Point Brisbane</div>
			</div>
		</div>

		<div class="bloc-right">
			<div class="img">
				<a target="_blank" href="http://www.meritonapartments.com.au/brisbane/adelaide-street">
					<img src="..\img\Hotels\Brisbane\Meriton Serviced Apartments Adelaide Street.jpg" alt="Meriton Serviced Apartments Adelaide Street">
				</a>
				<div class="desc">Meriton Serviced Apartments Adelaide Street</div>
			</div>
		</div>

		<div class="bloc-right">
			<div class="img">
				<a target="_blank" href="http://www.georgewilliamshotel.com.au/">
					<img src="..\img\Hotels\Brisbane\George Williams Hotel.jpg" alt="George Williams Hotel ">
				</a>
				<div class="desc">George Williams Hotel </div>
			</div>
		</div>

		<div class="bloc-right">
			<div class="img">
				<a target="_blank" href="http://www.mercurebrisbane.com.au/">
					<img src="..\img\Hotels\Brisbane\Mercure Brisbane.jpg" alt="Mercure Brisbane">
				</a>
				<div class="desc">Mercure Brisbane</div>
			</div>
		</div>

		<div class="bloc-right">
			<div class="img">
				<a target="_blank" href="https://www.hoteljen.com/brisbane/romastreet/about/">
					<img src="..\img\Hotels\Brisbane\Hotel Jen Brisbane.jpg" alt="Hotel Jen Brisbane">
				</a>
				<div class="desc">Hotel Jen Brisbane</div>
			</div>
		</div>
	</div>

	<div id="info-text">
	<h3>Informations utiles</h3>
		<h4>Queensland Art Gallery & Queensland Gallery of Modern Art</h4>
			<p class="p-info">
				Ouvert du lundi au vendredi de 10h à 17h et le week-end de 9h à 17h.
				Entrée libre.<br>Pour plus d'informations cliquez
				<a href="https://www.qagoma.qld.gov.au/"> ici</a>.
			</p>
		<h4>Centres d'information</h4>
			<p class="p-info">
				<span class="h-info">Brisbane Visitor Information and Booking Centre</span><br>
				The Regent, 167 Queen Street Mall, Queen St, Brisbane<br> 
				P: 07 3006 6290<br>
				<ins>E: visit@brisbanemarketing.com.au</ins><br>
				<span class="h-info">South Bank Visitor Centre</span><br>
				Stanley Street Plaza, South Bank Parklands<br>
				P: 07 3156 6366<br>
				<ins>E: vicsouthbank@brisbanemarketin-<br>-g.com.au</ins><br>
				<span class="h-info">Brisbane International Airport Visitor Information Centre</span><br>
				International Terminal - Level 2<br>
				P: 07 3406 3190  <br>
				<ins>E: enquiries@sqt.com.au</ins>
			</p>
	</div>
	</div>
	
<div class="section">
	<h2>Story Bridge</h2>
	<img class="text-image" src="..\img\Destinations\Brisbane\Story Bridge.jpg" alt="Story Bridge">
	<p class="section-text">
		Escaladez l'emblématique Story Bridge de Brisbane pour avoir un aperçu de 
		cette magnifique ville. Que vous décidiez de grimper à l'aube, pendant la journée, 
		au crépuscule ou à la nuit tombée, vous découvrirez un point de vue exaltant sur 
		les Glasshouse Mountains au nord et sur l'arrière-pays de la Gold Coast au sud, 
		classé au patrimoine mondial. Continuez à faire monter l'adrénaline en choisissant 
		de réaliser une descente en rappel de 30 mètres pour retourner vers le plancher des vaches.
	</p>
</div>

<div class="section">
	<h2>South Bank</h2>
	<img class="text-image" src="..\img\Destinations\Brisbane\South Bank.jpg" alt="South Bankn">
	<p class="section-text">
	Promenez-vous à pied ou à vélo le long de la South Bank de la Brisbane River et 
	découvrez les plus beaux endroits de la ville tout en faisant de l'exercice. 
	Célèbre pour son incroyable diversité d'activités de loisirs et de divertissements, 
	la South Bank s'étend sur 17 hectares comprenant des parcs, restaurants, cafés, bars, 
	boutiques, musées et galeries. Pour profiter d'une vue sur la ville tout en vous amusant, 
	faites donc un tour sur la grande roue de Brisbane.
	</p>
</div>

<div class="section">
	<h2>Brisbane River</h2>
	<img class="text-image" src="..\img\Destinations\Brisbane\Brisbane River.jpg" alt="Brisbane River">
	<p class="section-text">
		Vivez une expérience « Pagaies et crevettes » (Paddle and Prawns) sur la Brisbane River.
        Guidez votre propre kayak illuminé le long de la Brisbane River les vendredis et samedis soirs. 
        Plongez-vous dans les lumières scintillantes de la ville au cours d'une agréable balade 
        en kayak d'environ 90 minutes avant de vous relaxer au bord de la rivière avec un repas 
        à base de crevettes royales (le vendredi) ou un barbecue (le samedi), accompagné de 
        fameux lamingtons (gâteaux enrobés de chocolat et de noix de coco) typiques du 
        Queensland pour le dessert. Accompagnés bien entendu de bière et de vin australiens.
	</p>
</div>

<div class="section">
	<h2>Le Chocolate Tour</h2>
	<img class="text-image" src="..\img\Destinations\Brisbane\Le Chocolate Tour.jpg" alt="Le Chocolate Tour">
	<p class="section-text">
		Participez à une visite de la ville sur le thème du chocolat ou du brassage de la bière.
        Les voyageurs gourmands adoreront le Chocolate Tour, une excursion de plus de deux 
        heures dédiée au cacao avec des experts qui vous emmèneront dans huit magasins différents. 
        De nombreuses dégustations vous attendent en chemin ! Quant au Craft Beer Tour, 
        il vous emmènera dans quatre endroits différents, chacun doté d'un passé haut en couleurs, 
        et inclut la dégustation de 20 sortes de bières artisanales, ainsi qu'une présentation de 
        l'histoire du brassage à Brisbane.
	</p>
</div>

<div class="section">
	<h2>GoMA et Queensland Art Gallery</h2>
	<img class="text-image" src="..\img\Destinations\Brisbane\Queensland Art Gallery.jpg" alt="GoMA et Queensland Art Gallery">
	<p class="section-text">
		Imprégnez-vous d'art à la GoMA et à la Queensland Art Gallery.
        Découvrez la GoMA, la plus grande galerie d'art moderne et contemporain d'Australie, 
        ainsi que l'emblématique Queensland Art Gallery. Les galeries en elles-mêmes 
        sont des merveilles d'architecture, et elles peuvent se vanter de présenter 
        une grande diversité d'art australien et international, ainsi que deux galeries 
        dédiées au travail indigène contemporain. Les vendredis soirs sont le moment parfait 
        pour partager un verre entre amis à l'élégant bar de la GoMA.
	</p>
</div>

<?php require "../footer.php"; ?>

</body>
</html>