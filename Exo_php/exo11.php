<h1> EXERCICE 11 </h1>
<p>Initialiser  un  tableau  de  x  marques  de  voitures.  Ecrire  un  algorithme permettant  de  parcourir  ce tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé d’afficher le nombre de marques de voitures présentes dans le tableau.<br>
 Affichage(attention à utiliser une liste à puces) Il y a 4 marques de voitures dans le tableau: PeugeotRenault BMW Mercedes
<h2>Résultat</h2>
<?php
    $marque =["Peugeot","Renault","BMW","Mercedes"];
    echo "Il y a 4 marques de voitures dans le tableau: "."<br>";
    $max = sizeof($marque);
    for ($i = 0; $i < $max; $i++) {
        echo $marque[$i]."<br>";
        
    };
?>