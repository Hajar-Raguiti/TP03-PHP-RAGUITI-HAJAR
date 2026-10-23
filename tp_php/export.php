<?php
/*
    -Auteur : Hajar Raguiti 
    -Objectif : sérialiser des données (json_encode, json_decode, serialize) ; 
    -Dates : 23-10-2026

 */

##construire le mem tableau 
//1-test existence 
$fich_path = 'data/notes.csv';
if (!file_exists($fich_path)) {
    echo"Erreur : Le fichier $fich_path n'existe pas.";
    exit();
}

//2-gerer ouverture

$fichier = fopen($fich_path, "r");
if ($fichier === false) {
    echo "Erreur : Impossible d'ouvrir le fichier.";
    exit();
}
require 'config.php';
function mention($note){
    if ($note >= SEUIL && $note < 12) {
        return "Passable";
    }
    elseif ($note<14) {
        return "Assez bien";
    }
    elseif ($note<16) {
        return "Bien";
    }
    elseif ($note<16) {
        return "Bien";
    }
    elseif ($note<=20) {
        return "Très bien";
    }
    else {
        return "Ajourné";
    }
}
//3-Lire ligne par ligne 
while (!feof($fichier)) {
    $ligne= fgets($fichier);
    if (trim($ligne)==="") {
        continue;
    }

    $elements = explode(';', trim($ligne));

    if (count($elements) < 3) {
        continue;
    }

    $nom = htmlspecialchars($elements[0]);
    $note_info =(float) $elements[1] ;
    $note_math = (float)$elements[2] ;
    $moyenne = ($note_info + $note_math) / 2 ;
    $mention = mention($moyenne) ;

    $resultats_classe[] = [
        "nom" => $nom,
        "notes" => [
            "info" => $note_info,
            "math" => $note_math
        ],
        "moyenne" => round($moyenne, 2),
        "mention" => $mention
    ];
}
fclose($fichier);
//=============================================

echo"<h1>Partie 5 : Fichiers CSV et JSON  </h1>";

###Exercice 5.4 :
echo"<h2>Exercice 5.4 : Sérialisation </h2>" ;

##2-écrive TAble dans data/notes.json avec json_encode() et file_put_contents() 
$json_data = json_encode($resultats_classe);
file_put_contents('data/notes.json', $json_data);
echo "Données exportées avec succès dans notes.json";
##3-avec file_get_contents() puis json_decode($json, true) 
$contenu_json = file_get_contents('data/notes.json');
$tableau_decode = json_decode($contenu_json, true);
echo "<h3>3. Contenu relis et décodé (print_r) :</h3>";
echo "<pre>";
print_r($tableau_decode);
echo "</pre>";
##4-
$donnees_serialize = serialize($resultats_classe);
$donnees_json = json_encode($resultats_classe);
echo "<p><strong>Résultat avec json_encode() :</strong><br>" . htmlspecialchars($donnees_json) . "</p>";
echo "<p><strong>Résultat avec serialize() :</strong><br>" . htmlspecialchars($donnees_serialize) . "</p>";
/*
Question : lequel de ces formats est directement exploitable par une application JavaScript ? 
Rep : C'est le format JSON (json_encode()) qui est directement exploitable par JavaScript.
*/

?>