<?php
/*
    -Auteur : Hajar Raguiti 
    -Objectif :  traiter un formulaire HTML avec $_GET, $_POST, $_REQUEST
    -Date : 21-10-2026
 */
?>

<?php
if(isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['sexe']) ){
    $nom = htmlspecialchars($_GET['nom']);
    $prenom = htmlspecialchars($_GET['prenom']);
    $sexe = ($_GET['sexe']);
    if ($sexe ==='M') {
        echo"Bonjour Monsieur $prenom $nom .";
    }
    else {
        echo"Bonjour Madame $prenom $nom .";
    }
}


?>