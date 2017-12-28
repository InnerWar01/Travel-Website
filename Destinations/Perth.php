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
	<title>Perth</title> 
	<link rel="stylesheet" href="..\css\destinations.css">
	<link rel="stylesheet" href="..\css\nav.css">
	<link rel="stylesheet" href="..\css\footer.css">
</head>

<body>
<div id="iefix">
	<?php require "../nav_bar.php"; ?>
</div>

<div class="container">
	<img class="top_img" src="..\img\Destinations\perth\perth.jpg" alt="Perth">
	<div class="center">Perth</div>
</div>

<div id="intro">
	<img id="map" src="..\img\Destinations\Perth\perth_map.png" alt="Perth on map">
	<div id="intro-text">
		<p>
			Perth est la porte d’entrée de l’Australie de l’Ouest et la capitale. 
			C’est la ville idéale pour débuter les vacances. Son ciel bleu et son 
			climat ensoleillé en font une ville agréable, appréciée des vacanciers 
			pour son hospitalité, 80% de la population du Western Australia vit à 
			Perth. Située sur les rives de la Swan River, Perth est une ville 
			raffinée et cosmopolite offrant une myriade de restaurants, de bars 
			et d’activités culturelles. Découvrez les petits restaurants branchés 
			de Northbridge ou bien les théâtres du quartier de Subiaco. Visitez le 
			jardin botanique du parc de Kings dans lequel on trouve plus de 2500 
			espèces de plantes d’Australie-occidentale. De même, le zoo de Perth 
			est un sanctuaire pour de nombreuses espèces menacées. 
		</p>
		<hr>
		<p>
			Au départ de Perth, profitez d’une promenade en bateau sur la Swan River jusqu’à 
			Fremantle ou les vignobles de la Swan Valley. Prenez le ferry jusqu’à 
			Rottnest Island, une petite île sans voiture à découvrir à vélo. 
			Pratiquez la voile, la baignade et le surf sur l’une des 19 belles 
			plages peu fréquentées de Perth, entre Cottlesloe et Scarborough. 
			La découverte de Perth et ses environs méritent un séjour de quelques jours. 
			Visitez Perth et Freemantle, passez une journée sur l’île de Rottnest.
		</p>
	</div>
</div>

<div id="right-text">
	<div id="block-hotel">
		<h3 id="name-block">Hôtels</h3>
		<div class="bloc-right">
			<div class="img">
				<a target="_blank" href="http://sullivans.com.au/">
					<img src="..\img\Hotels\Perth\sullivans.jpg" alt="Sullivans Hotel Perth">
				</a>
				<div class="desc">SULLIVANS HOTEL PERTH</div>
			</div>
		</div>

		<div class="bloc-right">
			<div class="img">
				<a target="_blank" href="http://deals.travelodgehotels.com.au/brands/travelodge-hotels/travelodge-perth?gclid=CjwKEAiAo7C2BRDgqODGq5r38DsSJAAv7dTPEnj5HrUzju7wMEE9g6M889I83AWNVMaFw4maDpLGdRoCKNrw_wcB">
					<img src="..\img\Hotels\Perth\travelodge.jpg" alt="Travelodge Perth">
				</a>
				<div class="desc">TRAVELODGE PERTH</div>
			</div>
		</div>

		<div class="bloc-right">
			<div class="img">
				<a target="_blank" href="https://www.crownperth.com.au/hotels/crown-metropol">
					<img src="..\img\Hotels\Perth\crown_metropol.jpg" alt="Crown Metropol Perth">
				</a>
				<div class="desc">CROWN METROPOL PERTH</div>
			</div>
		</div>

		<div class="bloc-right">
			<div class="img">
				<a target="_blank" href="http://www.crowneplazaperth.com.au/">
					<img src="..\img\Hotels\Perth\crowne_plaza.jpg" alt="Crowne Plaza Perth">
				</a>
				<div class="desc">CROWNE PLAZA PERTH</div>
			</div>
		</div>

		<div class="bloc-right">
			<div class="img">
				<a target="_blank" href="http://perth.regency.hyatt.com/en/hotel/home.html">
					<img src="..\img\Hotels\Perth\hyatt_regency.jpg" alt="Hyatt Regency Perth">
				</a>
				<div class="desc">HYATT REGENCY PERTH</div>
			</div>
		</div>
	</div>
	
	<div id="info-text">
	<h3>Informations utiles</h3>
		<h4>Les transports</h4>
			<p class="p-info">
				Perth est une ville d’accès facile à pied, ou en transports publics, 
				trains, ferries et lignes de bus gratuites en centre-ville. Il y a 
				une gare routière et ferroviaire en plein centre-ville. Des autobus 
				gratuits vous emmèneront autour du centre-ville, où vous pouvez visiter 
				l’Hôtel de la Monnaie de Perth, la tour de Swan Bells, la galerie d’art 
				d’Australie Occidentale et de nombreuses autres attractions. Pour vos 
				soirées utilisez les taxis pour rejoindre Northbridge ou Freemantle.
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
	<h2>Les Quartiers de Perth</h2>
	<img class="text-image" src="..\img\Destinations\Perth\central_perth.jpg" alt="Les Quartiers de Perth">
	<p class="section-text">
		Le centre-ville de Perth est un paradis pour le shopping avec de 
		nombreuses boutiques de vêtements et d’oeuvres d’art aborigènes. 
		On y trouve aussi des galeries, des musées et des théâtres montrant 
		tout le panel culturel de Perth. Le quartier culturel de Northbridge
		est renommé pour ses bars et restaurants branchés mais aussi pour ses 
		animations nocturnes. A seulement 5 km du centre de Perth, découvrez 
		le petit quartier de Subiaco. Les férus de culture et d’art pourront 
		visiter les galeries et le musée de Subiaco. Enfin, rendez-vous aux 
		marchés du quartier pour goûter aux produits régionaux.
	</p>
