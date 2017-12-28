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
	<title>Darwin</title> 
	<link rel="stylesheet" href="..\css\destinations.css">
	<link rel="stylesheet" href="..\css\nav.css">
	<link rel="stylesheet" href="..\css\footer.css">
</head>

<body>
<div id="iefix">
	<?php require "../nav_bar.php"; ?>
</div>

<div class="container">
	<img class="top_img" src="..\img\Destinations\Darwin\darwin.jpg" alt="darwin">
	<div class="center">Darwin</div>
</div>

<div id="intro">
	<img id="map" src="..\img\Destinations\Darwin\darwinmap.png" alt="Darwin on map">
	<div id="intro-text">
		<p>
		   Situé dans la région tropicale du « Top End » de l’Australie, Darwin est un point de départ idéal
		   pour partir à la découverte des paysages spectaculaires et de l’art rupestre aborigène du Territoire du Nord.
		</p>
		<hr>
		<p>
			Fondée en 1869, cette ville fut nommée ainsi en l’honneur du naturaliste anglais Charles Darwin par ses compagnons
			explorateurs, qui sillonnèrent jadis la mer de Timor à bord du Beagle. La ville se distingue par son histoire tumultueuse :
			bombardée pendant la Seconde Guerre mondiale, elle fut à nouveau détruite par un cyclone en 1974. Darwin compte actuellement
			quelque 150 000 habitants, dont certains membres du peuple Larrakia, à qui appartenait autrefois ce territoire.
		</p>
	</div>
</div>

<div id="right-text">
	<div id="block-hotel">
		<h3 id="name-block">Hôtels</h3>
		<div class="bloc-right">
			<div class="img">
				<a target="_blank" href="http://www.mantra.com.au/northern-territory/darwin-and-surrounds/darwin/accommodation/hotels/mantra-pandanas/">
					<img src="..\img\Hotels\Darwin\Mantra Pandanas.jpg" alt="Mantra Pandanas">
				</a>
				<div class="desc">Mantra Pandanas</div>
			</div>
		</div>

		<div class="bloc-right">
			<div class="img">
				<a target="_blank" href="http://darwincityedge.com.au/">
					<img src="..\img\Hotels\Darwin\Darwin City Edge Motel & Suites.jpg" alt="Darwin City Edge Motel & Suites ">
				</a>
				<div class="desc">Darwin City Edge Motel & Suites </div>
			</div>
		</div>

		<div class="bloc-right">
			<div class="img">
				<a target="_blank" href="http://www.zenquarter.com/">
					<img src="..\img\Hotels\Darwin\Ramada Suites Zen Quarter.jpg" alt="Ramada Suites Zen Quarter">
				</a>
				<div class="desc">Ramada Suites Zen Quarter</div>
			</div>
		</div>

		<div class="bloc-right">
			<div class="img">
				<a target="_blank" href="http://www.hhotel.com.au/">
					<img src="..\img\Hotels\Darwin\H Hotel.jpg" alt="H Hotel">
				</a>
				<div class="desc">H Hotel</div>
			</div>
		</div>

		<div class="bloc-right">
			<div class="img">
				<a target="_blank" href="http://vibe-darwin-waterfront.h-rez.com/index.htm?lbl=ggl-en&gclid=CjwKEAiA9om3BRDpzvihsdGnhTwSJAAkSewL26K7voAHEF3hme7RBuXergf_QvWGqgMD0a-Orl-XRxoCmerw_wcB">
					<img src="..\img\Hotels\Darwin\Vibe Hotel Darwin Waterfront.jpg" alt="Vibe Hotel Darwin Waterfront">
				</a>
				<div class="desc">Vibe Hotel Darwin Waterfront</div>
			</div>
		</div>
	</div>

	<div id="info-text">
	<h3>Informations utiles</h3>
		<h4>Musée et galerie d'art du Territoire du Nord</h4>
			<p class="p-info">
				Adresse : The Gardens, 19 Conacher St, Darwin NT 0820, Australie<br>
				Téléphone :+61 8 8999 8264<br>
				Horaires : 	09:00–17:00 du lundi au vendredi, 10:00–17:00 pendant les week-ends.
			</p>
		<h4>Climat</h4>
			<p class="p-info">
				Le temps est toujours chaud avec une température annuelle moyenne de 32°c. 
				La saison sèche appelée « le dry » de mai à octobre est la meilleure saison. 
				De novembre à avril la température est étouffante, c’est la saison humide « le wet », 
				les paysages seront plus verdoyants, mais il vous faudra supporter les pluies, 
				les mouches et les moustiques. Certaines pistes et parcs nationaux sont fermés, 
				et certains tours n’opèrent pas
			</p>
	</div>
