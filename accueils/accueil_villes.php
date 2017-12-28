<?php
	session_start([
    'cookie_lifetime' => 86400,
    'read_and_close'  => true,]);
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="..\css\accueil_pres_style.css" type="text/css" media="screen"/>
	<link rel="stylesheet" href="..\css\nav.css">
	<link rel="stylesheet" href="..\css\footer.css">
</head>


<body>
<div id="iefix">
	<?php require "../nav_bar.php"; ?>
</div>

	<h1>Destinations</h1>
	<h2>Cliquez sur une image pour avoir la présentation de la ville correspondante</h2>
	<br>
	
	<div class="mlt_zoom">
	
	<TABLE BORDER="0" CELLPADDING="20">
		<CAPTION></CAPTION>
			<TR>
			<TH>Sydney<br>
			<a href="..\destinations\Sydney.php"><img src="..\img\Accueils\Destinations\Sydney.jpg" alt=Sydney></a></TH>
			<TH>Alice Springs<br>
			<a href="..\destinations\Alice_Springs.php"><img src="..\img\Accueils\Destinations\AliceSprings.jpg" alt=Alice Springs></TH></a>
			<TH>Cairns (+Great Barrier Reef)<br>
			<a href="..\destinations\Cairns.php"><img src="..\img\Accueils\Destinations\Cairns.jpg" alt=Cairn></TH></a>
			<TH>Melbourne<br>
			<a href="..\destinations\Melbourne.php"><img src="..\img\Accueils\Destinations\Melbourne.jpg" alt=Mebourne></TH></a>
			<TH>Perth<br>
			<a href="..\destinations\Perth.php"><img src="..\img\Accueils\Destinations\Perth.jpg" alt=Perth></TH></a>
			</TR>
			<TR>
			<TH>Brisbane<br>
			<a href="..\destinations\Brisbane.php""><img src="..\img\Accueils\Destinations\Brisbane.jpg" alt=Brisbane></a></TH>
			<TH>Hobart<br>
			<a href="..\destinations\Hobart.php"><img src="..\img\Accueils\Destinations\Hobart.jpg" alt=Hobart></TH></a>
			<TH>Darwin<br>
			<a href="..\destinations\Darwin.php"><img src="..\img\Accueils\Destinations\Darwin.jpg" alt=Darwin></TH></a>
			<TH>Adelaide<br>
			<a href="..\destinations\Adelaide.php"><img src="..\img\Accueils\Destinations\Adelaide.jpg" alt=Adelaide></TH></a>
			<TH>Gold Coast<br>
			<a href="..\destinations\The_Gold_Coast.php"><img src="..\img\Accueils\Destinations\GoldCoast.jpg" alt=Gold Coast></TH></a>
			</TR>
	</TABLE>
	</div>
		
<?php require "../footer.php"; ?>
</body>
</html>