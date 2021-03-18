<h1>Exercice 4</h1>
<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<h2>Résultat</h2>

<?php

$phrase = "Engage le jeu que je le gagne";
$phraseLowRev = strtolower(strrev(str_replace(" ","",$phrase)));

/* 	
    FONCTIONS UTILISEES :
    - strtolower : convertir une chaîne de caractères en minuscules
	- str_replace : remplacer un mot par un autre dans une chaîne de caractères (ici pour supprimer l'espace)
	- strrev : inverse le sens d'une chaîne de caractères
*/

// if classique
if(strtolower(str_replace(" ","",$phrase)) == $phraseLowRev){
    echo "La phrase « $phrase » est palindrome<br/>";
}else{
    echo "La phrase « $phrase » est non palindrome<br/>";
}

// ternaire
echo "La phrase « $phrase » est ". (strtolower(str_replace(" ","",$phrase)) == $phraseLowRev ? "palindrome" : "non palindrome");