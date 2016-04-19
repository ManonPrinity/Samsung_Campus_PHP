<?php

require_once 'connexion.php';
require_once 'config.php';

$pseudo = $_POST['pseudo'];
$name = $_POST['name'];
$firstname = $_POST['firstname'];
$mail = $_POST['mail'];
$password = md5($_POST['password']);
$sujet = "Activation de votre compte";
$message = "Welcome";

if(!empty($pseudo) && !empty($name) && !empty($firstname) && !empty($mail) && !empty($password)) {

    $checkRequest = $bdd->prepare("SELECT mail, pseudo FROM users WHERE mail = :mail OR pseudo = :pseudo");
    $checkRequest->bindParam(':mail', $mail, PDO::PARAM_STR);
    $checkRequest->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
    $checkRequest->execute();
    $valid = $checkRequest->fetchAll();

    if(!empty($valid)) {

        echo "mail " . $mail . " ou Pseudo " . $pseudo . " déjà utilisé !\n";
        header('Location: '._BASE_URI_);
    } else {

        $newAccount = $bdd->prepare("INSERT INTO users(pseudo, name, firstname, mail, password) VALUES(:pseudo, :name, 

    :firstname, :mail, :password)");
        $newAccount->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
        $newAccount->bindParam(':name', $name, PDO::PARAM_STR);
        $newAccount->bindParam(':firstname', $firstname, PDO::PARAM_STR);
        $newAccount->bindParam(':mail', $mail, PDO::PARAM_STR);
        $newAccount->bindParam(':password', $password, PDO::PARAM_STR);
        $newAccount->execute();
        mail($mail, $sujet, $message);
        header('Location: '._BASE_URI_);
    }
} else {

        echo "Tout les champs ne sont pas completes !";
    }

?>