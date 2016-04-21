<?php

require_once 'connexion.php';
require_once 'config.php';

$pseudo = $_POST['pseudo'];
$name = $_POST['name'];
$firstname = $_POST['firstname'];
$mail = $_POST['mail'];
$password = md5($_POST['password']);
$password_confirm = md5($_POST['password_confirm']);
$sexe = $_POST['sexe'];
$message = "Welcome !";


if(!empty($pseudo) && !empty($name) && !empty($firstname) && !empty($mail) && !empty($password) && !empty($password_confirm)) {

    $checkRequest = $bdd->prepare("SELECT mail, pseudo FROM users WHERE mail = :mail OR pseudo = :pseudo");
    $checkRequest->bindParam(':mail', $mail, PDO::PARAM_STR);
    $checkRequest->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
    $checkRequest->execute();
    $valid = $checkRequest->fetchAll();

    if(!empty($valid)) 
    {

        echo "mail " . $mail . " ou Pseudo " . $pseudo . " déjà utilisé !\n";
        header('Location: '._BASE_URI_);
    } 
    elseif($password_confirm === $password) 
    {
         $newAccount = $bdd->prepare("INSERT INTO users(pseudo, name, firstname, mail, password, password_confirm, sexe) VALUES(:pseudo, :name,
    :firstname, :mail, :password, :password_confirm, :sexe)");
        $newAccount->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
        $newAccount->bindParam(':name', $name, PDO::PARAM_STR);
        $newAccount->bindParam(':firstname', $firstname, PDO::PARAM_STR);
        $newAccount->bindParam(':mail', $mail, PDO::PARAM_STR);
        $newAccount->bindParam(':password', $password, PDO::PARAM_STR);
        $newAccount->bindParam(':password_confirm', $password_confirm, PDO::PARAM_STR);
        $newAccount->bindParam(':sexe', $sexe, PDO::PARAM_INT);
        $newAccount->execute();
        header('Location: '._BASE_URI_);
    } 
    else 
    {
        echo "Les mots de passe ne correspondent pas";
    }
}
else {
    echo "Terminer de completer tout les champs !";
}

?>