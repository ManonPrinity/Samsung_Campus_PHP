<?php
session_start();
session_destroy();
$_SESSION['Connecte'] = false;
header('Location: ../index.php');
?>