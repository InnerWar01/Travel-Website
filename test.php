<!DOCTYPE html>
<html lang="fr">

<head>
	<meta http-equiv="Content-Type" content="text/html"; charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php require "path.php";?>css\test.css">
</head>

   <body>
	<div id="form_container">
	
		<div id="formHeader">
			<img id="form_img" src="<?php require "path.php";?>img\Nav_Bar\search.jpg" alt="Search Image">
		</div>

		<div id="form-content">
		  <form action="found.php" method="Post">
		  <fieldset>
			 Rechercher au niveau de:
			 <select name="filtre">
				<option value="" selected></option>
				 <option value="Site entier">Site entier</option> 
				 <option value="Hotel">Hotel</option>
				 <option value="Monument">Monument</option>
				 <option value="Ville">Ville</option>
				 <option value="Région">Région</option>
			 </select><br/>
			 <input type="search" name="requete" placeholder="Entrer votre recherche" id="requete"><br/>
			</fieldset>
			 <input type="submit" id="submit" value="Rechercher">
		  </form>
		</div>
	</div>
      
    <body>
</html>
      