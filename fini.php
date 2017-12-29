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
	<title>Résumé</title> 
	<link rel="stylesheet" href="<?php require "path.php";?>css\fini.css">
</head>

<body>

<div id="container">
	<div class="tooltip">
		<a href="<?php require "path.php";?>user_account.php">
			<img class="return" src="<?php require "path.php";?>img\Blog\return.png" alt="Return icon">
		</a>
		<span class="tooltiptext">Retour</span>
	</div>
	
	<h4>On vous remercie pour votre réservation <?php echo " " . $_SESSION["civilité"] . " " . $_SESSION["nom"] . " " . $_SESSION["prénom"] . ".<br>"; ?>
	La feuille récapitulative vous sera envoyé sur votre messagerie. 
	On vous remercie de nous choisir et on vous souhaite un très bon sejour.</h4>

	<img id="fin_img" src="<?php require "path.php";?>img\Formulaire\travel.jpg" alt="Image travel">
</div>

<?php

	$servername = "localhost";
	$username = "root";
	$password = "1991";
	$dbname = "travel_australia";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}
	
	if(isset($_SESSION["choix"]) && $_SESSION["choix"] == "Villes")
	{
		$sql = "SELECT Num_Hotel 
				FROM Hotel 
				WHERE Nom_Hotel = '{$_POST['choix']}'";
		$result = $conn->query($sql);

		if ($result->num_rows == 1)
			while($row = $result->fetch_assoc()) {
				$num = $row["Num_Hotel"];
			}
			
		$sql = "INSERT INTO `RESERVATION_DESTINATION` (`Date_Départ_Destination`, `Date_Fin`, `Nb_Places_Réservées_Destination`, `Num_Client`, `Code_Voyage_Destination`, `Num_Hotel`)
				VALUES ('{$_SESSION['date_deb']}', '{$_SESSION['date_fin']}', '{$_SESSION['nb']}', '{$_SESSION['id']}', '{$_SESSION['code']}', '{$num}')";
		if ($conn->query($sql) === TRUE) {
			$last_id = $conn->insert_id;
			//echo "New record created successfully. Last inserted id is: " . $last_id;
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

		date_default_timezone_set("Europe/Paris");
		$date = date('Y/m/d');

		$sql = "INSERT INTO `PAIEMENT_DESTINATION` (`Montant_Paiement_Destination`, `Date_Paiement_Destination`, `Num_Client`, `Code_Voyage_Destination`)
				VALUES ('{$_SESSION['n']}', '{$date}', '{$_SESSION['id']}', '{$_SESSION['code']}')";
		if ($conn->query($sql) === TRUE) {
			$last_id = $conn->insert_id;
			//echo "New record created successfully. Last inserted id is: " . $last_id;
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		
		$conn->close();
	} else {
		$sql = "INSERT INTO `RESERVATION_CIRCUIT` (`Date_Départ_Circuit`, `Nb_Places_Réservées_Circuit`, `Num_Client`, `Code_Voyage_Circuit`)
			VALUES ('{$_SESSION['date_deb']}', '{$_SESSION['nb']}', '{$_SESSION['id']}', '{$_SESSION['code']}')";
		if ($conn->query($sql) === TRUE) {
			$last_id = $conn->insert_id;
			//echo "New record created successfully. Last inserted id is: " . $last_id;
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

		date_default_timezone_set("Europe/Paris");
		$date = date('Y/m/d');

		$sql = "INSERT INTO `PAIEMENT_CIRCUIT` (`Montant_Paiement_Circuit`, `Date_Paiement_Circuit`, `Num_Client`, `Code_Voyage_Circuit`)
				VALUES ('{$_SESSION['n']}', '{$date}', '{$_SESSION['id']}', '{$_SESSION['code']}')";
		if ($conn->query($sql) === TRUE) {
			$last_id = $conn->insert_id;
			//echo "New record created successfully. Last inserted id is: " . $last_id;
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		
		$conn->close();
	}
?>
	
</body>
</html>