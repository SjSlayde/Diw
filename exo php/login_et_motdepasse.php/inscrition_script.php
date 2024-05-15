<?php 
session_start();

$user["nom"] = $_REQUEST["nom"];
$user["prenom"] = $_REQUEST["prenom"];
$user["email"] = $_REQUEST["email"];
$user["motdepasse"] = password_hash($_REQUEST["motdepasse"], PASSWORD_DEFAULT);
$_SESSION["user"] = $user;

header("Location:login_form.php");

?>