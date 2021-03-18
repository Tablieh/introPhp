<h1>EXERCICE 5</h1>

<a href=".">Retour</a>

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en précisant le nom des champs associés.</p>

<h2>Résultat</h2>

<?php

$nomsInput = ["Nom", "Prénom", "CP", "Ville"];
echo afficherInput($nomsInput);

function afficherInput(array $nomsInput = ["N/A"]) {
    $result = "<form action='#' method='POST'>";
    foreach ($nomsInput as $input) {
        $result .= "<label for='".mb_strtolower($input)."'>$input</label><br/>
        <input type='text' name='".mb_strtolower($input)."' id='".mb_strtolower($input)."'><br/>";
    }
    $result .= "</form>";
    return $result;
}