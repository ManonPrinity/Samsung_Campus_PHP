<?php
session_start();

try{
	$bdd = new PDO('mysql:host=localhost;dbname=my_meetic2', 'root', '');
}
catch(Exception $e){
	echo $e->getMessage();
}
?>

