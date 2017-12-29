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
	<link rel="stylesheet" href="<?php require "path.php";?>css\form_resp.css">
</head>

<body>

<div id="sum_container">

	<div id="sumHeader">
		<img id="sum_img" src="<?php require "path.php";?>img\Formulaire\relax.jpg" alt="Image kangoroo">
	</div>

<div id='sum_content'>

	<form action="fini.php" method="post">
		<fieldset>
			<legend>Récapitulatif</legend>
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
		
			echo "<span>Nom: </span>" .$_SESSION["nom"]."<br>";
			echo "<span>Prénom: </span>" .$_SESSION["prénom"]."<br>";
			echo "<span>Date de naissance: </span>" .$_SESSION["datenaiss"]."<br>";

			if (isset($_POST["société"]) != null)
				echo "<span>Société: </span>" . $_SESSION["société"] . "<br>";
			else
				echo "";
			
			if (isset($_POST["complément"]) != null)
				echo "<span>Adresse: </span>" . $_SESSION["adresse"] . " " . $_SESSION["complément"] . " " . $_SESSION["code_postal"] . " " . $_SESSION["ville"] . " " . $_SESSION["pays"] . "<br>";
			else
				echo "<span>Adresse: </span>" . $_SESSION["adresse"] . " " . $_SESSION["code_postal"] . " " . $_SESSION["ville"] . " " . $_SESSION["pays"] . "<br>";
				
			echo "<span>E-mail: </span>" .$_SESSION["email"]. "<br>";
			echo "<span>Téléphone: +</span>" . $_SESSION["tel"] . "<br>";
			
			$nb = (int)$_SESSION["quantity1"] + (int)$_SESSION["quantity2"];
			$_SESSION["nb"] = $nb;

			if(isset($_SESSION["choix"]) && $_SESSION["choix"] == "Villes")
			{	
				echo "<span>Choix d'une destination simple à </span>" .$_SESSION["Destinations"]. "<br>";
				echo "<span>Date de début: </span>" . $_SESSION["date_deb"] . "<br>";
				echo "<span>Date de fin: </span>" . $_SESSION["date_fin"] . "<br>";
				
				$sql = "SELECT Nom_Hotel, Code_Voyage_Destination, Prix_Indicatif_Destination
						FROM Hotel NATURAL JOIN Ville NATURAL JOIN voyage_destination
						WHERE Nom_Ville = '{$_SESSION['Destinations']}'";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// output data of each row
					echo "<span>Hôtels disponibles: </span><br>";
					while($row = $result->fetch_assoc()) {
						$code = $row["Code_Voyage_Destination"];
						$_SESSION["code"] = $code;
						$n = $row["Prix_Indicatif_Destination"] * $nb;
						$_SESSION["n"] = $n;
						echo "<input type='radio' class='check' name='choix' value='{$row['Nom_Hotel']}' required>{$row['Nom_Hotel']}<br>";
					} 
				} else {
						echo "<span>Hôtels disponibles: 0</span><br>";
				}
				$conn->close(); 
			}
			else 
			{
				echo "<span>Choix du circuit: </span>" . $_SESSION["Circuits"] . "<br>";
				echo "<span>Date de début: </span>" . $_SESSION["date_deb"] . "<br>";
				
				$sql = "SELECT *
						FROM VOYAGE_CIRCUIT
						WHERE Nom_Voyage_Circuit = '{$_SESSION['Circuits']}'";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
						$code = $row["Code_Voyage_Circuit"];
						$_SESSION["code"] = $code;
						$n = $row["Prix_Indicatif_Circuit"] * $nb;
						$_SESSION["n"] = $n;
						echo "<span>Prix Total: </span>" . $n . " €<br>";
						echo "<span>Ville de départ: </span>" . $row["Ville_Départ"] . "<br>";
						echo "<span>Ville d'arrivée: </span>" . $row["Ville_Arrivée"] . "<br>";
						echo "<span>Durée du voyage: </span>" . $row["Durée_Voyage_Circuit"] . "<br>";
					} 
				} else {
						echo "0 results";
				}
				
				$sql = "SELECT Rang, Ville_Etape, Nom_Hotel, Type_Transport, Nombre_Jours
						FROM VOYAGE_ETAPE NATURAL JOIN HOTEL
						WHERE Code_Voyage_Circuit = '{$code}'";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// output data of each row
					echo "<div id='table'>
						  <table>
							<tr>
								<th>Etape</th>
								<th>Ville</th>
								<th>Hôtel</th>
								<th>Type de transport</th>
								<th>Durée</th>
							</tr>";
					while($row = $result->fetch_assoc()) {
						echo "<tr>
								<td>" . $row["Rang"] . "</td>";
						echo   "<td>" . $row["Ville_Etape"] . "</td>";
						echo   "<td>" . $row["Nom_Hotel"] . "</td>";
						echo   "<td>" . $row["Type_Transport"] . "</td>";
						echo   "<td>" . $row["Nombre_Jours"] . "</td>
							  </tr>";
					}
					echo "</table>
						  </div>";
				} else {
						echo "0 results";
				}
				
				$conn->close();
			}
			
			echo "<span>Passagers: </span>";

			if(isset($_SESSION["quantity1"]) && !empty($_SESSION["quantity2"]))
				echo " " . $_SESSION["quantity1"] . "<span> adultes et </span>" . $_SESSION["quantity2"] . " <span>enfants</span>";
			else
				echo " " . $_SESSION["quantity1"] . " <span>adultes</span><br>";
		?>
		</fieldset>
		<input type="submit"  id="submit" value="Réserver">
	</form>
</div>
</div>

</body>
</html>