<h1> EXERCICE 8 </h1>
<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la forme:
    Affichage(pour la table de 8):Table de 8:1 x 8 = 82 x 8 = 163 x 8 = 24 ..
</p>
<h2>Résultat</h2>
<?php
function toFixed($number, $decimals) {
    return number_format($number, $decimals, '.', "");
}
      function tableof($nb,$op){
        for($i =1 ;$i <= 10;$i++){

            switch ($op){
                case "+":
                    $result = $nb+$i;
                    break;
                case "-":
                    $result = $nb-$i;
                    break;
                case "*":
                    $result = $nb*$i;
                    break;
                case "/":
                    $result = $nb/$i;
                    break;
            }
            
            echo $nb."  ".$op." ".$i." = ".toFixed($result, 2)."<br>";
    }
    }
    tableof(8,"*");
    
?>