</div>

<div class="section">
	<h2>Kings Park</h2>
	<img class="text-image" src="..\img\Destinations\Perth\kings_park.jpg" alt="Kings Park">
	<p class="section-text">
		Plus grand que Central Park à New York, Kings Park est un jardin de 
		plus de 400 hectares abritant de nombreuses plantes endémiques à 
		l’Australie-Occidentale. Empruntez la passerelle de plus de 600 mètres 
		de long et prenez de la hauteur pour une aventure sur le « chemin de la 
		cime des arbres » offrant un panorama unique sur la ville. On trouve des 
		barbecues fixes pouvant être librement utilisés et de nombreuses aires 
		de pique-nique pour se faire un repas au milieu des eucalyptus.
	</p>
</div>

<div class="section">
	<h2>L'aquarium</h2>
	<img class="text-image" src="..\img\Destinations\Perth\aquarium.jpg" alt="L'aquarium">
	<p class="section-text">
		Découvrez les trésors marins du Western Australia lors d’une visite de cet 
		aquarium : hippocampes, dragons de mer, poissons venimeux, méduses de lune 
		vous émerveillerons. Vous pourrez aussi admirer des tortues géantes et des 
		requins dans un tunnel de près de 100 mètres de long.
	</p>
</div>

<div class="section">
	<h2>Fremantle</h2>
	<img class="text-image" src="..\img\Destinations\Perth\fremantle.jpg" alt="Fremantle">
	<p class="section-text">
		Fremantle est située à l’extrémité de la Swan, à environ 20 km de Perth. 
		C’est une ville vibrante et créative, un mélange harmonieux de culture, 
		histoire maritime et divertissement. Elle attire de nombreux peintres, 
		musiciens ou écrivains. Appelée "Freo" par les locaux, Fremantle abrite 
		aussi de merveilleux bâtiment datant de la ruée vers l’or et de vieux 
		édifices reflétant la splendeur du temps des colonies.Visitez la prison 
		de Roundhouse, le musée maritime du Western Australia racontant l’histoire 
		du célèbre naufrage du Batavia. Enfin, déambulez dans le marché pittoresque 
		de Fremantle, véritable curiosité architecturale.
	</p>
</div>

<div class="section">
	<h2>Rottnest Island</h2>
	<img class="text-image" src="..\img\Destinations\Perth\rottnest_island.jpg" alt="Rottnest Island">
	<p class="section-text">
		L’île tropicale de Rottnest Island est située à seulement quelques 
		minutes de ferry de Perth. Accessible pour la journée. Idéale pour 
		surfer, se baigner ou faire de la plongée, Rottnest Island offre un 
		cadre exceptionnel avec ses côtes rudes, ses récifs de pierres calcaires, 
		ses lacs salés et ses petites baies pittoresques. Parcourez l’île à vélo, 
		à pied ou en bus et découvrez des animaux exceptionnels comme l’adorable 
		petit marsupial le quokka. Rendez-vous à la terrasse d’un café ou d’un restaurant; 
		vous serez conquis par l’ambiance conviviale qui règne sur cette île. 
	</p>
</div>

<div class="section">
	<h2>Cottesloe ou Scarborough</h2>
	<img class="text-image" src="..\img\Destinations\Perth\cottesloe_beach.jpg" alt="Cottesloe ou Scarborough">
	<p class="section-text">
		Bordées par les eaux limpides de l’Océan Indien, les plages désertes situées 
		au nord et au sud de Perth sont étincelantes, idéales pour la pratique du surf. 
		Cottesloe ou Scarborough sont de charmantes stations balnéaires. Pensez-y pour 
		votre séjour balnéaire, notamment quand la saison des pluies touche les autres 
		côtes australiennes où la baignade est interdite à cause des méduses. 
		En revanche, l’eau sera plus fraîche.
	</p>
</div>

<?php require "../footer.php"; ?>

</body>
</html>