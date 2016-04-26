<?php 
require_once('../fonctions/connexion.php');
if(isset($_POST['recherche']))
{
	$recherche = $_POST['recherche'];
	$result_recherche = $bdd->prepare("SELECT pseudo, name, firstname, mail, sexe FROM users WHERE pseudo = :recherche || name = :recherche || sexe = :recherche");
	$result_recherche->bindParam(':recherche', $recherche);
	$result_recherche->execute();
	$result_ok = $result_recherche->fetchAll(PDO::FETCH_ASSOC);
} 
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Landing Framework - Test">
		<title>My Meetic</title>
		<link rel="stylesheet" href="../css/welcome.css"/>
	</head>
	<body>
		<section class="bloc title_text">
			<div class="bloc_content">
				<h2>Welcome to my_meetic</h2>
				<p>
					Lorem ipsum dolor sit ameta
				</p>
				<form method="post" action="../fonctions/deconnexion.php" id="inscription">
					<input id="deco" type="submit" value="Deconnexion" name="deconnexion" class="deco" />
				</form>
		</section>
		<div id="left_aside">
			<h2>Recherche</h2>
			<p>de profil par:</p>
			<form method="post" action="" id="inscription">
				<input type="text" class="formulaire" name="recherche" id="pseudo" size="30" placeholder="---- pseudo ----" required></input>
<!-- 				<input id="valid" type="submit" value="Valider" name="recherche" class="valider" /> -->
			</form>
			<div id="result">
				<?php 
				if(!empty($_POST['recherche']))
				{
					foreach ($result_ok as $pseudo) 
					{
						echo $pseudo['pseudo'];
					}
				}
				if(!empty($_POST['recherche']))
				{
					foreach ($result_ok as $name) 
					{
						echo $name['name'];
					}
				}
				if(!empty($_POST['recherche']))
				{
					foreach ($result_ok as $firstname) 
					{
						echo $firstname['firstname'];
					}
				}
				if(!empty($_POST['recherche']))
				{
					foreach ($result_ok as $mail) 
					{
						echo $mail['mail'];
					}
				}
				if(!empty($_POST['recherche']))
				{
					foreach ($result_ok as $sexe) 
					{
						echo $sexe['sexe'];
					}
				}
				?>
			</div>
		</div>
	</body>
</html>
