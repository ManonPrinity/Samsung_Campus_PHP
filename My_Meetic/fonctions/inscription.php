<?php

    if(!empty($_POST['name']) && !empty($_POST['firstname']) && !empty($_POST['pseudo']) && !empty($_POST['password']) && !empty($_POST['mail']) && !empty($_POST['password']) && !empty($_POST['mail']))
    {
        try
        {
            $bdd = new PDO('mysql:host=localhost; dbname=my_meetic2', 'root', '');
    
            $req = $bdd->prepare('INSERT INTO users(pseudo, name, firstname, ville, departement, sexe, birthday, password, mail) VALUES(:pseudo, :password, :mail, :name, :firstname, :ville, :departement, :sexe, :birthday)');
            $req->execute(array(
            'pseudo' => $_POST['pseudo'],
            'name' => $_POST['name'],
            'firstname' => $_POST['firstname'],
            'ville' => $_POST['ville'],
            'departement' => $_POST['departement'],
            'sexe' => $_POST['sexe'],
            'password' => $_POST['password'],
            'mail' => $_POST['mail'],
            'birthday' => $_POST['birthday']
            ));
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    }
	
    if($_POST['pseudo'] == NULL)
    {
        echo 'Vous devez entrer un pseudo';
    }
    if($_POST['password'] == NULL)
    {
        echo 'Vous devez entrer un mot de passe';
    }
    if($_POST['mail'] == NULL)
    {
        echo 'Vous devez entrer une adresse email';
    }
     // header('Location: ../index.php');
    var_dump($_POST)
?>