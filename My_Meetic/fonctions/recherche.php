<?php
require_once('connexion.php');
$recherche = $_POST['recherche'];

$result_recherche = $bdd->prepare("SELECT pseudo, name, firstname FROM users WHERE pseudo = :recherche");
$result_recherche->bindParam(':recherche', $recherche);
$result_recherche->execute();
$result_ok = $result_recherche->fetchAll();
if($result_ok)
{
	foreach ($result_ok as $pseudo) {
		foreach ($pseudo as $sort) {
			
		echo $sort;
		}
	}
	var_dump($result_ok);
}
?>