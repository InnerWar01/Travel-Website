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
	<link rel="stylesheet" href="css\Sign_User.css">
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
$nameErr = $mailErr = $passErr = "";
$Username = $Usermail = $Userpassword = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {

	$valid = true;

	$Username = test_input($_POST["Username"]);
	if (!preg_match("/^[a-zA-Z]*$/", $Username)) {
		$nameErr = "Only letters and white space allowed";
		 $valid = false;
	}
	
	$Usermail = test_input($_POST["Usermail"]);
	if (!filter_var($Usermail, FILTER_VALIDATE_EMAIL)) {
		$mailErr = "Invalid email format";
		$valid = false;
	}

	$Userpassword = test_input($_POST["Userpassword"]);
	
	if($valid){
		$sql = "INSERT INTO `Users` (`Username`, `Usermail`, `Userpassword`) 
					VALUES ('{$_POST['Username']}', '{$_POST['Usermail']}',  '{$_POST['Userpassword']}')";
			
			if ($conn->query($sql) === TRUE) {
				$last_id = $conn->insert_id;
				$_SESSION["id"] = $last_id;
				//echo "New record created successfully. Last inserted id is: " . $last_id;
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
			$conn->close();
			
		$_SESSION["Username"] = $_POST["Username"];
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
				<input type="text" name="Username" placeholder="Username" value="<?php echo $Username;?>" required/><br />
					<span class="error"><?php echo $nameErr;?></span>
				<input type="email" name="Usermail" placeholder="Usermail" value="<?php echo $Usermail;?>" required/><br />
					<span class="error"><?php echo $mailErr;?></span>
				<input type="password" name="Userpassword" placeholder="Userpassword" value="<?php echo $Userpassword;?>" required/><br />
			</fieldset>
			<div class="sign">
				Vous avez un compte déjà? Eh bien qu'est-ce que vous attendez, <a href="sign_in.php">connectez-vous</a> et explorer vos projets de voyage.
			</div>
			<input type="submit" value="SIGN UP" id="submit">
		</form>

	</div>
</div>

</body>
</html>