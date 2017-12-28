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
	<title>Cairns</title> 
	<link rel="stylesheet" href="..\css\destinations.css">
	<link rel="stylesheet" href="..\css\nav.css">
	<link rel="stylesheet" href="..\css\footer.css">
</head>

<body>
<div id="iefix">
	<?php require "../nav_bar.php"; ?>
</div>

<div class="container">
	<img class="top_img" src="..\img\Destinations\Cairns\cairns.jpg" alt="Cairns">
	<div class="center">Cairns</div>
</div>

<div id="intro">
	<img id="map" src="..\img\Destinations\Cairns\cairnsmap.png" alt="Cairns on map">
	<div id="intro-text">
		<p>
		   À la limite nord tropicale du Queensland, 
		   Cairns est une ville élégante, réputée 
		   pour son ambiance décontractée et son 
		   agréable climat tropical.
		</p>
		<hr>
		<p>
			Loin au nord de l’Australie, sur la côte du Queensland, 
			Cairns est ceinturée d’un côté par les pentes verdoyantes 
			d’une Great Dividing Range tapissée d’exotiques forêts pluviales, 
			et de l’autre par les eaux bleu turquoise de la mer de Corail dont 
			la splendeur culmine dans l’extravagante étendue de sa légendaire 
			Grande Barrière. Entre excursions sur des sites d’exception le jour et 
			fêtes tapageuses dans les clubs la nuit, Cairns a tout d’une destination 
			jeune et branchée, première Mecque du tourisme tropical en Australie.
		</p>
	</div>
</div>

<div id="right-text">
	<div id="block-hotel">
		<h3 id="name-block">Hôtels</h3>
		<div class="bloc-right">
			<div class="img">
				<a target="_blank" href="http://www.bayvillage.com.au/">
					<img src="..\img\Hotels\Cairns\bayvillage.jpg" alt="Bay Village">
				</a>
				<div class="desc">BAY VILLAGE TROPICAL RETREAT</div>
			</div>
		</div>

		<div class="bloc-right">
			<div class="img">
				<a target="_blank" href="http://www.balinese.com.au/">
					<img src="..\img\Hotels\Cairns\thebalinese.jpg" alt="The Balinese">
				</a>
				<div class="desc">THE BALINESE</div>
			</div>
		</div>

		<div class="bloc-right">
			<div class="img">
				<a target="_blank" href="http://doubletree3.hilton.com/en/hotels/queensland/doubletree-by-hilton-hotel-cairns-CNSDCDI/index.html">
					<img src="..\img\Hotels\Cairns\doubletree.jpg" alt="Doubletree">
				</a>
				<div class="desc">DOUBLETREE BY HILTON CAIRNS</div>
			</div>
		</div>

		<div class="bloc-right">
			<div class="img">
				<a target="_blank" href="http://www.mantraesplanadecairns.com.au/">
					<img src="..\img\Hotels\Cairns\mantra.jpg" alt="Mantra Esplanade">
				</a>
				<div class="desc">MANTRA ESPLANADE CAIRNS</div>
			</div>
		</div>

		<div class="bloc-right">
			<div class="img">
				<a target="_blank" href="http://www.shangri-la.com/cairns/shangrila/">
					<img src="..\img\Hotels\Cairns\shangri.jpg" alt="Shangri-La Hotel The Marina">
				</a>
				<div class="desc">SHANGRI-LA HOTEL THE MARINA, CAIRNS</div>
			</div>
		</div>
	</div>

	<div id="info-text">
	<h3>Informations utiles</h3>
		<h4>Parc National de Wooroonooran</h4>
			<p class="p-info">
				Départ garanti avec minimum 4 personnes, maximum 12.
				Départ de Cairns vers 7 h 30, retour vers 18 h. Départ anglophone quotidien sauf le dimanche.
				Départ en français les mardis, jeudis et samedis avec supplément.
				L'excursion n'est pas adaptée aux enfants de moins de 4 ans.
			</p>
		<h4>Forêt Tropicale, Daintree, Cape Tribulation</h4>
			<p class="p-info">
				<span class="h-info">Les accès</span><br>
				Dans la plupart des régions les routes sont goudronnées, 
				facilement praticables au volant d’une voiture ou d’un 
				camping-car. Pendant la saison des pluies, les pistes sont 
				impraticables, et les routes goudronnées peuvent être inondées.<br>
				<span class="h-info">Climat</span><br>
				Ici la vie ne connaît que deux saisons : le Wet (de décembre à 
				avril) et le Dry (de mai à novembre). La meilleure saison pour 
				découvrir ces régions de l’Outback s’étend d’avril à novembre.
			</p>
		<h4>Les Plateaux D'Atherton</h4>
			<p class="p-info">
				<span class="h-info">A savoir</span><br>
				Une taxe gouvernementale sera à payer sur place pour toutes 
				les croisières, ainsi que la location d’une combinaison contre 
				les méduses en saison des pluies.
				<span class="h-info">Les méduses</span><br>
				A partir de fin octobre à début mai, attention à la présence 
				de méduses venimeuses (jelly fish) sur la côte nord de la 
				Barrière de Corail. Les îles et les récifs au large de la
				Barrière sont sûrs toute l’année.
			</p>
	</div>
