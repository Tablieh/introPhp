<h1>EXERCICE 9</h1>

<a href=".">Retour</a>

<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de valeurs en paramètre ("Masculin","Féminin","Autre").</p>

<h2>Résultat</h2>

<?php

$elements = [
    "Masculin",
    "Féminin",
    "Autre"
];

echo afficherRadio($elements);

function afficherRadio(array $elements = ["N/A"]){
    $result = "<form action='#' method='POST'>";
    foreach ($elements as $radio) {
        $result .= "<input type='radio' value='$radio' name='sexe' id='sexe'>
        <label for='sexe'>$radio</label><br/>";
    }
    $result .= "</form>";
    return $result;
}