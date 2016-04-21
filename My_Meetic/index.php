<?php
	session_start();
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Landing Framework - Test">
		<title>My_Meetic</title>
		<link rel="stylesheet" href="css/index.css"/>
	</head>

	<body>
		<section class="bloc title_text">
			<div id="login">
				<form method="post" action="fonctions/login.php" id="inscription">
					<h4>Login</h4>
					<label for="mail">Email</label>
						<input type="email" class="formulaire" name="mail" id="mail" size="30" placeholder="---- mail ----" required></input>
					<label for="password">Password</label>
						<input type="password" class="formulaire" name="password" id="password" size="30" placeholder="---- password ----" required></input>
					<input id="valid" type="submit" value="Valider" name="Connexion" class="valider" />
					<a href="form_register.phtml">Pas encore inscrit ? Aller go !</a>
				</form>
			</div>
			<div class="bloc_content">
				<h2>My_Meetic</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam finibus nunc et leo sagittis, quis bibendum purus condimentum. 
				</p>
			</div>
			<div class="form_content">
			<div id="register">
				<form method="post" action="fonctions/inscription.php" id="inscription">
					<h3>Inscription</h3>
					<label for="name">Nom</label>
						<input type="text" class="formulaire" name="name" id="name" size="30" placeholder="---- nom ----" required/></input>
					<label for="firstname">Prenom</label>
						<input type="text" class="formulaire" name="firstname" id="firstname" size="30" placeholder="---- prenom ----" required></input>
					<label for="pseudo">Pseudo</label>
						<input type="text" class="formulaire" name="pseudo" id="pseudo" size="30" placeholder="---- pseudo ----" required></input>
					<label for="password">Password</label>
						<input type="password" class="formulaire" name="password" id="password" size="30" placeholder="---- password ----" required></input>
					<label for="password_confirm">Password</label>
						<input type="password" class="formulaire" name="password_confirm" id="password_confirm" size="30" placeholder="---- password confirm ----" required></input>
					<label for="departement">Region</label>
						<input type="text" class="formulaire" name="departement" id="departement" size="30" placeholder="---- departement ----" required></input>
					<label for="ville">Departement</label>
						<input type="text" class="formulaire" name="ville" id="ville" size="30" placeholder="---- ville ----" required></input>
					<label for="mail">Email</label>
						<input type="text" class="formulaire" name="mail" id="mail" size="30" placeholder="---- email ----" required></input>
					<label for="birthday">Birthday</label>
						<input id="datepicker" type="text" class="formulaire" name="birthday" id="birthday" size="30" placeholder="---- birthday ----" required></input>
					<div id="sex">
						<label for="sexe">Sexe</label>
							<input type="radio" class="formulaire" name="sexe" id="sexeH" size="30" placeholder="H" value="1">H</input>
							<input type="radio" class="formulaire" name="sexe" id="sexeF" size="30" placeholder="F" value="2">F</input>
					</div>
					<input id="valid" type="submit" value="Valider" name="inscription" class="valider" />
					<a href="connexion.php">Deja inscrit ? Connecte toi !</a>
				</form>
			</div>
			</div>
		</section>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
			<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<script type="text/javascript" src="script/datepicker.js"></script>
	</body>
</html>

