<h1>Exercice 5</h1>
<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros. <br>
Attention, la valeur générée devra être arrondie à 2 décimales.</p>

<h2>Résultat</h2>

<?php

$valeurFrancs = 1000000;
// $valeurEuros = round($valeurFrancs / 6.55957, 2);
$valeurEuros = number_format($valeurFrancs / 6.55957, 2, ",", " ");
// number_format permet de paramétrer plus de choses à l'affichage : séparateur de milliers ainsi que le symbole de la décimale (round() reste correct cependant)

echo "<h3>Avec number_format()</h3>";
echo "Montant en francs : ". number_format($valeurFrancs, 2, ",", " ") ." francs<br> " . number_format($valeurFrancs, 2, ",", " ") ." francs = $valeurEuros €<br/>";

//ou
echo "<h3>Avec round()</h3>";
echo "Montant en francs : $valeurFrancs francs<br>$valeurFrancs francs = ". round($valeurFrancs / 6.55957, 2). " €";

?>