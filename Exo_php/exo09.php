<h1> EXERCICE 9 </h1>
<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, «non imposable»).<br>
    Affichage: Age: 32 Sexe: F La personne est imposable
</p>
<h2>Résultat</h2>
<?php
    function imposable($age,$sexe) {
        $imposable = ($age >= 18 && $sexe == "F") || ($age > 20 && $sexe == "H");

        if($imposable == true){
            echo "Age: "." ".$age." <br> "." Sexe: "."  ".$sexe." <br> "." La personne "."est imposable"."<br>";
        }
        else{
            echo "Age: "."  ".$age." <br> "." Sexe: "."  ".$sexe." <br> "." La personne "."est non_imposable"."<br>";
        }
        }
     imposable($age=15,$sexe="H");
?>