</div>
	
<div class="section">
	<h2>Mindil Beach</h2>
	<img class="text-image" src="..\img\Destinations\Darwin\darwinmindil.jpg" alt="Mindil Beach">
	<p class="section-text">
		Qu’une plage tropicale comme Mindil Beach, qui compte parmi les plus belles du continent
		australien, soit si proche d’une capitale régionale ne manque pas d’étonner de nombreux touristes.
		Si certains autochtones n’hésitent pas à se jeter à l'eau pendant la saison sèche, il est déconseillé
		aux visiteurs de les imiter s’ils ne souhaitent pas se retrouver nez à nez avec un crocodile ou une méduse.
		Pour s’adonner en toute sécurité aux joies de la nage, mieux vaut opter pour la plage de Casuarina,
		surveillée par des sauveteurs, le parc aquatique Water Lagoon ou encore le Leanyer Recreation Park,
		un parc de loisirs gratuit. Quoi qu’il en soit, une promenade le long de la magnifique plage de Mindil
		Beach est vivement recommandée à n’importe quelle heure de la journée.
	</p>
</div>

<div class="section">
	<h2>Aquascene</h2>
	<img class="text-image" src="..\img\Destinations\Darwin\darwinaquascene.jpg" alt="Aquascene">
	<p class="section-text">
		Depuis plus de 60 ans, les poissons sauvages affluent régulièrement dans la baie de Doctors Gully pour
		y savourer sans effort un bon repas. Les mouvements importants des marées à Darwin Harbour, qui peuvent
		élever de huit mètres le niveau de la mer, charrient l’espace de quelques heures de grandes quantités
		de poissons à proximité des côtes. Classé sanctuaire marin, Doctors Gully garantit la protection de ces
		poissons qui n’hésitent plus à venir chercher la nourriture dans la main de l’homme, auquel ils sont désormais habitués.
	</p>
</div>

<div class="section">
	<h2>Musée et galerie d'art du Territoire du Nord</h2>
	<img class="text-image" src="..\img\Destinations\Darwin\darwinmusée.jpg" alt="Musée et galerie d'art du Territoire du Nord">
	<p class="section-text">
		Adresse tout indiquée pour échapper au soleil écrasant et à l’humidité du « Top End », le Musée et galerie d’art
		du Territoire du Nord (MAGNT), entouré de ses jardins tropicaux luxuriants, met à l’honneur l’art, l’histoire et
		la culture de la région. Il vous fera découvrir l’histoire naturelle et maritime de Darwin, sa culture vivante,
		l’art des peuples indigènes d’Australie ainsi que les traditions héritées de l’Asie du Sud-Est.
	</p>
</div>

<div class="section">
	<h2>Grotte Crocosaurus</h2>
	<img class="text-image" src="..\img\Destinations\Darwin\darwingrotte.jpg" alt="Grotte Crocosaurus">
	<p class="section-text">
		Pour un parc abritant des espèces sauvages à la férocité notoire, la Grotte Crocosaurus se révèle étonnamment
		ludique et propose diverses animations qui vous emmèneront au plus près de ses terribles pensionnaires.
		Le visiteur pourra ainsi côtoyer d’énormes crocodiles dans une cage immergée, nourrir un jeune crocodile
		ou encore tenir dans ses bras un bébé « saltie » (crocodile marin). 
	</p>
</div>

<div class="section">
	<h2>Crocodylus Park</h2>
	<img class="text-image" src="..\img\Destinations\Darwin\darwinpark.jpg" alt="Crocodylus Park">
	<p class="section-text">
		Crocodylus Park est l’adresse rêvée pour quiconque souhaite observer de près une immense variété d’animaux venus
		du monde entier. Comme son nom l’indique, ce parc fait la part belle au célèbre crocodile australien, imposant
		reptile dont vous pourrez admirer bon nombre de spécimens au gré de votre visite dans le petit zoo. 
		Crocodylus Park abrite des crocodiles australiens d’eau de mer mais aussi d’eau douce, parmi lesquels le crocodile
		de Nouvelle-Guinée, celui des Philippines ou encore son cousin américain, l’alligator.
	</p>
</div>

<?php require "../footer.php"; ?>

</body>
</html>