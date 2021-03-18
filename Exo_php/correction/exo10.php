<h1>Exercice 10</h1>
<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, pièces de 2 € et 1 €.</p>

<h2>Résultat</h2>

<?php

$aPayer = 152;
$verse = 200;
$reste = $verse - $aPayer;

echo "A payer : $aPayer €<br/>";
echo "Somme versée : $verse €<br/>";
echo "Reste : $reste €<br/>";

// ***** Solution avec floor *****
echo "<h2>Solution floor</h2>";
$nb10 = floor($reste / 10); // 4
$reste = $reste - 10 * $nb10; // 48 - 4 * 10 = 8
$nb5 = floor($reste / 5);
$reste = $reste - 5 * $nb5;
$nb2 = floor($reste / 2);
$reste = $reste - 2 * $nb2;

echo "Billets de 10 : $nb10<br/>";
echo "Billets de 5 : $nb5<br/>";
echo "Pièces de 2 : $nb2<br/>";
echo "Pièces de 1 : $reste<br/>";

// ***** Solution avec intdiv *****
echo "<h2>Solution intdiv</h2>";
$resteBis = $verse - $aPayer;

$nb10 = intdiv($resteBis, 10);
$resteBis = $resteBis - 10 * $nb10;
$nb5 = intdiv($resteBis, 5);
$resteBis = $resteBis - 5 * $nb5;
$nb2 = intdiv($resteBis, 2);
$resteBis = $resteBis - 2 * $nb2;

echo "Billets de 10 : $nb10<br/>";
echo "Billets de 5 : $nb5<br/>";
echo "Pièces de 2 : $nb2<br/>";
echo "Pièces de 1 : $resteBis<br/>";

?>