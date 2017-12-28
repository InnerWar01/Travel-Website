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

	<h1>Circuits</h1>
	<h2>Cliquez sur une image pour avoir la présentation du circuit correspondant</h2>
	<br>	
	<div class="mlt_zoom">
	<TABLE BORDER="0" CELLPADDING="20">
		<CAPTION></CAPTION>
			<TR>
			<TH>Circuit 1<br>
			<a href="..\circuits\circuit1.php"><img src="..\img\Circuits\Circuit1\map.png" alt=Circuit 1></a></TH>
			<TH>Circuit 2<br>
			<a href="..\circuits\circuit2.php"><img src="..\img\Circuits\Circuit2\map.png" alt=Circuit 2></a></TH>

	</TABLE>
	</div>
		
<?php require "../footer.php"; ?>
</body>
</html>