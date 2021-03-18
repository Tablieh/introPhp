<h1>EXERCICE 7</h1>

<a href=".">Retour</a>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser dans le tableau associatif si la case est cochée ou non.</p>

<h2>Résultat</h2>

<?php

$elements = [
    "Choix 1" => "checked",
    "Choix 2" => "checked",
    "Choix 3" => ""
];

echo genererCheckBox($elements);

function genererCheckBox(array $elements = ["N/A"]){
    $result = "<form action='#' method='POST'>";
    foreach ($elements as $label => $checked) {
        $result .= "<input type='checkbox' $checked> $label<br/>";
    }
    $result .= "</form>";
    return $result;
}
