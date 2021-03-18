<h1>Exercice 13</h1>
<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de coefficient). Elle devra être affichée avec 2 décimales.</p>

<h2>Résultat</h2>

<?php

$notes = [10, 12, 8, 19, 3, 16, 11, 13, 9];
$nbNotes = count($notes);
$moyenne = round(array_sum($notes) / $nbNotes , 2);

echo "Les notes obtenues sont : ". implode(", ", $notes);
echo "<br/>La moyenne est de $moyenne";