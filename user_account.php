
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
	<title>Mon compte</title> 
	<link rel="stylesheet" href="<?php require "path.php";?>css\user_account.css">
	<link rel="stylesheet" href="<?php require "path.php";?>css\footer.css">
</head>

<body>

<?php
 
	$servername = "localhost";
	$username = "#";
	$password = "#";
	$dbname = "travel_australia";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT Username
			FROM USERS
			WHERE Usermail = '{$_SESSION['Usermail']}'
			AND Userpassword = '{$_SESSION['Userpassword']}'";
	$result = $conn->query($sql);
	
	if($result === FALSE) { 
		die(mysql_error()); // TODO: better error handling
	}

	while($val = mysqli_fetch_array($result))
		$_SESSION['Username'] = $val['Username'];
	
?>

<div class="container">
	<img class="top_img" src="<?php require "path.php";?>img\User\relax.jpg" alt="Beach holiday">
	<div class="center">Bienvenue <?php echo $_SESSION["Username"]?>
	<ul>
		<li>
			<a class="top_nav" href="<?php require "path.php";?>Home_Page.php">Accueil</a>
		</li>
		<li>
			<a class="top_nav" onclick="alertBox()">Se déconnecter</a>
		</li>
	</div>
</div>


<div id="block">
	<div class="bloc-center">
		<div class="img">
			<a target="_blank" onclick="showHide('booking','dirImg')">
				<img src="<?php require "path.php";?>img\User\travel.jpg" id="dirImg" alt="Booking a travel">
			</a>
			<div class="desc">Vos réservations</div>
		</div>
	</div>

	<div class="bloc-center">
		<div class="img">
			<a target="_blank" href="blog.php">
				<img src="<?php require "path.php";?>img\User\blog.jpg" alt="Blog">
			</a>
			<div class="desc">Blog</div>
		</div>
	</div>

	<div class="bloc-center">
		<div class="img">
			<a target="_blank" href="form.php">
				<img src="<?php require "path.php";?>img\User\travel_planner.png" alt="Plan your trip">
			</a>
			<div class="desc">Planifiez votre voyage</div>
		</div>
	</div>
</div>

<div id="booking">
	<div id="booking-content">
	<?php
		$sql = "SELECT Username, Date_Départ_Destination, Date_Fin, Nom_Ville, Nb_Places_Réservées_Destination, Nom_Hotel, Montant_Paiement_Destination
				FROM   client NATURAL JOIN users NATURAL JOIN reservation_destination NATURAL JOIN paiement_destination NATURAL JOIN ville NATURAL JOIN hotel
				WHERE Username = '{$_SESSION['Username']}'";
		$result = $conn->query($sql);	

		if($result === FALSE) { 
			die(mysql_error()); // TODO: better error handling
		}
		
		$i = 1;
		while($val = mysqli_fetch_array($result))
		{	
			echo "<span class='nb'>Réservation n° " . $i . ":</span><br>";
			echo "<span>Ville: </span>" . $val['Nom_Ville'] . " <br>";
			echo "<span>Date Départ: </span>" . $val['Date_Départ_Destination'] . "<br>";
			echo "<span>Date Fin: </span>" . $val['Date_Fin'] . "<br>";
			echo "<span>Places reservées: </span>" . $val['Nb_Places_Réservées_Destination'] . "<br>";
			echo "<span>Hôtel: </span>" . $val['Nom_Hotel'] . "<br>";
			echo "<span>Montant: </span>" . $val['Montant_Paiement_Destination'] . "€<br>";
			$i = $i + 1;
		}
		
		$sql = "SELECT Username, Code_Voyage_Circuit, Nom_Voyage_Circuit, Durée_Voyage_Circuit, Date_Départ_Circuit, Nb_Places_Réservées_Circuit, Ville_Départ, Ville_Arrivée, Montant_Paiement_Circuit
				FROM   client NATURAL JOIN users NATURAL JOIN reservation_circuit NATURAL JOIN paiement_circuit NATURAL JOIN voyage_circuit
				WHERE Username = '{$_SESSION['Username']}'";
		$result = $conn->query($sql);
			
		if($result === FALSE) { 
			die(mysql_error()); // TODO: better error handling
		}
		
		while($val = mysqli_fetch_array($result))
		{
			$code = $val['Code_Voyage_Circuit'];
			
			$sql1 = "SELECT Rang, Ville_Etape, Nom_Hotel, Type_Transport, Nombre_Jours
						FROM VOYAGE_ETAPE NATURAL JOIN HOTEL
						WHERE Code_Voyage_Circuit = '{$code}'";
			$result1 = $conn->query($sql1);

			if($result1 === FALSE) { 
				die(mysql_error()); // TODO: better error handling
			}
			
			echo "<span class='nb'>Réservation n° " . $i . ":</span><br>";
			echo "<span>Voyage: </span>" . $val['Nom_Voyage_Circuit'] . " <br>";
			echo "<span>Durée: </span>" . $val['Durée_Voyage_Circuit'] . " <br>";
			echo "<span>Date Départ: </span>" . $val['Date_Départ_Circuit'] . "<br>";
			echo "<span>Places reservées: </span>" . $val['Nb_Places_Réservées_Circuit'] . "<br>";
			echo "<span>Ville de départ: </span>" . $val['Ville_Départ'] . "<br>";
			echo "<span>Ville d'arrivée: </span>" . $val['Ville_Arrivée'] . "<br>";
			echo "<span>Montant: </span>" . $val['Montant_Paiement_Circuit'] . "€<br>";
						
			echo "<div id='table'>
					  <table>
						<tr>
							<th>Etape</th>
							<th>Ville</th>
							<th>Hôtel</th>
							<th>Type de transport</th>
							<th>Durée</th>
						</tr>";
						
			while($val = mysqli_fetch_array($result1))
			{
				echo "<tr>
						<td>" . $val["Rang"] . "</td>";
				echo   "<td>" . $val["Ville_Etape"] . "</td>";
				echo   "<td>" . $val["Nom_Hotel"] . "</td>";
				echo   "<td>" . $val["Type_Transport"] . "</td>";
				echo   "<td>" . $val["Nombre_Jours"] . "</td>
					  </tr>";
			}
			echo "</table>
				  </div>";
				  
			$i = $i + 1;
		}
		
	?>
	</div>
</div>

<script>

function showHide(divID, imgID){
	if (document.getElementById(divID).style.display != "block") {
		document.getElementById(divID).style.display = "block";
	} else {
		document.getElementById(divID).style.display = "none";
	}
}

function alertBox() {
    if (confirm("Êtes-vous sûr que vous voulez vous déconnecter?") == true) {
		window.location.replace("logout.php");
    } else {
		window.location.replace("user_account.php");
    }
}

</script>

</body>
</html>