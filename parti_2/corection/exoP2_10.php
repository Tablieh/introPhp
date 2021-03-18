<h1>EXERCICE 10</h1>

<a href=".">Retour</a>

<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse e-mail, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : « Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».<br>
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement de validation (submit).</p>

<h2>Résultat</h2>

<?php

$coordonnees = ["Nom", "Prenom", "Email"];
$civilites = ["Masculin", "Féminin", "Autre"];
$formations = ["Développeur Logiciel", "Designer web", "Intégrateur", "Chef de projet"];

echo formulaire($coordonnees, $civilites, $formations);

function formulaire(array $coordonnees, array $civilites, array $formations){
    $result = "<form action='#' method='POST'>";
    $result .= renderInput($coordonnees);
    $result .= renderRadio($civilites);
    $result .= renderChoices($formations);
    $result .= "<br/><input type='submit' value='Envoyer'>";
    $result .= "</form>";
    return $result;
}

function renderInput(array $array){
    $result = "";
    foreach ($array as $input) {
        $result .= "<label for='".mb_strtolower($input)."'>$input</label><br/>
        <input type='text' name='".mb_strtolower($input)."' id='".mb_strtolower($input)."'><br/>";
    }
    return $result;
}

function renderRadio(array $array){
    $result = "";
    foreach ($array as $radio) {
        $result .= "<input type='radio' value='$radio' name='sexe' id='sexe'>
        <label for='sexe'>$radio</label><br/>";
    }
    return $result;
}

function renderChoices(array $array){
    $result = "<select name='civilite'>";
        foreach ($array as $option) {
            $result .= "<option value='$option'>$option</option>";
        }
    $result .= "</select>";
    return $result;
}