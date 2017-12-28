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
	<title>Melbourne</title> 
	<link rel="stylesheet" href="..\css\destinations.css">
	<link rel="stylesheet" href="..\css\nav.css">
	<link rel="stylesheet" href="..\css\footer.css">
</head>

<body>
<div id="iefix">
	<?php require "../nav_bar.php"; ?>
</div>

<div class="container">
	<img class="top_img" src="..\img\Destinations\Melbourne\melbourne.jpg" alt="Melbourne">
	<div class="center">Melbourne</div>
</div>

<div id="intro">
	<img id="map" src="..\img\Destinations\Melbourne\map_melbourne.png" alt="Melbourne on map">
	<div id="intro-text">
		<p>
			Située sur la côte du Victoria, Melbourne est une grande ville 
			australienne pleine de vie. Découvrez-y de nombreux parcs et 
			jardins botaniques, des ruelles et allées élégantes, des bâtiments 
			à l’architecture ancienne et moderne, de nombreux cafés, bars 
			branchés et restaurants. Passez une ou deux journées à découvrir 
			Melbourne et ses faubourgs en tramway ou en tour organisé, et ainsi 
			vous imprégner de son atmosphère, sans oublier ses quartiers de 
			caractère comme Fitzroy, St Kilda et Carlton qui débordent de vie 
			et d’animation. Prélassez-vous sur les rives de la Yarra River qui 
			traverse Melbourne.
		</p>
		<hr>
		<p>
			Cité créative, Melbourne offre de nombreuses expériences culturelles
			avec festivals en tous genres, galeries et musées. Rendez-vous au 
			National Gallery du Victoria et admirez la plus importante collection
			d’art international de l’hémisphère sud. Parcourez ses rues élégantes
			où les bâtiments à l’architecture victorienne se mêlent  aux 
			grattes-ciels modernes contribuant au charme de Melbourne.
		</p>
	</div>
</div>

<div id="right-text">
	<div id="block-hotel">
		<h3 id="name-block">Hôtels</h3>
		<div class="bloc-right">
			<div class="img">
				<a target="_blank" href="http://pensionemelbourne.etourism.com.au/">
					<img src="..\img\Hotels\Melbourne\pensione-hotel-lounge.jpg" alt="Pension Hotel Lounge">
				</a>
				<div class="desc">PENSIONE HOTEL MELBOURNE</div>
			</div>
		</div>

		<div class="bloc-right">
			<div class="img">
				<a target="_blank" href="http://www.cosmopolitanhotel.com.au/">
					<img src="..\img\Hotels\Melbourne\cosmopolitan-hotel.jpg" alt="Cosmopolitan Hotel">
				</a>
				<div class="desc">COSMOPOLITAN HOTEL MELBOURNE</div>
			</div>
		</div>

		<div class="bloc-right">
			<div class="img">
				<a target="_blank" href="http://travelodge-southbank-melbourne.hotels-in-melbourne.net/en/">
					<img src="..\img\Hotels\Melbourne\Travel-lodge-southbank.jpg" alt="Travel Lodge Southbank">
				</a>
				<div class="desc">TRAVELODGE SOUTHBANK</div>
			</div>
		</div>

		<div class="bloc-right">
			<div class="img">
				<a target="_blank" href="http://www.tripadvisor.com/Hotel_Review-g255100-d255448-Reviews-Quality_Hotel_Batman_s_Hill_on_Collins-Melbourne_Victoria.html">
					<img src="..\img\Hotels\Melbourne\quality-hotel.jpg" alt="Quality Hotel">
				</a>
				<div class="desc">QUALITY HOTEL BATMAN'S HILL ON COLLINS</div>
			</div>
		</div>

		<div class="bloc-right">
			<div class="img">
				<a target="_blank" href="http://www.clarionsuitesgateway.com.au/">
					<img src="..\img\Hotels\Melbourne\clarion-suites-gateway.jpg" alt="Clarion Suites Gateway">
				</a>
				<div class="desc">CLARION SUITES GATEWAY</div>
			</div>
		</div>
	</div>

	<div id="info-text">
	<h3>Informations utiles</h3>
		<h4>La vallée de la Yarra</h4>
			<p class="p-info">
				La région de la Yarra n’est desservie par aucun moyen de transport 
				en commun, réservez une excursion, un circuit organisé ou louer 
				une voiture pour découvrir la vallée.
			</p>
		<h4>La Mornington Peninsula</h4>
			<p class="p-info">
				Prenez le large, pour observer dauphins, 
				otaries et fous austraux ou plonger au cœur de la réserve marine 
				de Port Phillip Heads. Les gastronomes auront le plaisir de 
				déguster des produits régionaux notamment des vins et des 
				fromages.
			</p>
		<h4>Phillip island</h4>
			<p class="p-info">
				Pour les passionnés de moto, visitez le circuit du Grand Prix de 
				Phillip Island, où se déroulent les Grand Prix de moto. Enfin, 
				rendez-vous dans les quelques musées et galeries présents sur 
				l’île pour découvrir son histoire et son patrimoine.
			</p>
	</div>
