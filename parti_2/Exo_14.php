<h1> EXERCICE 14 </h1>
<p>Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec
qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).
Instancier une voiture « classique » et une voiture « électrique » ayant les caractéristiques suivantes :
 Peugeot 408 : $v1 = new Voiture("Peugeot","408");
 BMW i3 150 : $ve1 = new VoitureElec("BMW","I3",100);
Votre programme de test devra afficher les informations des 2 voitures de la façon suivante :
echo $v1->getInfos()."<br/>";
echo $ve1->getInfos()."<br/>";

</p>
<h2>Résultat</h2>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>exo14</title>
        
    </head>
    <body>
    <?php
    spl_autoload_register(function ($class_name) {
        require 'class/'.$class_name . '.php';
    });
    $v1 = new VoitureClassic("Peugeot", "408");
    $ve1 = new VoitureElec ("Bmv", "I3", 100);
    echo $v1->getInfos()."<br/>";
    echo $ve1->getInfos()."<br/>";
    ?>
    </body>   
</html>