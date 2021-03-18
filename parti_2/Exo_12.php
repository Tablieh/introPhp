<h1> EXERCICE 12 </h1>
<p>La fonction var_dump($variable) permet d’afficher les informations d’une variable.
Soit le tableau suivant :
$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));
A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau.

</p>
<h2>Résultat</h2>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>exo12</title>
        
    </head>
    <body>
    <?php
    $tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));
    $i=0;
    $tab=count($tableauValeurs);
    for($i;$i<$tab;$i++){
        var_dump($tableauValeurs[$i]);
    }
    ?>
    </body>   
</html>