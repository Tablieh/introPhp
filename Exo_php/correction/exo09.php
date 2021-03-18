<h1>Exercice 9</h1>
<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe. <br>
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).</p>

<h2>Résultat</h2>

<?php

$age = 32;
$sexe = "F";

// on considère ici les conditions comme étant des booléens
$C1 = $age > 20 && $sexe == "M";
$C2 = $sexe == "F" && ($age >= 18 && $age <= 35);

// on teste si au moins l'une des 2 conditions est remplie (simplification du if de ce fait)
if($C1 || $C2){
    echo "imposable<br/>";
}else{
    echo "non imposable<br/>";
}

// autre méthode avec une écriture ternaire (remplace le if traditionnel et permet de gérer le tout en 5 lignes !)
echo ($C1 || $C2 ? "La personne est imposable" : "La personne est non imposable");

?>