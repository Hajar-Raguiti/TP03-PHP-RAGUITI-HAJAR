<?php
/*
    -Auteur : Hajar Raguiti 
    -Objectif :  manipuler les tableaux indexés et associatifs.
    -Date : 18-10-2026
 */
echo"<h1>Partie 3 : Tableaux </h1>";

###Exercice 3.1 :
echo"<h2>Exercice 3.1 : Création</h2>" ;
$notes = [
    "Mohamed" => 16, "Ahmed" => 14, "Hind" => 13, "Aicha" => 15,
    "Samir" => 13, "Zakaria" => 13, "Rafik" => 10, "Ilham" => 9,
    "Hamza" => 7, "Sami" => 7, "Noura" => 14
];
$modules = ["Programation web 2","Structure de donnée en C","Systéme d'exploitaion"];

//Affichage avec 'foreach'
foreach ($modules as $key => $value) {
    echo "Le module ".$key." : ".$value." . <br>";
}
echo"<br>";

//Affichage Avec l'indice 
echo "Le module 0 : ".$modules[0]." . <br>";
echo "Le module 1 : ".$modules[1]." . <br>";
echo "Le module 2 : ".$modules[2]." . <br>";
echo"<br>";


###Exercice 3.2 :
echo"<h2>Exercice 3.2 : Affichage HTML</h2>" ;
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
?>
<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Note</th>
            <th>Mention</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($notes as $nom => $note): ?>
            <tr style="<?php echo ($note < SEUIL) ? 'color: red;' : ''; ?>">
                <td><?php echo $nom; ?></td>
                <td><?php echo $note; ?></td>
                <td><?php echo mention($note); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php

###Exercice 3.3 :
echo"<h2>Exercice 3.3 : Statistiques</h2>" ;
$somme = 0;
$n_etudiants = 0;
$max_note = null;
$min_note = null;
//1-
foreach ($notes as $nom => $note) {
    $somme += $note;
    $n_etudiants++;
    if ($note > $max_note) {
        $max_note = $note;
    }
    if ($note < $min_note) {
        $min_note = $note;
    }
}
$moyenne = $somme / $n_etudiants;
//2-
$sum_v = array_sum($notes);
$c_v= count($notes);
$m_v = $sum_v / $c_v;
$max_v= max($notes);
$min_v= min($notes);
//3-
$effectifs=[];
foreach ($notes as $nom => $note) {
    $mention = mention($note);
    if (isset($effectifs[$mention])) {
        $effectifs[$mention]++;
    }
    else {
        $effectifs[$mention] = 1;
    }
}
foreach ($effectifs as $mention => $nombre) {
    echo $mention . " : " . $nombre . " étudiant(s)<br>";
}

###Exercice 3.4 :
echo"<h2>Exercice 3.4 : Tri</h2>" ;
//fonction d'affichage :
function afficher($tab) {
    foreach ($tab as $nom => $note) {
        echo "".$nom." : ".$note." .<br>";
    }
}
echo"<h3>Tableau trie par noms croissants :</h3>";
$notes1 = $notes;
ksort($notes1);
afficher($notes1);

echo"<h3>Tableau trie par notes décroissantes :</h3>";
$notes2 = $notes;
arsort($notes2);
afficher($notes2);

echo "<h3>Tableau trie par noms décroissants :</h3>";
$notes3 = $notes;
krsort($notes3);
afficher($notes3);

echo "<h3>Tableau trie par notes croissants :</h3>";
$notes4 = $notes;
asort($notes4);
afficher($notes4);

//Question : quelle fonction de tri utiliser sur un tableau indexé comme `$modules` ?

//Réponse : pour un tableau indexé on utilise 'sort()','rsort()' .
###Exercice 3.5 :
echo"<h2>Exercice 3.5 : Opérateurs de tableaux</h2>" ;
$a = ["x" => 1, "y" => 2];
$b = ["y" => 2, "x" => 1];

var_dump($a + $b); //
echo"<br>";
var_dump($a == $b); //true
echo"<br>";
var_dump($a === $b);//false

?>