</div>
	
<div class="section">
	<h2>La Yarra Valley et les Dandenong Ranges</h2>
	<img class="text-image" src="..\img\Destinations\Melbourne\yarra_valley.jpg" alt="La Yarra Valley et les Dandenong Ranges">
	<p class="section-text">
		A une heure de Melbourne, la Yarra Valley vous offre une ambiance 
		calme et reposante au milieu des vignobles. Berceau vinicole de 
		l’état de Victoria, la Yarra Valley est considérée comme l’une 
		des grandes régions vinicoles du monde, réputée pour produire les 
		meilleurs pinots noirs et vins mousseux d’Australie. La célèbre 
		maison Moët et Chandon a choisi la Yarra Valley pour son célèbre 
		vin pétillant. La cuisine de la région vous ravira par sa 
		diversité : saumon d’eau douce, caviar, crèmes glacées, fromages 
		faits maison… Au coeur de la vallée viticole, rencontrez la faune
		sauvage australienne dans son habitat naturel au Healesville 
		Sanctuary. Passez des vignobles aux forêts denses et aux ravins 
		luxuriants remplis de fougères, le monde verdoyant des Dandenong 
		Ranges est totalement différent et tout aussi spectaculaire.
	</p>
</div>

<div class="section">
	<h2>La Mornington Peninsula</h2>
	<img class="text-image" src="..\img\Destinations\Melbourne\mornington_peninsula.jpg" alt="La Mornington Peninsula">
	<p class="section-text">
		A 1h de route de Melbourne, la péninsule de Mornington est une 
		destination vacances  en bord de mer. La péninsule bénéficie 
		d’une atmosphère reposante avec une magnifique côte de type 
		méditerranéen dotée de superbes plages, de restaurants et de 
		cafés offrant des mets et des vins de la région. Les activités 
		ne manquent pas : balades sur les plages de Sorrento et Portsea 
		ou encore golf, surf et équitation. Les férus de randonnées 
		pourront parcourir les sentiers du  parc national de Mornington 
		Peninsula  jusqu’au sommet de Arthur Seat et ainsi admirer la 
		baie époustouflante.
	</p>
</div>

<div class="section">
	<h2>Phillip island et la "Penguin Parade"</h2>
	<img class="text-image" src="..\img\Destinations\Melbourne\phillip_island.jpg" alt="Phillip island et la 'Penguin Parade'">
	<p class="section-text">
		L’atmosphère unique de Phillip Island en fait un endroit rêvé pour
		passer ses vacances. Mélange de côte et de campagne, Phillip 
		Island abrite une faune étonnante de koalas et de phoques, mais 
		la principale curiosité de l’île est son importante colonie de 
		manchots pygmées. Participez à la parade connue sous le nom de 
		Penguin Parade au Phillip island National Park, pour observer 
		ces petits pingouins au crépuscule se dandiner jusqu’à leur nid. 
		Que vous voyagez en famille à la recherche de soleil, de la faune 
		australienne, de sable et de surf ou en couple en quête 
		d’intimité et de tranquillité, Phillip island mérite un séjour 
		d’une ou plusieurs nuits.
	</p>
</div>

<div class="section">
	<h2>Le parc national du Promontoire de Wilson</h2>
	<img class="text-image" src="..\img\Destinations\Melbourne\parc_national_wilsons_promontory.jpg" alt="Le parc national du Promontoire de Wilson">
	<p class="section-text">
		Situé au sud-est de Melbourne à 2h30 de route, le parc national 
		de Wilson Promontory surnommé Wilsons Prom ou The Prom est un 
		parc national du Gippsland. Il couvre environ 50 000 hectares de 
		nature sauvage et offre 80 km de sentiers de randonnée. 
		Le Wilsons Prom est réputé pour ses paysages de bush et côtiers, 
		ses magnifiques forêts tropicales, ses plages vierges et sa vie 
		sauvage abondante. The Prom est un véritable sanctuaire d’une 
		faune et d’une flore d’exception qu’elle soit terrestre ou marine.
		La marche à pied est la meilleure manière d’explorer le Wilson 
		Promontory, le parc est bien connu des randonneurs et des 
		campeurs. Ici, toutes les conditions sont requises pour passer 
		des vacances idéal : nature sauvage, plages de sable blanc et 
		forêt luxuriante. Le parc national du Wilsons Promontory est une 
		destination incontournable pour les amoureux de la nature et de 
		la randonnée, à faire en excursion de la journée ou en circuit 
		depuis Melbourne. 
	</p>
</div>

<?php require "../footer.php"; ?>

</body>
</html>