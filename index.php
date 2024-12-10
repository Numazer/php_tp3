<?php
echo '<a href="infos.php">affichage infos</a>'. '<br>';

session_start();   

?>

<form method = 'POST' name = 'formulaire' action = 'traitement.php'>
    <label for = 'nom'>Nom</label>
    <input type = 'text' name = 'nom'>

    <label for = 'genre'>Genre</label>
    <select name = 'genre'>
        <option value='homme'>homme</option>
        <option value='femme'>femme</option>
    </select>

    <label for = 'email'>Email</label>
    <input type = 'email' name = 'email'>

    <label for = 'sujet'>Sujet</label>
    <input type = 'text' name = 'sujet'>

    <label for = 'message'>Message</label>
    <textarea name = 'message'></textarea>

    <input type= 'submit' value='valider'>
</form>