<?php
require_once('connexion.php');


$mail = $_POST['mail'];
$password = $_POST['password'];

$connectQuery = $bdd->prepare("SELECT * FROM users WHERE mail = :mail ");
$connectQuery->bindParam(':mail', $mail);
// $connectQuery->bindParam(':password', md5($password));
$connectQuery->execute();

$currentUser = $connectQuery->fetch();
if( md5($password) == $currentUser['password'])
{
	$_SESSION['Connecte'] = true;
	$_SESSION['id_user'] = $currentUser['id_user'];
	$_SESSION['pseudo'] = $currentUser['pseudo'];
	$_SESSION['mail'] = $_POST['mail'];
	header('Location: ../template/welcome.phtml');
}
else
{
	header('Location: ../template/error.phtml');
}

?>