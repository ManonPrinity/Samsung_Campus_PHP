<?php
require_once('connexion.php');
$mail = $_POST['mail'];
$password = $_POST['password'];

$connectQuery = $bdd->prepare("SELECT * FROM users WHERE mail = :mail");
$connectQuery->bindParam(':mail', $mail);
$connectQuery->execute();
var_dump($connectQuery);

$currentUser = $connectQuery->fetch();
if(md5($password) == $currentUser['password']){
	$_SESSION['logged'] = true;
	$_SESSION['id_user'] = $currentUser['id_user'];
	$_SESSION['pseudo'] = $currentUser['pseudo'];
	$_SESSION['mail'] = $_POST['mail'];
	echo "Vous êtes connecté !";
	var_dump($currentUser);
}
else
{
	header('Location: ../template/error.phtml');
}
?>