<?php
/*
    -Auteur : Hajar Raguiti 
    -Objectif :  traiter un formulaire HTML avec $_GET, $_POST, $_REQUEST
    -Date : 21-10-2026
 */
?>

<?php
include 'config.php';
if ( isset($_POST['nom'], $_POST['note_info'], $_POST['note_math']) &&
    !empty($_POST['nom']) && $_POST['note_info'] !== '' && $_POST['note_math'] !== '') {
    $nom = htmlspecialchars($_POST['nom']);
    $note_info = floatval($_POST['note_info']);
    $note_math = floatval($_POST['note_math']);

    if ($note_info >= NOTE_MIN && $note_info <= NOTE_MAX &&
        $note_math >= NOTE_MIN && $note_math <= NOTE_MAX) {
        
        $moyenne = ($note_info + $note_math) / 2;

        echo "<h2>Récapitulatif des notes</h2>";
        echo "Nom :$nom <br>";
        echo "Note Informatique :$note_info / 20 <br>";
        echo "Note Mathématiques : $note_math / 20<br>";
        echo "Moyenne : $moyenne / 20<br>";

    } else {
        echo "Erreur : Les notes doivent être comprises entre " . NOTE_MIN . " et " . NOTE_MAX . "<br>";
    }

} else {
    echo "<p style='color:red;'>Erreur : Veuillez remplir tous les champs du formulaire.</p>";
}

/*
3-
 ->Pourquoi préférer POST à GET pour un mot de passe ? 
rep : la methode POST envoie les donnée dans le corps de la requete HTTP;
alors le mot de passe n'apparait pas dans l'adresse url et l'historique .
->Que contient $_REQUEST ? 
$_REQUEST est une variable superglobale en PHP
qui contient les données combinées envoyees par $_GET, $_POST et $_COOKIE.
*/
?>