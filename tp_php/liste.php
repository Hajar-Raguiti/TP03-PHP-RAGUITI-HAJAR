<?php
/*
    -Auteur : Hajar Raguiti 
    -Objectif : lire et écrire des fichiers texte et CSV;
    -Dates : 23-10-2026

 */
echo"<h1>Partie 5 : Fichiers CSV et JSON  </h1>";

###Exercice 5.2 :
echo"<h2>Exercice 5.2 : Lecture d'un fichier CSV </h2>" ;
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
$somme_moyennes = 0;
$nombre_eleves = 0;
echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr>
        <th>Nom</th>
        <th>Info</th>
        <th>Math</th>
        <th>Moyenne</th>
        <th>Mention</th>
    </tr>";
while ($ligne = fgetcsv($fichier, 1000, ";")) {
    if (count($ligne)<3 ) {
        continue;
    }
    $nom = htmlspecialchars($ligne[0]);
    $note_info =(float) $ligne[1] ;
    $note_math = (float)$ligne[2] ;
    $moyenne = ($note_info + $note_math) / 2 ;
    $mention = mention($moyenne) ;

    $somme_moyennes += $moyenne;
    $nombre_eleves++;

//4-affichage tableau HTML
    echo "<tr>";
        echo "<td>$nom</td>";
        echo "<td>$note_info</td>";
        echo "<td>$note_math</td>";
        echo "<td>".$moyenne."</td>";
        echo "<td>$mention</td>";
        echo "</tr>";

}
echo "</table>";
fclose($fichier);
//5-
$moyenne_generale = $somme_moyennes / $nombre_eleves;
echo "<p><strong>Moyenne générale de la classe : " . number_format($moyenne_generale, 2) . " / 20</strong></p>";

?>

