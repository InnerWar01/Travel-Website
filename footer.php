<footer id="site-footer">
	<div id="wrap">
		<div class="footer-left">
			<div class="footer-left-item voyage">
				<h4>Voyage</h4>
				<ul>
					<li>
						<a href="<?php 
									require "path.php";
									if(isset($_SESSION['Username'])) 
												echo "form.php"; 
											else echo "sign_in.php";?>">Planifiez votre voyage</a>
					<li>
					<li>
						<a href="<?php require "path.php";?>accueils\accueil_villes.php">Destinations</a>
					</li>
					<li>
						<a href="<?php require "path.php";?>accueils\accueil_circuit.php">Circuits</a>
					</li>
					<li>
						<a href="<?php require "path.php";?>Home_page.php">Accueil</a>
					</li>
				</ul>
			</div>
			
			<div class="footer-left-item contact">
				<h4>Nous contacter</h4>
					<div class="address">
						90, Rue de Tolbiac Paris, France
					</div>

					<div class="telephone">
						+33 1 44 07 89 84
					</div>

					<div class="email">
						australia.travel@gmail.com
					</div>
			</div>
		</div>

		<div class="footer-right">
			<h4>A propos de nous</h4>
				<div class="description">
					Vous aimez voyager, avoir des belles aventures, 
					découvrir des nouvelles cultures et avoir des souvenirs inoubliables. 
					Si vous êtes un futur aventurier et vous avez besoin des conseils pour un 
					voyage en Australie vous êtes sur le bon site. Bonne navigation !!!
				</div>
		</div>
		
		<div class="creds">
			<p>Copyright © 2016 · W.A.P Travel Site Australia</p>
		</div>
	</div>
</footer>