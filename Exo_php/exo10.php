<h1> EXERCICE 10 </h1>
<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 1€.<br>
Affichage:Montant à payer : 152 €Montant versé : 200 €Reste à payer : 48 €***************************************************Rendue de monnaie : 4 billets de 10 € -1 billet de 5 € -1 pièce de 2 € -1 pièce de 1 €
<h2>Résultat</h2>
<?php
   function moyenne($dix,$cenq,$deux,$un){
    $montant_a_payer=152;
    $montant_a_verse=200;
    $rest_a_payer = $montant_a_verse - $montant_a_payer;

    $bill_10=0;
    $bill_5=0;
    $piecede_2=0;
    $piecede_1=0;

    while($rest_a_payer>=10){
        $rest_a_payer-=10;
        $bill_10++;
    }
    while($rest_a_payer>=5){
        $rest_a_payer-=5;
        $bill_5++;
    }
    while($rest_a_payer>=2){
        $rest_a_payer-=2;
        $piecede_2++;
    }
    while($rest_a_payer>=1){
        $rest_a_payer-=1;
        $piecede_1++;
    }
    
    echo $bill_10." "." billets de ".$dix." et ".$bill_5." billets de ".$cenq." et ".$piecede_2."  billets de  ".$deux." € "." et ".$piecede_1." billets de ".$un." € ";
}
moyenne(10,5,2,1)
?>