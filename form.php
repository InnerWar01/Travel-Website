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
	<title>Réservation</title> 
	<link rel="stylesheet" href="css\form.css">
</head>

<body>

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
			
// define variables and set to empty values
$civErr = $nomErr = $prénomErr = $emailErr = $villeErr = $paysErr = $choixErr = $diffErr = "";
$civ = $nom = $prénom = $civilité = $adresse = $email = $ville = $pays = $datenaiss = $société = $complément = $code_postal = $tel = $date_deb = $date_fin = $quantity1 = $quantity2 = $choix = $Circuits = $Destinations = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {

	$valid = true;

	if ($_POST["civilité"] == "null") {
		 $civErr = "Entrez votre civilité.";
		 $valid = false;
	   } else {
		 $civilité = test_input($_POST["civilité"]);
	   }

	$nom = test_input($_POST["nom"]);
	if (!preg_match("/^[a-zA-Z]*$/", $nom)) {
		$nomErr = "Only letters and white space allowed";
		 $valid = false;
	}
	

	$prénom = test_input($_POST["prénom"]);
	if (!preg_match("/^[a-zA-Z]*$/", $prénom)) {
		$prénomErr = "Only letters and white space allowed";
		 $valid = false;
	}
	
	$ville = test_input($_POST["ville"]);
	if (!preg_match("/^[a-zA-Z]*$/", $ville)) {
		$villeErr = "Only letters and white space allowed";
		 $valid = false;
	}
	
	$pays = test_input($_POST["pays"]);
	if (!preg_match("/^[a-zA-Z]*$/", $pays)) {
		$paysErr = "Only letters and white space allowed";
		 $valid = false;
	}
	
	$email = test_input($_POST["email"]);
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$emailErr = "Invalid email format";
		$valid = false;
	}

	$Destinations = test_input($_POST["Destinations"]);
	$Circuits = test_input($_POST["Circuits"]);
	
	$datenaiss = test_input($_POST["datenaiss"]);
	$société = test_input($_POST["société"]);
	$adresse = test_input($_POST["adresse"]);
	$complément = test_input($_POST["complément"]);
	$code_postal = test_input($_POST["code_postal"]);
	$choix = test_input($_POST["choix"]);
	$tel = test_input($_POST["tel"]);
	$date_deb = test_input($_POST["date_deb"]);
	
	date_default_timezone_set("Europe/Paris");
	$_SESSION['datenaiss'] = date('Y/m/d');
	
	if(isset($date_fin) && !empty($date_fin)) 
	{
		$date_fin = test_input($_POST["date_fin"]);
	
		date_default_timezone_set("Europe/Paris");
		$date1 = strtotime($date_deb);
		$date2 = strtotime($date_fin);
		
		if ($date1 > $date2)
		{
			$diffErr = "Erreur! La date de début est supérieure à la date fin!";
			$valid = false;
		}
	}
	
	//trigger_error(var_export($date2, true), E_USER_ERROR);
	
	$quantity1 = test_input($_POST["quantity1"]);
	$quantity2 = test_input($_POST["quantity2"]);
	
	if($valid){
		$sql = "SELECT Num_Client
				FROM client NATURAL JOIN users
				WHERE  Username = '{$_SESSION['Username']}'";
		$result = $conn->query($sql);

		if ($result->num_rows == 1) {
			$row = $result->fetch_assoc();
			$_SESSION["id"] = $row["Num_Client"];
		} else {
			$sql = "INSERT INTO `CLIENT` (`Nom_Client`, `Prénom_Client`, `Civilité_Client`, `Date_Naissance`, `Société_Client`, `Adresse_Client`, `Adresse_Complément`, `Code_Postal`, `Ville_Client`, `Pays_Client`, `Mail_Client`, `Tel_Client`)
					VALUES ('{$_POST['nom']}', '{$_POST['prénom']}', '{$_POST['civilité']}', '{$_POST['datenaiss']}', '{$_POST['société']}', '{$_POST['adresse']}', '{$_POST['complément']}', '{$_POST['code_postal']}', '{$_POST['ville']}', '{$_POST['pays']}', '{$_POST['email']}', '{$_POST['tel']}')";
			
			if ($conn->query($sql) === TRUE) {
				$last_id = $conn->insert_id;
				$_SESSION["id"] = $last_id;
				//echo "New record created successfully. Last inserted id is: " . $last_id;
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}
			$conn->close();
			
		$_SESSION['civilité'] = $_POST['civilité'];
		$_SESSION['nom'] = $_POST['nom'];
		$_SESSION['prénom'] = $_POST['prénom'];
		$_SESSION['datenaiss'] = $_POST['datenaiss'];
		$_SESSION['ville'] = $_POST['ville'];
		$_SESSION['pays'] = $_POST['pays'];
		$_SESSION['choix'] = $_POST['choix'];
		$_SESSION['société'] = $_POST['société'];
		$_SESSION['adresse'] = $_POST['adresse'];
		$_SESSION['complément'] = $_POST['complément'];
		$_SESSION['code_postal'] = $_POST['code_postal'];
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['tel'] = $_POST['tel'];
		$_SESSION['Destinations'] = $_POST['Destinations'];
		$_SESSION['Circuits'] = $_POST['Circuits'];
		$_SESSION['date_deb'] = $_POST['date_deb'];
		$_SESSION['date_fin'] = $_POST['date_fin'];
		$_SESSION['quantity1'] = $_POST['quantity1'];
		$_SESSION['quantity2'] = $_POST['quantity2'];
		header('Location: ..\form_resp.php');
	}
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>

<div id="form_container">

<div id="formHeader">
	<img id="form_img" src="..\img\Formulaire\beach_kangoroo.jpg" alt="Image formulaire">
</div>

<div id="form-content">

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
	<fieldset>
		<legend>Informations Personnelles</legend>
		<select name="civilité" value="<?php echo $civilité ?>" required>
			<option value="null"></option>
			<option value="Monsieur" <?php if ($civilité == "Monsieur") echo "selected";?>>M</option>
			<option value="Madame" <?php if ($civilité == "Madame") echo "selected";?>>Mme</option>
			<option value="Mademoiselle" <?php if ($civilité == "Mademoiselle") echo "selected";?>>Mlle</option>
		</select>
		<span class="error"><?php echo $civErr; ?></span>
		<br>
		<input type="text" name="prénom" placeholder="Prénom" value="<?php echo $prénom;?>" required>
		<span class="error"><?php echo $prénomErr; ?></span>
		<br>
		<input type="text" name="nom" placeholder="Nom" value="<?php echo $nom;?>" required>
		<span class="error"><?php echo $nomErr; ?></span>
		<br>
		Date de naissance<br>
		<input type="date" name="datenaiss" value="<?php echo $datenaiss;?>" required>
		<br>
		<input type="text" name="société" placeholder="Société" value="<?php echo $société;?>">
		<span class="error"><?php echo $société; ?></span>
		<br>
		<input type="text" name="adresse" placeholder="Adresse" value="<?php echo $adresse;?>" required>
		<br>
		<input type="text" name="complément" placeholder="Complément d'adresse" value="<?php echo $complément;?>">
		<br>
		<input type="text" name="ville" placeholder="Ville" value="<?php echo $ville;?>" required>
		<span class="error"><?php echo $villeErr; ?></span>
		<br>
		<input type="number" name="code_postal" maxlength="5" placeholder="Code postal" value="<?php echo $code_postal;?>" required>
		<br>
		<input type="text" name="pays" placeholder="Pays" value="<?php echo $pays;?>" required>
		<span class="error"><?php echo $paysErr; ?></span>
		<br>
		<input type="email" name="email" placeholder="Email" value="<?php echo $email;?>" required>
		<span class="error"><?php echo $emailErr; ?></span>
		<br>
		<input type="tel" name="tel" maxlength="11" placeholder="Numéro de téléphone" value="<?php echo $tel;?>" required>
		<br>
	</fieldset>
	<fieldset>
		<legend>Votre Voyage</legend>
		Date de début<br>
		<input type="date" name="date_deb" value="<?php echo $date_deb;?>" required>
		<br>
		<input type="radio" class="check" name="choix" id="choix1" value="Villes" <?php if (isset($choix) && $choix =="Villes") echo "checked"; ?> onLoad="check(this, 'choix1');"> Villes<br>
		<div id="villes">
			<select name="Destinations" id="Destinations">
				<option value="null"></option>
				<option value="Adelaide" <?php if ($Destinations == "Adelaide") echo "selected";?>>Adelaide</option>
				<option value="Alice Springs" <?php if ($Destinations == "Alice Springs") echo "selected";?>>Alice Springs</option>
				<option value="Brisbane" <?php if ($Destinations == "Brisbane") echo "selected";?>>Brisbane</option>
				<option value="Cairns" <?php if ($Destinations == "Cairns") echo "selected";?>>Cairns</option>
				<option value="Darwin" <?php if ($Destinations == "Darwin") echo "selected";?>>Darwin</option>
				<option value="Hobart" <?php if ($Destinations == "Hobart") echo "selected";?>>Hobart</option>
				<option value="Melbourne" <?php if ($Destinations == "Melbourne") echo "selected";?>>Melbourne</option>
				<option value="Perth" <?php if ($Destinations == "Perth") echo "selected";?>>Perth</option>
				<option value="Sydney" <?php if ($Destinations == "Sydney") echo "selected";?>>Sydney</option>
				<option value="The Gold Coast" <?php if ($Destinations == "The Gold Coast") echo "selected";?>>The Gold Coast</option>
			</select><br>
			
			Date fin<br>
			<input type="date" name="date_fin" placeholder="Date fin" value="<?php  echo $date_fin;?>">
			<span class="error"><?php echo $diffErr;?></span>
			<br>
		</div>
		<input type="radio" class="check" name="choix" id="choix2" value="Circuit" <?php if (isset($choix) && $choix =="Circuit") echo "checked";?> onLoad="check(this, 'choix2');"> Circuits<br>
		<div id="circuits">
			<select name="Circuits" id="Circuits">
				<option value="null"></option>
				<option value="Trois semaine à partir de Melbourne, Victoria" <?php if ($Circuits == "Trois semaine à partir de Melbourne, Victoria") echo "selected";?>>Circuit1</option>
				<option value="Train de légende avec Indian Pacific" <?php if ($Circuits == "Train de légende avec Indian Pacific") echo "selected";?>>Circuit2</option>
			</select><br>
		</div>	
		<span class="error"><?php echo $choixErr; ?></span>
		Passagers<br>
		<input type="number" name="quantity1" placeholder="Nombre d'adultes" value="<?php echo $quantity1;?>" required><br>
		<input type="checkbox" class="check" id="passagers" value="enfant" <?php if (isset($passagers2)) echo "checked";?> >Enfants<br>
		<div id="enfants">
			<input type="number" name="quantity2" placeholder="Nombre d'enfants" value="<?php echo $quantity2;?>"><br>
		</div>
	</fieldset>
	<input type="submit" value="Valider" id="submit">
</form>

</div>
</div>

<script>
// assign function to onclick property of checkbox
document.getElementById('choix1').onclick = function() {
    // call toggleSub when checkbox clicked
    // toggleSub args: checkbox clicked on (this), id of element to show/hide
    check(this, 'villes');
};

document.getElementById('choix2').onclick = function() {
    // call toggleSub when checkbox clicked
    // toggleSub args: checkbox clicked on (this), id of element to show/hide
    check(this, 'circuits');
};

document.getElementById('passagers').onclick = function() {
    // call toggleSub when checkbox clicked
    // toggleSub args: checkbox clicked on (this), id of element to show/hide
    toggleSub(this, 'enfants');
};

// called onclick of checkbox
function toggleSub(box, id) {
    // get reference to related content to display/hide
    var el = document.getElementById(id);
    
    if ( box.checked ) {
        el.style.display = 'block';
    } else {
        el.style.display = 'none';
    }
}

// called onclick of radio button
function check(radio, id) {
    // get reference to related content to display/hide
    var el = document.getElementById(id);
    
    if ( radio.value == "Villes" ) {
        el.style.display = 'block';
		document.getElementById("circuits").style.display = "none";
    } else {
        el.style.display = 'block';
		document.getElementById("villes").style.display = "none";
    }
}
</script>

</body>
</html>