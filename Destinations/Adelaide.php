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
	<title>Adelaide</title> 
	<link rel="stylesheet" href="..\css\destinations.css">
	<link rel="stylesheet" href="..\css\nav.css">
	<link rel="stylesheet" href="..\css\footer.css">
</head>

<body>
<div id="iefix">
	<?php require "../nav_bar.php"; ?>
</div>

<div class="container">
	<img class="top_img" src="..\img\Destinations\Adelaide\adelaide.jpg" alt="adelaide">
	<div class="center">Adelaide</div>
</div>

<div id="intro">
	<img id="map" src="..\img\Destinations\Adelaide\adelaidemap.png" alt="Adelaide on map">
	<div id="intro-text">
		<p>
		   Nichée entre l'océan et les collines d'Adélaïde, la capitale d'Australie-Méridionale est une mine de créativité,
		   de merveilles historiques et de délices culinaires.
		</p>
		<hr>
		<p>
			Semblable au climat méditerranéen, le climat d'Adélaïde permet la pratique de nombreuses activités en plein air.
			De luxuriants jardins et espaces verts entourent la ville. Profitez d'un pique-nique aux Jardins botaniques d'Adélaïde
			ou rendez-vous en tramway sur l'une des plages de la ville. Divertissez-vous le temps d'une pause au parc d'attractions
			The Beachhouse ou nagez avec les dauphins à Glenelg, un quartier incontournable d'Adélaïde.
		</p>
	</div>
</div>

<div id="right-text">
	<div id="block-hotel">
		<h3 id="name-block">Hôtels</h3>
		<div class="bloc-right">
			<div class="img">
				<a target="_blank" href="http://www.majestichotels.com.au/">
					<img src="..\img\Hotels\Adelaide\Majestic Tynte Street Apartments.jpg" alt="Majestic Tynte Street Apartments">
				</a>
				<div class="desc">Majestic Tynte Street Apartments</div>
			</div>
		</div>

		<div class="bloc-right">
			<div class="img">
				<a target="_blank" href="http://www.mantra.com.au/south-australia/adelaide-and-surrounds/adelaide/accommodation/hotels/mantra-on-frome/">
					<img src="..\img\Hotels\Adelaide\Mantra on Frome.jpg" alt="Mantra on Frome">
				</a>
				<div class="desc">Mantra on Frome</div>
			</div>
		</div>

		<div class="bloc-right">
			<div class="img">
				<a target="_blank" href="http://www.oakshotelsresorts.com/oaks-precinct/">
					<img src="..\img\Hotels\Adelaide\iStay Precinct.jpg" alt="iStay Precinct">
				</a>
				<div class="desc">iStay Precinct</div>
			</div>
		</div>

		<div class="bloc-right">
			<div class="img">
				<a target="_blank" href="http://www.rydges.com/accommodation/adelaide-sa/adelaide-cbd/welcome/">
					<img src="..\img\Hotels\Adelaide\Rydges South Park Adelaide.jpg" alt="Rydges South Park Adelaide">
				</a>
				<div class="desc">Rydges South Park Adelaide</div>
			</div>
		</div>

		<div class="bloc-right">
			<div class="img">
				<a target="_blank" href="http://www.royalcoach.com.au/">
					<img src="..\img\Hotels\Adelaide\Adelaide Royal Coach.jpg" alt="Adelaide Royal Coach">
				</a>
				<div class="desc">Adelaide Royal Coach</div>
			</div>
		</div>
	</div>

	<div id="info-text">
	<h3>Informations utiles</h3>
		<h4>Jardins botaniques d'Adélaïde</h4>
			<p class="p-info">
				 Suivant la saison, parc ouvert de 7h15 à 17h/18h. Entrée gratuite.
			</p>
		<h4>Confort Météo A Adélaïde</h4>
			<p class="p-info">
				Les indices météo fournis par Météo France représentent une famille de critères 
				synthétisant les conditions météorologiques de Adelaide . Ces différents indices 
				consistent à vous aider dans la préparation de votre voyage à Adelaide . 
				Ainsi, choisissez les types d'activités en fonction des prévisions météo : 
				plage, promenade, visite de monuments, musée, sports d'hivers... Découvrez avec 
				précision, pour chaque semaine à Adelaide , une note météo globale qui prend en 
				compte les indices de température, d'intempéries, d'ensoleillement et l'indice vent !
			</p>
		<h4>À rapporter</h4>
			<p class="p-info">
				Il y a trois choses à mettre dans la valise pour le retour : des objets d'art 
				aborigène, des articles de sport (surtout pour les surfeurs) et de l'opale. 
				Le site qui traite 70% de la production mondiale d'opale, se trouve justement 
				en Australie du sud. Il s'appelle Coober Pedy. Vous le trouverez sur l'"Explorer's Way".
			</p>
	</div>
