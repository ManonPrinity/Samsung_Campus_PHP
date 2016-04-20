<?php
	session_start();
	include 'config.php';

	try{
		$bdd = new PDO('mysql:host=localhost;dbname=my_meetic2', 'root', '');
	}
	catch(Exception $e){
		echo $e->getMessage();
	}

	include '../template/header.phtml';
	include '../template/form_login.phtml';
	include '../template/footer.phtml';
