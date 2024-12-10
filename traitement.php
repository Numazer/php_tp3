<?php
session_start();

$nom = $_POST["nom"];
$genre = $_POST["genre"];
$email = $_POST["email"];
$sujet = $_POST["sujet"];
$message = $_POST["message"];

$_SESSION["nom"] = $nom;   
$_SESSION["genre"] = $genre;
$_SESSION["email"] = $email;
$_SESSION["sujet"] = $sujet;
$_SESSION["message"] = $message;

header("location: infos.php");



// $formulaire = $_POST;
// $newForm = serialize($formulaire);

// setcookie('formulaire', $newForm, time() + (85000/15),'/');
// header("location: user.php");