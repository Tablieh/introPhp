<h1> EXERCICE 6 </h1>
<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex: 20 % -> 0.2) <br>
Affichage:Prix unitaire de l’article: 9.99 €Quantité: 5Taux de TVA: 0.2Le montant de la facture à régler est de : 59.94 €
</p>
<h2>Résultat</h2>
<?php
    
    function convert($uitaire,$quantite,$tva) {
    $facture = ($uitaire*$quantite)+($uitaire*$quantite)*$tva;
    return $facture;
    }
    $uitaire = 9.99;
    $quantite = 5;
    $tva = 0.2;
    $result=convert($uitaire,$quantite,$tva);
    echo "Prix unitaire de l’article: ".$uitaire." € Quantité: ".$quantite." Taux de TVA: ".$tva." Le montant de la facture à régler est de : ".$result."€";
?>