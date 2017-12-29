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
	<link rel="stylesheet" href="<?php require "path.php";?>css\commentaire.css">
</head>
        
<body>
 
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
// Récupération du billet
$req = $bdd->prepare("SELECT ID_Billet, Titre, Contenu, DATE_FORMAT(Date_creation, '%d/%m/%y') AS
date_creation_fr FROM Billets WHERE ID_Billet = ?");
$req->execute(array($_GET['billet']));
$donnees = $req->fetch();
?>
<div class="com">
	<div class="tooltip">
		<a href="blog.php">
			<img class="return" src="<?php require "path.php";?>img\Blog\return.png" alt="Return icon">
		</a>
		<span class="tooltiptext">Retour</span>
	</div>
    <h3>
        <?php echo htmlspecialchars($donnees['Titre']); ?>
        <em><?php echo $donnees['date_creation_fr']; ?></em>
    </h3>
    
    <h4>
		<?php
		echo nl2br(htmlspecialchars($donnees['Contenu']));  ?>
    </h4>

	<fieldset>
		<legend>Commentaires</legend>
		<?php
		$req->closeCursor(); // Important : on libère le curseur pour la prochaine requête

		// Récupération des commentaires
		$req = $bdd->prepare(
					   "SELECT Username, Commentaire ,DATE_FORMAT(Date_commentaire, '%d/%m/%y') AS date_commentaire_fr
						FROM commentaires NATURAL JOIN users
						WHERE ID_Billet = ?
						ORDER BY Date_commentaire 
						ASC LIMIT 0, 10");

		$req->execute(array($_GET['billet']));

		while ($donnees = $req->fetch())
		{
		?>

		<div class = "user-comment">
		   <ul>
				<li class = "user"><?php echo htmlspecialchars($donnees['Username']); 
										echo " " . $donnees['date_commentaire_fr'];?></h3>
				</li>
		   
				<li class = "comment">
				  <?php echo nl2br(htmlspecialchars($donnees['Commentaire'])); ?>
				</li>
		   </ul>
		</div>

		<img class="divide" src="<?php require "path.php";?>img\Blog\divider.png" alt="Comment divider">
		<?php
		} // Fin de la boucle des commentaires
		$req->closeCursor();
		?>

		<form action="post-commentaires.php?billet=<?php echo $_GET['billet'];?>" method="post">
			<p>
				<textarea name="commentaire" placeholder="Message" rows="8" cols="45"></textarea><br />
				<input type="submit" id="submit" value="Envoyer" />
			</p>
		</form>
	</fieldset>
</div>

</body>
</html>