<h1>EXERCICE 6</h1>

<a href=".">Retour</a>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.</p>

<h2>Résultat</h2>

<?php

$elements = ["Monsieur","Madame","Mademoiselle"];
echo alimenterListeDeroulante($elements);

function alimenterListeDeroulante(array $elements = ["N/A"]){
    $result = "<form action='#' method='POST'>
        <select name='civilite'>";
        foreach ($elements as $option) {
            $result .= "<option value='$option'>$option</option>";
        }
    $result .= "</select></form>";
    return $result;
}