</div>
	
<div class="section">
	<h2>Kuranda</h2>
	<img class="text-image" src="..\img\Destinations\Cairns\kuranda.jpg" alt="Kuranda">
	<p class="section-text">
		Kuranda est une des attractions les plus touristiques de Cairns. 
		Le village de Kuranda est situé sur le bord oriental du plateau 
		d’Atherton, il bénéficie de somptueux paysages tropicaux, et le 
		voyage à bord du petit train et du funiculaire est spectaculaire. 
		En 1 h 45, le petit train panoramique parcourt 34 km de Cairns à 
		Kuranda, il longe des cascades et serpente au bord des montagnes. 
		Le téléphérique de Kuranda est l’un des plus longs funiculaires au 
		monde offrant un point de vue inégalé sur la forêt humide, un voyage 
		de 90 min avec arrêt le long des majestueuses cascades de Barron. 
		Au village de Kuranda des attractions vous sont proposées, croisière 
		sur la Barron River, le marché (mercredi, jeudi, vendredi et dimanche), 
		et au Kuranda Wildlife observation des animaux nocturnes.
	</p>
</div>

<div class="section">
	<h2>Parc National de Wooroonooran</h2>
	<img class="text-image" src="..\img\Destinations\Cairns\parcwooroonooran.jpg" alt="Parc National de Wooroonooran">
	<p class="section-text">
		A seulement 1 heure au sud de Cairns, sans perte de temps ni fatigue dans les 
		transferts, explorez la forêt humide du parc national de Wooroonooran. Le parc 
		est composé des deux plus hautes montagnes du Queensland, de nombreuses rivières 
		et cascades, offrant des paysages variés. La faune y est abondante, la forêt 
		verdoyante, contenant des trous d’eau parfaits pour se baigner et se rafraîchir 
		durant les mois d’été.
	</p>
</div>

<div class="section">
	<h2>Forêt Tropicale, Daintree, Cape Tribulation</h2>
	<img class="text-image" src="..\img\Destinations\Cairns\daintreecapetabulation.jpg" alt="Forêt Tropicale, Daintree, Cape Tribulation">
	<p class="section-text">
		Rien de plus facile que d’explorer la forêt pluviale grâce aux nombreuses excursions
		d’une journée ou aux séjours proposées. Transformez votre passage dans la forêt en 
		une expérience inoubliable. Découvrez la magie des forêts pluviales de Daintree et 
		Cape Tribulation. Ces forêts abritent 30% des espèces de grenouilles, de marsupiaux 
		et de reptiles du pays, 56% des espèces de papillons et de chauve-souris, et 20% des 
		espèces d’oiseaux du pays, la faune et la flore les plus variées de la planète. 
	</p>
</div>

<div class="section">
	<h2>Les Plateaux D'Atherton</h2>
	<img class="text-image" src="..\img\Destinations\Cairns\athertontablelands.jpg" alt="Les Plateaux D'Atherton">
	<p class="section-text">
		Situé à 100 km au sud-ouest de Cairns, Atherton Tableland est un plateau qui se 
		dresse à plus de 1 000 mètres par endroits et renferme des lacs de cratères, des 
		cascades et d’immenses figuiers majestueux. Ne manquez pas non plus les marécages 
		de Mareeba, paradis pour les ornithologues et amateurs de faune. Aux Atherton 
		Tablelands, visitez Granite gorge, Lake Tinaroo, le majestueux figuier Curtain 
		Fig vieux de 500 ans et les lacs Eacham et Barrine, deux superbes lacs 
		volcaniques propices à la baignade, encerclés par la forêt humide. Le circuit des 
		cascades vous conduit à travers les plus belles chutes de la région du Tableland. 
	</p>
</div>

<div class="section">
	<h2>La Grande Barrière de Corail</h2>
	<img class="text-image" src="..\img\Destinations\Cairns\thegreatcoralreef.jpg" alt="La Grande Barrière de Corail">
	<p class="section-text">
		La Grande Barrière de Corail, inscrite au patrimoine mondial, s’étend sur plus de 
		2000 kilomètres dans l’Océan Pacifique, et descend le long de la côte Est du 
		Queensland. C’est le récif le plus étendu au monde, il commence légèrement au Sud du 
		Tropique du Capricorne à Bundaberg et se termine dans le détroit de Torres au Cape York
		. Comptant 2 900 récifs et 900 îles, ce massif corallien est considéré comme le plus 
		grand organisme vivant de la terre et le seul visible de l’espace. Les milliers d’îles,
		 d’îlots et d’atolls composant la Grande Barrière de corail constituent la huitième 
		 merveille du monde et le « plus grand aquarium au monde ». 
		La Grande Barrière de Corail, abrite des dizaines de milliers d’espèces de poissons 
		tropicaux colorés, quelques 500 variétés d’algues, des éponges, des crustacés, des 
		coraux de tailles, de formes et de couleurs différentes et d’autres animaux du monde 
		marin comme les baleines, les dauphins et les tortues.
		La diversité de ses fonds et sa faune sous-marine très riche, en font le bonheur des 
		amateurs de plongée avec ou sans bouteille.
	</p>
</div>

<?php require "../footer.php"; ?>

</body>
</html>