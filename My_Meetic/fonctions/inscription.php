<?php

require_once 'connexion.php';

$pseudo = $_POST['pseudo'];
$name = $_POST['name'];
$firstname = $_POST['firstname'];
$mail = $_POST['mail'];
$password = md5($_POST['password']);
$password_confirm = md5($_POST['password_confirm']);
$sexe = $_POST['sexe'];
$message = "Welcome !";


if(!empty($pseudo) && !empty($name) && !empty($firstname) && !empty($mail) && !empty($password) && !empty($password_confirm)) {

    $check_request = $bdd->prepare("SELECT mail, pseudo FROM users WHERE mail = :mail OR pseudo = :pseudo");
    $check_request->bindParam(':mail', $mail, PDO::PARAM_STR);
    $check_request->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
    $check_request->execute();
    $valid = $check_request->fetchAll();

    if(!empty($valid)) 
    {

        echo "mail " . $mail . " ou Pseudo " . $pseudo . " déjà utilisé !\n";
        header('Location: ../index.php');
    } 
    elseif($password_confirm === $password) 
    {
         $new_acountt = $bdd->prepare("INSERT INTO users(pseudo, name, firstname, mail, password, password_confirm, sexe) VALUES(:pseudo, :name,
    :firstname, :mail, :password, :password_confirm, :sexe)");
        $new_acountt->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
        $new_acountt->bindParam(':name', $name, PDO::PARAM_STR);
        $new_acountt->bindParam(':firstname', $firstname, PDO::PARAM_STR);
        $new_acountt->bindParam(':mail', $mail, PDO::PARAM_STR);
        $new_acountt->bindParam(':password', $password, PDO::PARAM_STR);
        $new_acountt->bindParam(':password_confirm', $password_confirm, PDO::PARAM_STR);
        $new_acountt->bindParam(':sexe', $sexe, PDO::PARAM_INT);
        $new_acountt->execute();
        header('Location: ../index.php');
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