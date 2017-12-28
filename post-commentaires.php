<?php
	session_start([
    'cookie_lifetime' => 86400,
    'read_and_close'  => true,]);
?>

<?php

// Connexion à la base de données
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

// Insertion du message à l'aide d'une requête préparée

$sql = "SELECT ID_User 
		FROM users
		WHERE Username = '{$_SESSION['Username']}'";
		
		$result = $conn->query($sql);

		if ($result->num_rows == 1) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
					$id_user = $row['ID_User'];
			}
		} else {
				echo "Erreur!!!!";
		}
$sql = "INSERT INTO `Commentaires` (ID_User, ID_Billet, Commentaire, Date_commentaire)
				VALUES ('{$id_user}', '{$_GET['billet']}', '{$_POST['commentaire']}', NOW())";
			
			if ($conn->query($sql) === TRUE) {
				$last_id = $conn->insert_id;
				//$_SESSION["ID_Commentaire"] = $last_id;
				//echo "New record created successfully. Last inserted id is: " . $last_id;
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
			$conn->close();

// Redirection du visiteur vers la page du commentaires
header('Location: commentaires.php?billet=' . $_GET['billet']);
?>