<?php

session_start();

echo "Votre nom : " . $_SESSION["nom"]. "<br>";
echo "Votre genre : ".$_SESSION["genre"]. "<br>";
echo "Votre adresse mail : ".$_SESSION["email"]. "<br>";
echo "Le sujet : ".$_SESSION["sujet"]. "<br>";
echo "Le message : ".$_SESSION["message"]. "<br>";

// setcookie('nom', $newPrefs, time() + (85000/15),'/');

// if(isset($_COOKIE['formulaire'])){
//     $formulaire = unserialize($_COOKIE['formulaire']);
//     echo "<p><span>Nom :</span>" . htmlspecialchars($formulaire['nom']) "</p>";
//     echo "<a href = edit.php> editer</a>";
//     echo "<a href = logout.php> quitter</a>";
// setcookie('nom', $newPrefs, time() + (85000/15),'/');

