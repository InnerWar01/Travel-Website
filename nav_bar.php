<ul class="topnav">

	<li class="logo_li">	
		<a class="navbtn" href="Home_Page.php" class="logo_li">
			<span class='span-logo'>
				<img src= "<?php require "path.php";?>img\Nav_Bar\logo.png">
			</span>
		</a>
	</li>
	
	<li>
		<div class="dropdown">
			<a class="dropbtn" href="<?php require "path.php";?>accueils\accueil_villes.php">Destinations</a>
			<div class="dropdown-content">
				<a href="<?php require "path.php";?>destinations\Adelaide.php">Adelaide</a>
				<a href="<?php require "path.php";?>destinations\Alice_Springs.php">Alice Springs</a>
				<a href="<?php require "path.php";?>destinations\Brisbane.php">Brisbane</a>
				<a href="<?php require "path.php";?>destinations\Cairns.php">Cairns</a>
				<a href="<?php require "path.php";?>destinations\Darwin.php">Darwin</a>
				<a href="<?php require "path.php";?>destinations\Hobart.php">Hobart</a>
				<a href="<?php require "path.php";?>destinations\Melbourne.php">Melbourne</a>
				<a href="<?php require "path.php";?>destinations\Perth.php">Perth</a>
				<a href="<?php require "path.php";?>destinations\Sydney.php">Sydney</a>
				<a href="<?php require "path.php";?>destinations\The_Gold_Coast.php">The Gold Coast</a>
			</div>	
		</div>
	</li>
	
	<li>
		<div class="dropdown">
			<a class="dropbtn" href="<?php require "path.php";?>accueils\accueil_circuit.php">Circuits</a>
			<div class="dropdown-content">
				<a href="<?php require "path.php";?>circuits\circuit1.php">Trois semaine à partir de Melbourne, Victoria</a>
				<a href="<?php require "path.php";?>circuits\circuit2.php">Train de légende avec l'Indian Pacific</a>
			</div>
		</div>
	</li>
	
	<li class="topnav-search">
		<form action="" method="Post">
			<input autocomplete="off" id="search-box" name="search" placeholder="Chercher" type="text">
			<?php
				$search = "";
			
				if($_SERVER["REQUEST_METHOD"] == "POST") {

					$search = test_input($_POST["search"]);
			
					if(isset($search) && !empty($search)) 
					{	
						header('Location:http://localhost/Travel_Australia/test.php');
					}
				}

				function test_input($data) {
					$data = trim($data);
					$data = stripslashes($data);
					$data = htmlspecialchars($data);
					return $data;
				}
			?>
		</form>
	</li>
   
	<li class="topnav-right">
		<a class="navbtn" href="
			<?php 
				require "path.php";
				if(isset($_SESSION['Username'])) 
							echo "user_account.php"; 
						else echo "sign_in.php";?>"> <?php if(isset($_SESSION['Username'])) 
																	echo $_SESSION['Username']; 
																else echo "Mon compte";?></a>
	</li>	
</ul>