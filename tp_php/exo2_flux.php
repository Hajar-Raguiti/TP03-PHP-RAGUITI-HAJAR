<?php
/*
    -Auteur : Hajar Raguiti 
    -Objectif :  utiliser les structures de contrôle 
    -Date : 17-10-2026
 */

echo"<h1>Partie 2 : Structures de contrôle et boucles</h1>";

###Exercice 2.1 :
echo"<h2>Exercice 2.1 : `if / elseif / else</h2>`" ;
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

$maNote = 15 ;
$mention = mention($maNote);
echo "Votre mention : ".$mention ;
echo "<br><br>";

###Exercice 2.2 : 
echo"<h2>Exercice 2.2 : `switch`</h2>" ;
$moisCourant = date("m");
switch ($moisCourant) {
    case '1':
        echo "Janvier";
        break;
    case '2':
        echo "Février";
        break;
    case '3':
        echo "Mars";
        break;
    case '4':
        echo "Avril";
        break;
    case '5':
        echo "Mai";
        break;
    case '6':
        echo "Juin";
        break;
    case '7':
        echo "Juillet";
        break;
    case '8':
        echo "Août";
        break;
    case '9':
        echo "Septembre";
        break;
    case '10':
        echo "Octobre";
        break;
    case '11':
        echo "Novembre";
        break;
    case '12':
        echo "Décembre";
        break;
    
    default:
        echo"Erreur  : Pas de mois equivaut au valeur saisi . ";
        break;
    }
// 3- si on oublie un `break` dans un `case; le swirch contunu d'executer les autres cas`
echo"<br><br>";

###Exercice 2.3 :
echo"<h2>Exercice 2.3 : Boucles</h2>" ;
//1- triangle 
$nligne = 6;

for ($i=1; $i <= $nligne ; $i++) { 
    for ($j=1; $j <= $i ; $j++) { 
        echo "*";
    }
    echo"<br>\n";
} 
echo"<br>" ; 

//2- 
$a=0;
while ($a <= 20) {
    if ($a == 10 ) {
        echo"<strong>".$a."</strong>";
        echo "<br>";
    }
    else {
        echo $a ;
        echo "<br>";
        
    }
    $a+=2 ;
    
}
echo "<br>";
//3-
for ($i=0; $i <= 10 ; $i++) { 
    if ($i%2 ==0 ) {
        echo$i ; 
        echo"<br>" ;
    }
}
echo"<br>";

//4-
$k=1 ;
while (true) {
    switch ($k) {
        case 5 :
            echo"At 5 <br>";

            break;
        case 10 :
            echo"At 10; quitting <br>";

            break 2;
        
        default:
            echo $k."<br>" ;
            break;
    }
    $k++;
}
echo"<br>";
//5-
do {
    if ($a == 10 ) {
        echo"<strong>".$a."</strong>";
        echo "<br>";
    }
    else {
        echo $a ;
        echo "<br>";
        
    }
    $a+=2 ;
} while ($a <= 20);
/*
While : varifie la condition avant l'execution . 
do While : execute l'instruction , et aprés verife la condition 
*/
?>
