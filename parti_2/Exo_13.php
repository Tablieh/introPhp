<h1> EXERCICE 13 </h1>
<p>Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et
vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en
plus des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule
instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un véhicule.
v1  "Peugeot","408",5
v2  "Citroën","C4",3
Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de
tests pour vérifier la cohérence de la classe Voiture. Vous devez afficher les tests et les éléments
suivants :

</p>
<h2>Résultat</h2>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>exo13</title>
        
    </head>
    <body>
    <?php
    spl_autoload_register(function ($class_name) {
        require 'class/'.$class_name . '.php';
    });
    $V1 = new Voiture("Peugeot", "408", 5);
    $V2 = new Voiture("Citroën", "C4", 3);
    $V1->demarrer();
    $V1->accelerer(50);
    echo $V1->afficherstatus();
    echo $V1->afficherVitesseAcc();

    $V2->demarrer();
    echo $V2->afficherstatus();
    $V2->stopper();
    echo $V2->afficherstatus();
    $V2->accelerer(20);
    echo $V2->afficherVitesseAcc();
    echo $V2->afficherPour();
    echo$V1->afficherVitesse();
    echo$V2->afficherVitesse();


    $V1->accelerer(50);
    $V2->accelerer(50);

    $V2->demarrer();
    $V2->stopper();

    $V1->demarrer();
    $V2->ralentir(0);
    echo $V1->afficherInfos();
    
    echo $V2->afficherInfos();
    ?>
    </body>   
</html>