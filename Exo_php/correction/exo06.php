<h1>Exercice 6</h1>
<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)</p>

<h2>Résultat</h2>

<?php

$prixUnitaire = 9.99;
$qte = 5;
$tauxTVA = 0.2;

// Factorisation du calcul du prix ttc, d'autres méthodes étaient acceptées
$prixTTC = $prixUnitaire * $qte * (1 + $tauxTVA);

echo "PU : $prixUnitaire €<br>
     Qté : $qte articles<br>
     Taux TVA : " . $tauxTVA * 100 ." %<br>
     Le montant de la facture à régler est de $prixTTC €";

?>