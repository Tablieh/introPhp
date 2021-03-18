<?php

// Autoloader
spl_autoload_register(function ($class_name) {
    require 'class/'.$class_name . '.php';
});

// require "class/Auteur.php";
// require "class/Livre.php";

// Instanciation Auteurs / Livres
// * L'objet $stephenKing de la classe Auteur est injecté en entier dans l'objet de la classe Livre
// * Dans la mesure où on pourrait effectuer de potentiels calculs, le nombre de page, l'année de sortie et le prix sont exprimés en numérique (int ou float)
$stephenKing = new Auteur("Stephen", "King");
$ca = new Livre("Ca",200, 1980, 10, $stephenKing);
$carrie = new Livre("Carrie",189, 1983, 15, $stephenKing);

$tolkien = new Auteur("JRR", "Tolkien");
$lotr = new Livre("Le Seigneur des Anneaux : la Communauté de l'anneau", 286, 1956, 8, $tolkien);

// Affichage
$auteurs = [$stephenKing, $tolkien];
echo $stephenKing->afficherBibliographie();
echo $tolkien->afficherBibliographie();

foreach($auteurs as $auteur){
    echo $auteur->afficherBibliographie();
}
