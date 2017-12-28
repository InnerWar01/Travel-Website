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
	<link rel="stylesheet" href="..\css\blog.css">
</head>
        
<body>

<div id="form_container">

	<div id="form-content">
	
	<h1>Bienvenue sur notre blog!</h1>
	
	<table>
		<tr>
			<th>Titre</th>
			<th>Contenu</th>
			<th>Date de création</th>
		</tr>
<?php

// Connexion à la base de données
try
{
 $bdd = new PDO('mysql:host=localhost;dbname=blog', 'root', '1991');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// define variables and set to empty values
$titreErr = $contenuErr = "";
$titre = $contenu = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {

	$valid = true;

	$titre = test_input($_POST["titre"]);
	if (!preg_match("/^[a-zA-Z]*$/", $titre)) {
		$nameErr = "Only letters and white space allowed";
		$valid = false;
	}
	
	$contenu = test_input($_POST["contenu"]);

	if($valid){
		$req = $bdd->query("INSERT INTO `billets` (`Titre`, `Contenu`, `Date_creation`) 
					VALUES ('{$_POST['titre']}', '{$_POST['contenu']}', NOW())");
			
			if ($req == TRUE) {
				$req->execute();
			} 
	}
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

// On récupère les 10 derniers billets
$req = $bdd->query('SELECT ID_Billet, Titre, Contenu, DATE_FORMAT(Date_creation, \'%d/%m/%Y\') AS
date_creation_fr FROM Billets ORDER BY Date_creation DESC LIMIT 0, 10');

while ($donnees = $req->fetch())
{
?>
<div class="theme">	
	<tr>
		<td>
			<a href="commentaires.php?billet=<?php echo $donnees['ID_Billet'];?>"><?php echo htmlspecialchars($donnees['Titre']); ?></a>
		</td>
		<td><?php echo nl2br(htmlspecialchars($donnees['Contenu']));?></td>     <!--On affiche le contenu du billet-->
		<td><em><?php echo $donnees['date_creation_fr']; ?></em></td>
	</tr>

<?php
} // Fin de la boucle des billets
$req->closeCursor();
?>
	</table>
</div>

		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
			<fieldset>
				<legend>Créer un nouveau sujet</legend>
				<input type="text" name="titre" placeholder="Titre" value="<?php echo $titre;?>"><br />
					<span class="error"><?php echo $titreErr;?></span>
				<textarea name="contenu" placeholder="Contenu" rows="3" cols="30"></textarea><br />
			</fieldset>
			<input type="submit" value="Créer" id="submit">
		</form>

	</div>
</div>

</body>
</html>