</div>
	
<div class="section">
	<h2>Jardins botaniques d'Adélaïde</h2>
	<img class="text-image" src="..\img\Destinations\Adelaide\adelaidejardins.jpg" alt="Jardins botaniques d'Adélaïde">
	<p class="section-text">
		L'immense Jardin botanique d'Adélaïde borde le nord-est de la ville. Ce gigantesque parc s'étend sur 48,5 hectares
		d'espaces verts paysagés, de serres et d'installations destinées aux recherches scientifiques. Créé en 1857, selon
		les plans du Colonel William Light, fondateur de la ville, le jardin possède un riche passé où conservation, éducation
		et fascination étaient les maîtres-mots. 
	</p>
</div>

<div class="section">
	<h2>Glenelg Beach</h2>
	<img class="text-image" src="..\img\Destinations\Adelaide\adelaideglenelg.jpg" alt="Glenelg Beach">
	<p class="section-text">
		Très appréciée des habitants, la ville côtière de Glenelg constitue le lieu idéal pour nager, dîner et se divertir.
		Lorsque les Européens ont commencé à s'installer en Australie-Méridionale en 1836, ils ont choisi de s'établir sur
		les plages de sable blanc de Holdfast Bay. Près de 180 ans plus tard, la ville qu'ils ont fondée, Glenelg, demeure
		l'une des régions côtières les plus prisées de l'État. 
	</p>
</div>

<div class="section">
	<h2>Rundle Mall</h2>
	<img class="text-image" src="..\img\Destinations\Adelaide\adelaidemall.jpg" alt="Rundle Mall">
	<p class="section-text">
		La fermeture à la circulation d'une zone de 550 mètres sur l'une des rues principales d'Adélaïde en 1976 pour la création
		d'un centre commercial a pris une dimension à laquelle nul ne s'attendait. Elle a scellé l'union d'un siècle d'histoire
		et du temple du divertissement cosmopolite contemporain, faisant du centre Rundle Mall le cœur de la ville.
		Certaines des meilleures boutiques d'Adélaïde bordent cette rue piétonne très animée. Les grands magasins emblématiques d'Australie,
		tels Myer et David Jones, y côtoient de nombreuses petites boutiques. Rundle Mall marie les gammes et les prix d'un centre commercial
		suburbain, et le style inhérent à sa position, au cœur du centre des affaires.
	</p>
</div>

<div class="section">
	<h2>Jardins Himeji</h2>
	<img class="text-image" src="..\img\Destinations\Adelaide\adelaidehimeji.jpg" alt="Jardins Himeji">
	<p class="section-text">
		Les jardins Himeji comptent parmi les sites les plus beaux et les plus tranquilles d'Adélaïde. Vous pouvez les visiter
		par vous-même ou contacter le garde forestier afin de participer à une visite guidée qui vous en apprendra plus sur la
		signification spirituelle, naturelle et historique des jardins Himeji.
		Ces jardins japonais traditionnels ont été offerts en cadeau à Adélaïde par la ville d'Himeji, avec laquelle elle est jumelée.
		Depuis 1982, les jardins fournissent aux habitants de la capitale d'Australie-Méridionale un abri ombragé loin des rues animées de la ville.
	</p>
</div>

<div class="section">
	<h2>Zoo d'Adélaïde</h2>
	<img class="text-image" src="..\img\Destinations\Adelaide\adelaidezoo.jpg" alt="Zoo d'Adélaïde">
	<p class="section-text">
		Adélaïde accueille le seul zoo à but non lucratif d'Australie, un pionnier des techniques zoologiques modernes. Le zoo d'Adélaïde compte quelque
		300 espèces, pour un total de 1 800 animaux répartis sur huit hectares. 
		Dès lors que vous franchirez la porte d'entrée inscrite au patrimoine, vous comprendrez que ce zoo est tout bonnement hors du commun.
		Le zoo d'Adélaïde met notamment en évidence Gondwana, l'ancien supercontinent regroupant l'Australie, l'Amérique du Sud, l'Inde, l'Afrique
		et l'Asie du Sud-Est. De nombreuses expositions s'attachent à reproduire les biotopes naturels. 
	</p>
</div>

<?php require "../footer.php"; ?>

</body>
</html>