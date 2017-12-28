<!DOCTYPE html>
<html lang="fr">

<head>
	<meta http-equiv="Content-Type" content="text/html"; charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="..\css\test.css">
</head>

   <body>
	<div id="form_container">
	
		<div class="tooltip">
			<a href="Home_page.php">
				<img class="return" src="..\img\Blog\return.png" alt="Return icon">
			</a>
			<span class="tooltiptext">Retour</span>
		</div>
	
		<div id="formHeader">
			<img id="form_img" src="..\img\Nav_Bar\found.jpg" alt="Found Image">
		</div>

		<div id="form-content">
			<?php

				  $donnees = "";

				  if(isset($_POST['requete']) && $_POST['requete'] != NULL){
				   
				try
				{
				 $bdd = new PDO('mysql:host=localhost;dbname=travel_australia', 'root', '1991');
				}
				catch(Exception $e)
				{
						die('Erreur : '.$e->getMessage());
				}
				  
				   $requete = preg_replace("#[^a-zA-Z ?0-9]#i","",$_POST['requete']);

				   
				  if($_POST['filtre']=="Site entier"){
					   $query = "(SELECT *
								  FROM HOTEL, MONUMENT, VILLE, REGION
									 WHERE Nom_Hotel 
									 LIKE ? 
									 OR Adresse_Hotel
									 LIKE ?
									 OR Nom_Monument													 
									 LIKE ? 
									 OR Prix_Entrée_Monument
									 LIKE ?
									 OR Nom_Ville													 
									 LIKE ? 
									 OR Nom_Région													 
									 LIKE ? )";
								   
						$req= $bdd->prepare($query);
						$req->execute(array('%'.$requete.'%','%'.$requete.'%','%'.$requete.'%','%'.$requete.'%','%'.$requete.'%','%'.$requete.'%'));
						$nb_resultats = $req->rowCount();
						   if($nb_resultats >= 1){
							  echo " $nb_resultats résultats trouvés pour<strong> $requete </strong><br/>";
							 while($data=$req->fetch(PDO::FETCH_OBJ)){
							   echo "<span>Nom: </span>$data->Nom_Hotel<br/>
									 <span>Adresse: </span>$data->adresse_hotel<br/>
									 <span>Nom: </span>$data->Nom_Monument<br/>
									 <span>Prix: </span>$data->Prix_Entrée_Monument<br/>
									 <span>Nom: </span>$data->Nom_Ville <br/>
									 <span>Nom: </span>$data->Nom_Région <br/>"; 
							 }
						   } else{
							  echo "0 résultat trouvé pour<strong> $requete </strong>" ;
						   }
				  
				 
				 }else if($_POST['filtre']=="Hotel"){
					   $query = "SELECT *
								  FROM HOTEL 
									 WHERE Nom_Hotel 
									 LIKE ? 
									 OR Adresse_Hotel
									 LIKE ?
									 ORDER BY Num_Hotel DESC";
								   
						$req= $bdd->prepare($query);
						$req->execute(array('%'.$requete.'%','%'.$requete.'%'));
						$nb_resultats = $req->rowCount();
						   if($nb_resultats >= 1){
							  echo " $nb_resultats résultats trouvés pour<strong> $requete </strong><br/>";
							 while($data=$req->fetch(PDO::FETCH_OBJ)){
							   echo "<span>Nom: </span>$data->Nom_Hotel<br/>
									 <span>Adresse: </span>$data->adresse_hotel<br/>"; 
							 }
						   } else{
							  echo "0 résultat trouvé pour<strong> $requete </strong>" ;
						   }
				 
				 
				 }else if($_POST['filtre']=="Monument"){
					   $query = "SELECT *
								  FROM MONUMENT 
									 WHERE Nom_Monument													 
									 LIKE ? 
									 OR Prix_Entrée_Monument
									 LIKE ?
									 ORDER BY Nom_Monument DESC";
						
						$req= $bdd->prepare($query);
						$req->execute(array('%'.$requete.'%','%'.$requete.'%'));
						$nb_resultats = $req->rowCount();
						   if($nb_resultats >= 1){
							  echo " $nb_resultats résultats trouvés pour<strong> $requete </strong><br/>";
							 while($data=$req->fetch(PDO::FETCH_OBJ)){
							   echo "<span>Nom: </span>$data->Nom_Monument<br/>
									 <span>Prix: </span>$data->Prix_Entrée_Monument<br/>"; 
							 }
						   } else{
							  echo "0 résultat trouvé pour<strong> $requete </strong>" ;
						   }
						   
				  }else if($_POST['filtre']=="Ville"){
					   $query = "SELECT *
								  FROM VILLE 
									 WHERE Nom_Ville													 
									 LIKE ? 
									 ORDER BY Num_Ville DESC";
						
						$req= $bdd->prepare($query);
						$req->execute(array('%'.$requete.'%'));
						$nb_resultats = $req->rowCount();
						   if($nb_resultats >= 1){
							  echo " $nb_resultats résultats trouvés pour<strong> $requete </strong><br/>";
							 while($data=$req->fetch(PDO::FETCH_OBJ)){
							   echo "<span>Nom: </span>$data->Nom_Ville <br/>"; 
							 }
						   } else{
							  echo "0 résultat trouvé pour<strong> $requete </strong>" ;
						   }
				 
				 }else if($_POST['filtre']=="Région"){
					   $query = "SELECT *
								  FROM REGION
									 WHERE Nom_Région													 
									 LIKE ? 
									 ORDER BY Num_Région DESC";
						
						$req= $bdd->prepare($query);
						$req->execute(array('%'.$requete.'%'));
						$nb_resultats = $req->rowCount();
						   if($nb_resultats >= 1){
							  echo " $nb_resultats résultats trouvés pour<strong> $requete </strong><br/>";
							 while($data=$req->fetch(PDO::FETCH_OBJ)){
							   echo "<span>Nom: </span>$data->Nom_Région <br/>"; 
							 }
						   } else{
							  echo "0 résultat trouvé pour<strong> $requete </strong>" ;
						   }
				 }

				}

				echo $donnees;

				?>	
		</div>
	</div>
      
    <body>
</html>
      