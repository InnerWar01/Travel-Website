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
	<title>Sign-in</title> 
	<link rel="stylesheet" href="<?php require "path.php";?>css\Sign_User.css">
</head>

<body>

<?php
			$servername = "localhost";
			$username = "root";
			$password = "1991";
			$dbname = "blog";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			
// define variables and set to empty values
$mailErr = $passErr = $signErr = "";
$Usermail = $Userpassword = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {

	$valid = true;
	
	$Usermail = test_input($_POST["Usermail"]);
	if (!filter_var($Usermail, FILTER_VALIDATE_EMAIL)) {
		$mailErr = "Invalid email format";
		$valid = false;
	}

	$Userpassword = test_input($_POST["Userpassword"]);
	
	$sql = "SELECT Usermail, Userpassword
			FROM USERS
			WHERE Usermail = '{$_POST['Usermail']}'
			AND Userpassword = '{$_POST['Userpassword']}'";
	$result = $conn->query($sql);
			
	if ($result->num_rows == 1) {
		//echo "Utilisateur trouvé.";
	} else {
			$signErr="Désolé, mais vos données sont incorrectes. Vérifiez vos coordonnées et essayez encore une fois.";
			$valid=false;
	}
	
	$conn->close();
	
	if($valid){
		$_SESSION["Usermail"] = $_POST["Usermail"];
		$_SESSION["Userpassword"] = $_POST["Userpassword"];
		header('Location: user_account.php');
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

	<div id="form-content">

		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
			<fieldset>
				<legend>Accéder à votre espace sécurisé</legend>
				<input type="email" name="Usermail" placeholder="E-mail" value="<?php echo $Usermail;?>" required/><br />
					<span class="error"><?php echo $mailErr;?></span>
				<input type="password" name="Userpassword" placeholder="Password" value="<?php echo $Userpassword;?>" required/><br />
			</fieldset>
			
			<span class="error"><?php echo $signErr;?></span>
			
			<div class="sign">
				Quoi? Pas de compte? <a href="<?php require "path.php";?>register.php">inscrivez-vous</a> immédiatement pour 
				réserver un voyage et pour commenter.
			</div>
			<input type="submit" value="SIGN IN" id="submit">
		</form>

	</div>
</div>

</body>
</html>