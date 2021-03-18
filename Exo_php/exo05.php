<h1> EXERCICE 5 </h1>
<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros. Attention, la valeur générée devra être arrondie à 2 décimales. <br>
Affichage:Montant en francs: 100100 francs = 15.24 €
</p>
<h2>Résultat</h2>
<?php
    $France=100;
    $CONVERSION = 6.55957;

    $euros = $France/$CONVERSION;
    function toFixed($number, $decimals) {
        return number_format($number, $decimals, '.', "");
    }
    //round($euros, 2);

    echo"valeur en euro : ".toFixed($euros, 2)." euros";
    
?>